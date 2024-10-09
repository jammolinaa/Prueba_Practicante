<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\ProductsController;
// use App\Http\Controllers\CategoriasController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


route::resource('categorias' , CategoriasController::class);
route::resource('products' , ProductsController::class);
