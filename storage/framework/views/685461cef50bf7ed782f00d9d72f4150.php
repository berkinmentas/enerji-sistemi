<?php $__env->startSection('title', 'Sayfalar -'); ?>
<?php $__env->startSection('content'); ?>
    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-12">

                <div class="table-responsive bg-white rounded-2 shadow datatable-table-wrapper">
                    <div class="mb-4">
                        <div class="row d-flex justify-content-center">
                            <h5 class="col-sm-6 col-lg-6 col-md-6 fw-bold">Sayfa Listesi</h5>
                            <div class="col-sm-6 col-lg-6 col-md-6 d-flex align-items-center justify-content-end">
                                <a  href="<?php echo e(route('admin.pages.create')); ?>" class="btn btn-primary">Sayfa Ekle</a>
                            </div>
                        </div>
                    </div>
                    <table class="table table-pages table-projects w-100">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Sayfa Adı</th>
                            <th>Sayfa Slug</th>
                            <th>Sayfa Description</th>
                            <th>İşlemler</th>
                        </tr>
                        </thead>
                        <tbody></tbody>
                    </table>

                    <?php $__env->startPush('js-stack'); ?>
                        <script>
                            window.addEventListener('DOMContentLoaded', function () {
                                let tableList = window.tableList = $('.table-pages').DataTable({
                                    processing: true,
                                    serverSide: true,
                                    lengthChange: false,
                                    ajax: {
                                        url: '<?php echo e(route('admin.pages.datatable')); ?>',
                                        type: 'POST',
                                        data: function (d) {
                                        },
                                    },
                                    order: [[0, "desc"]],
                                    pageLength: 10,
                                    columns: [
                                        {"data": "id"},
                                        {"data": "name"},
                                        {"data": "slug"},
                                        {"data": "description"},
                                        {"data": "actions"},
                                    ],
                                    columnDefs: [
                                        {targets: 'no-sort', orderable: false},
                                        {searchable: false, targets: [0, 2]}
                                    ]
                                });
                                tableList.on('preXhr', function (evt, settings) {
                                    if (settings.jqXHR) {
                                        settings.jqXHR.abort();
                                    }
                                });
                                /*
                                document.querySelector('.datatable-search').addEventListener('keyup', _.debounce(function (e) {
                                    tableList.search(this.value).draw();
                                }, 300));*/
                            });
                        </script>
                    <?php $__env->stopPush(); ?>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/ozay-enerji-sistemleri/resources/views/admin/pages/index.blade.php ENDPATH**/ ?>