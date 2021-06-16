<?php

namespace App\Helpers;

use App\Models\Libro;

class Cart
{
    public function __construct()
    {
        if($this->get() === null)
            $this->set($this->empty());
    }

    public function add(Libro $libro): bool
    {
        $cart = $this->get();
        $cartLibrosIds = array_column($cart['libros'], 'id');

        if (!in_array($libro->id, $cartLibrosIds)) {
            array_push($cart['libros'], $libro);
            $this->set($cart);
            return True;
        }

        return False;
       
    }

    public function remove(int $libroId): void
    {
        $cart = $this->get();
        array_splice($cart['libros'], array_search($libroId, array_column($cart['libros'], 'id')), 1);
        $this->set($cart);
    }

    public function clear(): void
    {
        $this->set($this->empty());
    }

    public function empty(): array
    {
        return [
            'libros' => [],
        ];
    }

    public function get(): ?array
    {
        return request()->session()->get('cart');
    }

    public function getTotal(): int 
    {
        $cart = $this->get();
        return count($cart["libros"]);

    }


    private function set($cart): void
    {
        request()->session()->put('cart', $cart);
    }
    
}