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

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://code.jquery.com/jquery-migrate-1.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/d7b7127037.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
</head>

<body>
    @section('content')
        <section>

            <div class="row">
                <div class="col-lg-3 col-md-2 col-sm-6">
                    @include('admin.sidebar');
                </div>

                <div class="col-lg-8 col-md-8 mt-5">
                    <h3>Queries</h3>
                    @if (Session::has('updated'))
                        <div class="alert alert-success">{{ Session::get('updated') }}
                        </div>
                    @endif
                    @if (Session::has('success'))
                        <div class="alert alert-success">{{ Session::get('success') }}
                        </div>
                    @endif
                    @if (Session::has('fail'))
                        <div class="alert alert-success">{{ Session::get('fuccess') }}
                        </div>
                    @endif
                    <div class="container">
                        <table class="table table-striped table-hover table-responsive-sm" style="border: none;"
                            id="tableUser">
                            <th>Name</th>
                            <th>Email</th>
                            <th>Subject</th>
                            <th>Message</th>

                        </table>
                    </div>

                </div>
            </div>
        </section>
    @endsection
    <script>
        $(document).ready(function() {
            getMessages();
            $(document).on('click', '.delete', function(e) {
                e.preventDefault();
                $.ajaxSetup({
                    beforeSend: function(xhr, type) {
                        if (!type.crossDomain) {
                            xhr.setRequestHeader('X-CSRF-Token', $('meta[name="csrf-token"]')
                                .attr('content'));
                        }
                    },
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')
                    }
                });
                var mssgID = $(this).val();
                $.ajax({
                    type: "POST",
                    url: "delete-message/" + mssgID,
                    success: function(response) {
                        getMessages();
                    }
                });

            });

            function getMessages() {

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')
                    }
                });

                $.ajax({
                    type: "GET",
                    url: "/fetch-messages",
                    dataType: 'json',
                    success: function(response) {
                        // console.log(response.mssg)
                        $.each(response.mssg, function(key, mssg) {
                            $('tbody').append('<tr>\
                                                <td><p><strong>' + mssg.first_name + '</strong></p></td>\
                                                <td><p><strong>' + mssg.email + '</strong></p></td>\
                                                <td><p><strong>' + mssg.subject + '</strong></p></td>\
                                                <td><p>' + mssg.message + '</p></td>\
                                                </tr>');
                        });
                    },
                    error: function(error) {
                        // <td><button class="delete btn btn-success" name="action" value="'+mssg.id+'" id="delete">Delete</button></td>\
                    }
                });
            }
        });

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
