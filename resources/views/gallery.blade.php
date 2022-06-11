@extends('layout')
<!DOCTYPE html>
<html lang="en">
<head>
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
    <title>Home</title>
</head>
<body>
@section('content')
<div style="padding: 0%;" class="container-fluid banner">
    <div class="row">

            <div style="padding: 0%; width:100%;" class="col-12">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active ">
                            <img class="d-block w-100 image" src="images/birthday.jpg" alt="First slide">
                            <div class="carousel-caption d-md-block caption">
                                <h3>Birthday Shoot</h3>
                                <div class="slider-btn">
                                    <button class="btn">Get Started</button>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item ">
                            <img class="d-block w-100 image" src="images/wedding.jpg" alt="Second slide">
                            <div class="carousel-caption d-md-block caption">
                                <h3>Wedding Shoot</h3>
                                <div class="slider-btn">
                                    <button class="btn">Get Started</button>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item ">
                            <img class="d-block w-100 image" src="images/nature.jpg" alt="Third slide">
                            <div class="carousel-caption d-md-block caption">
                                <h3>Nature Shoot</h3>
                                <div class="slider-btn">
                                    <button class="btn">Get Started</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
    </div>
</div>
@endsection
</body>
