<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Livewire\Component;

class CreateProduct extends Component
{

    #[Validate('required|string|max:255')]
    public $name;

    #[Validate('required|string')]
    public $description;

    #[Validate('required|numeric|min:0')]
    public $price;



    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.create-product');
    }

    public function storeProduct()
    {

        $validated = $this->validate();

        Product::create($validated);

        $this->reset('name', 'description', 'price');

        $this->dispatch('product-saved', 'Product created successfully!');

        session()->flash('success', 'Product saved succesfully!');

        return $this->redirect(route('shopping-cart'), navigate: true);
    }
}
