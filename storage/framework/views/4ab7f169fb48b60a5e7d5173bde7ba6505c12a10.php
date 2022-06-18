<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo e(asset('style.css')); ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;500;600;700;800&display=swap"
        rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/d7b7127037.js" crossorigin="anonymous"></script>
    <title>Services</title>
  </head>
<body>
<?php $__env->startSection('content'); ?>
<section style="background-color: #eee;">
  <div class="container py-5">
    <div class="row justify-content-center">
      <div class="col-md-4">
        <div class="card text-black">
          <img src="images/weddingcard.jpg"
            class="card-img-top" alt="Apple Computer" />
          <div class="card-body">
            <div class="text-center">
                <h5 class="card-title "><?php echo e($services[0]->title); ?></h5>
              <p class="text-muted mb-4"><?php echo e($services[0]->description); ?></p>
            </div>
            <div>
              <div class="d-flex justify-content-between">
                <span>Photography</span><span>$3,999</span>
              </div>
              <div class="d-flex justify-content-between">
                <span>Drone Shots</span><span>$999</span>
              </div>
              <div class="d-flex justify-content-between">
                <span>Videography</span><span>$599</span>
              </div>
              <div class="d-flex justify-content-between">
                <span>Album</span><span>$399</span>
              </div>
            </div>
            <div class="d-flex justify-content-between total font-weight-bold mt-4">
              <span>Total:</span><span>$5999</span>
            </div>
            <br>
            <a href="/quotation/<?php echo e($services[0]->id); ?>" class="btn btn-primary">Get a Quotation <?php echo e($services[0]->id); ?></a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card text-black">
          <img src="images/productcard.jpg"
            class="card-img-top" alt="Apple Computer" />
          <div class="card-body">
            <div class="text-center">
                <h5 class="card-title "><?php echo e($services[1]->title); ?></h5>
              <p class="text-muted mb-4"><?php echo e($services[1]->description); ?></p>
            </div>
            <div>
              <div class="d-flex justify-content-between">
                <span>Photography</span><span>$2999</span>
              </div>
              <div class="d-flex justify-content-between">
                <span>Drone Shots</span><span>$999</span>
              </div>
              <div class="d-flex justify-content-between">
                <span>Videography</span><span>$599</span>
              </div>
              <div class="d-flex justify-content-between">
                <span>Album</span><span>$399</span>
              </div>
            </div>
            <div class="d-flex justify-content-between total font-weight-bold mt-4">
              <span>Total:</span><span>$4999</span>
            </div>
            <br>
            <a href="/quotation/<?php echo e($services[1]->id); ?>" class="btn btn-primary">Get a Quotation <?php echo e($services[1]->id); ?></a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card text-black">
          <img src="images/naturecard.jpg"
            class="card-img-top" alt="Apple Computer" />
          <div class="card-body">
            <div class="text-center">
              <h5 class="card-title"><?php echo e($services[2]->title); ?></h5>
              <p class="text-muted mb-4"><?php echo e($services[2]->description); ?></p>
            </div>
            <div>
              <div class="d-flex justify-content-between">
                <span>Photography</span><span>$5,999</span>
              </div>
              <div class="d-flex justify-content-between">
                <span>Drone Shots</span><span>$1999</span>
              </div>
              <div class="d-flex justify-content-between">
                <span>Videography</span><span>$999</span>
              </div>
              <div class="d-flex justify-content-between">
                <span>Album</span><span>$999</span>
              </div>
            </div>
            <div class="d-flex justify-content-between total font-weight-bold mt-4">
              <span>Total:</span><span>$9999</span>
            </div>
            <br>
            <a href="/quotation/<?php echo e($services[2]->id); ?>" class="btn btn-primary">Get a Quotation <?php echo e($services[2]->id); ?></a>
          </div>
        </div>
      </div>
    </div>

    <br>
    <div class="row justify-content-center">
      <div class="col-md-4">
        <div class="card text-black">
          <img src="images/dinner.jpg"
            class="card-img-top" alt="Apple Computer" />
          <div class="card-body">
            <div class="text-center">
              <h5 class="card-title"><?php echo e($services[3]->title); ?></h5>
              <p class="text-muted mb-4"><?php echo e($services[3]->description); ?></p>
            </div>
            <div>
              <div class="d-flex justify-content-between">
                <span>Photography</span><span>$999</span>
              </div>
              <div class="d-flex justify-content-between">
                <span>Drone Shots</span><span>$499</span>
              </div>
              <div class="d-flex justify-content-between">
                <span>Videography</span><span>$399</span>
              </div>
              <div class="d-flex justify-content-between">
                <span>Album</span><span>$99</span>
              </div>
            </div>
            <div class="d-flex justify-content-between total font-weight-bold mt-4">
              <span>Total:</span><span>$1999</span>
            </div>
            <br>
            <a href="/quotation/<?php echo e($services[3]->id); ?>" class="btn btn-primary">Get a Quotation <?php echo e($services[3]->id); ?></a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card text-black">
          <img src="images/videocard.jpg"
            class="card-img-top" alt="Apple Computer" />
          <div class="card-body">
            <div class="text-center">
              <h5 class="card-title"><?php echo e($services[4]->title); ?></h5>
              <p class="text-muted mb-4"><?php echo e($services[4]->description); ?></p>
            </div>
            <div>
              <div class="d-flex justify-content-between">
                <span>Produtction</span><span>$5,999</span>
              </div>
              <div class="d-flex justify-content-between">
                <span>Drone Shots</span><span>$1499</span>
              </div>
              <div class="d-flex justify-content-between">
                <span>Videography</span><span>$4999</span>
              </div>
              <div class="d-flex justify-content-between">
                <span>Album</span><span>$499</span>
              </div>
            </div>
            <div class="d-flex justify-content-between total font-weight-bold mt-4">
              <span>Total:</span><span>$11,999</span>
            </div>
            <br>
            <a href="/quotation/<?php echo e($services[4]->id); ?>" class="btn btn-primary">Get a Quotation <?php echo e($services[4]->id); ?></a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card text-black">
          <img src="images/birthdaycard.jpg"
            class="card-img-top" alt="Apple Computer" />
          <div class="card-body">
            <div class="text-center">
              <h5 class="card-title"><?php echo e($services[5]->title); ?></h5>
              <p class="text-muted mb-4"><?php echo e($services[5]->description); ?></p>
            </div>
            <div>
              <div class="d-flex justify-content-between">
                <span>Photography</span><span>$999</span>
              </div>
              <div class="d-flex justify-content-between">
                <span>Drone Shots</span><span>$399</span>
              </div>
              <div class="d-flex justify-content-between">
                <span>Videography</span><span>$499</span>
              </div>
              <div class="d-flex justify-content-between">
                <span>Album</span><span>$99</span>
              </div>
            </div>
            <div class="d-flex justify-content-between total font-weight-bold mt-4">
              <span>Total:</span><span>$1999</span>
            </div>
            <br>
            <a href="/quotation/<?php echo e($services[5]->id); ?>" class="btn btn-primary">Get a Quotation <?php echo e($services[5]->id); ?></a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card text-black">
          <img src="images/dronecard.jpg"
            class="card-img-top" alt="Apple Computer" />
          <div class="card-body">
            <div class="text-center">
              <h5 class="card-title"><?php echo e($services[6]->title); ?></h5>
              <p class="text-muted mb-4"><?php echo e($services[6]->description); ?></p>
            </div>
            <div>
              <div class="d-flex justify-content-between">
                <span>Photography</span><span>$199</span>
              </div>
              <div class="d-flex justify-content-between">
                <span>Drone Shots</span><span>$399</span>
              </div>
              <div class="d-flex justify-content-between">
                <span>Videography</span><span>$199</span>
              </div>
              <div class="d-flex justify-content-between">
                <span>Album</span><span>$199</span>
              </div>
            </div>
            <div class="d-flex justify-content-between total font-weight-bold mt-4">
              <span>Total</span><span>$999</span>
            </div>
            <br>
            <a href="/quotation/<?php echo e($services[6]->id); ?>" class="btn btn-primary">Get a Quotation <?php echo e($services[6]->id); ?></a>
          </div>
        </div>
      </div>
    </div>
    <br><hr>
    <div class="row justify-content-center">
      <div class="col-12"> <p>Not sure about what you're looking for? Email us @ <a href="#">contact@athreeproductions.com</a></p></div>
    </div>
    <hr>
  </div>
</section>
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
<?php $__env->stopSection(); ?>

</body>
</html>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\faaiz\athree\resources\views/services.blade.php ENDPATH**/ ?>