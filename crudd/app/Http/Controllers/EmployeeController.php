<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index(){
        return view('index');
    }

    public function add(){
        return view('add');
    }

    public function store(){
        return redirect()->route('employee.index');
    }

    public function edit($id){
        return view('edit');
    }

    public function update(Request $request, $id){
        return redirect()->route('employee.index');
    }
}