<?php

use App\Http\Controllers\TodolistController;
use App\Models\todolist;
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

Route::get('/',[App\Http\Controllers\TodolistController::class,'todolist'])->name('todolist');
Route::get('create',[App\Http\Controllers\TodolistController::class,'create'])->name('create');
Route::get('store',[App\Http\Controllers\TodolistController::class,'store'])->name('store');
Route::get('delete/{id}',[App\Http\Controllers\TodolistController::class,'delete'])->name('delete');
Route::get('edit/{id}',[App\Http\Controllers\TodolistController::class,'edit'])->name('edit');
Route::get('update/{id}',[App\Http\Controllers\TodolistController::class,'update'])->name('update');