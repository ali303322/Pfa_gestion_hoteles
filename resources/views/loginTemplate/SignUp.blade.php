@extends('layout.App');


@section('content')
<div class="register-photo">
    <div class="form-container">
        @if(session()->has('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
         @endif

        <form method="POST" action="{{ route('signUp.register') }}"> <!-- Replace 'register' with your route name -->
            @csrf <!-- Blade directive for CSRF protection -->

            <h2 class="text-center"><strong>Sign Up</strong></h2>

            @error('email')
            <div class="alert alert-danger" role="alert">
                <span class="text-danger">{{ $message }}</span>
              </div>

            @enderror

            <div class="form-group">
                <input class="form-control" type="text" name="name" placeholder="name">
            </div>

            <div class="form-group">
                <input class="form-control" type="email" name="email" placeholder="Email">
            </div>

            <div class="form-group">
                <input class="form-control" type="password" name="password" placeholder="Password">
            </div>

            <div class="form-group">
                <button class="btn btn-info btn-block" type="submit">Sign Up</button>
            </div>

            <a href="{{ route('login') }}" class="already">Already have an account? LogIn here.</a>
        </form>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>

@endsection

