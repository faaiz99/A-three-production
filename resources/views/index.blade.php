@extends('layout')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    {{-- <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;700;800&family=Open+Sans&display=swap"
        rel="stylesheet"> --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;500;600;700;800&display=swap"
        rel="stylesheet">

    {{-- <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"> --}}

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/d7b7127037.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
    <title>Home</title>
</head>

<body>
    @section('content')
        @if (Session::has('Success'))
            <div class="alert alert-success">{{ Session::get('success') }}
            </div>
        @endif
            <!-- Background image -->
            <div class="bg-image d-flex justify-content-center align-items-center img-fluid" style="
          height: 100vh;
          background-size: cover;
          background-image: linear-gradient(rgba(4, 9, 30, 0.7), rgba(4, 9, 30, 0.7)), url(images/dslr.jpg);">
                <h1 class="cover-text text-white text-capitalize ml6"><span class="text-wrapper"><span
                            class="letters">Athree Productions</span></span> </h1>
            </div>
            <script>
                var textWrapper = document.querySelector('.ml6 .letters');
                textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

                anime.timeline({
                        loop: true
                    })
                    .add({
                        targets: '.ml6 .letter',
                        translateY: ["1.0em", 0],
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
            <!-- Background image -->
            <section class="container-fluid">
                <div class="col-12"> <br></div>
                <div class="row justify-content-center">
                    <hr>

                    <div class="col-md-6">
                        <br>
                        <div class="text-center"><img src="images/photographer.jpg"
                                class="rounded-circle d-inline img-fluid" alt="">
                        </div>
                        <h5 class="">Hi, We're a photohraphy studio based in Islamabad. As the name suggests,
                            Athree
                            is a creative
                            production house providing unique media. Tell us when your Big day is and We'll be there!

                        </h5>
                        <div class="slider-btn">
                            <a href="/services"><button class="btn">Get Started</button></a>
                        </div>
                        <hr>
                    </div>

                </div>
                <div class="row-sec">
                </div>
                <div class="row-sec">
                    <div class="col text-center">
                        <h4 style="">Projects We're proud of</h4>
                        <hr>
                        <div class="row p-2" style="background: rgb(197,82,111);
                        background: linear-gradient(90deg, rgba(197,82,111,1) 25%, rgba(148,98,242,1) 100%);">
                            <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                                <img src="images/wedding3.jpg" class="w-100 shadow-1-strong rounded mb-4" />

                                <img src="images/w4.jpg" class="w-100 shadow-1-strong rounded mb-4" />
                            </div>

                            <div class="col-lg-4 mb-4 mb-lg-0">
                                <img src="images/w5.jpg" class="w-100 shadow-1-strong rounded mb-4" />

                                <img src="images/w6.jpg" class="w-100 shadow-1-strong rounded mb-4" />
                            </div>

                            <div class="col-lg-4 mb-4 mb-lg-0">
                                <img src="images/wedding (2).jpg" class="w-100 shadow-1-strong rounded mb-4" />

                                <img src="images/w7.jpg" class="w-100 shadow-1-strong rounded mb-4" height="900px" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row-sec">
                    <div class="text-center">
                        <hr>
                        <h5>Our Clients</h5>
                        <hr>
                        <div class="album py-0 bg-light">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="card mb-4 shadow-sm" style="background-color: #0093E9;
                                        background-image: linear-gradient(160deg, #0093E9 0%, #80D0C7 100%);
                                        ">
                                            <img class="card-img-top" style="height: 300px; width: 100%; display: block;"
                                                src="https://images.pexels.com/photos/6625914/pexels-photo-6625914.jpeg">
                                            <div class="card-body">
                                                <p class="card-text ml3">"This studio is so dope! Great
                                                    natural lighting and really cool space. They have good portions where to
                                                    get
                                                    ready for hair and makeup.
                                                    Definitely would love to shoot there again."</p>
                                                <div class="d-flex justify-content-between align-items-center">

                                                    <small class="text-muted">3 days</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card mb-4 shadow-sm" style="background-color: #0093E9;
                                        background-image: linear-gradient(160deg, #0093E9 0%, #80D0C7 100%);
                                        ">
                                            <img class="card-img-top" style="height: 300px; width: 100%; display: block;"
                                                src="https://images.pexels.com/photos/415829/pexels-photo-415829.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500">
                                            <div class="card-body">
                                                <p class="card-text m13">“It's BEST place to implement any
                                                    ideas for photo and video shooting. The location inspires to create
                                                    unique
                                                    work.
                                                    Thank you guys for making this studio."</p>
                                                <div class="d-flex justify-content-between align-items-center">

                                                    <small class="text-muted">9 days</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card mb-4 shadow-sm" style="background-color: #0093E9;
                                        background-image: linear-gradient(160deg, #0093E9 0%, #80D0C7 100%);
                                        ">
                                            <img class="img-fluid" style="height: 300px; width: 100%;display: block;"
                                                src="https://images.pexels.com/photos/4946604/pexels-photo-4946604.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                                                data-holder-rendered="true">
                                            <div class="card-body">
                                                <p class="card-text">“Toba was fantastic to deal with
                                                    throughout. From our first call to the point when we had wrapped out -
                                                    she
                                                    was
                                                    great. Thank you!”</p>
                                                <div class="d-flex justify-content-between align-items-center">

                                                    <small class="text-muted">9 mins</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            {{-- <h2>Hello</h2>
        @foreach ($listing as $item)
        {{ $item['id']}}
        {{ $item['title'] }}
        {{ $item['tags'] }}

        @endforeach --}}
        @endsection
</body>

</html>
