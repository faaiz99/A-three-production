<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services</title>
    <link rel="stylesheet" href="style.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;700;800&family=Open+Sans&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>

</head>

<body>
    <?php $__env->startSection('content'); ?>
        <section>
            <div class="container py-5">
                <div class="row mb-4">
                    <div class="col-lg-8 mx-auto text-center">
                        <?php if(Session::has('success')): ?>
                            <div class="alert alert-success"><?php echo e(Session::get('success')); ?>

                            </div>
                        <?php endif; ?>
                        <?php if(Session::has('fail')): ?>
                            <div class="alert alert-success"><?php echo e(Session::get('fail')); ?>

                            </div>
                        <?php endif; ?>
                            <h1 class="display-3">Payment Form</h1>
                    </div>
                </div> <!-- End -->
                <div class="row">
                    <div class="col-lg-6 mx-auto">
                        <div class="card " style="background-color: #f6e5e5;">
                            <div class="card-header">
                                <div class="bg-white shadow-sm pt-4 pl-2 pr-2 pb-2">
                                    <!-- Credit card form tabs -->
                                    <ul role="tablist" class="nav bg-light nav-pills rounded nav-fill mb-3">
                                        <li class="nav-item"> <a data-toggle="pill" href="#credit-card"
                                                class="nav-link active "> <i class="fas fa-credit-card mr-2"></i> Credit
                                                Card </a> </li>
                                        <li class="nav-item"> <a data-toggle="pill" href="#paypal"
                                                class="nav-link "> <i class="fab fa-paypal mr-2"></i> Paypal </a> </li>
                                        <li class="nav-item"> <a data-toggle="pill" href="#net-banking"
                                                class="nav-link "> <i class="fas fa-mobile-alt mr-2"></i> Net Banking
                                            </a> </li>
                                    </ul>
                                </div> <!-- End -->
                                <!-- Credit card form content -->
                                <div class="tab-content">
                                    <!-- credit card info-->
                                    <div id="credit-card" class="tab-pane fade show active pt-3">
                                        
                                        <form role="form" method="POST" action="/">
                                            <?php echo csrf_field(); ?>
                                            <h6>Service</h6><input type="text" value=<?php echo e($payment->title); ?> name="title" readonly style = "border:none">
                                            <h6>Total $:</h6><input type="text" value=<?php echo e($payment->price); ?> name="price" readonly  style = "border:none">

                                            
                                            <div class="form-group"> <label for="username">
                                                    <h6>Card Owner</h6>
                                                </label> <input type="text" name="username" placeholder="Card Owner Name"
                                                    required class="form-control " pattern="[a-zA-Z]([0-9a-zA-Z]){2,10}">
                                            </div>
                                            <div class="form-group"> <label for="cardNumber">
                                                    <h6>Card number</h6>
                                                </label>
                                                <div class="input-group"> <input type="text" name="cardNumber"
                                                        placeholder="Valid card number" class="form-control " required>
                                                    <div class="input-group-append"> <span
                                                            class="input-group-text text-muted"> <i
                                                                class="fab fa-cc-visa mx-1"></i> <i
                                                                class="fab fa-cc-mastercard mx-1"></i> <i
                                                                class="fab fa-cc-amex mx-1"></i> </span> </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-8">
                                                    <div class="form-group"> <label><span class="hidden-xs">
                                                                <h6>Expiration Date</h6>
                                                            </span></label>
                                                        <div class="input-group"> <input type="number" placeholder="MM"
                                                                name="" class="form-control" required> <input
                                                                type="number" placeholder="YY" name=""
                                                                class="form-control" required> </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group mb-4"> <label data-toggle="tooltip"
                                                            title="Three digit CV code on the back of your card">
                                                            <h6>CVV <i class="fa fa-question-circle d-inline"></i></h6>
                                                        </label> <input type="text" required class="form-control"
                                                            pattern='[0-9]{3}'> </div>
                                                </div>
                                            </div>
                                            <div class="card-footer"> <button type="submit"
                                                    class="subscribe btn btn-primary btn-block shadow-sm"> Confirm Payment
                                                </button>
                                        </form>
                                    </div>
                                </div> <!-- End -->
                                <!-- Paypal info -->
                                <div id="paypal" class="tab-pane fade pt-3">
                                    <h6 class="pb-2">Select your paypal account type</h6>
                                    <div class="form-group "> <label class="radio-inline"> <input type="radio"
                                                name="optradio" checked> Domestic </label> <label class="radio-inline">
                                            <input type="radio" name="optradio" class="ml-5">International
                                        </label></div>
                                    <p> <button type="button" class="btn btn-primary "><i class="fab fa-paypal mr-2"></i>
                                            Log into my Paypal</button> </p>
                                    <p class="text-muted"> Note: After clicking on the button, you will be directed to a
                                        secure gateway for payment. After completing the payment process, you will be
                                        redirected back to the website to view details of your order. </p>
                                </div> <!-- End -->
                                <!-- bank transfer info -->
                                <div id="net-banking" class="tab-pane fade pt-3">
                                    <div class="form-group "> <label for="Select Your Bank">
                                            <h6>Select your Bank</h6>
                                        </label> <select class="form-control" id="ccmonth">
                                            <option value="" selected disabled>--Please select your Bank--</option>
                                            <option>Bank 1</option>
                                            <option>Bank 2</option>
                                            <option>Bank 3</option>
                                            <option>Bank 4</option>
                                            <option>Bank 5</option>
                                            <option>Bank 6</option>
                                            <option>Bank 7</option>
                                            <option>Bank 8</option>
                                            <option>Bank 9</option>
                                            <option>Bank 10</option>
                                        </select> </div>
                                    <div class="form-group">
                                        <p> <button type="button" class="btn btn-primary "><i
                                                    class="fas fa-mobile-alt mr-2"></i> Proceed Payment</button> </p>
                                    </div>
                                    <p class="text-muted">Note: After clicking on the button, you will be directed to a
                                        secure gateway for payment. After completing the payment process, you will be
                                        redirected back to the website to view details of your order. </p>
                                </div> <!-- End -->
                                <!-- End -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <script>
            var textWrapper = document.querySelector('.ml6 .letters');
            textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

            anime.timeline({
                    loop: true
                })
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
    <?php $__env->stopSection(); ?>
</body>

</html>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\faaiz\athree\resources\views/quotation.blade.php ENDPATH**/ ?>