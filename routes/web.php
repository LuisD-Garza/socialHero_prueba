<?php

Route::get('/', function () {
    return view('welcome');
});
Route::post('/crearBeneficiario', 'Controllerbeneficiarios@insertar' );


Route::post('/loggin', 'Controllerbeneficiarios@loggin' );
Route::get('/getBeneficiarios', 'Controllerbeneficiarios@getBeneficiarios' );
Route::post('/insertarDonacion', 'Controllerbeneficiarios@insertarDonacion' );
Route::post('/getDonaciones', 'Controllerbeneficiarios@getDonaciones' );