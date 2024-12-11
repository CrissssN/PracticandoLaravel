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
    echo "Modificacion 2 (chore)";
    return view('Formulario');

});
Route::post('/Formulario',[Forms::class,'FormularioPost']);

Route:: get('/Formulario/ejemplo',function(){
    return 'Modificacion 1 (son lo mismo feat)';

});
