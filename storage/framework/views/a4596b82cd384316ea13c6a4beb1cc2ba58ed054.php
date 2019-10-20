 <!-- extend the master page  -->
<?php $__env->startSection('changed'); ?> <!-- open the changed section -->
            <div class="container">
                <div class="row">
                    <!-- start of swipper -->
                    <div class="col-md-4">
                        <swiper></swiper>
                    </div>
                    <!-- end of swipper -->

                    <!-- start of articles -->
                    <div class="col-md-8">
                        <articles></articles>
                    </div>
                    <!-- end of articles -->
                </div>
            </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\yahya\challeng\resources\views/welcome.blade.php ENDPATH**/ ?>