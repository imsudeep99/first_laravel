@extends('layouts.layout_frontend')
@section('content')
<main class="signup-form" style="margin: 100px;">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <h3 class="card-header text-center">Register User</h3>
                    <div class="card-body">
                        <form action="{{ route('register') }}" method="POST">
                            @csrf
                           
                            <div class="form-group mb-3">
                                <input type="text" placeholder="Name" id="name" class="form-control" name="name"
                                    required autofocus>
                               <span class="text-denger"style="color:red;">
                                @if($errors->get('name'))
                                <ul>
                                @foreach ($errors->get('name') as $error)
                                     <li>{{ $error }}</li>
                                @endforeach
                                </ul>
                                @endif
                               </span>
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" placeholder="Email" id="email_address" class="form-control"
                                    name="email" required autofocus>
                                <span class="text-denger"style="color:red;">
                                @if($errors->get('email'))
                                <ul>
                                @foreach($errors->get('email') as $error)
                                     <li>{{ $error }}</li>
                                @endforeach
                                </ul>
                                @endif
                               </span>
                            </div>
                            <div class="form-group mb-3">
                                <input type="password" placeholder="Password" id="password" class="form-control"
                                    name="password" required>
                                <span class="text-denger"style="color:red;">
                                @if($errors->get('password'))
                                <ul>
                                @foreach($errors->get('password') as $error)
                                     <li>{{ $error }}</li>
                                @endforeach
                                </ul>
                                @endif
                               </span>
                            </div>
                            <div class="form-group mb-3">
                                <input type="c_password" placeholder="Confirm Password" id="password" class="form-control"
                                    name="confirm_password" required>
                                    <span class="text-denger"style="color:red;">
                                @if($errors->get('confirm_password'))
                                <ul>
                                @foreach($errors->get('confirm_password') as $error)
                                     <li>{{ $error }}</li>
                                @endforeach
                                </ul>
                                @endif
                               </span>
                            </div>
                            <div class="d-grid mx-auto">
                                <button type="submit" class="btn btn-dark btn-block">Sign up</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection