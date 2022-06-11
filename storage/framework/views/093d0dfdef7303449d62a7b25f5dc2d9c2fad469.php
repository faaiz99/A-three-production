<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
        <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;700;800&family=Open+Sans&display=swap"
        rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/1b1d865aa5.js" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
        <title>Contact</title>
    </head>
<body>
    <?php $__env->startSection('content'); ?>
    <section class="head pb-5">
        <div class="container py-5" >
            <div class="card">
                <div class="card-body" style="background: #f6e5e5;">
                    <div class="card-body" style="background: #f6e5e5;" >
                    <h1 class="font-weight-light text-center py-3">Contact Us</h1>
                    <div class="row pt-3">
                        <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="row">
                                <div class="col-lg-1 offset-1 col-md-2 col-sm-2 col-2">
                                    <span style="font-size:30px;"><i class="fa-solid fa-location-dot"></i></span>
                                </div>
                                <div class="col-lg-10 col-md-9 col-sm-9 col-9">
                                    <h3 class="font-weight-light">Find us at</h3>
                                    <p>Islamabad, Sector F, Phase 8 <br>
                                    Pakistan.</p>


                                </div>
                            </div>

                            <div class="row pt-3">
                                <div class="col-lg-1 offset-1 col-md-2 col-sm-2 col-2">
                                    <span style="font-size:30px;"><i class="fa-solid fa-phone"></i></span>
                                </div>
                                <div class="col-lg-10 col-md-9 col-sm-9 col-9" >
                                    <h3 class="font-weight-light">Call us at</h3>
                                    <p>Mifra Waseem <br>
                                       090078601<br>
                                    Mon-Fri, 8:00am - 9pm.</p>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                            <form action="#" method = "POST">
                                <?php echo csrf_field(); ?>
                                <div class="form-row">
                                    <div class="form-group col-lg-6 col-md-12 col-sm-12 col-12">
                                        <label for="first_name">First Name</label>
                                        <input type="text" name = "first_name" class="form-control" placeholder="First Name" required  pattern="[a-zA-Z]([0-9a-zA-Z]){2,10}">
                                    </div>
                                    <div class="form-group col-lg-6 col-md-12 col-sm-12 col-12">
                                        <label for="last_name">Last Name</label>
                                        <input type="text" name = "last_name" class="form-control" placeholder="Last Name" required pattern="[a-zA-Z]([0-9a-zA-Z]){2,10}">
                                    </div>
                                    <div class="form-group col-lg-6 col-md-12 col-sm-12 col-12">
                                        <label for="subject">Subject</label>
                                        <input type="text" name = "subject" class="form-control" placeholder="Subject" required pattern="[a-zA-Z]{2,40}">
                                    </div>
                                </div>
                                <label for="email">Email</label>
                                        <input type="text" name ="email" class="form-control" placeholder="Email" required pattern="([a-zA-Z0-9_\-.]+)@([a-zA-Z0-9_\-.]+)\.([a-zA-Z]){2,7}">
                                <label for="message">Your Mesaage</label>
                                <textarea name ="message" class="form-control mb-3" placeholder="Type Here" id="" cols="10" rows="5" required></textarea>
                                
                                <button type = "submit"class="btn btn-success float-right">Send Message</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <?php $__env->stopSection(); ?>
    <script>
        var textWrapper = document.querySelector('.ml6 .letters');
        textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

        anime.timeline({loop: true})
        .add({
        targets: '.ml6 .letter',
        translateY: ["1.1em", 0],
        translateZ: 0,
        duration: 750,
        delay: (el, i) => 50 * i
        }).add({
        targets: '.ml6',
        opacity: 0,
        duration: 1000,
        easing: "easeOutExpo",
        delay: 1000
        });
    </script>
</body>
</html>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\faaiz\athree\resources\views/contact.blade.php ENDPATH**/ ?>