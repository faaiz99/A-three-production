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
    <title>About</title>
</head>
<body>
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="jumbotron col-lg-6" style="background-color: #f6e5e5; height: auto;">
            <h3 class="font-weight-light "><i class="fa-solid fa-people-group"></i>About us</h3>
            <p class="lead">Hi, my name is Faaiz, and I am the CEO at Athree productions. First, I would like to formally introduce myself to you and express how excited we are to work with you.

              I would welcome the opportunity to discuss our ongoing relationship. Please get in touch with me to arrange a suitable date and time for a meeting.

              If you have any questions or require any additional information or support, please don't hesitate to contact me at any point.
              <br>
              Yours faithfully,
              Faaiz</p>
        </div>
        <div class="jumbotron col-lg-6" style="background-color: #f6e5e5; height: auto;">
            <h3 class="font-weight-light"> <i class="fa-solid fa-location-dot"></i> Our location</h3>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3321.205904714012!2d73.15440461744384!3d33.6518263!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38dfea4aee5bdf8f%3A0xe6b55e05d462beb1!2sCOMSATS%20University%20Islamabad!5e0!3m2!1sen!2s!4v1647926092542!5m2!1sen!2s"
            width="300" height="300" style="border:1px #774181;" allowfullscreen="" loading="lazy"></iframe></div>
        </div>
    </div>
<hr>
    <div class="row text-center justify-content-center" >
        <h3>Our team</h3>
    </div>
    <hr>
    <div class="row marketing">
      <div class="col-lg-6">
        <h4>Founder & CEO</h4>
        <p>Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.</p>

        <h4>Photographer</h4>
        <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras mattis consectetur purus sit amet fermentum.</p>

        <h4>Photographer</h4>
        <p>Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
      </div>

      <div class="col-lg-6">
        <h4>Editor</h4>
        <p>Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.</p>

        <h4>Videographer</h4>
        <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras mattis consectetur purus sit amet fermentum.</p>

        <h4>Drone Operator</h4>
        <p>Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
      </div>
      <p><a class="btn btn-lg btn-success" href="#" role="button">Get Hired</a></p>
      <hr>
    </div>
@endsection

</body>
</html>
