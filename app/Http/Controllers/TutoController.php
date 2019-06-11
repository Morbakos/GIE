<?php

namespace App\Http\Controllers;

use App\Repositories\TutoRepository;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TutoController extends Controller
{

    protected $tutoRepository;
    protected $nbrPerPage;

    public function __construct(TutoRepository $tutoRepository)
    {
        $this->tutoRepository = $tutoRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tutos = $this->tutoRepository->getPaginate($this->nbrPerPage);
        $links = $tutos->render();

        return view('tutos.index', compact('tutos', 'links'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tuto = $this->tutoRepository->getById($id);
        return view('tutos.tuto', compact('tuto'));
    }

    public function create()
    {
        return view('tutos.create');
    }

    public function store(Request $request)
    {
        $tuto = $this->tutoRepository->store($request->all());

        return redirect('tuto')->withOk("L'utilisateur " . $tuto->nom_tuto . " a été créé.");
    }

}
