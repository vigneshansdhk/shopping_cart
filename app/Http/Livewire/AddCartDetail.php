<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\AddCart;
use App\Models\Product;

class AddCartDetail extends Component
{

    public function remove($id){
        AddCart::where('id',$id)->delete();
    }
    public function render()
    {
        $cart = AddCart::with('viewcart')->get();
        return view('livewire.add-cart-detail',['cart' => $cart]);
    }
}
