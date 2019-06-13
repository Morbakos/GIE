<?php

namespace App\Http\Controllers;

use App\Http\Requests\MissionCreateRequest;
use App\Http\Requests\MissionUpdateRequest;

use App\Repositories\MissionRepository;

use Illuminate\Http\Request;

class MissionController extends Controller
{

    protected $missionRepository;

    protected $nbrPerPage = 15;

    public function __construct(MissionRepository $missionRepository)
    {
        $this->missionRepository = $missionRepository;
    }

    public function index()
    {
        $missions = $this->missionRepository->getPaginate($this->nbrPerPage);
        $links = $missions->render();

        return view('missions.index', compact('missions', 'links'));
    }

    public function create()
    {
        return view('missions.create');
    }

    public function store(MissionCreateRequest $request)
    {
        $this->setComposantes($request);

        $mission = $this->missionRepository->store($request->all());

        return redirect('missions')->withOk("L'utilisateur " . $mission->nom_mission . " a été créé.");
    }

    public function show($id)
    {
        $mission = $this->missionRepository->getById($id);

        return view('missions.show',  compact('mission'));
    }

    public function edit($id)
    {
        $mission = $this->missionRepository->getById($id);

        return view('missions.edit',  compact('mission'));
    }

    public function update(MissionUpdateRequest $request, $id)
    {
        $this->setComposantes($request);
        $this->missionRepository->update($id, $request->all());
        
        return redirect('missions')->withOk("L'utilisateur " . $request->input('name') . " a été modifié.");
    }

    public function destroy($id)
    {
        $this->missionRepository->destroy($id);

        return back();
    }

    private function setComposantes($request)
    {
        // Sélectionner les composantes dans les inputs
        $myCheckboxes = $request->input('composante_mission');

        // Conversion en chaîne de caractère
        $composantes = implode(",", $myCheckboxes); 
        $request->merge(['composante_mission' => $composantes]);
    }

}