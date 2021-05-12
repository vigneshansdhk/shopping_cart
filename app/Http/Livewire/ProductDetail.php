<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use App\Models\AddCart;
use Livewire\WithFileUploads;

class ProductDetail extends Component
{
    use WithFileUploads;
    public $image,$title,$price;

    public function save(){
       $product        = new Product;
       $product->image = $this->image->store('photos','public');
       $product->title = $this->title;
       $product->price = $this->price;
       $product->save();
    }
    public function addcart($id){
        $addcart       = new AddCart;
        $addcart->product_id = $id;
        $addcart->save();
    }

    public function render()
    {
        $products = Product::all();
        return view('livewire.product-detail',['products' => $products]);
    }
}
