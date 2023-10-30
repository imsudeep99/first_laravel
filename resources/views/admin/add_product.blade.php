@extends('layouts.layout_backend')
@section('content')
<div class="col-md-6 grid-margin stretch-card">
     <div class="card">
        <div class="card-body">
            <h4 class="card-title">Add Product</h4>
            <form class="forms-sample" action="" method="post" enctype="multipart/form-data">
                @csrf
            <div class="form-group">
                <label for="exampleInputProductname">Category</label>
                
                <select name="categorie_id" class="form-control">
                        
                         @foreach($data as $categorie)
                            <option value="{{ $categorie->id  }}">
                            {{ $categorie->categorie_name  }}
                            </option>
                           
                        @endforeach 
                </select>
            </div> 
            <div class="form-group">
                <label>File upload</label>
                <input type="file" name="image" >
                    
            </div>
            <div class="form-group">
                <label for="exampleInputProductname">Productname</label>
                <input type="text" name="product_name"class="form-control" id="exampleInputProductname" placeholder="Productname">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Product Price</label>
                <input type="text" name="product_price" class="form-control" id="exampleInputproductPrice" placeholder="productPrice">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Product Quantity</label>
                <input type="text" name="product_quantity" class="form-control" id="exampleInputPassword1" placeholder="productquantity">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Short Description</label>
                <input type="text" name="short_description" class="form-control" id="exampleInputPassword1" placeholder="Short Description">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Description</label>
                <input type="text" name="description" class="form-control" id="exampleInputPassword1" placeholder="Description">
            </div>
            <button type="submit" class="btn btn-primary me-2">Submit</button>
            <button class="btn btn-light">Cancel</button>
            </form>
        </div>
        </div>
    </div>
</div>
@endsection    