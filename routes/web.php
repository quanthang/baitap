<?php

use App\Http\Controllers\DataHandleController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\LayoutController;
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

// Bài hôm trước
Route::get('/data-handle/{id}/path',[DataHandleController::class,'handlePathVariable']);
Route::get('/data-handle/query-string',[DataHandleController::class,'handleQueryString']);
Route::get('/data-handle/form',[DataHandleController::class,'returnForm']);
Route::post('/data-handle/form',[DataHandleController::class,'processForm']);
// Bài hôm trước

Route::get('',[LayoutController::class,'masterLayout']);
Route::get('/form',[LayoutController::class,'create']);
Route::get('/list',[LayoutController::class,'list']);

// CRUD Events
Route::get('/admin/events/create',[EventController::class,'create'])->name('createEvent');
Route::post('/admin/events/create',[EventController::class,'store']);
Route::get('/admin/events/list',[EventController::class,'list'])->name('listEvent');
Route::get('/admin/events/edit/{id}',[EventController::class,'update']);
Route::post('/admin/events/edit/{id}',[EventController::class,'save']);
Route::get('/admin/events/delete/{id}',[EventController::class,'delete']);


