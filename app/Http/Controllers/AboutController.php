<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function indexx(){
        return view('indexx');
    }

    public function addd(){
        return view('addd');
    }

    public function storee(){
        return redirect()->route('crud.indexx');
    }

    public function editt(){
        return view ('editt');
    }

    public function updatee(){
        return redirect()->route('crud.indexx');
    }

    }

