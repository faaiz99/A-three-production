@extends('layouts.app')

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Home</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <script src="https://code.jquery.com/jquery-3.6.0.js" ntegrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/d7b7127037.js" crossorigin="anonymous"></script>
</head>

<body>
    @section('content')
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        <section>
            <div class="row">
                <div class="col-lg-3 col-md-2 col-sm-6">
                    <nav class="navbar1 navbar-expand-xl bg-dark">
                        <div class="sidebar-header">
                            <h3></h3>
                        </div>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar1">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div id="navbar1" class="navbar-collapse collapse ml-5">
                            <ul class="navbar-nav list-unstyled" style="margin-left: 40px">
                                <p><a href="/admin/home" style="text-decoration:none;">Dashboard</a> </p>
                                <li>
                                    <a style="text-decoration:none;" href="/home">Home</a>
                                </li>
                                <li> <a href="/booking/{{ Auth::user()->id }}" style="text-decoration:none;">My
                                        bookings</a> </li>
                                <li>
                                    <a style="text-decoration:none;" href="/wallet/{{ Auth::user()->id }}">My wallet</a>
                                <li>
                                <li>
                                    <a href="/update/{{ Auth::user()->id }}" style="text-decoration:none;">My account</a>
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
                                    <a style="text-decoration:none;" href="/home">Home</a>
                                </li>
                                <li> <a href="/booking/ {{ Auth::user()->id }}" style="text-decoration:none;">My
                                        bookings</a> </li>
                                <li>
                                    <a style="text-decoration:none;" href="/wallet/{{ Auth::user()->id }}">My wallet</a>
                                <li>
                                <li>
                                    <a href="/update/{{ Auth::user()->id }}" style="text-decoration:none;"> My account</a>
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

                <div class="col-lg-6 col-md-8 mt-5">

                    <h3>Wallet</h3>
                    @if (Session::has('Dsuccess'))
                        <div class="alert alert-success">{{ Session::get('Dsuccess') }}
                        </div>
                    @endif
                    @if (Session::has('Usuccess'))
                        <div class="alert alert-success">{{ Session::get('Usuccess') }}
                        </div>
                    @endif
                    <div class="container">
                        <table class="table table-striped table-hover table-responsive-sm" style="border: none;">
                            <tbody>
                                <tr>
                                    <th>Name</th>
                                    <th>Credit Card Number</th>
                                    <th>Expiration Date</th>
                                    <th></th>
                                    <th></th>
                                    <th>Action</th>
                                    <th></th>
                                </tr>
                                @foreach ($wallet as $card)
                                    <tr>
                                        <form action="/wallet/{{ Auth::user()->id }}" method="POST">
                                            @csrf
                                            <td><strong>{{ $card->card_holder }}</strong></td>
                                            <td><label for="cardNumber"></label><input name="cardNumber" type="text"
                                                    value="{{ $card->credit_card_number }}" readonly></td>
                                            <td><label for="expirationDate"></label><input name="expirationDate"
                                                    id="expirationDate" type="date"
                                                    value="{{ $card->expirationDate }}" readonly></td>
                                            <td><button class="btn btn-warning" onclick="edit()">Edit</button></td>
                                            <td><button class="btn btn-info" onclick="save()">Save</button></td>
                                            <td><a href="/wallet/{{ Auth::user()->id }}"><button class="btn btn-success" name="action"value="Update">Update</button></a></td>
                                            <td><a href="/wallet/{{ Auth::user()->id }}"><button
                                                        class="btn btn-dark"
                                                        name="action"value="Delete">Delete</button></a></td>
                                        </form>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    @endsection
    <script>
        function edit() {
            event.preventDefault();
            const nodes = document.querySelectorAll("input")
            for (var i = 0; i < nodes.length; i++)
                nodes[i].readOnly = false;
        }

        function save() {
            event.preventDefault();
            const nodes = document.querySelectorAll("input")
            for (var i = 0; i < nodes.length; i++)
                nodes[i].readOnly = true;

        }
    </script>
</body>

</html>
