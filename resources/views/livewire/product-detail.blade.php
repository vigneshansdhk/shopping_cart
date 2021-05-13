<div>

<a  class="btn btn-primary" style="float:right" href="{{url('view-cart')}}">view cart</a>

<form class="">
          <div class="col-md-6">
          <div class="position-relative form-group">
                <label for="title" class="">Title</label>
                <input name="title" id="title" placeholder="Enter title" type="text" class="form-control"  wire:model="title">
               
            </div>
            <div class="position-relative form-group">
                  <label for="image" class="">Image</label>
                  <input name="image" id="image" placeholder="" type="file" class="form-control"  wire:model="image">
                 
            </div>
       </div>
           <div class="col-md-6">
           <div class="position-relative form-group">
           <label for="price" class="">Price</label>
                  <input name="price" id="price" placeholder="Enter Price" type="text" class="form-control"  wire:model="price">                                                                                                
               </div>
               <div class="position-relative form-group">
                <button class="bg-primary form-control" wire:click.prevent="save()">Save</button>
          </div>
      </div>
  </form>

    <h1>List Product</h1>
    @foreach($products as $product)
    <div class="card" style="width: 18rem;">
  <img src="{{asset('storage/'.$product->image)}}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">{{$product->title}}</h5>
    <p>{{$product->price}}</p>
    
    <button class="btn btn-primary" wire:click="addcart({{$product->id}})">Add Cart</button>
  </div>
</div>
@endforeach
</div>




