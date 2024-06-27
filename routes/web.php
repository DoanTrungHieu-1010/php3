<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

/*
Method http
    GET, POST, PUT, PATCH, DELETE

Base url
    http://127.0.0.1:8000/

*/

Route::get('/test', function(){
    echo "Hello";
});

Route::get('/', function(){
    echo "Trang  chủ";
});

Route::get('thongtinsv', [ProductController::class, 'showTT']);

//list-product
Route::get('list-product', [ProductController::class, 'showProduct']);

//Slug
// http://127.0.0.1:8000/get-product/1/iphone
//get-product
Route::get('get-product/{id}', [ProductController::class, 'getProduct']);

//Params
// http://127.0.0.1:8000/list-product?id=1&name=iphone

//update-product
Route::get('update-product', [ProductController::class, 'updateProduct']);

