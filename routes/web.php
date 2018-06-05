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

Route::middleware('config')->group(function() {
    Route::get('/', function () {

        $value = session('paginas');

        #dd($value);

        return view('index');
    })->name('home');

    Route::get('/sobre-nos', function () {
        return view('paginas/empresa');
    })->name('sobre_nos');

    Route::get('/equipe', function () {
        return view('paginas/equipe');
    })->name('equipe');

    Route::get('/contato', function () {
        return view('paginas/contato');
    })->name('contato');

    Route::get('/envio-documentos', function () {
        return view('paginas/envio-documentos');
    })->name('envio_documentos');

    Route::get('/processos', function () {
        return view('paginas/acompanhamento');
    })->name('processos');
});
