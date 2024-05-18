@extends('admin.layouts.layout')
@section('title', 'Mesajlar -')
@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-12">

                <div class="table-responsive bg-white rounded-2 shadow datatable-table-wrapper">
                    <div class="mb-4">
                        <div class="row d-flex justify-content-center">
                            <h5 class="col-sm-6 col-lg-6 col-md-6 fw-bold">Yorum Listesi</h5>
                            <div class="col-sm-6 col-lg-6 col-md-6 d-flex align-items-center justify-content-end">
                                <a  href="{{route('admin.comments.create')}}" class="btn btn-primary">Yorum Ekle</a>
                            </div>
                        </div>
                    </div>
                    <table class="table table-comments table-datatable table-projects w-100">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>İsim</th>
                            <th>Ünvan</th>
                            <th>Yorum</th>
                            <th>İşlemler</th>
                        </tr>
                        </thead>
                        <tbody></tbody>
                    </table>

                    @push('js-stack')
                        <script>
                            window.addEventListener('DOMContentLoaded', function () {
                                let tableList = window.tableList = $('.table-comments').DataTable({
                                    processing: true,
                                    serverSide: true,
                                    lengthChange: false,
                                    ajax: {
                                        url: '{{ route('admin.comments.datatable') }}',
                                        type: 'POST',
                                        data: function (d) {
                                        },
                                    },
                                    order: [[0, "desc"]],
                                    pageLength: 10,
                                    columns: [
                                        {"data": "id"},
                                        {"data": "name"},
                                        {"data": "title"},
                                        {"data": "comment"},
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
