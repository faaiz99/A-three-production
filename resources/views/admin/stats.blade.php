@extends('layouts.app')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/d7b7127037.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
</head>
<body>
    @section('content')
    <section>
            <div class="row">
                <div class="col-lg-3 col-md-2 col-sm-12">
                    <nav class="navbar1 navbar-expand-xl bg-dark">
                        <div class="sidebar-header">
                            <h3></h3>
                        </div>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar1">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div id="navbar1" class="navbar-collapse collapse ml-5">
                            <ul class="navbar-nav list-unstyled">
                                <p><a href="/admin/home" style="text-decoration:none;">Dashboard</a> </p>
                                <li>
                                    <a style="text-decoration:none;" href="/admin/home">Home</a>
                                </li>
                                <li> <a href="/admin/orders" style="text-decoration:none;">Orders</a> </li>
                                <li>
                                    <a style="text-decoration:none;" href="/admin/stats">Statistics</a>
                                <li>
                                <li>
                                    <a style="text-decoration:none;" href="/admin/users">Users</a>
                                <li>
                                <li>
                                    <a href="/admin/update" style="text-decoration:none;"> Profile</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                    <div class="offcanvas offcanvas-start bg-dark" style=" color:white;width: 30%;" id="demo">
                        <div class="offcanvas-header">
                            <h1 class="offcanvas-title  bg-dark"></h1>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
                        </div>
                        <div class="offcanvas-body bg-dark">
                            <ul class="navbar-nav list-unstyled components ml-2">
                                <p><a href="/admin/home" style="text-decoration:none;">Dashboard</a> </p>
                                <li>
                                    <a style="text-decoration:none;" href="/admin/home">Home</a>
                                </li>
                                <li> <a href="/admin/orders" style="text-decoration:none;">Orders</a> </li>
                                <li>
                                    <a style="text-decoration:none;" href="/admin/stats">Statistics</a>
                                <li>
                                <li>
                                    <a style="text-decoration:none;" href="/admin/users">Users</a>
                                <li>
                                <li>
                                    <a href="/admin/update" style="text-decoration:none;"> Profile</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="container-fluid mt-3 mb-1">
                        <button class="btn btn-success" type="button" data-bs-toggle="offcanvas" data-bs-target="#demo">
                            <i class="fa-solid fa-bars "></i>
                        </button>
                    </div>
                </div>
                <div class="col-lg-9 col-md-10">
                    <h2 class="text-center mb-5 mt-5">Projects Generated</h2>
                    <div class="row text-center">
                        <?php
                        $count = 0;
                        $wedding = 0;
                        $product = 0;
                        $nature = 0;
                        $event = 0;
                        $film = 0;
                        $birthday = 0;
                        $drone = 0;


                         foreach($stats as $stat){
                            $count++;
                            if($stat->title === 'Wedding'){
                                $wedding++;
                            }

                            if($stat->title === 'Product'){
                                $product++;
                            }

                            if($stat->title === 'Nature'){
                                $nature++;
                            }

                            if($stat->title === 'Event'){
                                $event++;
                            }

                            if($stat->title === 'Film'){
                                $film++;
                            }

                            if($stat->title === 'Birthday'){
                                $birthday++;
                            }
                            if($stat->title === 'Drone'){
                                $drone++;
                            }

                        }


                        ?>

                        <div class="col-lg-3 col-md-3">
                            <div class="card border border-primary shadow-0 mb-4" >
                                <div class="card-body">
                                    <h5 class="card-title">Wedding Shoots</h5>
                                    <p class="card-text">
                                        @php
                                        echo $wedding;
                                        @endphp
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-3">
                            <div class="card border border-primary shadow-0 mb-4">
                                <div class="card-body">
                                    <h5 class="card-title">Drone Shoots</h5>
                                    <p class="card-text">
                                        @php
                                        echo $drone;
                                        @endphp
                                    </p>
                                </div>
                            </div>

                        </div>

                        <div class="col-lg-3 col-md-3">
                            <div class="card border border-primary shadow-0 mb-4">
                                <div class="card-body">
                                    <h5 class="card-title">Nature Shoots</h5>
                                    <p class="card-text">
                                        @php
                                        echo $nature;
                                        @endphp
                                    </p>
                                </div>
                            </div>

                        </div>

                    </div>
                    <div class="row mt-5 text-center">

                        <div class="col-lg-3 col-md-3">
                            <div class="card border border-primary shadow-0 mb-4">
                                <div class="card-body">
                                    <h5 class="card-title">Birthday Shoots</h5>
                                    <p class="card-text">
                                        @php
                                        echo $birthday;
                                        @endphp
                                    </p>
                                </div>
                            </div>

                        </div>

                        <div class="col-lg-3 col-md-3">
                            <div class="card border border-primary shadow-0 mb-4">
                                <div class="card-body">
                                    <h5 class="card-title">Event Shoots</h5>
                                    <p class="card-text">
                                        @php
                                        echo $event;
                                        @endphp
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-3">
                            <div class="card border border-primary shadow-0 mb-4">
                                <div class="card-body">
                                    <h5 class="card-title">Film Shoots</h5>
                                    <p class="card-text">
                                        @php
                                        echo $film;
                                        @endphp
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-5 text-center">
                        <div class="col-lg-3 col-md-3">
                            <div class="card border border-primary shadow-0 mb-4">
                                <div class="card-body">
                                    <h5 class="card-title">Product Shoots</h5>
                                    <p class="card-text">
                                        @php
                                        echo $product;
                                        @endphp
                                    </p>
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

