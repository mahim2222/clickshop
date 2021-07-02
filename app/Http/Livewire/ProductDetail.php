<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;

class ProductDetail extends Component
{
    public $Id;

    public function mount($id){
        $this->Id=$id;
    }

    public function render()
    {
        $product=Product::where('id',$this->Id)->first();
        return view('view-product',['product'=>$product]);
    }
}
