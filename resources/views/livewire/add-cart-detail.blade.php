<div>
@php
    $total = 0;
@endphp
<h1 class="text-center">ViewCart</h1>
@foreach($cart as $carts)
    <div class="card" style="width: 18rem;">
  <img src="{{asset('storage/'.$carts->viewcart->image)}}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">{{$carts->viewcart->title}}</h5>
    <p>{{$carts->viewcart->price}}</p>
    <button class="btn btn-primary" wire:click="remove({{$carts->id}})">Remove</button>
  </div>
</div>
@php
    $total += $carts->viewcart->price;
@endphp
@endforeach

<h1>Total price: {{ $total }}</h1>
</div>
