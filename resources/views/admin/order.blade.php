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
                    {{-- <nav class="navbar1 navbar-expand-xl bg-dark">
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
                    </div> --}}
                </div>

                <div class="col-lg-8 tables">
                    <h3>Bookings</h3>
                    @if (Session::has('success'))
                    <div class="alert alert-success">{{ Session::get('success') }}
                    </div>
                    {{-- @elseif(Session::has('completed'))
                    <div class="alert alert-success">{{ Session::get('completed') }}
                    </div> --}}
                    @endif
                    <div class="container">
                        <table class="table table-striped table-hover table-responsive-sm" style="border: none;">
                            <tbody>
                                <tr>
                                    <th>Client</th>
                                    <th>Service</th>
                                    <th>Price</th>
                                    <th>Date</th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th>Action</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                               @foreach($orders as $ord)
                                    <tr><form action="/admin/orders/complete/{{ $ord->id }}" method="POST">
                                        @csrf
                                        <td><strong>{{ $ord->name }}</strong></td>
                                        <td><label for="service"></label><input name = "service" id="service" type="text" value="{{ $ord->title }}" readonly></td>
                                        <td><label for="price"></label><input name="price" id="price" type="number" value="{{ $ord->price }}" readonly></td>
                                        <td><label for="date"></label><input type="date" name="date" id="" value="{{ $ord->date }}"></td>
                                        <td><label for="orderId"></label><input type="hidden" name="orderId" value = {{ $ord->id }}></td>
                                        <td><button class="btn btn-warning" onclick="edit()">Edit</button></td>
                                        {{-- <td><a href="/admin/orders/complete/{{ $ord->id }}"><button class="btn btn-dark" name="action"value="Delete">Delete</button></a></td> --}}
                                        <td><button class="btn btn-info" onclick="save()">Save</button></td>
                                        <td><a href="/admin/orders/complete/{{ $ord->id }}"><button class="btn btn-success" name="action"value="Update">Update</button></a></td>
                                        <td><a href="/admin/orders/complete/{{ $ord->id }}"><button type = "submit"class="btn btn-danger" name="action" value="Complete">Complete</button></a></td>
                                    </form>

                                    </tr>
                                    @endforeach
                            </tbody>
                        </table>
                        <div class="col-12 tables">
                            <h3>Completed</h3>

                            @if (Session::has('completed'))
                            <div class="alert alert-success">{{ Session::get('completed') }}
                            </div>
                            {{-- @elseif(Session::has('fail'))
                            <div class="alert alert-success">{{ Session::get('success') }}
                            </div> --}}
                            @endif
                            <div class="container">
                                <table class="table table-striped table-hover table-responsive-sm" style="border: none;">
                                    <tbody style="opacity: .50 ;">
                                        <tr>
                                            <th>Client</th>
                                            <th>Service</th>
                                            <th>Price</th>
                                            <th></th>
                                            <th>Event Date</th>
                                            <th>Action</th>
                                            <th></th>
                                        </tr>
                                        @foreach($completedOrders as $ord)
                                            <tr><form action="/admin/orders/complete/{{ $ord->id }}" method="POST">
                                                @csrf
                                                <td><strong>{{ $ord->card_holder }}</strong></td>
                                                <td><label for="service"></label><input name = "service" id="service" type="text" value="{{ $ord->title }}" readonly></td>
                                                <td><label for="price"></label><input name="price" id="price" type="number" value="{{ $ord->price }}" readonly></td>
                                                <td><label for="orderId"></label><input type="hidden" name="orderId" value = {{ $ord->id }}></td>
                                                <td><label for="date"></label><input type="date" name="date" value = {{ $ord->date }}></td>
                                                <td><a href="/admin/orders/complete/{{ $ord->id }}"><button class="btn btn-dark" name="action"value="Delete">Delete</button></a></td>
                                            </form>

                                            </tr>
                                            @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    @endsection
    <script>
        //  $(document).ready(function(){
        //         $('.sidebar-item').click("click", function(event){
        //         event.preventDefault();
        //         $('.container').load($(this)).attr('href');

        //     });
        // });

        function edit(){
            event.preventDefault();
            const nodes = document.querySelectorAll("input")
            for(var i = 0 ; i < nodes.length ;i++)
                nodes[i].readOnly = false;
        }
        function save(){
            event.preventDefault();
            const nodes = document.querySelectorAll("input")
            for(var i = 0 ; i < nodes.length ;i++)
                nodes[i].readOnly = true;

        }
    </script>
</body>
</html>
