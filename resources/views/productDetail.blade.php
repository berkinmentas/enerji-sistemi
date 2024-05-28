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
                <div class="row ">
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <a href="{{$product->getFirstMediaUrl('logo')}}"
                           class="image-link-product-detail">
                            <div class="">
                                <img
                                    data-src="{{$product->getFirstMediaUrl('logo')}}"
                                    alt="" class="lazy img-fluid">
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 ps-3">

                        <div class="categories mt-4">
                            <span class="">Kategori</span>
                            <span class="">:</span>
                            <span class="product-detail-category ms-2">
                                {{$productCategory->name}}
                            </span>
                        </div>
                        @if(!empty($product->name))
                            <div class="product-detail-title col-md-12 col-sm-12 col-lg-12 mt-5">
                                <h4 class="fw-bold">{{$product->name}}</h4>
                                <h4>{{$product->sub_name}}</h4>
                            </div>
                        @endif
                        <div class="ask-price my-4">
                            <a class="btn ask-price-btn" href="tel:+90266243346">
                                <i class="fa-solid fa-phone pe-2"></i>Fiyat Sor</a>
                        </div>
                        <div>
                            <h5>
                                Ürün Açıklaması
                            </h5>
                            <div class="mt-3">
                                {!! $product->description !!}
                            </div>
                        </div>
                        <!--
                        <nav>
                            <div class="nav nav-tabs mt-5" id="nav-tab" role="tablist">
                                <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home"
                                        aria-selected="true">Ürün Detayları
                                </button>
                                <button class="nav-link ms-4" id="nav-profile-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-profile" type="button" role="tab"
                                        aria-controls="nav-profile" aria-selected="false">Ürün Açıklaması
                                </button>

                            </div>
                            <hr>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">

                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                                 aria-labelledby="nav-home-tab">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <h4 class="mt-4">
                                        Ürün Detayları
                                    </h4>
                                    <div class="mt-2">
                                        <div class="product-detail-property">
                                            @if(!empty($product->hot_water_capacity))
                            <div class="mt-3">
                                <span
                                    class="product-property-title fw-bold">Sıcak Su Kapasitesi</span>
                                <span>:</span>
                                <span
                                    class="product-property-text text-muted ">{{$product->hot_water_capacity}}</span>
                                                </div>

                        @endif
                        @if(!empty($product->cold_water_capacity))
                            <div class="mt-3">
                                <span
                                    class="product-property-title fw-bold">Soğuk Su Kapasitesi</span>
                                <span>:</span>
                                <span
                                    class="product-property-text text-muted">{{$product->cold_water_capacity}}</span>
                                                </div>

                        @endif
                        @if(!empty($product->internal_boiler_thickness))
                            <div class="mt-3">
                                <span
                                    class="product-property-title fw-bold">İç Kazan Kalınlığı</span>
                                <span>:</span>
                                <span
                                    class="product-property-text text-muted">{{$product->internal_boiler_thickness}}</span>
                                                </div>

                        @endif
                        @if(!empty($product->outer_boiler_thickness))
                            <div class="mt-3">
                                <span
                                    class="product-property-title fw-bold">Dış Kazan Kalınlığı</span>
                                <span>:</span>
                                <span
                                    class="product-property-text text-muted">{{$product->outer_boiler_thickness}}</span>
                                                </div>

                        @endif
                        @if(!empty($product->tube_length))
                            <div class="mt-3">
                                <span class="product-property-title fw-bold">Tüp Uzunluğu</span>
                                <span>:</span>
                                <span
                                    class="product-property-text text-muted">{{$product->tube_length}}</span>
                                                </div>

                        @endif
                        @if(!empty($product->outer_tube_diameter))
                            <div class="mt-3">
                                <span class="product-property-title fw-bold">Dış Tüp Çapı</span>
                                <span>:</span>
                                <span
                                    class="product-property-text text-muted">{{$product->outer_tube_diameter}}</span>
                                                </div>

                        @endif
                        @if(!empty($product->inner_tube_diameter))
                            <div class="mt-3">
                                <span class="product-property-title fw-bold">İç Tüp Çapı</span>
                                <span>:</span>
                                <span
                                    class="product-property-text text-muted">{{$product->inner_tube_diameter}}</span>
                                                </div>

                        @endif
                        @if(!empty($product->glass_thickness))
                            <div class="mt-3">
                                <span class="product-description-title fw-bold">Cam Kalınlığı</span>
                                <span>:</span>
                                <span
                                    class="product-property-text text-muted">{{$product->glass_thickness}}</span>
                                                </div>

                        @endif
                        @if(!empty($product->tube_reflectance_ratio))
                            <div class="mt-3">
                                <span
                                    class="product-description-title fw-bold">Tüp Yansıma Oranı</span>
                                <span>:</span>
                                <span
                                    class="product-property-text text-muted">{{$product->tube_reflectance_ratio}}</span>
                                                </div>

                        @endif
                        @if(!empty($product->empty_tube_temperature))
                            <div class="mt-3">
                                <span
                                    class="product-description-title fw-bold">Boş Tüp Sıcaklık</span>
                                <span>:</span>
                                <span
                                    class="product-property-text text-muted">>{{$product->empty_tube_temperature}}</span>
                                                </div>

                        @endif
                        @if(!empty($product->tube_material))
                            <div class="mt-3">
                                <span class="product-property-title fw-bold">Tüp Malzemesi</span>
                                <span>:</span>
                                <span
                                    class="product-property-text text-muted">{{$product->tube_material}}</span>
                                                </div>

                        @endif
                        @if(!empty($product->vacuum))
                            <div class="mt-3">
                                <span class="product-property-title fw-bold">Vakum</span>
                                <span>:</span>
                                <span
                                    class="product-property-text text-muted">{{$product->vacuum}}</span>
                                                </div>

                        @endif
                        @if(!empty($product->heat_loss_coefficient))
                            <div class="mt-3">
                                <span
                                    class="product-property-title fw-bold">Isı Kayıp Katsayısı</span>
                                <span>:</span>
                                <span
                                    class="product-property-text text-muted">{{$product->heat_loss_coefficient}}</span>
                                                </div>

                        @endif
                        @if(!empty($product->light_absorption))
                            <div class="mt-3">
                                <span class="product-property-title fw-bold">Işık Apsorp Etme</span>
                                <span>:</span>
                                <span
                                    class="product-property-text text-muted">{{$product->light_absorption}}</span>
                                                </div>

                        @endif
                        @if(!empty($product->surface_coating))
                            <div class="mt-3">
                                <span class="product-property-title fw-bold">Yüzey Kaplama</span>
                                <span>:</span>
                                <span
                                    class="product-property-text text-muted">{{$product->surface_coating}}</span>
                                                </div>

                        @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="nav-profile" role="tabpanel"
                 aria-labelledby="nav-profile-tab">
                <h4 class="mt-4">
                    Ürün Açıklaması
                </h4>
@if(!empty($product->description))

                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="product-detail-description mt-4">
{!! $product->description !!}
                            </div>
                        </div>

                        @endif
                        </div>
                    </div>
-->
                    </div>

                    <div class="col-sm-12-col-md-12 col-lg-12 ">
                        <h4>Ürün Özellikleri</h4>
                        <hr>
                        <div class="row  text-center">
                            @if(!empty($product->features))
                            @foreach($product->features as $key => $feature)
                            <div class="col-lg-4 col-md-6 col-sm-6 p-1">
                                <div class="product-information-card">
                                    <div class="fw-bold">
                                        {{$key}}
                                    </div>
                                    <div>
                                        {{$feature}}
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            @endif
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <section class="similar-products mt-5 container">
        <h4 class="mb-4 px-4">Benzer Ürünler</h4>
        <div class="swiper similar-product-swiper ">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                @foreach($products as $solarProduct)
                    <div class="swiper-slide">
                        <div class="card">
                            <div class="product-card-title px-3 pt-3">
                                <div class="fw-bold">
                                    {{$solarProduct->name}}
                                </div>
                                <div>
                                    {{$solarProduct->sub_name}}
                                </div>
                            </div>
                            <div class="overflow-hidden">
                                <img
                                    src="{{$solarProduct->getFirstMediaUrl('logo')}}"
                                    class="card-img-top lazy" alt="...">
                            </div>
                            <div
                                class="card-body product-card-body-button d-flex justify-content-end align-items-center">
                                <a href="{{route('products.show', ['product_id' => $solarProduct->id])}}"
                                   class="text-decoration-none">İNCELE</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="swiper-pagination-wrapper">
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>
@endsection
