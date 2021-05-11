<?php

use Illuminate\Support\Facades\Route;

use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\Auth\Register;
use App\Http\Livewire\ShowLibros;
use App\Http\Livewire\ShowLibro;


Route::redirect('/', 'libros');


Route::middleware('auth')->group(function () {
    Route::get('/libros', ShowLibros::class);

    Route::get('/libros/{id}', ShowLibro::class);

    Route::get('/logout', function(){
        Auth::logout();

        request()->session()->invalidate();
    
        request()->session()->regenerateToken();
    
        return redirect('/');
    });
});


Route::middleware('guest')->group(function () {
    Route::get('/login', Login::class)->name('auth.login');
    Route::get('/register', Register::class)->name('auth.register');

});