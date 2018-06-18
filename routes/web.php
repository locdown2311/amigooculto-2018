<?php

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
Route::get('/','PagesController@index') ->name('inicio');
//SORTEIO LOGADO
Route::get('/sorteio','PagesController@viewSorteio') -> name('inicio.sorteio');
//SORTEIO NÃO LOGADO
Route::get('/sorteio/{id?}','PagesController@viewSorteioID') -> name('inicio.gerasorteio');

Route::group(['middleware' => ['auth']], function () {
    Route::get('/resultados','AccessController@viewResultado')->name('inicio.resultado');
    Route::get('/cadastro','AccessController@viewCadastro') ->name('inicio.cadastro');
    Route::post('/cadastro','ParticipantesController@storeparticipante') -> name('cadastro.realiza');
    Route::get('/settings','AccessController@viewSettings') ->name('inicio.conf');
    Route::get('/deletar/{id}','AccessController@doReset') ->name('inicio.conf.reset');
});


Route::post('/sorteio','ParticipantesController@dosort') -> name('sorteio.realiza');



Auth::routes();

