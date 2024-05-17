<?php $__env->startSection('productDetail'); ?>
    <section class="top-banner">
        <div class="text-center">
            <span><a href="/" class="home-link">Ana Sayfa</a></span>
            <span class="mx-1">/</span>
            <span class="home-active-page">Ürün İnceleme</span>
        </div>
    </section>
    <section class="product-detail">
        <div class="container">
            <div class="mt-5">
                <div class="row d-flex justify-content-center align-items-center">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <a href="<?php echo e($product->getFirstMediaUrl('logo')); ?>"
                           class="image-link-product-detail">
                            <div class="">
                                <img
                                    data-src="<?php echo e($product->getFirstMediaUrl('logo')); ?>"
                                    alt="" class="lazy img-fluid">
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="ms-4">
                            <div class="product-detail-title">
                                <h4 class="fw-bold"><?php echo e($product->name); ?></h4>
                                <h4><?php echo e($product->sub_name); ?></h4>
                            </div>
                            <div class="product-detail-property">
                                <div class="mt-3">
                                    <span class="product-property-title fw-bold">Sıcak Su Kapasitesi</span>
                                    <span>:</span>
                                    <span class="product-property-text text-muted"><?php echo e($product->hot_water_capacity); ?></span>
                                </div>
                                <div class="mt-3">
                                    <span class="product-property-title fw-bold">Soğuk Su Kapasitesi</span>
                                    <span>:</span>
                                    <span class="product-property-text text-muted"><?php echo e($product->cold_water_capacity); ?></span>
                                </div>
                                <div class="mt-3">
                                    <span class="product-property-title fw-bold">İç Kazan Kalınlığı</span>
                                    <span>:</span>
                                    <span class="product-property-text text-muted"><?php echo e($product->internal_boiler_thickness); ?></span>
                                </div>
                                <div class="mt-3">
                                    <span class="product-property-title fw-bold">Dış Kazan Kalınlığı</span>
                                    <span>:</span>
                                    <span class="product-property-text text-muted"><?php echo e($product->outer_boiler_thickness); ?></span>
                                </div>
                                <div class="mt-3">
                                    <span class="product-property-title fw-bold">Tüp Uzunluğu</span>
                                    <span>:</span>
                                    <span class="product-property-text text-muted"><?php echo e($product->tube_length); ?></span>
                                </div>
                                <div class="mt-3">
                                    <span class="product-property-title fw-bold">Dış Tüp Çapı</span>
                                    <span>:</span>
                                    <span class="product-property-text text-muted"><?php echo e($product->outer_tube_diameter); ?></span>
                                </div>
                                <div class="mt-3">
                                    <span class="product-property-title fw-bold">İç Tüp Çapı</span>
                                    <span>:</span>
                                    <span class="product-property-text text-muted"><?php echo e($product->inner_tube_diameter); ?></span>
                                </div>
                                <div class="mt-3">
                                    <span class="product-description-title fw-bold">Cam Kalınlığı</span>
                                    <span>:</span>
                                    <span class="product-property-text text-muted"><?php echo e($product->glass_thickness); ?></span>
                                </div>
                                <div class="mt-3">
                                    <span class="product-description-title fw-bold">Tüp Yansıma Oranı</span>
                                    <span>:</span>
                                    <span class="product-property-text text-muted"><?php echo e($product->tube_reflectance_ratio); ?></span>
                                </div>
                                <div class="mt-3">
                                    <span class="product-description-title fw-bold">Boş Tüp Sıcaklık</span>
                                    <span>:</span>
                                    <span class="product-property-text text-muted">><?php echo e($product->empty_tube_temperature); ?></span>
                                </div>
                                <div class="mt-3">
                                    <span class="product-property-title fw-bold">Tüp Malzemesi</span>
                                    <span>:</span>
                                    <span class="product-property-text text-muted"><?php echo e($product->tube_material); ?></span>
                                </div>
                                <div class="mt-3">
                                    <span class="product-property-title fw-bold">Vakum</span>
                                    <span>:</span>
                                    <span class="product-property-text text-muted"><?php echo e($product->vacuum); ?></span>
                                </div>
                                <div class="mt-3">
                                    <span class="product-property-title fw-bold">Isı Kayıp Katsayısı</span>
                                    <span>:</span>
                                    <span class="product-property-text text-muted"><?php echo e($product->heat_loss_coefficient); ?></span>
                                </div>
                                <div class="mt-3">
                                    <span class="product-property-title fw-bold">Işık Apsorp Etme</span>
                                    <span>:</span>
                                    <span class="product-property-text text-muted"><?php echo e($product->light_absorption); ?></span>
                                </div>
                                <div class="mt-3">
                                    <span class="product-property-title fw-bold">Yüzey Kaplama</span>
                                    <span>:</span>
                                    <span class="product-property-text text-muted"><?php echo e($product->surface_coating); ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="product-detail-description mt-5">
                          <?php echo $product->description; ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/ozay-enerji-sistemleri/resources/views/productDetail.blade.php ENDPATH**/ ?>