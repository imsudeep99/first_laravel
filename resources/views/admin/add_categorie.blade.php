@extends('layouts.layout_backend')
@section('content')
<div class="col-md-6 grid-margin stretch-card">
     <div class="card">
        <div class="card-body">
            <h4 class="card-title">Add Categorie</h4>
            <form class="forms-sample" action="" method="post" enctype="multipart/form-data">
                @csrf
            <div class="form-group">
                <label for="exampleInputCategoryname">Categorie Name</label>
                <input type="text" name="categorie_name" class="form-control" id="exampleInputUsername1" placeholder="Categoriename">
            </div>
            <div class="form-group">
                <label>File upload</label>
                <input type="file" name="image" >
                    
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