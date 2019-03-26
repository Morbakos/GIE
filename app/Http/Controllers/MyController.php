<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;

class MyController extends Controller
{
  // returning a simple page using view
  public function HomePage() {
      return view('home');
  }
}
