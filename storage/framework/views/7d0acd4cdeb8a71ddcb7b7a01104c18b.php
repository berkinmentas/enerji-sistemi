<?php $__env->startSection('pages'); ?>
    <section class="pages mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 -col-sm-12 col-lg-12 text-center mb-5">
                   <h1><?php echo e($page->name); ?></h1>
                </div>
                <div class="col-md-12 -col-sm-12 col-lg-12">
             <?php echo $page->description; ?>

                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/ozay-enerji-sistemleri/resources/views/pages.blade.php ENDPATH**/ ?>