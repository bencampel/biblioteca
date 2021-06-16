<?php

use Illuminate\Support\Facades\Route;

use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\Auth\Register;
use App\Http\Livewire\ShowLibros;
use App\Http\Livewire\ShowLibro;
use App\Http\Livewire\Profile;
use App\Http\Livewire\Cart;
use App\Http\Livewire\ShowPrestamos;


Route::redirect('/', 'libros');


Route::middleware('auth')->group(function () {
    Route::get('/libros', ShowLibros::class)->name('libros.index');

    Route::get('/libros/{id}', ShowLibro::class)->name('libros.show');

    Route::get('/prestamos/{user_id}', ShowPrestamos::class)->name('prestamos.index');

    Route::get('/perfiles/{id}', Profile::class)->name('perfiles.show');

    Route::get("/carrito", Cart::class)->name('carrito.index');

    Route::get('/logout', function(){
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/login');
    });
});


Route::middleware('guest')->group(function () {
    Route::get('/login', Login::class)->name('auth.login');
    Route::get('/register', Register::class)->name('auth.register');

});