<?php

use App\Http\Controllers\MyController;
use App\Http\Controllers\Forms;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    //return 'Hola mundo';
    return view('friends.welcome');
});

Route::get('/hola',[MyController::class,'index']);
Route::get('principal',[MyController::class,'main']);

Route:: get('/Formulario',function(){
    return view('Formulario');

});
Route::post('/Formulario',[Forms::class,'FormularioPost']);

