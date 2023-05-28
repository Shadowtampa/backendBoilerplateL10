<?php

use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::controller(ProductController::class)->group(function () {

    Route::put('products/{id}', 'update');
    Route::patch('products/{id}/', 'updateAmount');
    Route::delete('products/{id}/', 'destroy');


    Route::get('products', 'index');
    Route::get('products/{id}', 'show');
    Route::get('stock', 'stock');
    Route::get('stock/{id}', 'hasStock');

   
    Route::post('products/', 'create');

}); 