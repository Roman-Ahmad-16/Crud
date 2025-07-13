<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function iindex(){
        return view('Eindex');
    }

    public function aadd(){
        return view('Eadd');
    }

    public function sstore(){
        return redirect()->route('employee.index');
    }

    public function eedit(){
        return view('Eedit');
    }

    public function uupdate(){
        return redirect()->route('employee.index');
    }
}