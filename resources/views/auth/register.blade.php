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
<title>Register</title>

@section('content')
<div class="container mt-5 mb-5">
    <div class="row justify-content-center">
        <div class="col-md-8" style="background-color:white;">
            <div class="card" style=" border-radius: 30px;
            box-shadow: 12px 12px 22px #c6a2a2;" >
                <div class="col-12">
                    <img class="image" src="images/signup1.jpg" class="img-fluid" alt="">
                </div>
                <div class="card-header" style="background-color:white; " ><h4>Register</h4></div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" id="name" minlength="3" maxlenth="30" required autocomplete="name" autofocus>
                                <div id="namevalid" class="form-text text-muted invalid-feedback">
                                    Your name should be 3-30 characters long and shouldn't contain a number
                                </div>
                                {{-- @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror --}}
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" >
                                <div id="emailvalid" class="form-text text-muted invalid-feedback">
                                    Your email must be a valid email
                                </div>
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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                <div id="passwordvalid" class="form-text text-muted invalid-feedback">
                                    Your password must be 8-14 characters long and must contain a special character and a number
                                </div>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
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
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        const name= document.getElementById('name');
        const email= document.getElementById('email');
        const password= document.getElementById('password');

        // console.log("hello");
        name.addEventListener('blur', ()=>{
            console.log("name is blurred");
            // Name Validation
            let regex = /^[a-zA-Z\s]+$/;
            let str = name.value;
            console.log(regex, str);

            if(regex.test(str)){
                console.log('Name is valid');
                name.classList.remove('is-invalid')
            }
            else{
                console.log('Name is not valid');
                name.classList.add('is-invalid')
            }
        })

        email.addEventListener('blur', ()=>{
            console.log("email is blurred");
            // Email validation
            let regex = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            let str = email.value;
            console.log(regex, str);

            if(regex.test(str)){
                console.log('Email is valid');
                email.classList.remove('is-invalid')
            }
            else{
                console.log('Email is not valid');
                email.classList.add('is-invalid')
            }
        })

        password.addEventListener('blur', ()=>{
            console.log("password is blurred");
            // Password validation
            let regex = /^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$/;
            let str = password.value;
            console.log(regex, str);

            if(regex.test(str)){
                console.log('Password is valid');
                password.classList.remove('is-invalid')
            }
            else{
                console.log('Password is not valid');
                password.classList.add('is-invalid')
            }
        })
    </script>
</div>
@endsection
