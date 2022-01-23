<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
// created for me
Route::get('/categoria',[CategoriaController::class, 'getCategoria'])->name('categoria.getCategoria');
Route::get('/categoria/{id}',[CategoriaController::class, 'getCategoriaid'])->name('categoria.getCategoriaid');

Route::post('/categoria/insert/',[CategoriaController::class, 'insertCategoria'])->name('categoria.insertCategoria');
Route::put('/categoria/update/{id}',[CategoriaController::class, 'updateCategoria'])->name('categoria.updateCategoria');
Route::delete('/categoria/delete/{id}',[CategoriaController::class, 'deleteCategoria'])->name('categoria.deleteCategoria');
