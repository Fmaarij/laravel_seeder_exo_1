<?php

use App\Http\Controllers\CrudController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//show home page
Route::get('/',[CrudController::class,'showHomePage'])->name('home');
//show add page
Route::get('addPersonne',[CrudController::class,'showAddPage'])->name('add');
//add personne
Route::post('create',[CrudController::class,'store']);


//show edit page
Route::get('/editPersonne/{id}',[CrudController::class,'showEditPage']);

//editPersonne
Route::put('/{id}/update',[CrudController::class,'editPersonne']);



//delele par id
Route::delete('/del/{id}',[CrudController::class,'delPersonne']);

// del all
Route::delete('delAll',[CrudController::class,'delAll']);



