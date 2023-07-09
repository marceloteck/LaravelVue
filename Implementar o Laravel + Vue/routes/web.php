<?php

use Illuminate\Support\Facades\Route;

// outras rotas independentes
Route::get('/test', function () {
    return view('teste');
});

// sempre deixar a rota por último
Route::get('/{any}', function () {
    return view('index');
})->where('any', '^(?!api).*$');


