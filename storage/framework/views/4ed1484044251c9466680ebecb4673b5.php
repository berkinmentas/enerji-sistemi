<?php $__env->startSection('solarHeatings'); ?>
    <section class="top-banner">
        <div class="text-center">
            <span><a href="/" class="home-link">Ana Sayfa</a></span>
            <span class="mx-1">/</span>
            <span class="home-active-page"><?php echo e($productCategoryName); ?></span>
        </div>
    </section>
    <section class="products">
        <div class="container">
            <div class="mt-5">
                <div class="row">
                    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-4 col-md-6 col-sm-6 p-3">
                        <a href="<?php echo e(route('products.show', ['product_id' => $product->id])); ?>" class="text-decoration-none text-white">
                            <div class="card">
                                <div class="overflow-hidden">
                                    <img
                                        src="<?php echo e($product->getFirstMediaUrl('logo')); ?>"
                                        class="card-img-top lazy" alt="...">
                                </div>
                                <div class="product-card-title p-3 d-flex">
                                    <div>
                                        <div><?php echo e($product->name); ?></div>
                                        <div><?php echo e($product->sub_name); ?></div>
                                    </div>
                                    <div
                                        class="card-body products-card-body-button d-flex justify-content-end align-items-center">
                                        <a href="#" class="text-decoration-none">İNCELE</a>
                                    </div>
                                </div>

                            </div>
                        </a>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/ozay-enerji-sistemleri/resources/views/solarHeatings.blade.php ENDPATH**/ ?>