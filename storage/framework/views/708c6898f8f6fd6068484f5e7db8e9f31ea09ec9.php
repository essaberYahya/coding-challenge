<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
        <title>Laravel</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('app/css/fonts.css')); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('app/css/crumina-fonts.css')); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('app/css/normalize.css')); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('app/css/grid.css')); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('app/css/styles.css')); ?>">
        <link rel="stylesheet" href="https://unpkg.com/swiper/css/swiper.css">
        <link rel="stylesheet" href="https://unpkg.com/swiper/css/swiper.min.css">

        <!--Plugins styles-->

        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('app/css/jquery.mCustomScrollbar.min.css')); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('app/css/swiper.min.css')); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('app/css/primary-menu.css')); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('app/css/magnific-popup.css')); ?>">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <style>
            .swiper-container {

            }

              .swiper-slide {
                text-align: center;
                font-size: 18px;
                background: #fff;
                /* Center slide text vertically */
                display: -webkit-box;
                display: -ms-flexbox;
                display: -webkit-flex;
                display: flex;
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                -webkit-justify-content: center;
                justify-content: center;
                -webkit-box-align: center;
                -ms-flex-align: center;
                -webkit-align-items: center;
                align-items: center;
              }
        </style>

    </head>
    <body>
        <div id="app">
            <!-- start the navbar component -->
            <navbar></navbar>
            <!-- end the navbar component -->

            <!-- start the changed section -->
            <?php echo $__env->yieldContent('changed'); ?>
            <!-- end the changed section -->
        </div>
        <br><br><br>
        <!-- start the footer -->
        <footer class="footer" id="site-footer">
                <div class="container">
                    <div class="row">
                        <div class="info">
                            <div class="col-lg-6 col-lg-offset-3">
                                <div class="heading text-center">
                                    <h3 class="heading-title" >Essaber yahya chalenge for laravel vuejs !</h3>
                                    <div class="heading-line">
                                        <span class="short-line"></span>
                                        <span class="long-line"></span>
                                    </div>
                                    <p class="heading-text">Qolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibham
                                        liber tempor cum soluta nobis eleifend option congue nihil uarta decima et quinta.
                                        Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl
                                        ut aliquip ex ea commodo consequat eleifend option nihil. Investigationes demonstraverunt
                                        lectores legere me lius quod ii legunt saepius parum claram.
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
        </footer>
        <!-- end the footer -->
        </body>

        <!-- JS Script -->
        <script src="<?php echo e(asset('js/app.js')); ?>"></script>
        <script src="https://unpkg.com/swiper/js/swiper.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="<?php echo e(asset('js/home.js')); ?>"></script>
</html>
<?php /**PATH C:\Users\yahya\challeng\resources\views/master/master.blade.php ENDPATH**/ ?>