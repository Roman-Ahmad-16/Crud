<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index' , [CrudController :: class , 'index'])->name('crud.index');
Route::get('/view' , [CrudController :: class , 'view'])->name('crud.add');
Route::post('/store' , [CxxrudController :: class , 'store'])->name('crud.store');
Route::get('/edit' , [CrudController :: class , 'edit'])->name('crud.edit');
Route::post('/update' , [CrudController :: class , 'update'])->name('crud.update');
