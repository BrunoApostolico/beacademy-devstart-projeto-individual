<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    UserController,
    ClientController,
    DependentController,
    PaymentController,
    ViaCepController
};


require __DIR__.'/auth.php';

Route::get('/' , function(){
    return view ('welcome');
});




Route::middleware(['auth'])->group(function (){
    //ROTAS CLIENTES
    Route::delete('/clients/{id}',[ClientController::class, 'destroy'])->name('clients.destroy');
    Route::put('/clients/{id}',[ClientController::class, 'update'])->name('clients.update');
    Route::get('/clients/{id}/edit', [ClientController::class, 'edit'])->name('clients.edit');
    Route::get('/clients/create',[ClientController::class,'create'])->name('clients.create');
    Route::post('/client', [ClientController::class, 'store'])->name('clients.store');
    Route::get('/clients',[ClientController::class,'index'])->name('clients.index');
    Route::get('/clients/{id}',[ClientController::class,'show'])->name('clients.show');
    //ROTAS DEPENDENTES
    Route::delete('/dependents/{id}',[DependentController::class, 'destroy'])->name('dependents.destroy');
    Route::put('/dependents/{id}',[DependentController::class, 'update'])->name('dependents.update');
    Route::get('/dependents/{id}/edit', [DependentController::class, 'edit'])->name('dependents.edit');
    Route::get('/dependents/{id}/create',[DependentController::class,'create'])->name('dependents.create');
    Route::post('/dependent', [DependentController::class, 'store'])->name('dependents.store');
    Route::get('/dependents', [DependentController::class,'index'])->name('dependents.index');
    Route::get('/clients/{id}/dependents',[DependentController::class,'show'])->name('dependents.show');
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
    //ROTAS PAGAMENTOS
    Route::delete('/payments/{id}',[PaymentController::class, 'destroy'])->name('payments.destroy');
    Route::put('/payments/{id}',[PaymentController::class, 'update'])->name('payments.update');
    Route::get('/payments/{id}/edit', [PaymentController::class, 'edit'])->name('payments.edit');
    Route::get('/payments/{id}/create',[PaymentController::class,'create'])->name('payments.create');
    Route::post('/payment', [PaymentController::class, 'store'])->name('payments.store');
    Route::get('/payments', [PaymentController::class,'index'])->name('payments.index');
    Route::get('/clients/{id}/payments',[PaymentController::class,'show'])->name('payments.show');
});

//VIA CEP WEB SERVICE
Route::get('/viacep', [ViaCepController::class, 'index'])->name('viacep.index');
Route::post('/viacep', [ViaCepController::class, 'index'])->name('viacep.index.post');
Route::get('/viacep/{cep}', [ViaCepController::class, 'show'])->name('viacep.show');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::middleware(['auth','admin'])->group(function (){
    Route::get('/admin',[UserController::class,'admin'])->name('admin');
});

