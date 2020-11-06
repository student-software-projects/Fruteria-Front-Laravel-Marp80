<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function Inicio()
    {
        return view('Landing.Inicio');
    }
    public function Acerca()
    {
        return view('Landing.Acerca');
    }
    public function Domicilio()
    {
        return view('Landing.Domicilio');
    }
}
