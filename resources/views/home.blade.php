@extends('layouts.layout')
@section('content')
    <section class="hero-section ">
        <div class="container">
            <div class="text-center">
                <div class="hero-title text-center mb-1">
                    <h1 class="mb-0">Güneş ile gelen</h1>
                    <h1 class="mb-0">enerji</h1>
                </div>
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
                <div class="hero-description-wrapper text-center mb-3">
                    <div class="hero-description">1998 yılından itibaren faaliyet gösteren Özay Güneş Enerji Sistemleri
                        toptan ve perakende satış hizmeti vermektedir. Türkiye çapında ve Bayilerimizle ısıtma
                        sektöründe hizmet vermeye devam ediyoruz.
                    </div>
                </div>
                <button type="button" class="px-3 py-2 btn btn-primary">Hakkımızda</button>

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
                                <h4>Tam Zamanında</h4>
                                <div>
                                    <span class="fw-bold">Haftanın 7 gün 24 saati </span>
                                    <span>hizmet veriyoruz</span>
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
                                <h4>Hemen Yanınızda</h4>
                                <div>
                                    <div class="fw-bold">Uzman servis ekibimiz ile ...</div>
                                    <div>En kısa sürede yanınızdayız.</div>
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
                                <h4>Tam Zamanında</h4>
                                <div>
                                    <span class="fw-bold">Haftanın 7 gün 24 saati </span>
                                    <span>hizmet veriyoruz</span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="water-heating-section">
        <div
            class="water-heating-section-title container mb-5 d-flex justify-content-center align-items-center flex-column fs-2">
            <div>
                GÜNEŞ ENERJİ
            </div>
            <strong>
                SU ISITMA SİSTEMLERİ
            </strong>
        </div>
        <!-- Slider main container -->
        <div class="">
            <div class="swiper product-water-heating-swiper product-water-heating-main-swiper">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="card">
                            <div class="product-card-title p-3">
                                <div>18 VAKUM TÜPLÜ</div>
                                <div>STATİK GÜNEŞ ENERJİSİ</div>
                            </div>
                            <div class="overflow-hidden">
                                <img
                                    src="{{Vite::asset('resources/images/ozay-panel.png') }}"
                                    class="card-img-top lazy" alt="...">
                            </div>
                            <div
                                class="card-body product-card-body-button d-flex justify-content-end align-items-center">
                                <a href="#" class="text-decoration-none">İNCELE</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card">
                            <div class="product-card-title p-3">
                                <div>18 VAKUM TÜPLÜ</div>
                                <div>STATİK GÜNEŞ ENERJİSİ</div>
                            </div>
                            <div class="overflow-hidden">
                                <img
                                    src="{{Vite::asset('resources/images/ozay-panel.png') }}"
                                    class="card-img-top lazy" alt="...">
                            </div>
                            <div
                                class="card-body product-card-body-button d-flex justify-content-end align-items-center">
                                <a href="#" class="text-decoration-none">İNCELE</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card">
                            <div class="product-card-title p-3">
                                <div>18 VAKUM TÜPLÜ</div>
                                <div>STATİK GÜNEŞ ENERJİSİ</div>
                            </div>
                            <div class="overflow-hidden">
                                <img
                                    src="{{Vite::asset('resources/images/ozay-panel.png') }}"
                                    class="card-img-top lazy" alt="...">
                            </div>
                            <div
                                class="card-body product-card-body-button d-flex justify-content-end align-items-center">
                                <a href="#" class="text-decoration-none">İNCELE</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card">
                            <div class="product-card-title p-3">
                                <div>18 VAKUM TÜPLÜ</div>
                                <div>STATİK GÜNEŞ ENERJİSİ</div>
                            </div>
                            <div class="overflow-hidden">
                                <img
                                    src="{{Vite::asset('resources/images/ozay-panel.png') }}"
                                    class="card-img-top lazy" alt="...">
                            </div>
                            <div
                                class="card-body product-card-body-button d-flex justify-content-end align-items-center">
                                <a href="#" class="text-decoration-none">İNCELE</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card">
                            <div class="product-card-title p-3">
                                <div>18 VAKUM TÜPLÜ</div>
                                <div>STATİK GÜNEŞ ENERJİSİ</div>
                            </div>
                            <div class="overflow-hidden">
                                <img
                                    src="{{Vite::asset('resources/images/ozay-panel.png') }}"
                                    class="card-img-top lazy" alt="...">
                            </div>
                            <div
                                class="card-body product-card-body-button d-flex justify-content-end align-items-center">
                                <a href="#" class="text-decoration-none">İNCELE</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card">
                            <div class="product-card-title p-3">
                                <div>18 VAKUM TÜPLÜ</div>
                                <div>STATİK GÜNEŞ ENERJİSİ</div>
                            </div>
                            <div class="overflow-hidden">
                                <img
                                    src="{{Vite::asset('resources/images/ozay-panel.png') }}"
                                    class="card-img-top lazy" alt="...">
                            </div>
                            <div
                                class="card-body product-card-body-button d-flex justify-content-end align-items-center">
                                <a href="#" class="text-decoration-none">İNCELE</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card">
                            <div class="product-card-title p-3">
                                <div>18 VAKUM TÜPLÜ</div>
                                <div>STATİK GÜNEŞ ENERJİSİ</div>
                            </div>
                            <div class="overflow-hidden">
                                <img
                                    src="{{Vite::asset('resources/images/ozay-panel.png') }}"
                                    class="card-img-top lazy" alt="...">
                            </div>
                            <div
                                class="card-body product-card-body-button d-flex justify-content-end align-items-center">
                                <a href="#" class="text-decoration-none">İNCELE</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card">
                            <div class="product-card-title p-3">
                                <div>18 VAKUM TÜPLÜ</div>
                                <div>STATİK GÜNEŞ ENERJİSİ</div>
                            </div>
                            <div class="overflow-hidden">
                                <img
                                    src="{{Vite::asset('resources/images/ozay-panel.png') }}"
                                    class="card-img-top lazy" alt="...">
                            </div>
                            <div
                                class="card-body product-card-body-button d-flex justify-content-end align-items-center">
                                <a href="#" class="text-decoration-none">İNCELE</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card">
                            <div class="product-card-title p-3">
                                <div>18 VAKUM TÜPLÜ</div>
                                <div>STATİK GÜNEŞ ENERJİSİ</div>
                            </div>
                            <div class="overflow-hidden">
                                <img
                                    src="{{Vite::asset('resources/images/ozay-panel.png') }}"
                                    class="card-img-top lazy" alt="...">
                            </div>
                            <div
                                class="card-body product-card-body-button d-flex justify-content-end align-items-center">
                                <a href="#" class="text-decoration-none">İNCELE</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card">
                            <div class="product-card-title p-3">
                                <div>18 VAKUM TÜPLÜ</div>
                                <div>STATİK GÜNEŞ ENERJİSİ</div>
                            </div>
                            <div class="overflow-hidden">
                                <img
                                    src="{{Vite::asset('resources/images/ozay-panel.png') }}"
                                    class="card-img-top lazy" alt="...">
                            </div>
                            <div
                                class="card-body product-card-body-button d-flex justify-content-end align-items-center">
                                <a href="#" class="text-decoration-none">İNCELE</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card">
                            <div class="product-card-title p-3">
                                <div>18 VAKUM TÜPLÜ</div>
                                <div>STATİK GÜNEŞ ENERJİSİ</div>
                            </div>
                            <div class="overflow-hidden">
                                <img
                                    src="{{Vite::asset('resources/images/ozay-panel.png') }}"
                                    class="card-img-top lazy" alt="...">
                            </div>
                            <div
                                class="card-body product-card-body-button d-flex justify-content-end align-items-center">
                                <a href="#" class="text-decoration-none">İNCELE</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card">
                            <div class="product-card-title p-3">
                                <div>18 VAKUM TÜPLÜ</div>
                                <div>STATİK GÜNEŞ ENERJİSİ</div>
                            </div>
                            <div class="overflow-hidden">
                                <img
                                    src="{{Vite::asset('resources/images/ozay-panel.png') }}"
                                    class="card-img-top lazy" alt="...">
                            </div>
                            <div
                                class="card-body product-card-body-button d-flex justify-content-end align-items-center">
                                <a href="#" class="text-decoration-none">İNCELE</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card">
                            <div class="product-card-title p-3">
                                <div>18 VAKUM TÜPLÜ</div>
                                <div>STATİK GÜNEŞ ENERJİSİ</div>
                            </div>
                            <div class="overflow-hidden">
                                <img
                                    src="{{Vite::asset('resources/images/ozay-panel.png') }}"
                                    class="card-img-top lazy" alt="...">
                            </div>
                            <div
                                class="card-body product-card-body-button d-flex justify-content-end align-items-center">
                                <a href="#" class="text-decoration-none">İNCELE</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card">
                            <div class="product-card-title p-3">
                                <div>18 VAKUM TÜPLÜ</div>
                                <div>STATİK GÜNEŞ ENERJİSİ</div>
                            </div>
                            <div class="overflow-hidden">
                                <img
                                    src="{{Vite::asset('resources/images/ozay-panel.png') }}"
                                    class="card-img-top lazy" alt="...">
                            </div>
                            <div
                                class="card-body product-card-body-button d-flex justify-content-end align-items-center">
                                <a href="#" class="text-decoration-none">İNCELE</a>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="swiper-pagination-wrapper">
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </section>
    <section class="water-heating-section">
        <div
            class="water-heating-section-title container mb-5 d-flex justify-content-center align-items-center flex-column fs-2">
            <div>
                GÜNEŞ ENERJİ
            </div>
            <strong>
                PV PAKET SİSTEMLERİ
            </strong>
        </div>
        <!-- Slider main container -->
        <div class="">
            <div class="swiper product-water-heating-swiper product-water-heating-pv-package-swiper">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="card">
                            <div class="product-card-title p-3">
                                <div>GÜNEŞ PANELİ</div>
                                <div>PAKET SİSTEM 3</div>
                            </div>
                            <div class="overflow-hidden">
                                <img loading="lazy"
                                     src="{{Vite::asset('resources/images/ozay-pvc.webp')}}"
                                     class="card-img-top lazy" alt="...">
                            </div>
                            <div class="swiper-lazy-preloader"></div>
                            <div
                                class="card-body product-card-body-button d-flex justify-content-end align-items-center">
                                <a href="#" class="text-decoration-none">İNCELE</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card">
                            <div class="product-card-title p-3">
                                <div>GÜNEŞ PANELİ</div>
                                <div>PAKET SİSTEM 3</div>
                            </div>
                            <div class="overflow-hidden">
                                <img loading="lazy"
                                     src="{{Vite::asset('resources/images/ozay-pvc.webp')}}"
                                     class="card-img-top lazy" alt="...">
                            </div>
                            <div class="swiper-lazy-preloader"></div>
                            <div
                                class="card-body product-card-body-button d-flex justify-content-end align-items-center">
                                <a href="#" class="text-decoration-none">İNCELE</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card">
                            <div class="product-card-title p-3">
                                <div>GÜNEŞ PANELİ</div>
                                <div>PAKET SİSTEM 3</div>
                            </div>
                            <div class="overflow-hidden">
                                <img loading="lazy"
                                     src="{{Vite::asset('resources/images/ozay-pvc.webp')}}"
                                     class="card-img-top lazy" alt="...">
                            </div>
                            <div class="swiper-lazy-preloader"></div>
                            <div
                                class="card-body product-card-body-button d-flex justify-content-end align-items-center">
                                <a href="#" class="text-decoration-none">İNCELE</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card">
                            <div class="product-card-title p-3">
                                <div>GÜNEŞ PANELİ</div>
                                <div>PAKET SİSTEM 3</div>
                            </div>
                            <div class="overflow-hidden">
                                <img loading="lazy"
                                     src="{{Vite::asset('resources/images/ozay-pvc.webp')}}"
                                     class="card-img-top lazy" alt="...">
                            </div>
                            <div class="swiper-lazy-preloader"></div>
                            <div
                                class="card-body product-card-body-button d-flex justify-content-end align-items-center">
                                <a href="#" class="text-decoration-none">İNCELE</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card">
                            <div class="product-card-title p-3">
                                <div>GÜNEŞ PANELİ</div>
                                <div>PAKET SİSTEM 3</div>
                            </div>
                            <div class="overflow-hidden">
                                <img loading="lazy"
                                     src="{{Vite::asset('resources/images/ozay-pvc.webp')}}"
                                     class="card-img-top lazy" alt="...">
                            </div>
                            <div class="swiper-lazy-preloader"></div>
                            <div
                                class="card-body product-card-body-button d-flex justify-content-end align-items-center">
                                <a href="#" class="text-decoration-none">İNCELE</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card">
                            <div class="product-card-title p-3">
                                <div>GÜNEŞ PANELİ</div>
                                <div>PAKET SİSTEM 3</div>
                            </div>
                            <div class="overflow-hidden">
                                <img loading="lazy"
                                     src="{{Vite::asset('resources/images/ozay-pvc.webp')}}"
                                     class="card-img-top lazy" alt="...">
                            </div>
                            <div class="swiper-lazy-preloader"></div>
                            <div
                                class="card-body product-card-body-button d-flex justify-content-end align-items-center">
                                <a href="#" class="text-decoration-none">İNCELE</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card">
                            <div class="product-card-title p-3">
                                <div>GÜNEŞ PANELİ</div>
                                <div>PAKET SİSTEM 3</div>
                            </div>
                            <div class="overflow-hidden">
                                <img loading="lazy"
                                     src="{{Vite::asset('resources/images/ozay-pvc.webp')}}"
                                     class="card-img-top lazy" alt="...">
                            </div>
                            <div class="swiper-lazy-preloader"></div>
                            <div
                                class="card-body product-card-body-button d-flex justify-content-end align-items-center">
                                <a href="#" class="text-decoration-none">İNCELE</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card">
                            <div class="product-card-title p-3">
                                <div>GÜNEŞ PANELİ</div>
                                <div>PAKET SİSTEM 3</div>
                            </div>
                            <div class="overflow-hidden">
                                <img loading="lazy"
                                     src="{{Vite::asset('resources/images/ozay-pvc.webp')}}"
                                     class="card-img-top lazy" alt="...">
                            </div>
                            <div class="swiper-lazy-preloader"></div>
                            <div
                                class="card-body product-card-body-button d-flex justify-content-end align-items-center">
                                <a href="#" class="text-decoration-none">İNCELE</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card">
                            <div class="product-card-title p-3">
                                <div>GÜNEŞ PANELİ</div>
                                <div>PAKET SİSTEM 3</div>
                            </div>
                            <div class="overflow-hidden">
                                <img loading="lazy"
                                     src="{{Vite::asset('resources/images/ozay-pvc.webp')}}"
                                     class="card-img-top lazy" alt="...">
                            </div>
                            <div class="swiper-lazy-preloader"></div>
                            <div
                                class="card-body product-card-body-button d-flex justify-content-end align-items-center">
                                <a href="#" class="text-decoration-none">İNCELE</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card">
                            <div class="product-card-title p-3">
                                <div>GÜNEŞ PANELİ</div>
                                <div>PAKET SİSTEM 3</div>
                            </div>
                            <div class="overflow-hidden">
                                <img loading="lazy"
                                     src="{{Vite::asset('resources/images/ozay-pvc.webp')}}"
                                     class="card-img-top lazy" alt="...">
                            </div>
                            <div class="swiper-lazy-preloader"></div>
                            <div
                                class="card-body product-card-body-button d-flex justify-content-end align-items-center">
                                <a href="#" class="text-decoration-none">İNCELE</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card">
                            <div class="product-card-title p-3">
                                <div>GÜNEŞ PANELİ</div>
                                <div>PAKET SİSTEM 3</div>
                            </div>
                            <div class="overflow-hidden">
                                <img loading="lazy"
                                     src="{{Vite::asset('resources/images/ozay-pvc.webp')}}"
                                     class="card-img-top lazy" alt="...">
                            </div>
                            <div class="swiper-lazy-preloader"></div>
                            <div
                                class="card-body product-card-body-button d-flex justify-content-end align-items-center">
                                <a href="#" class="text-decoration-none">İNCELE</a>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="swiper-pagination-wrapper">
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
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
                    <strong>
                        Biz Kimiz ?
                    </strong>
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
                    <div class="homepage-who-we-are-text text-muted mt-3">
                        1998 yılından itibaren faaliyet gösteren Özay Güneş Enerji Sistemleri toptan ve perakende satış
                        hizmeti vermektedir. Türkiye çapında Şube ve Bayilerimizle ısıtma sektöründe hizmet vermeye
                        devam
                        ediyoruz.
                    </div>
                    <div class="mt-4">
                    <span class="fw-bold">
                        Kalite
                    </span>
                        <span style="color: red" class="fw-bold">
                        Politikamız
                    </span>
                    </div>
                    <div class="homepage-who-we-are-text text-muted mt-4">
                        Tüm çalışanlarımızın ortak katılım vev çabaları ile kalite hedefleri doğrultusunda sürekli
                        iyileştirme çalışmaları yapmak, müşterilerimizin ihtiyaç ve beklentilerini karşılayacak kalite
                        seviyesini eğitimli teknik elemanlar ile sağlamak. Vakum Tüplü Güneş enerjisi sistemleri
                        sektöründe,
                        rekabet ortamına bağlı olarak, kalitede lider olabilmek için çalışmak firmamızın temel
                        politikasıdır.
                    </div>
                    <div class="mt-4">
                        <button type="button" class="px-4 py-2 btn btn-primary">İLETİŞİME GEÇ</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="homepage-consultancy mt-5 text-center d-flex justify-content-center align-items-center">
        <div>
            <div>
                <h3 class="mb-2">
                    Projeniz Hakkında Ücretsiz Danışmanlık
                </h3>
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
                <div class="fs-6 my-4 homepage-consultancy-text text-center col-md-8 col-sm-12 col-lg-8"
                     style="color: #9ca3af">
                    Nasıl başlayacağınızı bilmiyorsanız doğru yerdesiniz. Özay Tubular uzmanlarımız, 15 yılı aşkın
                    tecrübesi ile size en uygun çözümleri sunabilir. Aklınızdaki soru işaretleriniz varsa hemen bize
                    ulaşın.
                </div>
            </div>
            <div class="mt-5">
                <button type="button" class="px-3 py-2 btn  btn-primary ">UZMAN İLE GÖRÜŞ</button>
            </div>
        </div>
    </section>
    <section class="homepage-our-services mt-5 text-center">
        <div class="container">
            <div>
                <div>
                    <h1>Hizmetlerimiz</h1>
                </div>
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
                <div class="homepage-our-services-text text-muted text-center fs-6 my-5 col-md-8 col-sm-12 col-lg-8">
                    Rahatlayın! İster Endüstriyel isterseniz eviniz için, Su Isıtma ve Arıtma Sistemleri, Güneş Enerjisi
                    Panelleri ve tüm yedek parçalar konusunda çözüm bulabildiğiniz bir alandasınız.
                </div>
                <div class="homepage-our-services-cards">
                    <div class="row">
                        <div class="col-md-4 col-sm-12 col-lg-4">
                            <div class="homepage-our-services-cards-card">
                                <div class="mb-3 homepage-our-services-icon">
                                    <i class="fa-solid fa-industry"></i>
                                </div>
                                <h3 class="mb-3">
                                    Endüstriyel Enerji Sistemleri
                                </h3>
                                <div class="text-muted">
                                    Sanayi tipi yüksek kapasite güneş enerjisi sistemlerimiz ile sadece işinize
                                    odaklanın.
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12 col-lg-4">
                            <div class="homepage-our-services-cards-card">
                                <div class="mb-3 homepage-our-services-icon">
                                    <i class="fa-solid fa-sun "></i>
                                </div>
                                <h3 class="mb-3">
                                    Güneş Enerji Su Isıtma
                                </h3>
                                <div class="text-muted">
                                    The price for household energy supply has been all but skyrocketing for the las
                                    couple
                                    of decades. As one of.
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12 col-lg-4">
                            <div class="homepage-our-services-cards-card">
                                <div class="mb-3 homepage-our-services-icon">
                                    <i class="fa-solid fa-solar-panel"></i>
                                </div>
                                <h3 class="mb-3">
                                    Güneş PV Sistemleri
                                </h3>
                                <div class="text-muted">
                                    Since the days of our initial foundation in 1992, we've been focusing all of our
                                    efforts
                                    on making easy-to-buy, easy-to-use.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="homepage-tab-menu">
        <nav>
            <div class="d-flex align-items-center justify-content-center">
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <button class="nav-link active home-page-tab-menu-btn" id="nav-products-tab"
                            data-bs-toggle="tab" data-bs-target="#nav-products"
                            type="button" role="tab" aria-controls="nav-products" aria-selected="true">Tüm Ürünler
                    </button>
                    <button class="nav-link home-page-tab-menu-btn" id="nav-pv-systems-tab" data-bs-toggle="tab"
                            data-bs-target="#nav-pv-systems"
                            type="button" role="tab" aria-controls="nav-pv-systems" aria-selected="false">PV Sistemleri
                    </button>
                    <button class="nav-link home-page-tab-menu-btn" id="nav-su-water-heating-tab"
                            data-bs-toggle="tab" data-bs-target="#nav-su-water-heating"
                            type="button" role="tab" aria-controls="nav-su-water-heating" aria-selected="false">Güneş Su
                        Isıtma
                        Sistemleri
                    </button>
                </div>
            </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-products" role="tabpanel"
                 aria-labelledby="nav-products-tab"
                 tabindex="0">
                <div class="row g-0">
                    <div class="col-lg-3 col-sm-12 col-md-6">
                        <a href="{{\Illuminate\Support\Facades\Vite::asset('resources/images/product-1.png')}}"
                           class="image-link">
                            <div class="homepage-tab-menu-product-img project-gallery-image-item mb-4">
                                <div class="homepage-tab-menu-product-icon-wrapper">
                                    <i class="fa-solid fa-magnifying-glass homepage-tab-menu-product-icon"></i>
                                </div>
                                <img
                                    data-src="{{\Illuminate\Support\Facades\Vite::asset('resources/images/product-1.png')}}"
                                    alt="" class="w-100 img-fluid lazy">
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-12 col-md-6">
                        <a href="{{\Illuminate\Support\Facades\Vite::asset('resources/images/product-2.jpg')}}"
                           class="image-link">
                            <div class="homepage-tab-menu-product-img">
                                <div class="homepage-tab-menu-product-icon-wrapper">
                                    <i class="fa-solid fa-magnifying-glass homepage-tab-menu-product-icon"></i>
                                </div>
                                <img src="{{\Illuminate\Support\Facades\Vite::asset('resources/images/product-2.jpg')}}"
                                     alt="" class="w-100">
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-12 col-md-6">
                        <a href="{{\Illuminate\Support\Facades\Vite::asset('resources/images/product-3.jpg')}}"
                           class="image-link">
                            <div class="homepage-tab-menu-product-img">
                                <div class="homepage-tab-menu-product-icon-wrapper">
                                    <i class="fa-solid fa-magnifying-glass homepage-tab-menu-product-icon"></i>
                                </div>
                                <img src="{{\Illuminate\Support\Facades\Vite::asset('resources/images/product-3.jpg')}}"
                                     alt="" class="w-100">
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-12 col-md-6">
                        <a href="{{\Illuminate\Support\Facades\Vite::asset('resources/images/product-4.jpg')}}"
                           class="image-link">
                            <div class="homepage-tab-menu-product-img">
                                <div class="homepage-tab-menu-product-icon-wrapper">
                                    <i class="fa-solid fa-magnifying-glass homepage-tab-menu-product-icon"></i>
                                </div>
                                <img src="{{\Illuminate\Support\Facades\Vite::asset('resources/images/product-4.jpg')}}"
                                     alt="" class="w-100">
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-12 col-md-6">
                        <a href="{{\Illuminate\Support\Facades\Vite::asset('resources/images/product-4.jpg')}}"
                           class="image-link">
                            <div class="homepage-tab-menu-product-img">
                                <div class="homepage-tab-menu-product-icon-wrapper">
                                    <i class="fa-solid fa-magnifying-glass homepage-tab-menu-product-icon"></i>
                                </div>
                                <img src="{{\Illuminate\Support\Facades\Vite::asset('resources/images/product-4.jpg')}}"
                                     alt="" class="w-100">
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-12 col-md-6">
                        <a href="{{\Illuminate\Support\Facades\Vite::asset('resources/images/product-3.jpg')}}"
                           class="image-link">
                            <div class="homepage-tab-menu-product-img">
                                <div class="homepage-tab-menu-product-icon-wrapper">
                                    <i class="fa-solid fa-magnifying-glass homepage-tab-menu-product-icon"></i>
                                </div>
                                <img src="{{\Illuminate\Support\Facades\Vite::asset('resources/images/product-3.jpg')}}"
                                     alt="" class="w-100">
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-12 col-md-6">
                        <a href="{{\Illuminate\Support\Facades\Vite::asset('resources/images/product-2.jpg')}}"
                           class="image-link">
                            <div class="homepage-tab-menu-product-img">
                                <div class="homepage-tab-menu-product-icon-wrapper">
                                    <i class="fa-solid fa-magnifying-glass homepage-tab-menu-product-icon"></i>
                                </div>
                                <img src="{{\Illuminate\Support\Facades\Vite::asset('resources/images/product-2.jpg')}}"
                                     alt="" class="w-100">
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-12 col-md-6">
                        <a href="{{\Illuminate\Support\Facades\Vite::asset('resources/images/product-1.png')}}"
                           class="image-link">
                            <div class="homepage-tab-menu-product-img">
                                <div class="homepage-tab-menu-product-icon-wrapper">
                                    <i class="fa-solid fa-magnifying-glass homepage-tab-menu-product-icon"></i>
                                </div>
                                <img src="{{\Illuminate\Support\Facades\Vite::asset('resources/images/product-1.png')}}"
                                     alt="" class="w-100">
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="nav-pv-systems" role="tabpanel" aria-labelledby="nav-pv-systems-tab"
                 tabindex="0">
                <div class="row g-0">
                    <div class="col-lg-3 col-sm-12 col-md-6">
                        <a href="{{\Illuminate\Support\Facades\Vite::asset('resources/images/product-1.png')}}"
                           class="image-link-pv-systems">
                            <div class="homepage-tab-menu-product-img">
                                <img src="{{\Illuminate\Support\Facades\Vite::asset('resources/images/product-1.png')}}"
                                     alt="" class="w-100">
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-12 col-md-6">
                        <a href="{{\Illuminate\Support\Facades\Vite::asset('resources/images/product-2.jpg')}}"
                           class="image-link-pv-systems">
                            <div class="homepage-tab-menu-product-img">
                                <img src="{{\Illuminate\Support\Facades\Vite::asset('resources/images/product-2.jpg')}}"
                                     alt="" class="w-100">
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-12 col-md-6">
                        <a href="{{\Illuminate\Support\Facades\Vite::asset('resources/images/product-3.jpg')}}"
                           class="image-link-pv-systems">
                            <div class="homepage-tab-menu-product-img">
                                <img src="{{\Illuminate\Support\Facades\Vite::asset('resources/images/product-3.jpg')}}"
                                     alt="" class="w-100">
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-12 col-md-6">
                        <a href="{{\Illuminate\Support\Facades\Vite::asset('resources/images/product-4.jpg')}}"
                           class="image-link-pv-systems">
                            <div class="homepage-tab-menu-product-img">
                                <img src="{{\Illuminate\Support\Facades\Vite::asset('resources/images/product-4.jpg')}}"
                                     alt="" class="w-100">
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-12 col-md-6">
                        <a href="{{\Illuminate\Support\Facades\Vite::asset('resources/images/product-4.jpg')}}"
                           class="image-link-pv-systems">
                            <div class="homepage-tab-menu-product-img">
                                <img src="{{\Illuminate\Support\Facades\Vite::asset('resources/images/product-4.jpg')}}"
                                     alt="" class="w-100">
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-12 col-md-6">
                        <a href="{{\Illuminate\Support\Facades\Vite::asset('resources/images/product-3.jpg')}}"
                           class="image-link-pv-systems">
                            <div class="homepage-tab-menu-product-img">
                                <img src="{{\Illuminate\Support\Facades\Vite::asset('resources/images/product-3.jpg')}}"
                                     alt="" class="w-100">
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-12 col-md-6">
                        <a href="{{\Illuminate\Support\Facades\Vite::asset('resources/images/product-2.jpg')}}"
                           class="image-link-pv-systems">
                            <div class="homepage-tab-menu-product-img">
                                <img src="{{\Illuminate\Support\Facades\Vite::asset('resources/images/product-2.jpg')}}"
                                     alt="" class="w-100">
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-12 col-md-6">
                        <a href="{{\Illuminate\Support\Facades\Vite::asset('resources/images/product-1.png')}}"
                           class="image-link-pv-systems">
                            <div class="homepage-tab-menu-product-img">
                                <img src="{{\Illuminate\Support\Facades\Vite::asset('resources/images/product-1.png')}}"
                                     alt="" class="w-100">
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="nav-su-water-heating" role="tabpanel"
                 aria-labelledby="nav-su-water-heating-tab" tabindex="0">
                <div class="row g-0">
                    <div class="col-lg-3 col-sm-12 col-md-6">
                        <a href="{{\Illuminate\Support\Facades\Vite::asset('resources/images/product-1.png')}}"
                           class="image-link-solar-heating">
                            <div class="homepage-tab-menu-product-img">
                                <img src="{{\Illuminate\Support\Facades\Vite::asset('resources/images/product-1.png')}}"
                                     alt="" class="w-100">
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-12 col-md-6">
                        <a href="{{\Illuminate\Support\Facades\Vite::asset('resources/images/product-2.jpg')}}"
                           class="image-link-solar-heating">
                            <div class="homepage-tab-menu-product-img">
                                <img src="{{\Illuminate\Support\Facades\Vite::asset('resources/images/product-2.jpg')}}"
                                     alt="" class="w-100">
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-12 col-md-6">
                        <a href="{{\Illuminate\Support\Facades\Vite::asset('resources/images/product-3.jpg')}}"
                           class="image-link-solar-heating">
                            <div class="homepage-tab-menu-product-img">
                                <img src="{{\Illuminate\Support\Facades\Vite::asset('resources/images/product-3.jpg')}}"
                                     alt="" class="w-100">
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-12 col-md-6">
                        <a href="{{\Illuminate\Support\Facades\Vite::asset('resources/images/product-4.jpg')}}"
                           class="image-link-solar-heating">
                            <div class="homepage-tab-menu-product-img">
                                <img src="{{\Illuminate\Support\Facades\Vite::asset('resources/images/product-4.jpg')}}"
                                     alt="" class="w-100">
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-12 col-md-6">
                        <a href="{{\Illuminate\Support\Facades\Vite::asset('resources/images/product-4.jpg')}}"
                           class="image-link-solar-heating">
                            <div class="homepage-tab-menu-product-img">
                                <img src="{{\Illuminate\Support\Facades\Vite::asset('resources/images/product-4.jpg')}}"
                                     alt="" class="w-100">
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-12 col-md-6">
                        <a href="{{\Illuminate\Support\Facades\Vite::asset('resources/images/product-3.jpg')}}"
                           class="image-link-solar-heating">
                            <div class="homepage-tab-menu-product-img">
                                <img src="{{\Illuminate\Support\Facades\Vite::asset('resources/images/product-3.jpg')}}"
                                     alt="" class="w-100">
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-12 col-md-6">
                        <a href="{{\Illuminate\Support\Facades\Vite::asset('resources/images/product-2.jpg')}}"
                           class="image-link-solar-heating">
                            <div class="homepage-tab-menu-product-img">
                                <img src="{{\Illuminate\Support\Facades\Vite::asset('resources/images/product-2.jpg')}}"
                                     alt="" class="w-100">
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-12 col-md-6">
                        <a href="{{\Illuminate\Support\Facades\Vite::asset('resources/images/product-1.png')}}"
                           class="image-link-solar-heating">
                            <div class="homepage-tab-menu-product-img">
                                <img src="{{\Illuminate\Support\Facades\Vite::asset('resources/images/product-1.png')}}"
                                     alt="" class="w-100">
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="goals">
        <div class="container">
            <div class="row g-5 align-items-center justify-content-center">
                <div class="col-lg-3 col-md-12 col-sm-12">
                    <div class="flex-column">
                        <div>
                            <h2>Hedefimiz</h2>
                        </div>
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
                        <div class="text-muted">
                            Tüketicilerimize yaşam boyu kaliteli ürün, yenilikçi hizmet, güven, mutluluk, huzur ve
                            kolaylık sağlamak. Aile ve Ülke kalkınmasına katkı sağlamak.
                        </div>
                        <div>
                            <div class="mt-4">
                                <button type="button" class="px-4 py-2 btn btn-primary ">İLETİŞİME GEÇ</button>
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
                                    <div>
                                        <h4>
                                            Dünya'yı Koru
                                        </h4>
                                    </div>
                                    <div class="text-muted">
                                        Hepimizi ilgilendiren Dünya'nın ekolojik dengesine bugün katkı sağlayabiliriz
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex align-items-center goal-wrapper">
                                <div class="goal-item-icon-box-wrapper me-3">
                                    <div class="goal-item-icon-box">
                                        <i class="fa-regular fa-lightbulb"></i>
                                    </div>
                                </div>
                                <div class="goal-item-text ms-4">
                                    <div>
                                        <h4>
                                            Enerji Tasarrufu
                                        </h4>
                                    </div>
                                    <div class="text-muted">
                                        Enerjiye daha fazla ihtiyaç duyduğumuz bu çağda, temiz enerjiyle gerçek dünya'yı
                                        koruyabilirsiniz.
                                    </div>
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
                                    <div>
                                        <h4>
                                            Doğal Denge
                                        </h4>
                                    </div>
                                    <div class="text-muted">
                                        Temiz enerji ile doğa'yı kirletmiyoruz böylece geleceğe temiz bir gelecek
                                        bırakıyoruz.
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex align-items-center goal-wrapper">
                                <div class="goal-item-icon-box-wrapper me-3">
                                    <div class="goal-item-icon-box">
                                        <i class="fa-solid fa-recycle"></i>
                                    </div>
                                </div>
                                <div class="goal-item-text ms-4">
                                    <div>
                                        <h4>
                                            Sürdürülebilir Enerji
                                        </h4>
                                    </div>
                                    <div class="text-muted">
                                        Fosil yakıtlar gibi kaynakları değil, güneş gibi yüksek enerji kaynaklarını
                                        kullanıyoruz.
                                    </div>
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
                    <div class="swiper-slide comments-swiper-slide">
                        <div class="comment-member-img">
                            <img src="{{\Illuminate\Support\Facades\Vite::asset('resources/images/avatar01.png')}}"
                                 alt="avatarimg">
                        </div>
                        <div class="comment-member-description my-5">Küçük bir evim var, çatısı için su ısıtma
                            sistemlerini tercih ettim. Bu konuda Özay Tubular gerçekten bize çok yardımcı oldular.
                            Teşekkürler.
                        </div>
                        <div class="comment-member-name"><h5>Sevim Yüksek</h5></div>
                        <div class="comment-member-title">Ev Hanımı</div>
                    </div>
                    <div class="swiper-slide comments-swiper-slide">
                        <div class="comment-member-img">
                            <img src="{{\Illuminate\Support\Facades\Vite::asset('resources/images/avatar.jpg')}}"
                                 alt="avatarimg">
                        </div>
                        <div class="comment-member-description my-5">Küçük bir evim var, çatısı için su ısıtma
                            sistemlerini tercih ettim. Bu konuda Özay Tubular gerçekten bize çok yardımcı oldular.
                            Teşekkürler.
                        </div>
                        <div class="comment-member-name"><h5>Sevim Yüksek</h5></div>
                        <div class="comment-member-title">Ev Hanımı</div>
                    </div>
                    <div class="swiper-slide comments-swiper-slide">
                        <div class="comment-member-img">
                            <img src="{{\Illuminate\Support\Facades\Vite::asset('resources/images/avatar01.png')}}"
                                 alt="avatarimg">
                        </div>
                        <div class="comment-member-description my-5">Küçük bir evim var, çatısı için su ısıtma
                            sistemlerini tercih ettim. Bu konuda Özay Tubular gerçekten bize çok yardımcı oldular.
                            Teşekkürler.
                        </div>
                        <div class="comment-member-name"><h5>Sevim Yüksek</h5></div>
                        <div class="comment-member-title">Ev Hanımı</div>
                    </div>
                </div>
                <div class="swiper-button-prev comments-swiper-btns"></div>
                <div class="swiper-button-next comments-swiper-btns"></div>
            </div>
        </div>
    </section>
@endsection


