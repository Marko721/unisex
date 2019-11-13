<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        return view('pages.index');
    }

    public function onama() {
        return view('pages.o-nama');
    }
    
    public function cenovnik() {
        return view('pages.cenovnik');
    }

    public function kontakt() {
        return view('pages.kontakt');
    }

    public function posao() {
        return view('pages.posao');
    }

    public function galerija() {
        return view('pages.galerija');
    }
}
