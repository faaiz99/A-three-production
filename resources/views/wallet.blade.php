@extends('layouts.app')

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Home</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <script src="https://code.jquery.com/jquery-3.6.0.js" ntegrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="crossorigin="anonymous"></script>
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
                                <li> <a href="/booking/ {{ Auth::user()->id }}" style="text-decoration:none;">My bookings</a> </li>
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

                    <br>
                </div>
            </div>




        </section>
    @endsection
    <script>
        // $(document).ready(function() {
        //     fetchtask();
        //     $('#addTask').on('submit', function(e) {
        //         e.preventDefault();
        //         $.ajax({
        //             type: "POST",
        //             url: "/addtask/{id}",
        //             data: $('#addTask').serialize(),
        //             success: function(response) {
        //                 alert('Task Added!');
        //                 fetchtask();
        //             },
        //             error: function(error) {
        //                 alert('Task not added!')
        //             }
        //         });
        //     });

        //     function fetchtask() {
        //         $.ajax({
        //             type: "GET",
        //             url: "/gettask/{id}",
        //             dataType: 'json',
        //             success: function(response) {
        //                 $.each(response.task, function(key, item) {
        //                     var text;
        //                     var icon = "badge";
        //                     var icon2;

        //                     switch (item.priority) {
        //                         case 'high':
        //                             text = "High";
        //                             icon2 = "-danger"
        //                             break;
        //                         case 'middle':
        //                             text = "Middle";
        //                             icon2 = "-warning"
        //                             break;
        //                         case 'low':
        //                             icon2 = "-success"
        //                             text = "Low";
        //                             break;
        //                         default:
        //                             break;
        //                     }
        //                     $('tbody').append('<tr>\
        //                             <td><strong>' + item.taskType + '</td>\
        //                             <td><strong>' + item.taskDescription + '</td>\
        //                             <td><strong><h6 class = "badge bg'+icon2+'">' + text + '</h6></td>\
        //                             <td><input id="completion" type="date" value=' + item.date + '></td>\
        //                             <td><button type="button" class="btn btn-warning">Edit</button></td>\
        //                             <td><button type="button" class="btn btn-danger">Delete</button></td>\
        //                             </tr>');
        //                 });
        //             },
        //             error: function(error) {
        //                 alert('No Tasks Found')
        //             }
        //         });
        //     }


        // });

        // function addItem() {
        //     var formData = document.getElementById('addTask')

        //     var todoData = document.getElementById('todoTable');
        //     // insert a row at the start of todolist
        //     let newRow = todoData.insertRow(1);
        //     var els = document.getElementsByTagName('tr');
        //     for (var i = 0; i < els.length; i++) {
        //         els[i].style.borderBottom = "1px solid rgb(214, 206, 206)";
        //     }

        //     // Insert a cell in the row at index 0
        //     let newCell1 = newRow.insertCell(0);
        //     let newCell2 = newRow.insertCell(1);
        //     let newCell3 = newRow.insertCell(2);
        //     let newCell4 = newRow.insertCell(3);
        //     let newCell5 = newRow.insertCell(4);

        //     // Append a text node to the cell
        //     let memeberName = document.createTextNode(formData.taskType.value);
        //     let taskD = document.createTextNode(formData.taskDescription.value);
        //     taskD.id = "NotComplete";

        //     let priorityLevel = document.createElement('h6');
        //     var priorityIcon = document.createElement('span');

        //     switch (formData.priority.value) {
        //         case 'high':
        //             priorityIcon.className = "badge bg-danger";
        //             priorityIcon.textContent = "High";
        //             break;
        //         case 'middle':
        //             priorityIcon.className = "badge bg-warning";
        //             priorityIcon.textContent = "Middle";
        //             break;
        //         case 'low':
        //             priorityIcon.className = "badge bg-success";
        //             priorityIcon.textContent = "Low";
        //             break;
        //         default:
        //             break;
        //     }
        //     priorityLevel.appendChild(priorityIcon);

        //     let action = document.createElement('a');
        //     action.setAttribute('href', "#");
        //     var tick = document.createElement('i');
        //     tick.className = "fas fa-check text-success me-3"; // tick
        //     tick.setAttribute("onclick", "completeTask(this)");
        //     action.appendChild(tick);
        //     var trash = document.createElement('i');
        //     trash.className = "fas fa-trash-alt text-danger";
        //     trash.setAttribute("onclick", "removeItem(this)");
        //     action.appendChild(trash);

        //     let dateCompletion = document.createElement('input')
        //     dateCompletion.id = "completion";
        //     dateCompletion.setAttribute("type", "date");
        //     dateCompletion.setAttribute("value", formData.completionDate.value);

        //     newCell1.appendChild(memeberName);
        //     newCell2.appendChild(taskD);
        //     newCell3.appendChild(priorityLevel);
        //     newCell4.appendChild(action);
        //     newCell5.appendChild(dateCompletion);
        //     document.getElementById('addTask').reset();

        // }

        // function resetList() {
        //     document.getElementById('addTask').reset();
        // }

        // function print() {
        //     console.log("hello");
        // }

        // function removeItem(el) {
        //     // while there are parents, keep going until reach TR
        //     while (el.parentNode && el.tagName.toLowerCase() != 'tr') {
        //         el = el.parentNode;
        //     }
        //     // If el has a parentNode it must be a TR, so delete it
        //     el.parentNode.removeChild(el);
        // }

        // function completeTask(el) {
        //     console.log("complete task");
        //     while (el.parentNode && el.tagName.toLowerCase() != 'tr') {
        //         el = el.parentNode

        //     }
        //     el.style.textDecoration = "line-through";
        // }

        // var textWrapper = document.querySelector('.ml6 .letters');
        // textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

        // anime.timeline({
        //         loop: true
        //     })
        //     .add({
        //         targets: '.ml6 .letter',
        //         translateY: ["1.1em", 0],
        //         translateZ: 0,
        //         duration: 750,
        //         delay: (el, i) => 50 * i
        //     }).add({
        //         targets: '.ml6',
        //         opacity: 0,
        //         duration: 1000,
        //         easing: "easeOutExpo",
        //         delay: 1000
        //     });
    </script>
</body>

</html>
