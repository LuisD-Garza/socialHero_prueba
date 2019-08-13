<?php

Route::get('/', function () {
    return view('welcome');
});
Route::post('/crearBeneficiario', 'Controllerbeneficiarios@insertar' );