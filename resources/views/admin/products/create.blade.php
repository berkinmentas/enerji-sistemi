@extends('admin.layouts.layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-8 offset-lg-2">
                <h2 class="fw-bold mb-4">Ürün Ekle</h2>
                <div class="bg-white shadow">
                    <form class="form" id="productsStore" enctype="multipart/form-data">
                        <div class="p-4">
                            <div class="mb-3">
                                <label for="product_category_id">{{ __('Kategoriler') }}</label>
                                <select required class="form-select" id="product_category_id"
                                        name="product_category_id">
                                    <option value="">Ürün Kategorisi Seçiniz</option>
                                    @foreach($productCategories as $productCategory)
                                        <option value="{{$productCategory->id}}">{{$productCategory->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="name">{{ __('Ürün Adı') }}</label>
                                <input required type="text" class="form-control" id="name" name="name">
                            </div>
                            <div class="mb-3">
                                <label for="description">{{ __('Açıklama') }}</label>
                                <textarea type="text" class="form-control tinyMce" id="description" name="description" style="max-height: 200px"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="hot_water_capacity">{{ __('Sıcak Su Kapasitesi') }}</label>
                                <input type="text" class="form-control" id="hot_water_capacity"
                                       name="hot_water_capacity">
                            </div>
                            <div class="mb-3">
                                <label for="cold_water_capacity">{{ __('Soğuk Su Kapasitesi') }}</label>
                                <input type="text" class="form-control" id="cold_water_capacity"
                                       name="cold_water_capacity">
                            </div>
                            <div class="mb-3">
                                <label for="internal_boiler_thickness">{{ __('İç Kazan Kalınlığı') }}</label>
                                <input type="text" class="form-control" id="internal_boiler_thickness"
                                       name="internal_boiler_thickness">
                            </div>
                            <div class="mb-3">
                                <label for="outer_boiler_thickness">{{ __('Dış Kazan Kalınlığı') }}</label>
                                <input type="text" class="form-control" id="outer_boiler_thickness"
                                       name="outer_boiler_thickness">
                            </div>
                            <div class="mb-3">
                                <label for="tube_length">{{ __('Tüp Uzunluğu') }}</label>
                                <input type="text" class="form-control" id="tube_length"
                                       name="tube_length">
                            </div>
                            <div class="mb-3">
                                <label for="outer_tube_diameter">{{ __('Dış Tüp Çapı') }}</label>
                                <input type="text" class="form-control" id="outer_tube_diameter"
                                       name="outer_tube_diameter">
                            </div>
                            <div class="mb-3">
                                <label for="inner_tube_diameter">{{ __('İç Tüp Çapı') }}</label>
                                <input type="text" class="form-control" id="inner_tube_diameter"
                                       name="inner_tube_diameter">
                            </div>
                            <div class="mb-3">
                                <label for="glass_thickness">{{ __('Cam Kalınlığı') }}</label>
                                <input type="text" class="form-control" id="glass_thickness"
                                       name="glass_thickness">
                            </div>
                            <div class="mb-3">
                                <label for="tube_reflectance_ratio">{{ __('Tüp Yansıma Oranı') }}</label>
                                <input type="text" class="form-control" id="tube_reflectance_ratio"
                                       name="tube_reflectance_ratio">
                            </div>
                            <div class="mb-3">
                                <label for="empty_tube_temperature">{{ __('Boş Tüp Sıcaklık') }}</label>
                                <input type="text" class="form-control" id="empty_tube_temperature"
                                       name="empty_tube_temperature">
                            </div>
                            <div class="mb-3">
                                <label for="tube_material">{{ __('Tüp Malzemesi') }}</label>
                                <input type="text" class="form-control" id="tube_material"
                                       name="tube_material">
                            </div>
                            <div class="mb-3">
                                <label for="vacuum">{{ __('Vakum') }}</label>
                                <input type="text" class="form-control" id="vacuum"
                                       name="vacuum">
                            </div>
                            <div class="mb-3">
                                <label for="heat_loss_coefficient">{{ __('Isı Kayıp Katsayısı') }}</label>
                                <input type="text" class="form-control" id="heat_loss_coefficient"
                                       name="heat_loss_coefficient">
                            </div>
                            <div class="mb-3">
                                <label for="light_absorption">{{ __('Işık Apsorp Etme') }}</label>
                                <input type="text" class="form-control" id="light_absorption"
                                       name="light_absorption">
                            </div>
                            <div class="mb-3">
                                <label for="surface_coating">{{ __('Yüzey Kaplama') }}</label>
                                <input type="text" class="form-control" id="surface_coating"
                                       name="surface_coating">
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

    @push('js-stack')
        <script>
            window.addEventListener('DOMContentLoaded', () => {
                let $projects = $("form#productsStore");

                $projects.on("submit", function (e) {
                    e.preventDefault();
                    let $form = $(this);
                    let formData = new FormData($form[0]);
                    $projects.find("button[type=submit]").attr("disabled", "disabled");

                    $.ajax({
                        url: '{{ route('admin.products.store') }}',
                        method: 'POST',
                        data: formData,
                        processData: false,
                        contentType: false,
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

