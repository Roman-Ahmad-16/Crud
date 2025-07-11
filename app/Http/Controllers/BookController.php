<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(){
        return view('bookindex');
    }

    public function add(){
        return view('bookadd');
    }

    public function store(){
        return redirect()->route('book.index');
    }

    public function edit(){
        return view('bookedit');
    }

    public function update(){
        return redirect()->route('book.index');
    }
}

