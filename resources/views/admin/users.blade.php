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

                <div class="col-lg-6 tables">
                    <h3>Users</h3>
                    @if (Session::has('update'))
                    <div class="alert alert-success">{{ Session::get('update') }}
                    </div>
                    @elseif (Session::has('delete'))
                    <div class="alert alert-success">{{ Session::get('delete') }}
                    </div>
                    @endif

                    <div class="container">
                        <table class="table table-striped table-hover table-responsive-sm" style="border: none;">
                            <tbody>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Account Type</th>
                                    <th></th>
                                    <th></th>
                                    <th>Action</th>
                                    <th></th>
                                </tr>
                            <?php
                            foreach($users as $user){ ?>
                                <tr><form action="/admin/users/{{ $user->id }}" method="POST">
                                    @csrf
                                    <td><label for="name"></label><input name = "name" id="username" type="text" value="{{ $user->name }}" readonly></td>
                                    <td><label for="email"></label><input name = "email" id="username" type="text" value="{{ $user->email }}" readonly></td>
                                    @if ($user->type == 1)
                                    <td><label for="type"></label><input name = "type" id="username" type="text" value="admin" readonly></td>
                                    @else
                                    <td><label for="type"></label><input name = "type" id="username" type="text" value="user" readonly></td>
                                    @endif
                                    <td><button class="btn btn-warning" onclick="edit()">Edit</button></td>
                                    <td><button class="btn btn-info" onclick="save()">Save</button></td>
                                    <td><a href="/admin/users/{{ $user->id }}"><button class="btn btn-dark" name="action"value="Delete">Delete</button></a></td>
                                    <td><a href="/admin/users/{{ $user->id }}"><button class="btn btn-success" name="action"value="Update">Update</button></a></td>
                                </form>
                                </tr>
                            <?php }
                            ?>
                            </tbody>
                        </table>
                    </div>
                    @livewireStyles
                    @livewire('add-user')
                    @livewireScripts

                </div>
            </div>
        </section>
    @endsection
    <script>
        // $(document).ready(function(){
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
