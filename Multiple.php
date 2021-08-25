<?php

namespace App\Http\Livewire\SelectTwo;

use App\Models\Product;
use Livewire\Component;

class Multiple extends Component
{
    public $products;
    public $productList = [];

    public function render()
    {
        $this->products = Product::all();

        return view('livewire.select-two.multiple')->extends('layouts.adminLTE.main');
    }

    public function onClick()
    {
        dd($this->productList);
    }
}
