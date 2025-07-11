<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudController;
use App\Http\Controllers\AboutController;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/index' , [CrudController :: class , 'index'])->name('crud.index');
// Route::get('/view' , [CrudController :: class , 'view'])->name('crud.add');
// Route::post('/store' , [CrudController :: class , 'store'])->name('crud.store');
// Route::get('/edit' , [CrudController :: class , 'edit'])->name('crud.edit');
// Route::post('/update' , [CrudController :: class , 'update'])->name('crud.update');




Route::get('/indexx' , [AboutController :: class , 'indexx'])->name('crud.indexx');
Route::get('/addd' , [AboutController :: class , 'addd'])->name('crud.addd');
Route::post('/storee' , [AboutController :: class , 'storee'])->name('crud.storee');
Route::get('/editt' , [AboutController :: class , 'editt'])->name('crud.editt');
Route::post('/updatee' , [AboutController :: class , 'updatee'])->name('crud.updatee');


Route::get('/books', [BookController::class, 'index'])->name('book.index');
Route::get('/books/add', [BookController::class, 'add'])->name('book.add');
Route::post('/books/store', [BookController::class, 'store'])->name('book.store');
Route::get('/books/edit', [BookController::class, 'edit'])->name('book.edit');
Route::post('/books/update', [BookController::class, 'update'])->name('book.update');