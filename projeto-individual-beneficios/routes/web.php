<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    UserController,
    ClientController,
    DependentController,
    ViaCepController
};


require __DIR__.'/auth.php';

Route::get('/' , function(){
    return view ('welcome');
});

//ROTA USUÁRIOS
Route::middleware(['auth'])->group(function (){
    Route::delete('/users/{id}',[UserController::class, 'destroy'])->name('users.destroy');
    Route::put('/users/{id}',[UserController::class, 'update'])->name('users.update');
    Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('users.edit');
    Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
    Route::post('/user', [UserController::class, 'store'])->name('users.store');
    Route::get('/users',[UserController::class, 'index'])->name('users.index');
    Route::get('/users/{id}',[UserController::class, 'show'])->name('users.show');
});

//ROTAS CLIENTES
Route::delete('/clients/{id}',[ClientController::class, 'destroy'])->name('clients.destroy');
Route::put('/clients/{id}',[ClientController::class, 'update'])->name('clients.update');
Route::get('/clients/{id}/edit', [ClientController::class, 'edit'])->name('clients.edit');
Route::get('/clients/create',[ClientController::class,'create'])->name('clients.create');
Route::post('/client', [ClientController::class, 'store'])->name('clients.store');
Route::get('/clients',[ClientController::class,'index'])->name('clients.index');
Route::get('/clients/{id}',[ClientController::class,'show'])->name('clients.show');

//ROTAS DEPENDENTES
Route::get('/dependents', [DependentController::class,'index'])->name('dependents.index');

//VIA CEP WEB SERVICE
Route::get('/viacep', [ViaCepController::class, 'index'])->name('viacep.index');
Route::post('/viacep', [ViaCepController::class, 'index'])->name('viacep.index.post');
Route::get('/viacep/{cep}', [ViaCepController::class, 'show'])->name('viacep.show');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

