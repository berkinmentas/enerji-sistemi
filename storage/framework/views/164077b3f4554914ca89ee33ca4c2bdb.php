<?php $__env->startSection('content'); ?>
    <section class="contact-show">
        <div class="container">
            <div class="mt-5">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <div>
                            <h4>
                                Mesaj - <?php echo e($contact->id); ?>

                            </h4>
                        </div>
                        <div class="contact-message-box bg-white shadow-lg p-5">
                            <div>
                                <span class="fw-bold">Email :</span>
                                <span><?php echo e($contact->email); ?></span>
                            </div>
                            <div class="my-3">
                                <span class="fw-bold">Telefon Numarası :</span>
                                <span><?php echo e($contact->phone); ?></span>
                            </div>
                            <div>
                                <span class="fw-bold">Mesaj :</span>
                                <span><?php echo e($contact->message); ?></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/ozay-enerji-sistemleri/resources/views/admin/contacts/show.blade.php ENDPATH**/ ?>