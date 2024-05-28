@extends('layouts.layout')
@section('content')
    <section class="hero-section ">
        <div class="container">
            <div class="text-center row align-items-center justify-content-center">
                @if(!empty(config('settings.heroTitle')))
                    <div class="hero-title text-center mb-1 col-md-5 col-lg-5 col-sm-12">
                        <h1 class="mb-0">{{config('settings.heroTitle')}}</h1>
                    </div>
                @endif
                <div class="text-center mb-3 hero-dots col-md-12 col-lg-12 col-sm-12">
                    <div>
                     <span class="hero-dot-item me-2">
                         <i class="fa-solid fa-circle"></i>
                     </span>
                        <span class="hero-dot-item me-2">
                         <i class="fa-solid fa-circle"></i>
                     </span>
                        <span class="hero-dot-item me-2">
                         <i class="fa-solid fa-circle"></i>
                     </span>
                        <span class="hero-dot-item">
                         <i class="fa-solid fa-circle"></i>
                     </span>
                    </div>
                </div>
                @if(!empty(config('settings.heroDescription')))
                    <div class="hero-description-wrapper text-center mb-3 col-md-12 col-lg-12 col-sm-12">
                        <div class="hero-description">{{config('settings.heroDescription')}}
                        </div>
                    </div>
                @endif
                <button type="button" class="mt-5 py-2 btn btn-primary col-md-2 col-lg-2 col-sm-4">Hakkımızda</button>

            </div>
        </div>
    </section>
    <section>
        <div class="container">

            <div class="hero-cards">
                <div class="row g-0 justify-content-center align-items-center">
                    <div class="col-sm-12 col-md-4 col-lg-4 ">
                        <div
                            class="hero-card hero-card-one d-flex justify-content-center align-items-center flex-column">
                            <div class="hero-card-icon-box" style="background-color: #c51712">
                                <span><i class="fa-regular fa-clock"></i></span>
                            </div>
                            <div class="hero-card-text  text-center px-2">
                                @if(!empty(config('settings.heroCardTitle1')))
                                    <h4>{{config('settings.heroCardTitle1')}}</h4>
                                @endif
                                <div>
                                    @if(!empty(config('settings.heroCardBoldDescription1')))
                                        <span class="fw-bold">{{config('settings.heroCardBoldDescription1')}}</span>
                                    @endif
                                    @if(!empty(config('settings.heroCardBoldDescription1')))
                                        <span>{{config('settings.heroCardDescription1')}}</span>
                                    @endif
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-4 ">
                        <div
                            class="hero-card hero-card-two hero-card-mid d-flex justify-content-center align-items-center flex-column">
                            <div class="hero-card-icon-box" style="background-color: #c51712">
                                <span><i class="fa-solid fa-location-dot"></i></span>
                            </div>
                            <div class="hero-card-text text-center px-2">
                                @if(!empty(config('settings.heroCardTitle2')))
                                    <h4>{{config('settings.heroCardTitle2')}}</h4>
                                @endif
                                <div>
                                    @if(!empty(config('settings.heroCardBoldDescription2')))
                                        <div class="fw-bold">{{config('settings.heroCardBoldDescription2')}}</div>
                                    @endif
                                    @if(!empty(config('settings.heroCardDescription2')))
                                        <div>{{config('settings.heroCardDescription2')}}</div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-4 ">
                        <div
                            class="hero-card hero-card-three d-flex justify-content-center align-items-center flex-column">
                            <div class="hero-card-icon-box" style="background-color: #c51712">
                                <span><i class="fa-solid fa-phone"></i></span>
                            </div>
                            <div class="hero-card-text text-center px-2">
                                @if(!empty(config('settings.heroCardTitle3')))
                                    <h4>{{config('settings.heroCardTitle3')}}</h4>
                                @endif
                                <div>
                                    @if(!empty(config('settings.heroCardBoldDescription3')))
                                        <div class="fw-bold">{{config('settings.heroCardBoldDescription3')}}</div>
                                    @endif
                                    @if(!empty(config('settings.heroCardDescription3')))
                                        <div>{{config('settings.heroCardDescription3')}}</div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="hero-cards-mobile">
                <div class="swiper hero-cards-mobile-swiper">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="col-sm-12 col-lg-12 col-md-12">
                                <div
                                    class="hero-card hero-card-mobile d-flex justify-content-center align-items-center flex-column">
                                    <div class="hero-card-icon-box" style="background-color: #c51712">
                                        <span><i class="fa-regular fa-clock"></i></span>
                                    </div>
                                    <div class="hero-card-text  text-center px-2">
                                        @if(!empty(config('settings.heroCardTitle1')))
                                            <h4>{{config('settings.heroCardTitle1')}}</h4>
                                        @endif
                                        <div>
                                            @if(!empty(config('settings.heroCardBoldDescription1')))
                                                <span
                                                    class="fw-bold">{{config('settings.heroCardBoldDescription1')}}</span>
                                            @endif
                                            @if(!empty(config('settings.heroCardDescription1')))
                                                <span>{{config('settings.heroCardDescription1')}}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="col-sm-12 col-md-12 col-lg-12 ">
                                <div
                                    class="hero-card hero-card-mobile d-flex justify-content-center align-items-center flex-column">
                                    <div class="hero-card-icon-box" style="background-color: #c51712">
                                        <span><i class="fa-solid fa-location-dot"></i></span>
                                    </div>
                                    <div class="hero-card-text  text-center px-2">
                                        @if(!empty(config('settings.heroCardTitle2')))
                                            <h4>{{config('settings.heroCardTitle2')}}</h4>
                                        @endif
                                        <div>
                                            @if(!empty(config('settings.heroCardBoldDescription2')))
                                                <span
                                                    class="fw-bold">{{config('settings.heroCardBoldDescription2')}}</span>
                                            @endif
                                            @if(!empty(config('settings.heroCardDescription2')))
                                                <span>{{config('settings.heroCardDescription2')}}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="col-sm-12 col-md-12 col-lg-12 ">
                                <div
                                    class="hero-card hero-card-mobile d-flex justify-content-center align-items-center flex-column">
                                    <div class="hero-card-icon-box" style="background-color: #c51712">
                                        <span><i class="fa-solid fa-phone"></i></span>
                                    </div>
                                    <div class="hero-card-text  text-center px-2">
                                        @if(!empty(config('settings.heroCardTitle3')))
                                            <h4>{{config('settings.heroCardTitle3')}}</h4>
                                        @endif
                                        <div>
                                            @if(!empty(config('settings.heroCardBoldDescription3')))
                                                <span
                                                    class="fw-bold">{{config('settings.heroCardBoldDescription3')}}</span>
                                            @endif
                                            @if(!empty(config('settings.heroCardDescription3')))
                                                <span>{{config('settings.heroCardDescription3')}}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="water-heating-section">
        @foreach($productCategories as $productCategory)
            @if($productCategory->parent_id == null && $productsAll[$productCategory->id] != null)
                <div class="water-heating-section-title container mb-5 d-flex justify-content-center align-items-center flex-column fs-2 mt-5">
                    <div>{{$productCategory->name}}</div>
                    <div class="fs-5 mt-4">
                        <button class="btn-primary p-2">
                            <a href="{{route('products.index', ['categoryAll' => $productCategory->id])}}"
                               class="text-decoration-none text-white">Tümünü Gör</a>
                        </button>
                    </div>
                </div>
            <div class="container-fluid">
            <div class="row ">
                        @foreach($productsAll[$productCategory->id] as $i=>$product)
                            @if($i == 6 )
                                @break
                             @endif

                                <div class="col-lg-4 col-xl-3 col-xxl-2 col-md-4 col-sm-6 d-flex align-items-center justify-content-center">
                                    <div class="card mt-3">
                                        <div class="product-card-title p-3">
                                            <div class="fw-bold">
                                                {{$product->name}}
                                            </div>
                                            <div>
                                                {{$product->sub_name}}
                                            </div>
                                        </div>
                                        <div class="overflow-hidden card-img-wrapper">
                                            <img
                                                src="{{$product->getFirstMediaUrl('logo')}}"
                                                class="img-fluid card-img-top lazy" alt="...">
                                        </div>
                                        <div
                                            class="card-body product-card-body-button d-flex justify-content-end align-items-center">
                                            <a href="{{route('products.show', ['product_id' => $product->id])}}" class="text-decoration-none">İNCELE</a>
                                        </div>
                                    </div>
                                </div>
                        @endforeach
            </div>
            </div>
            @endif
        @endforeach

    </section>
    <section class="homepage-who-we-are mt-5">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <div class="homepage-who-we-are-image">
                        <img
                            src="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/didem-gorseller-2023-02-14T131858.657-removebg-preview.png')}}">
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6">
                    @if(!empty(config('settings.homePageAboutUsTitle')))
                        <strong>
                            {{config('settings.homePageAboutUsTitle')}}
                        </strong>
                    @endif
                    <div class="homepage-who-we-are-dots">
                        <div>
                     <span class="hero-dot-item me-1">
                         <i class="fa-solid fa-circle"></i>
                     </span>
                            <span class="hero-dot-item me-1">
                         <i class="fa-solid fa-circle"></i>
                     </span>
                            <span class="hero-dot-item me-1">
                         <i class="fa-solid fa-circle"></i>
                     </span>
                            <span class="hero-dot-item">
                         <i class="fa-solid fa-circle"></i>
                     </span>
                        </div>
                    </div>
                    @if(!empty(config('settings.homePageAboutUsDescription')))
                        <div class="homepage-who-we-are-text text-muted mt-3">
                            {{config('settings.homePageAboutUsDescription')}}
                        </div>
                    @endif
                    <div class="mt-4">
                        @if(!empty(config('settings.homePageQualityPolicyTitleBlack')))
                            <span class="fw-bold">
                        {{config('settings.homePageQualityPolicyTitleBlack')}}
                    </span>
                        @endif
                        @if(!empty(config('settings.homePageQualityPolicyTitleRed')))

                            <span style="color: red" class="fw-bold">
                                                {{config('settings.homePageQualityPolicyTitleRed')}}

                    </span>
                        @endif()
                    </div>
                    @if(!empty(config('settings.homePageQualityPolicyDescription')))
                        <div class="homepage-who-we-are-text text-muted mt-4">
                            {{config('settings.homePageQualityPolicyDescription')}}
                        </div>
                    @endif
                    <div class="mt-4">
                        <a class="px-4 py-2 btn btn-primary " href="{{route('contacts')}}">İLETİŞİME GEÇ</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="homepage-consultancy mt-5 text-center d-flex justify-content-center align-items-center">
        <div>
            <div>
                @if(!empty(config('settings.homePageBannerTitle')))
                    <h3 class="mb-2">
                        {{config('settings.homePageBannerTitle')}}</h3>
                @endif
                <div class="text-center mb-3 hero-dots">
                    <div>
                     <span class="hero-dot-item me-2">
                         <i class="fa-solid fa-circle"></i>
                     </span>
                        <span class="hero-dot-item me-2">
                         <i class="fa-solid fa-circle"></i>
                     </span>
                        <span class="hero-dot-item me-2">
                         <i class="fa-solid fa-circle"></i>
                     </span>
                        <span class="hero-dot-item">
                         <i class="fa-solid fa-circle"></i>
                     </span>
                    </div>
                </div>
                @if(!empty(config('settings.homePageBannerDescription')))
                    <div class="fs-6 my-4 homepage-consultancy-text text-center col-md-8 col-sm-12 col-lg-8"
                         style="color: #9ca3af">
                        {{config('settings.homePageBannerDescription')}}
                    </div>
                @endif
            </div>
            <div class="mt-5">
                <a class="px-3 py-2 btn btn-primary " href="{{route('contacts')}}">UZMAN İLE GÖRÜŞ</a>
            </div>
        </div>
    </section>
    <section class="homepage-our-services mt-5 text-center">
        <div class="container">
            <div>
                @if(!empty(config('settings.homePageServicesTitle')))
                    <div>
                        <h1>{{config('settings.homePageServicesTitle')}}</h1>
                    </div>
                @endif
                <div class="text-center my-2 hero-dots">
                    <div>
                     <span class="hero-dot-item me-2">
                         <i class="fa-solid fa-circle"></i>
                     </span>
                        <span class="hero-dot-item me-2">
                         <i class="fa-solid fa-circle"></i>
                     </span>
                        <span class="hero-dot-item me-2">
                         <i class="fa-solid fa-circle"></i>
                     </span>
                        <span class="hero-dot-item">
                         <i class="fa-solid fa-circle"></i>
                     </span>
                    </div>
                </div>
                @if(!empty(config('settings.homePageServicesDescription')))
                    <div
                        class="homepage-our-services-text text-muted text-center fs-6 my-5 col-md-8 col-sm-12 col-lg-8">
                        {{config('settings.homePageServicesDescription')}}
                    </div>
                @endif
                <div class="homepage-our-services-cards">
                    <div class="row">
                        <div class="col-md-4 col-sm-12 col-lg-4">
                            <div class="homepage-our-services-cards-card">
                                <div class="mb-3 homepage-our-services-icon">
                                    <i class="fa-solid fa-industry"></i>
                                </div>
                                @if(!empty(config('settings.homePageServicesCardTitle1')))
                                    <h3 class="mb-3">
                                        {{config('settings.homePageServicesCardTitle1')}}
                                    </h3>
                                @endif
                                @if(!empty(config('settings.homePageServicesCardDescription1')))
                                    <div class="text-muted">
                                        {{config('settings.homePageServicesCardDescription1')}}
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12 col-lg-4">
                            <div class="homepage-our-services-cards-card">
                                <div class="mb-3 homepage-our-services-icon">
                                    <i class="fa-solid fa-sun "></i>
                                </div>
                                @if(!empty(config('settings.homePageServicesCardTitle2')))
                                    <h3 class="mb-3">
                                        {{config('settings.homePageServicesCardTitle2')}}
                                    </h3>
                                @endif
                                @if(!empty(config('settings.homePageServicesCardDescription2')))
                                    <div class="text-muted">
                                        {{config('settings.homePageServicesCardDescription2')}}
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12 col-lg-4">
                            <div class="homepage-our-services-cards-card">
                                <div class="mb-3 homepage-our-services-icon">
                                    <i class="fa-solid fa-solar-panel"></i>
                                </div>
                                @if(!empty(config('settings.homePageServicesCardTitle3')))
                                    <h3 class="mb-3">
                                        {{config('settings.homePageServicesCardTitle3')}}
                                    </h3>
                                @endif
                                @if(!empty(config('settings.homePageServicesCardDescription3')))
                                    <div class="text-muted">
                                        {{config('settings.homePageServicesCardDescription3')}}
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="homepage-tab-menu mt-5">
        <nav>
            <div class="d-flex align-items-center justify-content-center">
                <div class="nav nav-tabs" id="nav-tab" role="tablist">

                    @foreach($galleries as $i =>$gallery)
                        @if($i == 0)
                        <button class="nav-link active home-page-tab-menu-btn" id="nav-su-water-heating-tab"
                                data-bs-toggle="tab" data-bs-target="#{{$gallery->id}}"
                                type="button" role="tab" aria-controls="nav-su-water-heating" aria-selected="false">{{$gallery->name}}
                        </button>
                        @else
                            <button class="nav-link  home-page-tab-menu-btn" id="nav-su-water-heating-tab"
                                    data-bs-toggle="tab" data-bs-target="#{{$gallery->id}}"
                                    type="button" role="tab" aria-controls="nav-su-water-heating" aria-selected="false">{{$gallery->name}}
                            </button>
                        @endif
                    @endforeach
                </div>
            </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">

            @foreach($galleries as $i=>$gallery)
                @if($i == 0)
                <div class="tab-pane fade show active" id="{{$gallery->id}}" role="tabpanel"
                     aria-labelledby="nav-su-water-heating-tab" tabindex="0">

                    <div class="row g-0">
                        @foreach($gallery->media->take(8) as $media)
                        <div class="col-lg-3 col-sm-12 col-md-6">
                            <a href="{{$media->getUrl()}}"
                               class="image-link-solar-heating">
                                <div class="homepage-tab-menu-product-img">
                                    <div class="homepage-tab-menu-product-icon-wrapper">
                                        <i class="fa-solid fa-magnifying-glass homepage-tab-menu-product-icon"></i>
                                    </div>
                                    <img src="{{$media->getUrl()}}"
                                         alt="" class="w-100">
                                </div>
                            </a>
                        </div>
                        @endforeach
                    </div>

                </div>
                @else
                    <div class="tab-pane fade" id="{{$gallery->id}}" role="tabpanel"
                         aria-labelledby="nav-su-water-heating-tab" tabindex="0">

                        <div class="row g-0">
                            @foreach($gallery->media->take(8) as $media)
                                <div class="col-lg-3 col-sm-12 col-md-6">
                                    <a href="{{$media->getUrl()}}"
                                       class="image-link-solar-heating">
                                        <div class="homepage-tab-menu-product-img">
                                            <div class="homepage-tab-menu-product-icon-wrapper">
                                                <i class="fa-solid fa-magnifying-glass homepage-tab-menu-product-icon"></i>
                                            </div>
                                            <img src="{{$media->getUrl()}}"
                                                 alt="" class="w-100">
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        </div>

                    </div>
                @endif
            @endforeach
        </div>
    </section>
    <section class="goals">
        <div class="container">
            <div class="row g-5 align-items-center justify-content-center">
                <div class="col-lg-3 col-md-12 col-sm-12">
                    <div class="flex-column">
                        @if(!empty(config('settings.homePageOurGoalsTitle')))
                            <div>
                                <h2>{{config('settings.homePageOurGoalsTitle')}}</h2>
                            </div>
                        @endif
                        <div>
                            <div class="mb-3 hero-dots">
                                <div>
                     <span class="hero-dot-item me-2">
                         <i class="fa-solid fa-circle"></i>
                     </span>
                                    <span class="hero-dot-item me-2">
                         <i class="fa-solid fa-circle"></i>
                     </span>
                                    <span class="hero-dot-item me-2">
                         <i class="fa-solid fa-circle"></i>
                     </span>
                                    <span class="hero-dot-item">
                         <i class="fa-solid fa-circle"></i>
                     </span>
                                </div>
                            </div>
                        </div>
                        @if(!empty(config('settings.homePageOurGoalsDescription')))
                            <div class="text-muted">
                                {{config('settings.homePageOurGoalsDescription')}}
                            </div>
                        @endif
                        <div>
                            <div class="mt-4">
                                <a class="px-4 py-2 btn btn-primary " href="{{route('contacts')}}">İLETİŞİME GEÇ</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-sm-12 col-md-12">
                    <div class="row ">
                        <div class="col-lg-6 col-sm-12 col-md-6">
                            <div class="d-flex align-items-center goal-wrapper">
                                <div class="goal-item-icon-box-wrapper me-3">
                                    <div class="goal-item-icon-box">
                                        <i class="fa-solid fa-globe"></i>
                                    </div>
                                </div>
                                <div class="goal-item-text ms-4">
                                    @if(!empty(config('settings.homePageOurGoalsCardTitle1')))
                                        <div>
                                            <h4>
                                                {{config('settings.homePageOurGoalsCardTitle1')}}
                                            </h4>
                                        </div>
                                    @endif
                                    @if(!empty(config('settings.homePageOurGoalsCardDescription1')))

                                        <div class="text-muted">
                                            {{config('settings.homePageOurGoalsCardDescription1')}}
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <div class="d-flex align-items-center goal-wrapper">
                                <div class="goal-item-icon-box-wrapper me-3">
                                    <div class="goal-item-icon-box">
                                        <i class="fa-regular fa-lightbulb"></i>
                                    </div>
                                </div>
                                <div class="goal-item-text ms-4">
                                    @if(!empty(config('settings.homePageOurGoalsCardTitle2')))
                                        <div>
                                            <h4>
                                                {{config('settings.homePageOurGoalsCardTitle2')}}
                                            </h4>
                                        </div>
                                    @endif
                                    @if(!empty(config('settings.homePageOurGoalsCardDescription2')))

                                        <div class="text-muted">
                                            {{config('settings.homePageOurGoalsCardDescription2')}}
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12 col-md-6">
                            <div class="d-flex align-items-center goal-wrapper">
                                <div class="goal-item-icon-box-wrapper me-3">
                                    <div class="goal-item-icon-box">
                                        <i class="fa-brands fa-envira"></i>
                                    </div>
                                </div>
                                <div class="goal-item-text ms-4">
                                    @if(!empty(config('settings.homePageOurGoalsCardTitle3')))
                                        <div>
                                            <h4>
                                                {{config('settings.homePageOurGoalsCardTitle3')}}
                                            </h4>
                                        </div>
                                    @endif
                                    @if(!empty(config('settings.homePageOurGoalsCardDescription3')))

                                        <div class="text-muted">
                                            {{config('settings.homePageOurGoalsCardDescription3')}}
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <div class="d-flex align-items-center goal-wrapper">
                                <div class="goal-item-icon-box-wrapper me-3">
                                    <div class="goal-item-icon-box">
                                        <i class="fa-solid fa-recycle"></i>
                                    </div>
                                </div>
                                <div class="goal-item-text ms-4">
                                    @if(!empty(config('settings.homePageOurGoalsCardTitle4')))
                                        <div>
                                            <h4>
                                                {{config('settings.homePageOurGoalsCardTitle4')}}
                                            </h4>
                                        </div>
                                    @endif
                                    @if(!empty(config('settings.homePageOurGoalsCardDescription4')))

                                        <div class="text-muted">
                                            {{config('settings.homePageOurGoalsCardDescription4')}}
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="comments">
        <div class="container">
            <div class="swiper comments-swiper">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    @foreach($comments as $comment)
                    <div class="swiper-slide comments-swiper-slide">
                        <div class="comment-member-img">
                            <img src="{{$comment->getFirstMediaUrl('logo','thumb')}}"
                                 alt="avatarimg">
                        </div>
                        <div class="comment-member-description my-5">{!!  $comment->comment !!}
                        </div>
                        <div class="comment-member-name"><h5>{{$comment->name}}</h5></div>
                        <div class="comment-member-title">{{$comment->title}}</div>
                    </div>
                    @endforeach
                </div>
                <div class="swiper-button-prev comments-swiper-btns"></div>
                <div class="swiper-button-next comments-swiper-btns"></div>
            </div>
        </div>
    </section>

@endsection


