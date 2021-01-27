<?php

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
Route::get('/nome-url', function() {
    return 'Hey hey hey';
});

Route::get('/produtos/{idProduto?}', function($idProduto = '') {
    return "Produto(s) {$idProduto}";
});
Route::get('/categoria/{flag}/posts', function($prm1) {
    return "Posts da categoria: {$prm1}";
});
Route::get('/categorias/{flag}', function($prm1) {
    return "Produtos da categoria: {$prm1}";
});

Route::match(['get','post'], '/match', function() {
    return "Match";
});
Route::any('/any', function() {
    return "Any";
});

Route::post('/register', function () {
    return '';
});
Route::get('/empresa', function () {
    return view('site.contact');
});
Route::get('/contact', function () {
    return view('contact');
});

Route::get('/', function () {
    return view('welcome');
});
