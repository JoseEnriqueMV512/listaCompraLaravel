<?php

use App\Http\Controllers\API\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductoController;

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

Route::get('/', [HomeController::class, 'getHome']);

/*
Route::get('login', function () {
    return view('auth.login');
});

Route::get('logout', function () {
    return 'Logout usuario';
});

Route::get('productos', [ProductoController::class, 'getIndex']);

Route::get('productos/show/{id}', [ProductoController::class, 'getShow']);

Route::get('productos/create', [ProductoController::class, 'getCreate']);

Route::get('productos/edit/{id}', [ProductoController::class, 'getEdit']);
*/

Route::group(['middleware' => 'auth'], function() {
    Route::get('productos/{categoria?}', [ProductoController::class, 'getIndex']);

    Route::get('productos/categorias/{categoria}', [ProductoController::class, 'getCategoria']);

    Route::get('productos/show/{id}', [ProductoController::class, 'getShow']);

    Route::get('productos/create', [ProductoController::class, 'getCreate']);

    Route::post('productos/create', [ProductoController::class, 'postCreate']);

    Route::get('productos/edit/{id}', [ProductoController::class, 'getEdit']);

    Route::put('productos/edit/{id}', [ProductoController::class, 'putEdit']);

    Route::put('productos/comprar/{id}', [ProductoController::class, 'putComprar']);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
