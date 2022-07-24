@extends('layout')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;700;800&family=Open+Sans&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
    @livewireStyles
</head>

<body>
    @section('content')
        <section class="data-table">
            @livewire('datechecker')
            @livewireScripts
        </section>
        <section>
            <div class="container py-5">
                @if (Session::has('success'))
                    <div class="alert alert-success">{{ Session::get('success') }}
                    </div>
                @endif
                @if (Session::has('fail'))
                    <div class="alert alert-success">{{ Session::get('fail') }}
                    </div>
                @endif
                <div class="row mb-4">

                    <div class="col-lg-8 mx-auto text-center">

                        <h3 class="display-6">Payment Form</h3>
                    </div>
                </div> <!-- End -->
                <div class="row">
                    <div class="col-lg-6 mx-auto">
                        <div class="card " style="background-color: #f6e5e5;">
                            <div class="card-header">
                                <div class="bg-white shadow-sm pt-4 pl-2 pr-2 pb-2">
                                    <!-- Credit card form tabs -->
                                    <ul role="tablist" class="nav bg-light nav-pills rounded nav-fill mb-3">
                                        <li class="nav-item"> <a data-toggle="pill" href="#credit-card"
                                                class="nav-link active "> <i class="fas fa-credit-card mr-2"></i> Credit
                                                Card </a> </li>
                                    </ul>
                                </div> <!-- End -->
                                <!-- Credit card form content -->
                                <div class="tab-content">
                                    <!-- credit card info-->
                                    <div id="credit-card" class="tab-pane fade show active pt-3">
                                        {{-- onsubmit="event.preventDefault()" --}}
                                        <form role="form" method="POST" action="/quotation/payment/{id}">
                                            @csrf
                                            <h6>Service</h6><input type="text" value={{ $payment->title }}
                                                name="title" readonly style="border:none">
                                            <h6>Total $:</h6><input type="text" value={{ $payment->price }}
                                                name="price" readonly style="border:none">
                                            <div class="form-group"> <label for="username">
                                                    <h6>Card Owner</h6>
                                                </label>
                                                @if (Auth::check())
                                                    <input id="name" type="text" name="username" class="form-control" placeholder="Card Owner Name" minlength="3" maxlength="30"
                                                        required class="form-control " value={{ Auth::user()->name }}>
                                                        <div id="namevalid" class="form-text text-muted invalid-feedback">
                                                            Name should be 3-30 characters long and shouldn't contain a number
                                                        </div>
                                                @else
                                                    <input id="name" type="text" name="username" class="form-control" placeholder="Card Owner Name" minlength="3" maxlength="30"
                                                        required class="form-control ">
                                                        <div id="namevalid" class="form-text text-muted invalid-feedback">
                                                            Name should be 3-30 characters long and shouldn't contain a number
                                                        </div>
                                                @endif

                                            </div>
                                            <div class="form-group"> <label for="cardNumber">
                                                    <h6>Card number</h6>
                                                </label>
                                                <div class="input-group">
                                                <input id="card-num" type="text" name="cardNumber" minlength="8" maxlength="19"
                                                            placeholder="Valid card number" class="form-control " required>
                                                    <div id="namevalid" class="form-text text-muted invalid-feedback">
                                                        Card number should be 8-19 digits long and shouldn't contain an alphabet
                                                    </div>
                                                    <div class="input-group-append"> <span
                                                            class="input-group-text text-muted"> <i
                                                                class="fab fa-cc-visa mx-1"></i> <i
                                                                class="fab fa-cc-mastercard mx-1"></i> <i
                                                                class="fab fa-cc-amex mx-1"></i> </span> </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-8">
                                                    <div class="form-group"> <label><span class="hidden-xs">
                                                                <h6>Expiration Date</h6>
                                                            </span></label>
                                                        <div class="input-group">
                                                                <input type="date" required name="expirationDate">

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group mb-4"> <label data-toggle="tooltip"
                                                            title="Three digit CV code on the back of your card">
                                                            <h6>CVV <i class="fa fa-question-circle d-inline"></i></h6>
                                                        </label> <input id="cvv" type="text" required class="form-control" minlength="3" maxlength="3"
                                                            pattern='[0-9]{3}'>
                                                            <div id="namevalid" class="form-text text-muted invalid-feedback">
                                                                CVV should be 3 digits long and shouldn't contain an alphabet
                                                            </div>
                                                        </div>
                                                </div>
                                            </div>
                                            @if (Auth::check())
                                                <input type="hidden" readonly id="finalSelectedDate"
                                                    name="finalSelectedDate" value={{ session()->pull('finalDate') }}
                                                    required title="Please Select Date First">
                                            @else
                                                <input type="hidden" id="finalSelectedDate" name="finalSelectedDate">
                                            @endif
                                            @if (Auth::check())
                                                <label for="userId"></label><input type="hidden" name="userId"
                                                value={{ Auth::user()->id }}>
                                            @else
                                                <label for="userId"></label><input type="hidden" name="userId">

                                            @endif
                                            <div class="card-footer"> <button type="submit"
                                                    class="subscribe btn btn-primary btn-block shadow-sm"> Confirm Payment
                                                </button>
                                        </form>
<script>
    const name= document.getElementById('name');
    const card_num= document.getElementById('card-num');
    const cvv= document.getElementById('cvv');

// console.log("hello");

    name.addEventListener('blur', ()=>{
    console.log("name is blurred");
    // Name Validation
    let regex = /^[a-zA-Z]+(([',. -][a-zA-Z ])?[a-zA-Z]*)*$/;
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

    card_num.addEventListener('blur', ()=>{
    console.log("card dumber is blurred");
    // Name Validation
    let regex = /^[0-9]{8,19}$/;
    let str = card_num.value;
    console.log(regex, str);

    if(regex.test(str)){
        console.log('Number is valid');
        card_num.classList.remove('is-invalid')
    }
    else{
        console.log('Number is not valid');
        card_num.classList.add('is-invalid')
    }
})

cvv.addEventListener('blur', ()=>{
    console.log("cvv is blurred");
    // Name Validation
    let regex = /^[0-9]{3}$/;
    let str = cvv.value;
    console.log(regex, str);

    if(regex.test(str)){
        console.log('cvv is valid');
        cvv.classList.remove('is-invalid')
    }
    else{
        console.log('cvv is not valid');
        cvv.classList.add('is-invalid')
    }
})
                                        </script>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endsection
</body>
</html>
