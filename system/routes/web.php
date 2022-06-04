<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuariosController;
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

// Route::get('/usuario', function () {
//     return view('usuario.index');
// });

// Route::get('/usuario/create',[UsuariosController::class,'create']);

// Whith this intruction we can access all the urls

Route::resource('usuario',UsuariosController::class);