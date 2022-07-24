@extends('layouts.app')

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Home</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
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
                <div class="col-lg-3 col-md-2">
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
                                    <a style="text-decoration:none;" href="/home">Home</a>
                                </li>
                                <li> <a href="/booking/{{ Auth::user()->id }}" style="text-decoration:none;">My bookings</a> </li>
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
                                <li> <a href="/booking/{{ Auth::user()->id }}" style="text-decoration:none;">My bookings</a> </li>
                                <li>
                                    <a style="text-decoration:none;" href="/wallet/{{ Auth::user()->id }}">My wallet</a>
                                <li>
                                <li>
                                    <a href="/update/{{ Auth::user()->id }}" style="text-decoration:none;">My account</a>
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
                <div class="section col-lg-6 col-md-8 mt-5">
                    @if (Session::has('Success'))
                    <div class="alert alert-success">{{ Session::get('Success') }}
                    </div>
                    @endif
                    @if(Session::has('Fail'))
                    <div class="alert alert-success">{{ Session::get('Success') }}
                    </div>
                    @endif

                        <h4>Update Profile</h4>
                        <form method="POST" action="/update/{id}">
                            @csrf
                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('New name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                        name="name" required value="{{ Auth::user()->name }}" required autocomplete="name"
                                        autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="email_old"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Old Email Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                        required name="email_old" value="{{ Auth::user()->email }}" autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="email_new"
                                    class="col-md-4 col-form-label text-md-end">{{ __('New Email Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                        required name="email_new" value="{{ old('email') }}" autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            {{-- <div class="row mb-3">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password" required
                                        autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                            </div> --}}
                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Update') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>


        </section>
    @endsection

</body>

</html>
