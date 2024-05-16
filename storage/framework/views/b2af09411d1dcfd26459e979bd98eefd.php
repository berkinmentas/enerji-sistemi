<?php $__env->startSection('body'); ?>
    <?php echo $__env->yieldContent('content'); ?>
    <?php echo $__env->yieldContent('about'); ?>
    <?php echo $__env->yieldContent('contacts'); ?>
    <?php echo $__env->yieldContent('missions'); ?>
    <?php echo $__env->yieldContent('solarHeatings'); ?>
    <?php echo $__env->yieldContent('productDetail'); ?>
    <?php echo $__env->yieldContent('pvPackages'); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/ozay-enerji-sistemleri/resources/views/layouts/layout.blade.php ENDPATH**/ ?>