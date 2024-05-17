@extends('layouts.layout')
@section('solarHeatings')
    <section class="top-banner">
        <div class="text-center">
            <span><a href="/" class="home-link">Ana Sayfa</a></span>
            <span class="mx-1">/</span>
            <span class="home-active-page">{{$productCategoryName}}</span>
        </div>
    </section>
    <section class="products">
        <div class="container">
            <div class="mt-5">
                <div class="row">
                    @foreach($products as $product)
                    <div class="col-lg-4 col-md-6 col-sm-6 p-3">
                        <a href="{{route('products.show', ['product_id' => $product->id])}}" class="text-decoration-none text-white">
                            <div class="card">
                                <div class="overflow-hidden">
                                    <img
                                        src="{{$product->getFirstMediaUrl('logo')}}"
                                        class="card-img-top lazy" alt="...">
                                </div>
                                <div class="product-card-title p-3 d-flex">
                                    <div>
                                        <div>{{$product->name}}</div>
                                        <div>{{$product->sub_name}}</div>
                                    </div>
                                    <div
                                        class="card-body products-card-body-button d-flex justify-content-end align-items-center">
                                        <a href="#" class="text-decoration-none">İNCELE</a>
                                    </div>
                                </div>

                            </div>
                        </a>
                    </div>
                    @endforeach


                </div>
            </div>
        </div>
    </section>
@endsection
