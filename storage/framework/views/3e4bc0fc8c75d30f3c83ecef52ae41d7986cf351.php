 <!-- extend the master page  -->
<?php $__env->startSection('changed'); ?> <!-- open the changed section -->

    <!-- call the single component with props id returned from the route function  -->
    <!-- Go to route>web and you will find the route -->
    <single :id=<?php echo e($id); ?>></single>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('master.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\yahya\challeng\resources\views/single.blade.php ENDPATH**/ ?>