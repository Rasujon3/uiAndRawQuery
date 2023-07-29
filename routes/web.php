<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\projectController;
use App\Http\Controllers\crud;

Route::get('/',[projectController::class, 'HomePage']);
Route::get('/about',[projectController::class, 'about']);
Route::get('/services',[projectController::class, 'services']);
Route::get('/contact',[projectController::class, 'contact']);

// For CRUD
// for insert data
Route::post('/insert',[crud::class,'OnInsertData']);

//view select
Route::get('/view',[crud::class,'OnSelectData']);

//delete
Route::get('/delete/{id}',[crud::class,'OnDeleteData']);

//onEditUser
Route::get('/edit/{id}',[crud::class,'OnEditData']);
Route::post('/update/{id}',[crud::class,'update']);
