<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
    <div style="padding: 0%;" class="container-fluid banner">
        <div class="row">
            <nav class="navbar navbar-expand-xl navbar-dark ">
                <a class="navbar-brand" style="color:white;" href="/">Athree Production</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="navbar-nav ml-5">
                        <li class="nav-item">
                            <a class="nav-link" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/gallery">Gallery</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/services">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/contact">Contact</a>
                        </li>
                        <li class="nav-item">


                                <a class="nav-link" href="/login">Login</a>

                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <?php echo $__env->yieldContent('content'); ?>
    <section class=" footer position-relative ">
        <div class="">
            <footer class="text-white text-center text-lg-start" style="background-color: #352961">
                <div class="container p-2">
                    <div class="row mt-1">
                        <div class="col-lg-4 col-md-12 mb-4 mb-md-0 text-center">
                            <h6 class="text-uppercase mb-4">About company</h6>

                            <p style="font-size: 10px;">
                                At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
                                voluptatum deleniti atque corrupti.
                            </p >

                            <p style="font-size: 10px;">
                                Blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas
                                molestias.
                            </p>

                            <div class="mt-2" style="font-size: 10px;">
                                <a type="button" class="btn btn-floating btn-light btn-lg"><i
                                        class="fa fa-facebook-f"></i></a>
                                <a type="button" class="btn btn-floating btn-light btn-lg"><i
                                        class="fa-brands fa-instagram"></i></a>
                                <a type="button" class="btn btn-floating btn-light btn-lg"><i
                                        class="fa fa-twitter"></i></a>
                                <a type="button" class="btn btn-floating btn-light btn-lg"><i
                                        class="fa-brands fa-google-plus-g"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-4 mb-md-0 text-center">
                            <h6 class="text-uppercase mb-4 pb-1 text-center">Our Address</h6>

                            

                            <ul class="fa-ul" style="margin-left: 1.65em; font-size: 10px;">
                                <li class="mb-1">
                                    <span class="fa-li"><i class="fas fa-home"></i></span><span class="ms-2">Islamabad,
                                        Pakistan</span>
                                </li>
                                <li class="mb-1">
                                    <span class="fa-li"><i class="fas fa-envelope"></i></span><span
                                        class="ms-2">contact@athreeproductions.com</span>
                                </li>
                                <li class="mb-1">
                                    <span class="fa-li"><i class="fas fa-phone"></i></span><span class="ms-2">+
                                        090078601</span>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-4 mb-md-0 text-center">
                            <h6 class="text-uppercase mb-4">Opening hours</h6>

                            <table class="table text-center text-white" style="font-size: 10px;">
                                <tbody class="fw-normal">
                                    <tr>
                                        <td>Mon - Thu:</td>
                                        <td>8am - 9pm</td>
                                    </tr>
                                    <tr>
                                        <td>Fri - Sat:</td>
                                        <td>8am - 1am</td>
                                    </tr>
                                    <tr>
                                        <td>Sunday:</td>
                                        <td>9am - 10pm</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="text-center" style="background-color: #352961; font-size: 10px;">
                    © 2022 Copyright:
                    <a class="text-white" href="#" style="font-size: 10px;">Mifra & Faaiz</a>
                </div>
            </footer>
        </div>
    </section>


</body>
</html>

<?php /**PATH C:\Users\faaiz\athree\resources\views/layout.blade.php ENDPATH**/ ?>