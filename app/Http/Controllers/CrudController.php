<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CrudController extends Controller
{
    
    public function index(){
        return view('index');
    }

    public function view(){
        return view('view');
    }

    public function store(){
        return redirect()->route('crud.index');
    }

     public function edit(){
        return view('edit');
    }

    public function update(){
        return redirect()->route('crud.index');
    }
}

