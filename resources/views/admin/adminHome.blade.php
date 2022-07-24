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
                    <h3>Services</h3>
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
                            <th>Service</th>
                            <th>Price</th>
                            <th>Description</th>

                            <th></th>
                            <th>Action</th>

                            <th></th>
                            <th></th>
                            <th></th>
                            </th>
                            <tbody id ="tableUser">
                               @foreach ($services as $service)
                                    <tr><form action="/admin/services/{{ $service->id }}" method="POST">
                                        @csrf
                                        <td><label for="service"></label><input readOnly name = "service" id="service" type="text" value="{{ $service->title }}" readonly></td>
                                        <td><label for="price"></label><input   readOnly name="price" id="price" type="number" value="{{ $service->price }}" readonly></td>
                                        <td><label for="description"></label><input  readOnly type="text"  name="description" id="" value="{{ $service->description }}"></td>
                                        <td><button class="btn btn-warning" onclick="edit()">Edit</button></td>
                                        <td><button class="btn btn-info" onclick="save()">Save</button></td>
                                        <td><a href="/admin/services/{{ $service->id }}"><button class="btn btn-success" name="action"value="Update">Update</button></a></td>
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
        // $(document).ready(function() {
        //     getServices();

        //     function getServices() {

        //         $.ajaxSetup({
        //             headers: {
        //                 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        //             }
        //         });

        //         $.ajax({
        //             type: "GET",
        //             url: "/fetch-services",
        //             dataType: 'json',
        //             success: function(response) {
        //                 // console.log(response.service)
        //                 $.each(response.service, function(key, service) {
        //                     $('tbody').append('<tr>\
        //                             <form action="services/' + service.id +
        //                         '" method="POST">\
        //                                     @csrf\
        //                                     <td><label for="service"></label><input readOnly name = "service"  type="text" value="' +
        //                         service.title +
        //                         '" readonly></td>\
        //                                     <td><label for="price"></label><input   readOnly name="price"   type="number" value="' +
        //                         service.price +
        //                         '" readonly></td>\
        //                                     <td><label for="description"></label><input  readOnly type="text"  name="description" id="" value="' +
        //                         service.description + '"></td>\
        //                                     <td><button class="btn btn-warning" onclick="edit()">Edit</button></td>\
        //                                     <td><button class="btn btn-info" onclick="save()">Save</button></td>\
        //                                     <td><a href="services/' + service.id + '"><button class="btn btn-success" name="action"value="Update">Update</button></a></td>\
        //                                 </form>\
        //                                 </tr>'
        //                     );
        //                 });
        //             },
        //             error: function(error) {
        //                 alert('No Bookings Found')
        //             }
        //         });
        //     }
        // });



        // $(document).ready(function(){
        //     event.preventDefault();
        //     $(".nav-item").onclick("click", function(event){
        //         var route = $(this).attr('href');
        //         $.ajax({
        //             type:"GET",
        //             url: "/admin/users",
        //         });
        //     });
        // });

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
