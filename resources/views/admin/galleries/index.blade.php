@extends('admin.layouts.layout')
@section('title', 'Sayfalar -')
@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-12">

                <div class="table-responsive bg-white rounded-2 shadow datatable-table-wrapper">
                    <div class="mb-4">
                        <div class="row d-flex justify-content-center">
                            <h5 class="col-sm-6 col-lg-6 col-md-6 fw-bold">Galeri Listesi</h5>
                            <div class="col-sm-6 col-lg-6 col-md-6 d-flex align-items-center justify-content-end">
                                <a  href="{{route('admin.galleries.create')}}" class="btn btn-primary">Galeri Ekle</a>
                            </div>
                        </div>
                    </div>
                    <table class="table table-pages table-datatable w-100">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Galeri Adı</th>
                            <th>İşlemler</th>
                        </tr>
                        </thead>
                        <tbody></tbody>
                    </table>

                    @push('js-stack')
                        <script>
                            window.addEventListener('DOMContentLoaded', function () {
                                let tableList = window.tableList = $('.table-pages').DataTable({
                                    processing: true,
                                    serverSide: true,
                                    lengthChange: false,
                                    ajax: {
                                        url: '{{ route('admin.galleries.datatable') }}',
                                        type: 'POST',
                                        data: function (d) {
                                        },
                                    },
                                    order: [[0, "desc"]],
                                    pageLength: 10,
                                    columns: [
                                        {"data": "id"},
                                        {"data": "name"},
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
                    @endpush
                </div>
            </div>
        </div>
    </div>
@endsection
