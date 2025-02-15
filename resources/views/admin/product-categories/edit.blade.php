@extends('admin.layouts.layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-8 offset-lg-2">
                <h2 class="fw-bold mb-4">Kategori Düzenle</h2>
                <div class="bg-white shadow">
                    <form class="form" id="productCategoryUpdate" enctype="multipart/form-data">
                        <div class="p-4">
                            <div class="mb-3">
                                <label for="parent_id">{{ __('Ana Kategori Seçiniz') }}</label>
                                <select class="form-select" aria-label="parent_id" name="parent_id" id="parent_id">
                                    <option selected value="">Ana Kategori Yok</option>
                                    @foreach($productParentCategories as $productParentCategory)
                                        <option {{ $productCategory->parent_id == $productParentCategory->id ? 'selected' : '' }}  value="{{$productParentCategory->id}}">{{$productParentCategory->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="name">{{ __('Kategori Adı') }}</label>
                                <input required type="text" class="form-control" id="name" name="name"
                                       value="{{$productCategory->name}}">
                            </div>
                            <div class="mb-3">
                                <label for="description">{{ __('Açıklama') }}</label>
                                <input  type="text" class="form-control" id="description" name="description"
                                       value="{{$productCategory->description}}">
                            </div>


                        </div>
                        <div class="p-4 bg-gray d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary">
                                <span class="spinner-border spinner-border-sm me-1 btn-spinner d-none" role="status"
                                      aria-hidden="true"></span>
                                Kategori Güncelle
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @push('js-stack')
        <script>
            window.addEventListener('DOMContentLoaded', () => {
                let $projects = $("form#productCategoryUpdate");

                $projects.on("submit", function (e) {
                    e.preventDefault();

                    $projects.find("button[type=submit]").attr("disabled", "disabled");
                    $.ajax({
                        url: '{{ route('admin.productCategories.update', ['productCategory' => $productCategory->id]) }}',
                        method: 'PUT',
                        data: $projects.serialize(),
                        success: function () {
                            window.location = "{{ route('admin.productCategories.index') }}";
                        },
                        error: function (e) {
                            $projects.find("button[type=submit]").removeAttr("disabled")
                            ajaxDefaultErrorCallback(e);
                        }
                    });
                });
            });

        </script>
    @endpush
@endsection
