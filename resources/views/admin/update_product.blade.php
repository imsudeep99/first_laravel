@extends('layouts.layout_backend')
@section('content')
<div class="col-md-6 grid-margin stretch-card">
     <div class="card">
        <div class="card-body">
            <h4 class="card-title">Add Product</h4>
            <form class="forms-sample" action="{{ route('admin.edit_product', $data->id ) }}" method="post" enctype="multipart/form-data">
                @csrf
            <div class="form-group">
                <label for="exampleInputProductname">Productname</label>
                <input type="text" name="product_name" value="{{ $data->product_name }}" class="form-control" id="exampleInputProductname" placeholder="Productname">
            </div>
            <div class="form-group">
                <label>File upload</label>
                <input type="file" name="image" value="{{ $data->image }}" >
            </div> 
            <div class="img">
                    <img src="{{ asset('storage/'.$data->image) }}" alt="" width="150" height="150" />
            </div>  
            <div class="form-group">
                <label for="exampleInputEmail1">Product Price</label>
                <input type="text" name="product_price" value="{{ $data->product_price }}"  class="form-control" id="exampleInputproductPrice" placeholder="productPrice">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Product Quantity</label>
                <input type="text" name="product_quantity" value="{{ $data->product_quantity }}"  class="form-control" id="exampleInputPassword1" placeholder="productquantity">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Short Description</label>
                <input type="text" name="short_description"  value="{{ $data->short_description }}" class="form-control" id="exampleInputPassword1" placeholder="Short Description">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Description</label>
                <input type="text" name="description"  value="{{ $data->description }}" class="form-control" id="exampleInputPassword1" placeholder="Description">
            </div>
            <button type="submit" class="btn btn-primary me-2">Submit</button>
            <button class="btn btn-light">Cancel</button>
            </form>
        </div>
        </div>
    </div>
</div>
@endsection    