@extends('layouts.layout')
@section('solarHeatings')
    <section class="top-banner">
        <div class="text-center">
            <span><a href="/" class="home-link">Ana Sayfa</a></span>
            <span class="mx-1">/</span>
            <span class="home-active-page">Ürünler</span>
        </div>
    </section>
    <section class="products">
        <div class="container">
            <div class="mt-5">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-3">
                        <div class="categories">
                            <h5>
                                Kategoriler
                            </h5>
                            <form id="categories-filter" method="get">
                                <ul class="list-group">
                                    @foreach($productCategoriesArray as $i => $productCategories)

                                        <div class="accordion" id="accordionExample">
                                            <div class="accordion-item filter-accordion-item  mt-2 ">
                                                <h2 class="accordion-header " id="heading{{$i}}">
                                                    <button
                                                        class="accordion-button filter-accordion-button collapsed"
                                                        type="button"
                                                        id="{{$i}}"
                                                        data-bs-toggle="collapse"
                                                        data-bs-target="#collapse{{$i }}"
                                                        aria-expanded="true" aria-controls="collapse{{$i }}">
                                                        {{ $productParentCategoriesArray[$i] }}
                                                    </button>
                                                </h2>
                                                <div id="collapse{{$i}}" class="accordion-collapse collapse"
                                                     aria-labelledby="heading{{$i}}"
                                                     data-bs-parent="#accordionExample">
                                                    <div class="accordion-body p-0">
                                                        @foreach($productCategories as $pr)
                                                            <li class="list-group-item border-0">
                                                                <input
                                                                    @if(!is_null(Request()->query('categories')))
                                                                        @foreach(Request()->query('categories') as $selectedCategoryItem)
                                                                            {{ $selectedCategoryItem == $pr->id  ? 'checked' : ''}}
                                                                        @endforeach
                                                                    @endif
                                                                    class="form-check-input me-1"
                                                                    type="checkbox"
                                                                    value="{{$pr->id}}" data-parentId="{{ $pr->parent_id }}"
                                                                    name="categories[]"
                                                                    aria-label="...">
                                                                {{$pr->name}}
                                                            </li>
                                                        @endforeach

                                                        <li class="list-group-item border-0">
                                                            <input class="form-check-input me-1 get-all-in-category"
                                                                   type="checkbox"
                                                                   value="{{$i}}" id="{{ $i }}"
                                                                   aria-label="..."
                                                                   name="categoryAll" data-parentId="{{ $i}}">
                                                            Tümünü listele
                                                        </li>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </ul>
                                <div class="filter-button align-items-end justify-content-end d-flex mt-3">
                                    <button class="btn btn-primary" type="submit">Filtrele</button>
                                </div>
                            </form>
                        </div>
                        <div>
                        </div>
                    </div>
                    @push('js-stack')
                        <script>
                            document.addEventListener('DOMContentLoaded', function () {
                                let checkboxes = document.querySelectorAll('.form-check-input');
                                checkboxes.forEach(function (checkbox) {
                                    checkbox.addEventListener('change', function () {
                                        let selectedParentCategoryId = checkbox.getAttribute('data-parentId'); // Seçilen checkbox'ın kategorisi
                                        checkboxes.forEach(function (checkboxItem) {
                                            if (checkboxItem.getAttribute('data-parentId') != selectedParentCategoryId) {
                                                checkboxItem.checked = false;
                                            }
                                        });
                                        if(checkbox.value === selectedParentCategoryId){
                                            checkboxes.forEach(function (checkboxItem) {
                                                if (checkboxItem.value != selectedParentCategoryId) {
                                                    checkboxItem.checked = false;
                                                }
                                            });
                                        } else {
                                            checkboxes.forEach(function (checkboxItem) {
                                                if (checkboxItem.value == selectedParentCategoryId) {
                                                    checkboxItem.checked = false;
                                                }
                                            });
                                        }
                                    });
                                });
                            });
                        </script>
                    @endpush
                    <div class="col-sm-12 col-md-12 col-lg-9 products-wrapper">
                        <div class="row">
                            @if(count($products)>0)
                                @foreach($products as $product)
                                    <div class="col-lg-4 col-md-6 col-sm-6 p-3">
                                        <a href="{{route('products.show', ['product_id' => $product->id])}}"
                                           class="text-decoration-none text-white">
                                            <div class="card">
                                                <div class="overflow-hidden card-img-wrapper">
                                                    <img
                                                        src="{{$product->getFirstMediaUrl('logo')}}"
                                                        class="card-img-top lazy" alt="...">
                                                </div>
                                                <div class="product-card-title p-3">
                                                    <div>
                                                        <div>{{$product->name}}</div>
                                                        <div>{{$product->sub_name}}</div>
                                                    </div>
                                                    <div
                                                        class="card-body p-0 products-card-body-button d-flex justify-content-end align-items-center">
                                                        <a href="{{route('products.show', ['product_id' => $product->id])}}"
                                                           class="text-decoration-none">İNCELE</a>
                                                    </div>
                                                </div>

                                            </div>
                                        </a>
                                    </div>
                                @endforeach
                            @else()
                                <div class="text-center fw-bold">Ürün bulunamadı...</div>
                            @endif
                                <div class="col-md-12 col-sm-12 col-lg-12">
                                    <div class="d-flex justify-content-center">
                                        {!! $products->links() !!}
                                    </div>

                                </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
