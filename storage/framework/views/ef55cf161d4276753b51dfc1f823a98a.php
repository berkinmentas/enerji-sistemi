<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-8 offset-lg-2">
                <h2 class="fw-bold mb-4">Sayfa Ekle</h2>
                <div class="bg-white shadow">
                    <form class="form" id="pagesStore" enctype="multipart/form-data">
                        <div class="p-4">
                            <div class="mb-3">
                                <label for="name"><?php echo e(__('Sayfa Adı')); ?></label>
                                <input required type="text" class="form-control" id="name" name="name">
                            </div>
                            <div class="mb-3">
                                <label for="slug"><?php echo e(__('Sayfa Slug')); ?></label>
                                <input type="text" class="form-control" id="slug"
                                       name="slug">
                            </div>
                            <div class="mb-3">
                                <label for="description"><?php echo e(__('Sayfa Açıklama')); ?></label>

                                <textarea type="text" class="form-control tinyMce" id="description" name="description"
                                          style="max-height: 200px"></textarea>
                            </div>
                        </div>
                        <div class="p-4 bg-gray d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary">
                                <span class="spinner-border spinner-border-sm me-1 btn-spinner d-none" role="status"
                                      aria-hidden="true"></span>
                                Sayfa Ekle
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
                let $projects = $("form#pagesStore");

                $projects.on("submit", function (e) {
                    e.preventDefault();
                    let $form = $(this);
                    let formData = new FormData($form[0]);
                    $projects.find("button[type=submit]").attr("disabled", "disabled");

                    $.ajax({
                        url: '<?php echo e(route('admin.pages.store')); ?>',
                        method: 'POST',
                        data: formData,
                        processData: false,
                        contentType: false,
                        success: function () {
                            window.location = "<?php echo e(route('admin.pages.index')); ?>";
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


<?php echo $__env->make('admin.layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/ozay-enerji-sistemleri/resources/views/admin/pages/create.blade.php ENDPATH**/ ?>