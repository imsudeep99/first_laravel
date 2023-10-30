@extends('layouts.layout_backend')
@section('content')

    <!-- partial -->
    
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Categorie</h4>
                  <span class="breadcrumb-item"><a href="{{ route('admin.add_category')}}">Add Categorie</a></span>
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>
                            Id
                          </th>
                          <th>
                          Categorie name
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
                      @foreach($data as $categories)
                          <tr>
                              
                              <td>{{ $loop->iteration}}</td>
                              <td>{{ $categories->categorie_name }}</td>
                              <td><img src="{{ asset('storage/'.$categories->image) }}" /></td>
                              <td>{{ $categories->short_description }}</td>
                              <td>{{ $categories->description }}</td>
                              <td>

                                  <button style=" background-color: #c0c3db;">
                                      <a class="edit-link" style="color: #181717;" href="{{ route('admin.update_pagecategory',$categories->id) }}">Edite</a>
                                  </button>
                                  <button style=" background-color: #e50b0b;">
                                      <a class="delete-link" style="color: #181717;" href="{{ route('admin.delete_category',$categories->id) }}">Delete</a>
                                  </button>

                              </td>
                              
                          </tr>
                       @endforeach
                      </tbody>
                    </table>
                    <div>
                      {{ $data->links() }}
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
       
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  
@endsection