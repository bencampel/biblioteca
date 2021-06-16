<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Facades\Cart;

use Illuminate\View\View;

class Header extends Component
{
    public $cartTotal = 0;
    public $currentUrl = '';

    protected $listeners = [
        'libroAdded' => 'updateCartTotal',
        'libroRemoved' => 'updateCartTotal',
        'clearCart' => 'updateCartTotal'
    ];

    public function mount(): void
    {
        $this->cartTotal = count(Cart::get()['libros']);
        $this->currentUrl = url()->current();
    }

    public function render(): View
    {
        return view('livewire.header');
    }

    public function updateCartTotal(): void
    {
        $this->cartTotal = count(Cart::get()['libros']);
    }

}
