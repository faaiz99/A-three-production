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
<title>Contact Us</title>

@section('content')
<div class="container mt-5 mb-5" >
    <div class="row justify-content-center">
        <div class="col-md-8" style="background-color:white;" style="background: #f6e5e5;">
            <div class="card" style=" border-radius: 30px;
            box-shadow: 12px 12px 22px #c6a2a2; background: #f6e5e5;" >
            <div class="row">
                <div class="col-5">
                    <div class="row pt-5">
                        <div class="col-lg-11 offset-1 col-md-11 col-sm-11 col-11 ">
                            <h3 class="font-weight-light"><i class="fa-solid fa-location-dot"></i>Find us at</h3>
                            <p style="margin-left: 25px">Islamabad, Sector F, Phase 8 <br>
                            Pakistan.</p>
                        </div>
                        {{-- <div class="col-lg-10 col-md-9 col-sm-9 col-9">
                            <h3 class="font-weight-light">Find us at</h3>
                            <p>Islamabad, Sector F, Phase 8 <br>
                            Pakistan.</p>
                        </div> --}}
                    </div>

                    <div class="row pt-2 ml-1">
                        <div class="col-sm-12" >
                            <h3 class="font-weight-light"><i class="fa-solid fa-phone"></i>Call us at</h3>
                            <p style="margin-left: 30px">Mifra Waseem <br>
                               090078601<br>
                            Mon-Fri, 8:00am - 9pm.</p>

                        </div>
                    </div>
                </div>

                <div class="col-7">
                    <div class="card-header" style=" background: #f6e5e5;" ><h4>Contact Us</h4></div>
                @if (Session::has('success'))
                <div class="alert alert-success">{{ Session::get('success') }}
                </div>
            @endif
            @if (Session::has('fail'))
                <div class="alert alert-success">{{ Session::get('fail') }}
                </div>
            @endif
                <div class="card-body">
                    <form method="POST" action="/message-send">
                        @csrf

                        <div class="row mb-3">
                            <label for="fname" class="col-md-4 col-form-label text-md-end">{{ __('First Name') }}</label>

                            <div class="col-md-6">
                                <input id="fname" type="text" class="form-control" name="fname"  minlength="3" maxlenth="15" required autocomplete="name" autofocus>
                                <div id="namevalid" class="form-text text-muted invalid-feedback">
                                    Your name should be 3-15 characters long and shouldn't contain a number
                                </div>
                                {{-- @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror --}}
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="lname" class="col-md-4 col-form-label text-md-end">{{ __('Last Name') }}</label>

                            <div class="col-md-6">
                                <input id="lname" type="text" class="form-control" name="lname"  minlength="3" maxlenth="15" required autocomplete="name" autofocus>
                                <div id="namevalid" class="form-text text-muted invalid-feedback">
                                    Your name should be 3-15 characters long and shouldn't contain a number
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
                            <label for="subject" class="col-md-4 col-form-label text-md-end">{{ __('Subject') }}</label>

                            <div class="col-md-6">
                                <input id="subject" type="text" class="form-control @error('subject') is-invalid @enderror" name="subject" maxlength="100" required autocomplete="new-subject">
                                <div id="subjectvalid" class="form-text text-muted invalid-feedback">
                                    Your subject should not exceed the limit of 100
                                </div>
                                {{-- @error('subject')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror --}}
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="message" class="col-md-4 col-form-label text-md-end">{{ __('Your Message') }}</label>

                            <div class="col-md-6">
                                <textarea id="message" rows = "5" cols="20" type="text" class="form-control @error('message') is-invalid @enderror" name="message" required autocomplete="new-subject"></textarea>
                                <div id="messagevalid" class="form-text text-muted invalid-feedback">
                                    Field cannot be empty

                                    {{-- Your subject should not exceed the limit of 100 --}}
                                </div>
                                {{-- @error('subject')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror --}}
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
                                    {{ __('Send Message') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                </div>
            </div>

                    {{-- <img class="image" src="images/signup1.jpg" class="img-fluid" alt=""> --}}


            </div>
        </div>
    </div>
    <script>
        const fname= document.getElementById('fname');
        const lname= document.getElementById('lname');
        const email= document.getElementById('email');
        const subject= document.getElementById('subject');
        const message= document.getElementById('message');


        // console.log("hello");
        fname.addEventListener('blur', ()=>{
            console.log("name is blurred");
            // Name Validation
            let regex = /^[a-zA-Z\s]+$/;
            let str = fname.value;
            console.log(regex, str);

            if(regex.test(str)){
                console.log('Name is valid');
                fname.classList.remove('is-invalid')
            }
            else{
                console.log('Name is not valid');
                fname.classList.add('is-invalid')
            }
        })
        lname.addEventListener('blur', ()=>{
            console.log("name is blurred");
            // Name Validation
            let regex = /^[a-zA-Z\s]+$/;
            let str = lname.value;
            console.log(regex, str);

            if(regex.test(str)){
                console.log('Name is valid');
                lname.classList.remove('is-invalid')
            }
            else{
                console.log('Name is not valid');
                lname.classList.add('is-invalid')
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

        subject.addEventListener('blur', ()=>{
            console.log("password is blurred");
            // Password validation
            let regex = /^[a-zA-Z0-9\s]+$/;
            let str = subject.value;
            console.log(regex, str);

            if(regex.test(str)){
                console.log('Password is valid');
                subject.classList.remove('is-invalid')
            }
            else{
                console.log('Password is not valid');
                subject.classList.add('is-invalid')
            }
        })

        message.addEventListener('blur', ()=>{
            console.log("message is blurred");
            // Password validation
            let regex = /^[a-zA-Z0-9\s]+$/;
            let str = message.value;
            console.log(regex, str);

            if(regex.test(str)){
                console.log('Password is valid');
                message.classList.remove('is-invalid')
            }
            else{
                console.log('Password is not valid');
                message.classList.add('is-invalid')
            }
        })
    </script>
</div>
@endsection
