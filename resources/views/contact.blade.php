<!DOCTYPE html>
@extends('layout')
<html lang="en">
    <head>
        <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;500;600;700;800&display=swap"
        rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/d7b7127037.js" crossorigin="anonymous"></script>
        <title>Contact</title>
    </head>
<body>
    @section('content')
    <section class="head pb-5">
        <div class="container py-5" >
            <div class="card">
                <div class="card-body" style="background: #f6e5e5;">
                    <div class="card-body" style="background: #f6e5e5;" >
                    <h1 class="font-weight-light text-center py-3">Contact Us</h1>
                    @if (Session::has('success'))
                    <div class="alert alert-success">{{ Session::get('success') }}
                    </div>
                @endif
                @if (Session::has('fail'))
                    <div class="alert alert-success">{{ Session::get('fail') }}
                    </div>
                @endif
                    <div class="row pt-3">
                        <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="row">
                                <div class="col-lg-1 offset-1 col-md-2 col-sm-2 col-2">
                                    <span style="font-size:30px;"><i class="fa-solid fa-location-dot"></i></span>
                                </div>
                                <div class="col-lg-10 col-md-9 col-sm-9 col-9">
                                    <h3 class="font-weight-light">Find us at</h3>
                                    <p>Islamabad, Sector F, Phase 8 <br>
                                    Pakistan.</p>


                                </div>
                            </div>

                            <div class="row pt-3">
                                <div class="col-lg-1 offset-1 col-md-2 col-sm-2 col-2">
                                    <span style="font-size:30px;"><i class="fa-solid fa-phone"></i></span>
                                </div>
                                <div class="col-lg-10 col-md-9 col-sm-9 col-9" >
                                    <h3 class="font-weight-light">Call us at</h3>
                                    <p>Mifra Waseem <br>
                                       090078601<br>
                                    Mon-Fri, 8:00am - 9pm.</p>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                            <form action="#" method = "POST">
                                @csrf
                                <div class="form-row">
                                    <div class="form-group col-lg-6 col-md-12 col-sm-12 col-12">
                                        <label for="first_name">First Name</label>
                                        <input type="text" name = "first_name" class="form-control" placeholder="First Name" required  pattern="[a-zA-Z]([0-9a-zA-Z]){4,30}" min="4" max="30" title="Min 4 Max 30 Chars No Spaces No Special Charachters e.g faaiz">
                                    </div>
                                    <div class="form-group col-lg-6 col-md-12 col-sm-12 col-12">
                                        <label for="last_name">Last Name</label>
                                        <input type="text" name = "last_name" class="form-control" placeholder="Last Name" required pattern="[a-zA-Z]([0-9a-zA-Z]){4,30}" min="4" max="30" title="Min 4 Max 30 Chars No Spaces No Special Charachters">
                                    </div>
                                    <div class="form-group col-lg-6 col-md-12 col-sm-12 col-12">
                                        <label for="subject">Subject</label>
                                        <input type="text" name = "subject" class="form-control" placeholder="Subject" required pattern = '[a-zA-Z]([0-9a-zA-Z]){4,50}' min="5" max="50" title="Max Length exceeded of 50 chars and Single Word Subject e.g wedding">
                                    </div>
                                </div>
                                <label for="email">Email</label>
                                        <input type="text" name ="email" class="form-control" placeholder="Email" required pattern="([a-zA-Z0-9_\-.]+)@([a-zA-Z0-9_\-.]+)\.([a-zA-Z]){2,7}" title="Only . allowed no Spaces no special characters">
                                <label for="message">Your Mesaage</label>
                                <textarea name ="message" class="form-control mb-3" placeholder="Type Here" id="" cols="10" rows="5" required min="5" max ="5000" title="Message cannot be empty"></textarea>
                                <button type = "submit"class="btn btn-success float-right">Send Message</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    @endsection
    <script>
        var textWrapper = document.querySelector('.ml6 .letters');
        textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

        anime.timeline({loop: true})
        .add({
        targets: '.ml6 .letter',
        translateY: ["1.1em", 0],
        translateZ: 0,
        duration: 750,
        delay: (el, i) => 50 * i
        }).add({
        targets: '.ml6',
        opacity: 0,
        duration: 1000,
        easing: "easeOutExpo",
        delay: 1000
        });
    </script>
</body>
</html>
