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

                    @include('admin.sidebar');



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
                            <div class="card border border-primary shadow-0 mb-4 bg-dark" >
                                <div class="card-body">
                                    <h5 class="card-title"  style="color:white">Wedding Shoots</h5>
                                    <p class="card-text"  style="color:white">
                                        @php
                                        echo $wedding;
                                        @endphp
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-3">
                            <div class="card border border-primary shadow-0 mb-4 bg-dark">
                                <div class="card-body">
                                    <h5 class="card-title"  style="color:white">Drone Shoots</h5>
                                    <p class="card-text"  style="color:white">
                                        @php
                                        echo $drone;
                                        @endphp
                                    </p>
                                </div>
                            </div>

                        </div>

                        <div class="col-lg-3 col-md-3">
                            <div class="card border border-primary shadow-0 mb-4 bg-dark">
                                <div class="card-body">
                                    <h5 class="card-title"  style="color:white">Nature Shoots</h5>
                                    <p class="card-text"  style="color:white">
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
                            <div class="card border border-primary shadow-0 mb-4 bg-dark">
                                <div class="card-body">
                                    <h5 class="card-title"  style="color:white">Birthday Shoots</h5>
                                    <p class="card-text"  style="color:white">
                                        @php
                                        echo $birthday;
                                        @endphp
                                    </p>
                                </div>
                            </div>

                        </div>

                        <div class="col-lg-3 col-md-3">
                            <div class="card border border-primary shadow-0 mb-4 bg-dark">
                                <div class="card-body">
                                    <h5 class="card-title"c style="color:white">Event Shoots</h5>
                                    <p class="card-text"  style="color:white">
                                        @php
                                        echo $event;
                                        @endphp
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-3">
                            <div class="card border border-primary shadow-0 mb-4 bg-dark">
                                <div class="card-body">
                                    <h5 class="card-title"  style="color:white">Film Shoots</h5>
                                    <p class="card-text"  style="color:white">
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
                            <div class="card border border-primary shadow-0 mb-4 bg-dark">
                                <div class="card-body">
                                    <h5 class="card-title" style="color:white">Product Shoots</h5>
                                    <p class="card-text"  style="color:white">
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
<script>
    //  $(document).ready(function(){
    //             $('.sidebar-item').click("click", function(event){
    //             event.preventDefault();
    //             $('.container').load($(this)).attr('href');

    //         });
    //     });

</script>
</html>

