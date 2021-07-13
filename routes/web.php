<?php

use App\Http\Controllers\DataHandle;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/data-handle/{id}/path',[DataHandle::class,'handlePathVariable']);
Route::get('data-handle/query-string',[DataHandle::class,'handleQueryString']);
Route::get('/data-handle/form',[DataHandle::class, 'returnForm']);
Route::post('/data-handle/form',[DataHandle::class, 'processForm']);

