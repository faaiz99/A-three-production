<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="<?php echo e(asset('style.css')); ?>">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;700;800&family=Open+Sans&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
    <?php echo \Livewire\Livewire::styles(); ?>

</head>

<body>
    <?php $__env->startSection('content'); ?>
        <section class="data-table">
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('datechecker')->html();
} elseif ($_instance->childHasBeenRendered('2B2lM6H')) {
    $componentId = $_instance->getRenderedChildComponentId('2B2lM6H');
    $componentTag = $_instance->getRenderedChildComponentTagName('2B2lM6H');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('2B2lM6H');
} else {
    $response = \Livewire\Livewire::mount('datechecker');
    $html = $response->html();
    $_instance->logRenderedChild('2B2lM6H', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
            <?php echo \Livewire\Livewire::scripts(); ?>

        </section>
        <section>
            <div class="container py-5">
                <?php if(Session::has('success')): ?>
                    <div class="alert alert-success"><?php echo e(Session::get('success')); ?>

                    </div>
                <?php endif; ?>
                <?php if(Session::has('fail')): ?>
                    <div class="alert alert-success"><?php echo e(Session::get('fail')); ?>

                    </div>
                <?php endif; ?>
                <div class="row mb-4">

                    <div class="col-lg-8 mx-auto text-center">

                        <h3 class="display-6">Payment Form</h3>
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
                                    </ul>
                                </div> <!-- End -->
                                <!-- Credit card form content -->
                                <div class="tab-content">
                                    <!-- credit card info-->
                                    <div id="credit-card" class="tab-pane fade show active pt-3">
                                        
                                        <form role="form" method="POST" action="/quotation/payment/{id}">
                                            <?php echo csrf_field(); ?>
                                            <h6>Service</h6><input type="text" value=<?php echo e($payment->title); ?>

                                                name="title" readonly style="border:none">
                                            <h6>Total $:</h6><input type="text" value=<?php echo e($payment->price); ?>

                                                name="price" readonly style="border:none">
                                            <div class="form-group"> <label for="username">
                                                    <h6>Card Owner</h6>
                                                </label>
                                                <?php if(Auth::check()): ?>
                                                    <input id="name" type="text" name="username" class="form-control" placeholder="Card Owner Name" minlength="3" maxlength="30"
                                                        required class="form-control " value=<?php echo e(Auth::user()->name); ?>>
                                                        <div id="namevalid" class="form-text text-muted invalid-feedback">
                                                            Name should be 3-30 characters long and shouldn't contain a number
                                                        </div>
                                                <?php else: ?>
                                                    <input id="name" type="text" name="username" class="form-control" placeholder="Card Owner Name" minlength="3" maxlength="30"
                                                        required class="form-control ">
                                                        <div id="namevalid" class="form-text text-muted invalid-feedback">
                                                            Name should be 3-30 characters long and shouldn't contain a number
                                                        </div>
                                                <?php endif; ?>

                                            </div>
                                            <div class="form-group"> <label for="cardNumber">
                                                    <h6>Card number</h6>
                                                </label>
                                                <div class="input-group">
                                                <input id="card-num" type="text" name="cardNumber" minlength="8" maxlength="19"
                                                            placeholder="Valid card number" class="form-control " required>
                                                    <div id="namevalid" class="form-text text-muted invalid-feedback">
                                                        Card number should be 8-19 digits long and shouldn't contain an alphabet
                                                    </div>
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
                                                        <div class="input-group">
                                                                <input type="date" required name="expirationDate">

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group mb-4"> <label data-toggle="tooltip"
                                                            title="Three digit CV code on the back of your card">
                                                            <h6>CVV <i class="fa fa-question-circle d-inline"></i></h6>
                                                        </label> <input id="cvv" type="text" required class="form-control" minlength="3" maxlength="3"
                                                            pattern='[0-9]{3}'>
                                                            <div id="namevalid" class="form-text text-muted invalid-feedback">
                                                                CVV should be 3 digits long and shouldn't contain an alphabet
                                                            </div>
                                                        </div>
                                                </div>
                                            </div>
                                            <?php if(Auth::check()): ?>
                                                <input type="hidden" readonly id="finalSelectedDate"
                                                    name="finalSelectedDate" value=<?php echo e(session()->pull('finalDate')); ?>

                                                    required title="Please Select Date First">
                                            <?php else: ?>
                                                <input type="hidden" id="finalSelectedDate" name="finalSelectedDate">
                                            <?php endif; ?>
                                            <?php if(Auth::check()): ?>
                                                <label for="userId"></label><input type="hidden" name="userId"
                                                value=<?php echo e(Auth::user()->id); ?>>
                                            <?php else: ?>
                                                <label for="userId"></label><input type="hidden" name="userId">

                                            <?php endif; ?>
                                            <div class="card-footer"> <button type="submit"
                                                    class="subscribe btn btn-primary btn-block shadow-sm"> Confirm Payment
                                                </button>
                                        </form>
<script>
    const name= document.getElementById('name');
    const card_num= document.getElementById('card-num');
    const cvv= document.getElementById('cvv');

// console.log("hello");

    name.addEventListener('blur', ()=>{
    console.log("name is blurred");
    // Name Validation
    let regex = /^[a-zA-Z]+(([',. -][a-zA-Z ])?[a-zA-Z]*)*$/;
    let str = name.value;
    console.log(regex, str);

    if(regex.test(str)){
        console.log('Name is valid');
        name.classList.remove('is-invalid')
    }
    else{
        console.log('Name is not valid');
        name.classList.add('is-invalid')
    }
})

    card_num.addEventListener('blur', ()=>{
    console.log("card dumber is blurred");
    // Name Validation
    let regex = /^[0-9]{8,19}$/;
    let str = card_num.value;
    console.log(regex, str);

    if(regex.test(str)){
        console.log('Number is valid');
        card_num.classList.remove('is-invalid')
    }
    else{
        console.log('Number is not valid');
        card_num.classList.add('is-invalid')
    }
})

cvv.addEventListener('blur', ()=>{
    console.log("cvv is blurred");
    // Name Validation
    let regex = /^[0-9]{3}$/;
    let str = cvv.value;
    console.log(regex, str);

    if(regex.test(str)){
        console.log('cvv is valid');
        cvv.classList.remove('is-invalid')
    }
    else{
        console.log('cvv is not valid');
        cvv.classList.add('is-invalid')
    }
})
                                        </script>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php $__env->stopSection(); ?>
</body>
</html>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\faaiz\athree\resources\views/quotation.blade.php ENDPATH**/ ?>