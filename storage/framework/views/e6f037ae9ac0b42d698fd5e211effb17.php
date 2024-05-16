<?php $__env->startSection('contacts'); ?>
    <section class="contact">
        <div class="container-fluid">
            <div class="p-5">
                <table id="contacts" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Email</th>
                        <th>Mesaj</th>
                        <th>İşlem</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $contacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($contact->id); ?></td>
                            <td><?php echo e($contact->email); ?></td>
                            <td><?php echo e($contact->message); ?></td>
                            <td>
                                <div>
                                    <span>
                                    <a href="#mesaj-detay" class="text-decoration-none text-black">Görüntüle</a>
                                    </span>
                                    <span class="ms-3 table-delete">
                                        <a href="#silinecek" class="text-decoration-none text-danger fw-bold table-delete-btn">Sil</a>
                                    </span>
                                    <span class="table-delete-btn-icon">
                                    <i class="fa-solid fa-trash-can  text-danger"></i>
                                    </span>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>#</th>
                        <th>Email</th>
                        <th>Mesaj</th>
                        <th>İşlem</th>
                    </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/ozay-enerji-sistemleri/resources/views/admin/index.blade.php ENDPATH**/ ?>
