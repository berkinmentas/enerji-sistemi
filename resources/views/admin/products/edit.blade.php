@extends('admin.layouts.layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-8 offset-lg-2">
                <h2 class="fw-bold mb-4">Ürünü Düzenle</h2>
                <div class="bg-white shadow">
                    <form class="form" id="productsUpdate" enctype="multipart/form-data">
                        <div class="p-4">
                            <div class="mb-3">
                                <label for="product_category_id">{{ __('Kategoriler') }}</label>
                                <select required class="form-select" id="product_category_id"
                                        name="product_category_id">
                                    <option value="">Ürün Kategorisi Seçiniz</option>
                                    @foreach($productCategories as $productCategory)
                                        <option
                                            value="{{$productCategory->id}}" {{$productCategory->id == $product->product_category_id ? 'selected' : ''}}>{{$productCategory->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="name">{{ __('Ürün Adı') }}</label>
                                <input required type="text" class="form-control" id="name" name="name"
                                       value="{{$product->name}}">
                            </div>
                            <div class="mb-3">
                                <label for="sub_name">{{ __('Ürün Alt Başlığı') }}</label>
                                <input required type="text" class="form-control" id="sub_name" name="sub_name"
                                       value="{{$product->sub_name}}">
                            </div>
                            <div class="mb-3">
                                <label for="description">{{ __('Açıklama') }}</label>
                                <textarea type="text" class="form-control tinyMce" id="description" name="description"
                                          style="max-height: 200px">{{$product->description}}</textarea>
                            </div>
                            <div class="features" id="features">
                                <label for="description" class="my-3">{{ __('Ürün Özellikleri') }}</label>
                                @foreach($product->features as $key => $feature)
                                    <div class="mb-1 d-flex justify-content-between align-items-center features-inputs"
                                         id="input-area">
                                        <div class="col-5">
                                            <input  type="text" class="form-control" id="features-key"
                                                   name="features[]"
                                                   value="{{$key}}">
                                        </div>
                                        <div class="fw-bold fs-4">
                                            :
                                        </div>

                                        <div class="col-6">
                                            <input  type="text" class="form-control" id="features-value"
                                                   name="features[]"
                                                   value="{{$feature}}">
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="mb-5 mt-2 text-end">
                                <div class="btn btn-danger" id="feature-click">Ürün Özellik Satırı Ekle
                                </div>
                            </div>
                            <div class="mb-3">
                                @include('admin.includes._dropzone-single', ['title' => 'Görsel'])
                                @if(!empty($product->getMedia('logo')) && count($product->getMedia('logo')) > 0)

                                    <div class="form-group mb-3">
                                        <div class="row">
                                            <div class="col-sm-12 col-md-3 col-lg-2">
                                                <div class="gallery-image mb-3">
                                                    <img src="{{ $product->getFirstMediaUrl('logo', 'thumb') }}"
                                                         alt="Logo">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="p-4 bg-gray d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary">
                                <span class="spinner-border spinner-border-sm me-1 btn-spinner d-none" role="status"
                                      aria-hidden="true"></span>
                                Ürünü Güncelle
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @push('js-stack')
        <script>
            document.getElementById('feature-click').addEventListener('click', function() {
                var rowCount = document.querySelectorAll('.features-inputs').length;
                var newRowHTML = `
            <div class="mb-1 d-flex justify-content-between align-items-center features-inputs" id="input-area-${rowCount + 1}">
                <div class="col-5">
                    <input  type="text" class="form-control" id="features-key-${rowCount + 1}" name="features[]=features-key" placeholder="Ürün Özellik Başlığı">
                </div>
                <div class="fw-bold fs-4">:</div>
                <div class="col-6">
                    <input  type="text" class="form-control" id="features-value-${rowCount + 1}" name="features[]=features-value-${rowCount + 1}" placeholder="Ürün Özelliği">
                </div>
            </div>
        `;
                document.getElementById('features').insertAdjacentHTML('beforeend', newRowHTML);
            });
            window.addEventListener('DOMContentLoaded', () => {
                let $projects = $("form#productsUpdate");

                $projects.on("submit", function (e) {
                    e.preventDefault();

                    $projects.find("button[type=submit]").attr("disabled", "disabled");
                    $.ajax({
                        url: '{{ route('admin.products.update', ['product' => $product->id]) }}',
                        method: 'PUT',
                        data: $projects.serialize(),
                        success: function () {
                            window.location = "{{ route('admin.products.index') }}";
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
