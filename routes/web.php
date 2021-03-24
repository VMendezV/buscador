<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoslinkController;
use App\Http\Controllers\ProductosController;
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

/* Route::get('/', function () {
    return view('welcome');
}); */
Route::get('/departamentos', function () {
    return view('departamentos');
});
Route::get('/sucursales', function () {
    return view('sucursales');
});
Route::get('/nosotros', function () {
    return view('nosotros');
});
Route::get('/mi-lista', function () {
    return view('milista');
});


Route::resource('/', ProductosController::class);
Route::get('/dashboard', function () {
    return view('inicio2');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
Route::resource('productoslink', ProductoslinkController::class);
