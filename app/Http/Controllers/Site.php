<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Site extends Controller
{
    public function index(){
        return view('Aulas.CSS.aula1');
    }
}
