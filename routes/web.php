<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\logincontroller;
use App\Http\Controllers\regiscontroller;

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

Route::get('/sidebar', function () {
    return view('main');
});
// logincontroler
Route ::get ('login',[logincontroller::class,'login']);
Route::post('/login', [logincontroller::class, 'authenticate']);
// regiscontroler
Route :: get ('/register',[regiscontroller::class,'regis']);
Route :: post ('/register',[regiscontroller::class,'store']);

