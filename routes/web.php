<?php

use GuzzleHttp\Middleware;

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
    return view('inicio');
})->name('inicio');

Route::get('/cadastrar', function() {
     return view('cadastro.cadastrar'); 
});

Route::get('/consulta', function () {
    return view('consulta.consulta');
})->name('consulta');

// rota para excluir registro
Route::get('/excluir/{id}', 'ProdutoController@excluir' )->name('excluir');

// Fazendo um CRUD 
Route::resource('produto', 'ProdutoController');





// nao ultiliza mais
// Route::delete('/deleta/{id}', 'ProdutoController@deletaRegistro')->name('deleta');

// Route::post('/inserir', 'ProdutoController@inserir')->name('inserir'); 

// filtrando os registro do BD no tela de consulta
// Route::post('/filtrar','ProdutoController@filtrar')->name('filtrar');

