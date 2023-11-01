<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NoteController extends Controller
{
    public function Historial()
    {
        return view('historial');
    }

    public function Procedimientos_create()
    {
        return view('procedimientos_create');
    }

    public function Welcome()
    {
        return view('welcome');
    }
}
