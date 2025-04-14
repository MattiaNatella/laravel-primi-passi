<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $testo = 'sono un testo passato dinamicamente tramite il metodo compact dentro il metodo view';
    return view('home', compact('testo'));
});
Route::get('/prima-pagina', function () {
    $testo = 'sono un testo passato dinamicamente come array associativo dentro il metodo view';
    return view('prima-pagina', ["informazioni" => $testo]);
});
Route::get('/seconda-pagina', function () {
    return view('seconda-pagina');
});
