<?php

namespace App\Http\Controllers;

use App\Estado;
use Illuminate\Http\Request;

class AppController extends Controller
{

    public function index()
    {
        return view('home');
    }

    public function CadTrabalhador()
    {
        $estados = Estado::all();
        return view('cadastro', compact('estados'));
    }

}
