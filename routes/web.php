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


// Route alla pagina iniziale

Route::get('/', function () {

    $data = [
        'comics' => config('comics')
    ];

    return view('home', $data);
})->name('home');


// Route al dettaglio del fumetto

Route::get('/comics-detail/{index}', function($index) {

    $comics = config('comics');         //Dati di tutti i fumetti
    $comics_detail = $comics[$index];   //Dati di un singolo fumetto (dato l'indice)

    return view('comics-detail', compact('comics_detail'));
})->name('comics-detail');
