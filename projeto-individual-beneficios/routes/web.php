<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    UserController,
    ClientController,
    ViaCepController
};
Route::get('/' , function(){
    return 'Projeto Individual';
});
Route::get('/users',[UserController::class, 'index'])->name('users.index');
Route::get('/users/{id}',[UserController::class, 'show'])->name('users.show');

Route::get('/clients',[ClientController::class,'index'])->name('clients.index');
Route::get('/clients/{id}',[ClientController::class,'show'])->name('clients.show');

//VIA CEP WEB SERVICE
Route::get('/viacep', [ViaCepController::class, 'index'])->name('viacep.index');
Route::post('/viacep', [ViaCepController::class, 'index'])->name('viacep.index.post');
Route::get('/viacep/{cep}', [ViaCepController::class, 'show'])->name('viacep.show');
