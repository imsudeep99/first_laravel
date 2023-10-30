@extends('layouts.layout_backend')
@section('content')
<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Product</h4>
            <span class="breadcrumb-item"><a href="{{ route('admin.add_product')}}">Add Product</a></span>
            <div class="table-responsive">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>
                      Id
                    </th>
                    <th>
                      Categorie Name
                    </th>
                    <th>
                      Product Name
                    </th>
                    <th>
                      Product Price
                    </th>
                    <th>
                      Product Quantity
                    </th>
                    <th>
                      Image
                    </th>
                    <th>
                      Short Description
                    </th>
                    <th>
                      Description
                    </th>
                    <th>
                      Action
                    </th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($data as $product)
                  <tr>

                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $product->categorie_name }}</td>
                    <td>{{ $product->product_name }}</td>
                    <td>{{ $product->product_price }}</td>
                    <td>{{ $product->product_quantity }}</td>
                    <td><img src="{{ asset('storage/'.$product->image) }}" /></td>
                    <td>{{ $product->short_description }}</td>
                    <td>{{ $product->description }}</td>
                    <td>

                      <button style=" background-color: #c0c3db;">
                        <a class="edit-link" style="color: #181717;" href="{{ route('admin.edit_pageproduct',$product->id) }}">Edite</a>
                      </button>
                      <button style=" background-color: #e50b0b;">
                        <a class="delete-link" style="color: #181717;" href="{{ route('admin.destroy_product',$product->id) }}">Delete</a>
                      </button>

                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
              <div>
                {{-- $data->links() --}}
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- content-wrapper ends -->
  <!-- partial:../../partials/_footer.html -->

</div>
@endsection