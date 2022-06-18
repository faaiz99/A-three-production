@extends('layout')
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="{{ asset('style.css') }}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
<link
    href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;700;800&family=Open+Sans&display=swap"
    rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
</script>
<script src="https://kit.fontawesome.com/d7b7127037.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
<title>Login</title>
@section('content')
<div class="container mt-5 mb-5">
    <div class="row justify-content-center">
        <div class="col-md-8" style="background-color:white;">
            <div class="card" style=" border-radius: 30px;
            box-shadow: 12px 12px 22px #c6a2a2;">
                <div class="col-12" >
                    <img class="image" src="images/signup1.jpg" class="img-fluid" alt="">
                </div>
                <div class="card-header"  style="background-color:white; " ><h4>Login</h4></div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        @if (Session::has('error'))
                        <div class="alert alert-warning">{{ Session::get('error') }}
                        </div>
                        @endif
                        @if (Session::has('login'))
                        <div class="alert alert-warning">{{ Session::get('login') }}
                        </div>
                        @endif

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" patten ="/^[a-zA-Z0-9.! #$%&'*+/=? ^_`{|}~-]+@[a-zA-Z0-9-]+(?:\. [a-zA-Z0-9-]+)*$/" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                    <br>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-0">
                            <div class="col-md-8 offset-sm-2">
                                <button type="submit" class="btn1" style=".btn1{
                                    border: none;
                                    outline: none;
                                    height: 50px;
                                    width: 100%;
                                    background-color: #774181;
                                    color: white;
                                    border-radius: 4px;
                                    font-weight: bold;
                                    font-size: 1em;

                                }
                                .btn1:hover{
                                    background-color: #8f6497;
                                    font-size: 1.10em ;
                                }">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                        <div class="row mb-0">
                            <div class="col-md-8 offset-sm-2">
                                <button type="button" class="btn1" style=".btn1{
                                    border: none;
                                    outline: none;
                                    height: 50px;
                                    width: 100%;
                                    background-color: #774181;
                                    color: white;
                                    border-radius: 4px;
                                    font-weight: bold;
                                    font-size: 1em;

                                }
                                .btn1:hover{
                                    background-color: #8f6497;
                                    font-size: 1.10em ;
                                }">
                                       <a href="/register" style="text-decoration-color: white; text-decoration:none; color:white;">Register</a>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
