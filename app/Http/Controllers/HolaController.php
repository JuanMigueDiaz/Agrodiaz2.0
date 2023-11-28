<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HolaController extends Controller
{
  public function index(){
    $hola = "Hi world!!!";
    return view("welcome",compact("hola"));

  } //
}
