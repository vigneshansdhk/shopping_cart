<div>

<a  class="btn btn-primary" style="float:right" href="{{url('view-cart')}}">view cart</a>

<div  wire:ignore.self class="modal fade edit" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="exampleModal1">
    <div class="modal-dialog modal-lg"> 
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
               hello
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button class="btn btn-primary" wire:click.prevent="save()">Save</button>
            </div>
        </div>
    </div>
    </div>

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

    <h1>List Form</h1>
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




