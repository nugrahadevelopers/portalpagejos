<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return view('portal');
    }
    
    public function profil(){
        return view('profil');
    }

    public function project(){
        return view('project');
    }

    public function facebook(){
        return view('facebook');
    }

    public function instagram(){
        return view('instagram');
    }

    public function youtube(){
        return view('youtube');
    }

    public function lowongan(){
        return view('lowongan');
    }
}
