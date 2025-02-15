<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-8 offset-lg-2">
                <h2 class="fw-bold mb-4">Ürün Ekle</h2>
                <div class="bg-white shadow">
                    <form class="form" id="productsStore" enctype="multipart/form-data">
                        <div class="p-4">
                            <div class="mb-3">
                                <label for="product_category_id"><?php echo e(__('Kategoriler')); ?></label>
                                <select required class="form-select" id="product_category_id"
                                        name="product_category_id">
                                    <option value="">Ürün Kategorisi Seçiniz</option>
                                    <?php $__currentLoopData = $productCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $productCategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($productCategory->id); ?>"><?php echo e($productCategory->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="name"><?php echo e(__('Ürün Başlık')); ?></label>
                                <input required type="text" class="form-control" id="name" name="name">
                            </div>
                            <div class="mb-3">
                                <label for="sub_name"><?php echo e(__('Ürün Alt Başlık')); ?></label>
                                <input required type="text" class="form-control" id="sub_name" name="sub_name">
                            </div>
                            <div class="mb-3">
                                <label for="description"><?php echo e(__('Açıklama')); ?></label>
                                <textarea type="text" class="form-control tinyMce" id="description" name="description" style="max-height: 200px"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="hot_water_capacity"><?php echo e(__('Sıcak Su Kapasitesi')); ?></label>
                                <input type="text" class="form-control" id="hot_water_capacity"
                                       name="hot_water_capacity">
                            </div>
                            <div class="mb-3">
                                <label for="cold_water_capacity"><?php echo e(__('Soğuk Su Kapasitesi')); ?></label>
                                <input type="text" class="form-control" id="cold_water_capacity"
                                       name="cold_water_capacity">
                            </div>
                            <div class="mb-3">
                                <label for="internal_boiler_thickness"><?php echo e(__('İç Kazan Kalınlığı')); ?></label>
                                <input type="text" class="form-control" id="internal_boiler_thickness"
                                       name="internal_boiler_thickness">
                            </div>
                            <div class="mb-3">
                                <label for="outer_boiler_thickness"><?php echo e(__('Dış Kazan Kalınlığı')); ?></label>
                                <input type="text" class="form-control" id="outer_boiler_thickness"
                                       name="outer_boiler_thickness">
                            </div>
                            <div class="mb-3">
                                <label for="tube_length"><?php echo e(__('Tüp Uzunluğu')); ?></label>
                                <input type="text" class="form-control" id="tube_length"
                                       name="tube_length">
                            </div>
                            <div class="mb-3">
                                <label for="outer_tube_diameter"><?php echo e(__('Dış Tüp Çapı')); ?></label>
                                <input type="text" class="form-control" id="outer_tube_diameter"
                                       name="outer_tube_diameter">
                            </div>
                            <div class="mb-3">
                                <label for="inner_tube_diameter"><?php echo e(__('İç Tüp Çapı')); ?></label>
                                <input type="text" class="form-control" id="inner_tube_diameter"
                                       name="inner_tube_diameter">
                            </div>
                            <div class="mb-3">
                                <label for="glass_thickness"><?php echo e(__('Cam Kalınlığı')); ?></label>
                                <input type="text" class="form-control" id="glass_thickness"
                                       name="glass_thickness">
                            </div>
                            <div class="mb-3">
                                <label for="tube_reflectance_ratio"><?php echo e(__('Tüp Yansıma Oranı')); ?></label>
                                <input type="text" class="form-control" id="tube_reflectance_ratio"
                                       name="tube_reflectance_ratio">
                            </div>
                            <div class="mb-3">
                                <label for="empty_tube_temperature"><?php echo e(__('Boş Tüp Sıcaklık')); ?></label>
                                <input type="text" class="form-control" id="empty_tube_temperature"
                                       name="empty_tube_temperature">
                            </div>
                            <div class="mb-3">
                                <label for="tube_material"><?php echo e(__('Tüp Malzemesi')); ?></label>
                                <input type="text" class="form-control" id="tube_material"
                                       name="tube_material">
                            </div>
                            <div class="mb-3">
                                <label for="vacuum"><?php echo e(__('Vakum')); ?></label>
                                <input type="text" class="form-control" id="vacuum"
                                       name="vacuum">
                            </div>
                            <div class="mb-3">
                                <label for="heat_loss_coefficient"><?php echo e(__('Isı Kayıp Katsayısı')); ?></label>
                                <input type="text" class="form-control" id="heat_loss_coefficient"
                                       name="heat_loss_coefficient">
                            </div>
                            <div class="mb-3">
                                <label for="light_absorption"><?php echo e(__('Işık Apsorp Etme')); ?></label>
                                <input type="text" class="form-control" id="light_absorption"
                                       name="light_absorption">
                            </div>
                            <div class="mb-3">
                                <label for="surface_coating"><?php echo e(__('Yüzey Kaplama')); ?></label>
                                <input type="text" class="form-control" id="surface_coating"
                                       name="surface_coating">
                            </div>
                            <div class="mb-3">
                                <?php echo $__env->make('admin.includes._dropzone-single', ['title' => 'Görsel'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            </div>
                        </div>
                        <div class="p-4 bg-gray d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary">
                                <span class="spinner-border spinner-border-sm me-1 btn-spinner d-none" role="status"
                                      aria-hidden="true"></span>
                                Ürün Ekle
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php $__env->startPush('js-stack'); ?>
        <script>
            window.addEventListener('DOMContentLoaded', () => {
                let $projects = $("form#productsStore");

                $projects.on("submit", function (e) {
                    e.preventDefault();
                    let $form = $(this);
                    let formData = new FormData($form[0]);
                    $projects.find("button[type=submit]").attr("disabled", "disabled");

                    $.ajax({
                        url: '<?php echo e(route('admin.products.store')); ?>',
                        method: 'POST',
                        data: formData,
                        processData: false,
                        contentType: false,
                        success: function () {
                            window.location = "<?php echo e(route('admin.products.index')); ?>";
                        },
                        error: function (e) {
                            $projects.find("button[type=submit]").removeAttr("disabled")
                            ajaxDefaultErrorCallback(e);
                        }
                    });
                });
            });
        </script>
    <?php $__env->stopPush(); ?>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('admin.layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/ozay-enerji-sistemleri/resources/views/admin/products/create.blade.php ENDPATH**/ ?>