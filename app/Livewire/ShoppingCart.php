<?php

namespace App\Livewire;

use App\Models\ShoppingCart as Cart;
use Livewire\Attributes\Layout;
use Livewire\Attributes\On;
use Livewire\Component;

class ShoppingCart extends Component

{
    public $successMessage;
    // #[On('product-saved')]
    // public function showSuccessMessage($message)
    // {
    //     dd($message);
    //     $this->successMessage = $message;
    // }

    public $title = "Shopping Cart";
    #[Layout('layouts.app')]
    public function render()
    {
        $cartItems = Cart::with('product')->get();
        $this->successMessage = session('message', '');
        return view('livewire.shopping-cart', compact('cartItems'));
    }
}
