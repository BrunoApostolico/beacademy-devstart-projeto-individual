<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    UserController,
    ClientController,
    ViaCepController
};
Route::get('/' , function(){
    return view ('welcome');
});

Route::delete('/users/{id}',[UserController::class, 'destroy'])->name('users.destroy');
Route::put('/users/{id}',[UserController::class, 'update'])->name('users.update');
Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('users.edit');
Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
Route::post('/user', [UserController::class, 'store'])->name('users.store');
Route::get('/users',[UserController::class, 'index'])->name('users.index');
Route::get('/users/{id}',[UserController::class, 'show'])->name('users.show');

Route::get('/clients/create',[ClientController::class,'create'])->name('clients.create');
Route::get('/clients',[ClientController::class,'index'])->name('clients.index');
Route::get('/clients/{id}',[ClientController::class,'show'])->name('clients.show');

//VIA CEP WEB SERVICE
Route::get('/viacep', [ViaCepController::class, 'index'])->name('viacep.index');
Route::post('/viacep', [ViaCepController::class, 'index'])->name('viacep.index.post');
Route::get('/viacep/{cep}', [ViaCepController::class, 'show'])->name('viacep.show');