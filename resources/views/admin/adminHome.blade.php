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
                <div class="col-lg-3 col-md-2 col-sm-6">
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

                <div class="col-lg-6 col-md-8 mt-5  offset-1">
                    <div class="container-1">
                        <h3> <i class="fas fa-tasks me-2"></i>Todo List
                            <a href='/admin/home'>
                                <button class="btn btn-dark" type="button">
                                    Show Tasks <i class="fa-solid fa-bell"></i></button>
                            </a>
                            <button class="btn btn-dark" type="button" data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"> <i class="fa-solid fa-message"></i>{{ count($message)}}</button>
                        </h3>

                        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight"
                            aria-labelledby="offcanvasRightLabel">
                            <div class="offcanvas-header">
                                <h5 id="offcanvasRightLabel">Notifications {{ count($message)}}</h5>
                                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                                    aria-label="Close"></button>


                            </div>
                            <div class="offcanvas-body bg-dark">
                                @foreach ($message as $query )
                                <div class="alert alert-success"><h5>{{ $query->email}}</h5><h6> {{ $query->message}}</h6></div>
                                @endforeach

                            </div>
                        </div>
                        <table class="my-3 table-sm" id="todoTable">
                            <thead>
                                <tr style="border-bottom: 1px solid rgb(214, 206, 206);">
                                    <th>Task Type</th>
                                    <th>Task</th>
                                    <th>Priority</th>
                                    <th>Due Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                    <br>
                </div>
            </div>
        </section>
        <script>
            $(document).ready(function() {
                fetchtask();

                function fetchtask() {
                    $.ajax({
                        type: "GET",
                        url: "/gettask/{id}",
                        dataType: 'json',
                        success: function(response) {
                            $.each(response.task, function(key, item) {
                                var text;
                                var icon = "badge";
                                var icon2;

                                switch (item.priority) {
                                    case 'high':
                                        text = "High";
                                        icon2 = "-danger"
                                        break;
                                    case 'middle':
                                        text = "Middle";
                                        icon2 = "-warning"
                                        break;
                                    case 'low':
                                        icon2 = "-success"
                                        text = "Low";
                                        break;
                                    default:
                                        break;
                                }
                                $('tbody').append('<tr>\
                                            <td><strong>' + item.taskType + '</td>\
                                            <td><strong>' + item.taskDescription + '</td>\
                                            <td><strong><h6 class = "badge bg' + icon2 + '">' + text + '</h6></td>\
                                            <td><input id="completion" type="date" value=' + item.date + '></td>\
                                            <td><button type="button" class="btn btn-warning">Edit</button></td>\
                                            <td><button type="button" class="btn btn-danger">Delete</button></td>\
                                            </tr>');
                            });
                        },
                        error: function(error) {
                            alert('No Tasks Found')
                        }
                    });
                }
                $('#addTask').on('submit', function(e) {
                    e.preventDefault();
                    $.ajax({
                        type: "POST",
                        url: "/addtask/{id}",
                        data: $('#addTask').serialize(),
                        success: function(response) {
                            alert('Task Added!');
                            fetchtask();


                        },
                        error: function(error) {
                            alert('Task not added!')
                        }

                    });
                });

            });
        </script>
    @endsection
</body>

</html>
