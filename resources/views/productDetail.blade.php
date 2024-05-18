@extends('layouts.layout')
@section('productDetail')
    <section class="top-banner">
        <div class="text-center">
            <span><a href="/" class="home-link">Ana Sayfa</a></span>
            <span class="mx-1">/</span>
            <span class="home-active-page">Ürün İnceleme</span>
        </div>
    </section>
    <section class="product-detail">
        <div class="container">
            <div class="mt-5">
                <div class="row d-flex justify-content-center align-items-center">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <a href="{{$product->getFirstMediaUrl('logo')}}"
                           class="image-link-product-detail">
                            <div class="">
                                <img
                                    data-src="{{$product->getFirstMediaUrl('logo')}}"
                                    alt="" class="lazy img-fluid">
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="ms-4">
                            <div class="product-detail-title">
                                <h4 class="fw-bold">{{$product->name}}</h4>
                                <h4>{{$product->sub_name}}</h4>
                            </div>
                            <div class="product-detail-property">
                                @if(!empty($product->hot_water_capacity))
                                <div class="mt-3">
                                    <span class="product-property-title fw-bold">Sıcak Su Kapasitesi</span>
                                    <span>:</span>
                                    <span class="product-property-text text-muted">{{$product->hot_water_capacity}}</span>
                                </div>
                                @endif
                                    @if(!empty($product->cold_water_capacity))
                                <div class="mt-3">
                                    <span class="product-property-title fw-bold">Soğuk Su Kapasitesi</span>
                                    <span>:</span>
                                    <span class="product-property-text text-muted">{{$product->cold_water_capacity}}</span>
                                </div>
                                    @endif
                                    @if(!empty($product->internal_boiler_thickness))
                                    <div class="mt-3">
                                    <span class="product-property-title fw-bold">İç Kazan Kalınlığı</span>
                                    <span>:</span>
                                    <span class="product-property-text text-muted">{{$product->internal_boiler_thickness}}</span>
                                </div>
                                    @endif
                                    @if(!empty($product->outer_boiler_thickness))
                                <div class="mt-3">
                                    <span class="product-property-title fw-bold">Dış Kazan Kalınlığı</span>
                                    <span>:</span>
                                    <span class="product-property-text text-muted">{{$product->outer_boiler_thickness}}</span>
                                </div>
                                    @endif
                                    @if(!empty($product->tube_length))
                                <div class="mt-3">
                                    <span class="product-property-title fw-bold">Tüp Uzunluğu</span>
                                    <span>:</span>
                                    <span class="product-property-text text-muted">{{$product->tube_length}}</span>
                                </div>
                                    @endif
                                    @if(!empty($product->outer_tube_diameter))
                                <div class="mt-3">
                                    <span class="product-property-title fw-bold">Dış Tüp Çapı</span>
                                    <span>:</span>
                                    <span class="product-property-text text-muted">{{$product->outer_tube_diameter}}</span>
                                </div>
                                    @endif
                                    @if(!empty($product->inner_tube_diameter))
                                <div class="mt-3">
                                    <span class="product-property-title fw-bold">İç Tüp Çapı</span>
                                    <span>:</span>
                                    <span class="product-property-text text-muted">{{$product->inner_tube_diameter}}</span>
                                </div>
                                    @endif
                                    @if(!empty($product->glass_thickness))
                                <div class="mt-3">
                                    <span class="product-description-title fw-bold">Cam Kalınlığı</span>
                                    <span>:</span>
                                    <span class="product-property-text text-muted">{{$product->glass_thickness}}</span>
                                </div>
                                    @endif
                                    @if(!empty($product->tube_reflectance_ratio))
                                <div class="mt-3">
                                    <span class="product-description-title fw-bold">Tüp Yansıma Oranı</span>
                                    <span>:</span>
                                    <span class="product-property-text text-muted">{{$product->tube_reflectance_ratio}}</span>
                                </div>
                                    @endif
                                    @if(!empty($product->empty_tube_temperature))
                                <div class="mt-3">
                                    <span class="product-description-title fw-bold">Boş Tüp Sıcaklık</span>
                                    <span>:</span>
                                    <span class="product-property-text text-muted">>{{$product->empty_tube_temperature}}</span>
                                </div>
                                    @endif
                                    @if(!empty($product->tube_material))
                                <div class="mt-3">
                                    <span class="product-property-title fw-bold">Tüp Malzemesi</span>
                                    <span>:</span>
                                    <span class="product-property-text text-muted">{{$product->tube_material}}</span>
                                </div>
                                    @endif
                                    @if(!empty($product->vacuum))
                                <div class="mt-3">
                                    <span class="product-property-title fw-bold">Vakum</span>
                                    <span>:</span>
                                    <span class="product-property-text text-muted">{{$product->vacuum}}</span>
                                </div>
                                    @endif
                                    @if(!empty($product->heat_loss_coefficient))
                                <div class="mt-3">
                                    <span class="product-property-title fw-bold">Isı Kayıp Katsayısı</span>
                                    <span>:</span>
                                    <span class="product-property-text text-muted">{{$product->heat_loss_coefficient}}</span>
                                </div>
                                    @endif
                                    @if(!empty($product->light_absorption))
                                <div class="mt-3">
                                    <span class="product-property-title fw-bold">Işık Apsorp Etme</span>
                                    <span>:</span>
                                    <span class="product-property-text text-muted">{{$product->light_absorption}}</span>
                                </div>
                                    @endif
                                    @if(!empty($product->surface_coating))
                                <div class="mt-3">
                                    <span class="product-property-title fw-bold">Yüzey Kaplama</span>
                                    <span>:</span>
                                    <span class="product-property-text text-muted">{{$product->surface_coating}}</span>
                                </div>
                                    @endif
                            </div>
                        </div>
                    </div>
                    @if(!empty($product->description))

                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="product-detail-description mt-5">
                          {!! $product->description !!}
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </section>
@endsection
