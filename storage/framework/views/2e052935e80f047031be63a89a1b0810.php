<?php $__env->startSection('content'); ?>
    <section class="hero-section ">
        <div class="container">
            <div class="text-center row align-items-center justify-content-center">
                <?php if(!empty(config('settings.heroTitle'))): ?>
                    <div class="hero-title text-center mb-1 col-md-5 col-lg-5 col-sm-12">
                        <h1 class="mb-0"><?php echo e(config('settings.heroTitle')); ?></h1>
                    </div>
                <?php endif; ?>
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
                <?php if(!empty(config('settings.heroDescription'))): ?>
                    <div class="hero-description-wrapper text-center mb-3 col-md-12 col-lg-12 col-sm-12">
                        <div class="hero-description"><?php echo e(config('settings.heroDescription')); ?>

                        </div>
                    </div>
                <?php endif; ?>
                <button type="button" class="mt-5 py-2 btn btn-primary col-md-1 col-lg-1 col-sm-4">Hakkımızda</button>

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
                                <?php if(!empty(config('settings.heroCardTitle1'))): ?>
                                    <h4><?php echo e(config('settings.heroCardTitle1')); ?></h4>
                                <?php endif; ?>
                                <div>
                                    <?php if(!empty(config('settings.heroCardBoldDescription1'))): ?>
                                        <span class="fw-bold"><?php echo e(config('settings.heroCardBoldDescription1')); ?></span>
                                    <?php endif; ?>
                                    <?php if(!empty(config('settings.heroCardBoldDescription1'))): ?>
                                        <span><?php echo e(config('settings.heroCardDescription1')); ?></span>
                                    <?php endif; ?>
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
                                <?php if(!empty(config('settings.heroCardTitle2'))): ?>
                                    <h4><?php echo e(config('settings.heroCardTitle2')); ?></h4>
                                <?php endif; ?>
                                <div>
                                    <?php if(!empty(config('settings.heroCardBoldDescription2'))): ?>
                                        <div class="fw-bold"><?php echo e(config('settings.heroCardBoldDescription2')); ?></div>
                                    <?php endif; ?>
                                    <?php if(!empty(config('settings.heroCardDescription2'))): ?>
                                        <div><?php echo e(config('settings.heroCardDescription2')); ?></div>
                                    <?php endif; ?>
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
                                <?php if(!empty(config('settings.heroCardTitle3'))): ?>
                                    <h4>Tam Zamanında</h4>
                                <?php endif; ?>
                                <div>
                                    <?php if(!empty(config('settings.heroCardBoldDescription3'))): ?>
                                        <div class="fw-bold"><?php echo e(config('settings.heroCardBoldDescription3')); ?></div>
                                    <?php endif; ?>
                                    <?php if(!empty(config('settings.heroCardDescription3'))): ?>
                                        <div><?php echo e(config('settings.heroCardDescription3')); ?></div>
                                    <?php endif; ?>
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
                            <div
                                class="hero-card hero-card-mobile d-flex justify-content-center align-items-center flex-column">
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
                        <div class="swiper-slide">
                            <div class="col-sm-12 col-md-4 col-lg-4 ">
                                <div
                                    class="hero-card hero-card-mobile d-flex justify-content-center align-items-center flex-column">
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
                        </div>
                        <div class="swiper-slide">
                            <div class="col-sm-12 col-md-4 col-lg-4 ">
                                <div
                                    class="hero-card hero-card-mobile d-flex justify-content-center align-items-center flex-column">
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
            <div class="fs-5 mt-4">
                <button class="btn-primary p-2">
                    <a href="/tum-gunes-enerji-sistemleri" class="text-decoration-none text-white">Tümünü Gör</a>
                </button>
            </div>
        </div>
        <!-- Slider main container -->
        <div class="">
            <div class="swiper product-water-heating-swiper product-water-heating-main-swiper">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <?php $__currentLoopData = $solarProducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $solarProduct): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="swiper-slide">
                        <div class="card">
                            <div class="product-card-title px-3 pt-3 fw-bold">
                                <?php echo e($solarProduct->name); ?>

                            </div>
                            <div class="product-card-title px-3 pb-3">
                                <?php echo e($solarProduct->sub_name); ?>

                            </div>
                            <div class="overflow-hidden">
                               <img
                                    src="<?php echo e($solarProduct->getFirstMediaUrl('logo')); ?>"
                                    class="card-img-top lazy" alt="...">
                            </div>
                            <div
                                class="card-body product-card-body-button d-flex justify-content-end align-items-center">
                                <a href="#" class="text-decoration-none">İNCELE</a>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


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
            <div class="fs-5 mt-4">
                <button class="btn-primary p-2">
                    <a href="/tum-pv-paket-sistemleri" class="text-decoration-none text-white">Tümünü Gör</a>
                </button>
            </div>
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
                                     src="<?php echo e(Vite::asset('resources/images/ozay-pvc.webp')); ?>"
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
                                     src="<?php echo e(Vite::asset('resources/images/ozay-pvc.webp')); ?>"
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
                                     src="<?php echo e(Vite::asset('resources/images/ozay-pvc.webp')); ?>"
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
                                     src="<?php echo e(Vite::asset('resources/images/ozay-pvc.webp')); ?>"
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
                                     src="<?php echo e(Vite::asset('resources/images/ozay-pvc.webp')); ?>"
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
                                     src="<?php echo e(Vite::asset('resources/images/ozay-pvc.webp')); ?>"
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
                                     src="<?php echo e(Vite::asset('resources/images/ozay-pvc.webp')); ?>"
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
                                     src="<?php echo e(Vite::asset('resources/images/ozay-pvc.webp')); ?>"
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
                                     src="<?php echo e(Vite::asset('resources/images/ozay-pvc.webp')); ?>"
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
                                     src="<?php echo e(Vite::asset('resources/images/ozay-pvc.webp')); ?>"
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
                                     src="<?php echo e(Vite::asset('resources/images/ozay-pvc.webp')); ?>"
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
                            src="<?php echo e(\Illuminate\Support\Facades\Vite::asset('resources/images/didem-gorseller-2023-02-14T131858.657-removebg-preview.png')); ?>">
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <?php if(!empty(config('settings.homePageAboutUsTitle'))): ?>
                        <strong>
                            <?php echo e(config('settings.homePageAboutUsTitle')); ?>

                        </strong>
                    <?php endif; ?>
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
                    <?php if(!empty(config('settings.homePageAboutUsDescription'))): ?>
                        <div class="homepage-who-we-are-text text-muted mt-3">
                            <?php echo e(config('settings.homePageAboutUsDescription')); ?>

                        </div>
                    <?php endif; ?>
                    <div class="mt-4">
                        <?php if(!empty(config('settings.homePageQualityPolicyTitleBlack'))): ?>
                            <span class="fw-bold">
                        <?php echo e(config('settings.homePageQualityPolicyTitleBlack')); ?>

                    </span>
                        <?php endif; ?>
                        <?php if(!empty(config('settings.homePageQualityPolicyTitleRed'))): ?>

                            <span style="color: red" class="fw-bold">
                                                <?php echo e(config('settings.homePageQualityPolicyTitleRed')); ?>


                    </span>
                        <?php endif; ?>
                    </div>
                    <?php if(!empty(config('settings.homePageQualityPolicyDescription'))): ?>
                        <div class="homepage-who-we-are-text text-muted mt-4">
                            <?php echo e(config('settings.homePageQualityPolicyDescription')); ?>

                        </div>
                    <?php endif; ?>
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
                <?php if(!empty(config('settings.homePageBannerTitle'))): ?>
                    <h3 class="mb-2">
                        <?php echo e(config('settings.homePageBannerTitle')); ?></h3>
                <?php endif; ?>
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
                <?php if(!empty(config('settings.homePageBannerDescription'))): ?>
                    <div class="fs-6 my-4 homepage-consultancy-text text-center col-md-8 col-sm-12 col-lg-8"
                         style="color: #9ca3af">
                        <?php echo e(config('settings.homePageBannerDescription')); ?>

                    </div>
                <?php endif; ?>
            </div>
            <div class="mt-5">
                <button type="button" class="px-3 py-2 btn  btn-primary ">UZMAN İLE GÖRÜŞ</button>
            </div>
        </div>
    </section>
    <section class="homepage-our-services mt-5 text-center">
        <div class="container">
            <div>
                <?php if(!empty(config('settings.homePageServicesTitle'))): ?>
                    <div>
                        <h1><?php echo e(config('settings.homePageServicesTitle')); ?></h1>
                    </div>
                <?php endif; ?>
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
                <?php if(!empty(config('settings.homePageServicesDescription'))): ?>
                    <div
                        class="homepage-our-services-text text-muted text-center fs-6 my-5 col-md-8 col-sm-12 col-lg-8">
                        <?php echo e(config('settings.homePageServicesDescription')); ?>

                    </div>
                <?php endif; ?>
                <div class="homepage-our-services-cards">
                    <div class="row">
                        <div class="col-md-4 col-sm-12 col-lg-4">
                            <div class="homepage-our-services-cards-card">
                                <div class="mb-3 homepage-our-services-icon">
                                    <i class="fa-solid fa-industry"></i>
                                </div>
                                <?php if(!empty(config('settings.homePageServicesCardTitle1'))): ?>
                                    <h3 class="mb-3">
                                        <?php echo e(config('settings.homePageServicesCardTitle1')); ?>

                                    </h3>
                                <?php endif; ?>
                                <?php if(!empty(config('settings.homePageServicesCardDescription1'))): ?>
                                    <div class="text-muted">
                                        <?php echo e(config('settings.homePageServicesCardDescription1')); ?>

                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12 col-lg-4">
                            <div class="homepage-our-services-cards-card">
                                <div class="mb-3 homepage-our-services-icon">
                                    <i class="fa-solid fa-sun "></i>
                                </div>
                                <?php if(!empty(config('settings.homePageServicesCardTitle2'))): ?>
                                    <h3 class="mb-3">
                                        <?php echo e(config('settings.homePageServicesCardTitle2')); ?>

                                    </h3>
                                <?php endif; ?>
                                <?php if(!empty(config('settings.homePageServicesCardDescription2'))): ?>
                                    <div class="text-muted">
                                        <?php echo e(config('settings.homePageServicesCardDescription2')); ?>

                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12 col-lg-4">
                            <div class="homepage-our-services-cards-card">
                                <div class="mb-3 homepage-our-services-icon">
                                    <i class="fa-solid fa-solar-panel"></i>
                                </div>
                                <?php if(!empty(config('settings.homePageServicesCardTitle3'))): ?>
                                    <h3 class="mb-3">
                                        <?php echo e(config('settings.homePageServicesCardTitle3')); ?>

                                    </h3>
                                <?php endif; ?>
                                <?php if(!empty(config('settings.homePageServicesCardDescription3'))): ?>
                                    <div class="text-muted">
                                        <?php echo e(config('settings.homePageServicesCardDescription3')); ?>

                                    </div>
                                <?php endif; ?>
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
                        <a href="<?php echo e(\Illuminate\Support\Facades\Vite::asset('resources/images/product-1.png')); ?>"
                           class="image-link">
                            <div class="homepage-tab-menu-product-img project-gallery-image-item mb-4">
                                <div class="homepage-tab-menu-product-icon-wrapper">
                                    <i class="fa-solid fa-magnifying-glass homepage-tab-menu-product-icon"></i>
                                </div>
                                <img
                                    data-src="<?php echo e(\Illuminate\Support\Facades\Vite::asset('resources/images/product-1.png')); ?>"
                                    alt="" class="w-100 img-fluid lazy">
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-12 col-md-6">
                        <a href="<?php echo e(\Illuminate\Support\Facades\Vite::asset('resources/images/product-2.jpg')); ?>"
                           class="image-link">
                            <div class="homepage-tab-menu-product-img">
                                <div class="homepage-tab-menu-product-icon-wrapper">
                                    <i class="fa-solid fa-magnifying-glass homepage-tab-menu-product-icon"></i>
                                </div>
                                <img src="<?php echo e(\Illuminate\Support\Facades\Vite::asset('resources/images/product-2.jpg')); ?>"
                                     alt="" class="w-100">
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-12 col-md-6">
                        <a href="<?php echo e(\Illuminate\Support\Facades\Vite::asset('resources/images/product-3.jpg')); ?>"
                           class="image-link">
                            <div class="homepage-tab-menu-product-img">
                                <div class="homepage-tab-menu-product-icon-wrapper">
                                    <i class="fa-solid fa-magnifying-glass homepage-tab-menu-product-icon"></i>
                                </div>
                                <img src="<?php echo e(\Illuminate\Support\Facades\Vite::asset('resources/images/product-3.jpg')); ?>"
                                     alt="" class="w-100">
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-12 col-md-6">
                        <a href="<?php echo e(\Illuminate\Support\Facades\Vite::asset('resources/images/product-4.jpg')); ?>"
                           class="image-link">
                            <div class="homepage-tab-menu-product-img">
                                <div class="homepage-tab-menu-product-icon-wrapper">
                                    <i class="fa-solid fa-magnifying-glass homepage-tab-menu-product-icon"></i>
                                </div>
                                <img src="<?php echo e(\Illuminate\Support\Facades\Vite::asset('resources/images/product-4.jpg')); ?>"
                                     alt="" class="w-100">
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-12 col-md-6">
                        <a href="<?php echo e(\Illuminate\Support\Facades\Vite::asset('resources/images/product-4.jpg')); ?>"
                           class="image-link">
                            <div class="homepage-tab-menu-product-img">
                                <div class="homepage-tab-menu-product-icon-wrapper">
                                    <i class="fa-solid fa-magnifying-glass homepage-tab-menu-product-icon"></i>
                                </div>
                                <img src="<?php echo e(\Illuminate\Support\Facades\Vite::asset('resources/images/product-4.jpg')); ?>"
                                     alt="" class="w-100">
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-12 col-md-6">
                        <a href="<?php echo e(\Illuminate\Support\Facades\Vite::asset('resources/images/product-3.jpg')); ?>"
                           class="image-link">
                            <div class="homepage-tab-menu-product-img">
                                <div class="homepage-tab-menu-product-icon-wrapper">
                                    <i class="fa-solid fa-magnifying-glass homepage-tab-menu-product-icon"></i>
                                </div>
                                <img src="<?php echo e(\Illuminate\Support\Facades\Vite::asset('resources/images/product-3.jpg')); ?>"
                                     alt="" class="w-100">
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-12 col-md-6">
                        <a href="<?php echo e(\Illuminate\Support\Facades\Vite::asset('resources/images/product-2.jpg')); ?>"
                           class="image-link">
                            <div class="homepage-tab-menu-product-img">
                                <div class="homepage-tab-menu-product-icon-wrapper">
                                    <i class="fa-solid fa-magnifying-glass homepage-tab-menu-product-icon"></i>
                                </div>
                                <img src="<?php echo e(\Illuminate\Support\Facades\Vite::asset('resources/images/product-2.jpg')); ?>"
                                     alt="" class="w-100">
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-12 col-md-6">
                        <a href="<?php echo e(\Illuminate\Support\Facades\Vite::asset('resources/images/product-1.png')); ?>"
                           class="image-link">
                            <div class="homepage-tab-menu-product-img">
                                <div class="homepage-tab-menu-product-icon-wrapper">
                                    <i class="fa-solid fa-magnifying-glass homepage-tab-menu-product-icon"></i>
                                </div>
                                <img src="<?php echo e(\Illuminate\Support\Facades\Vite::asset('resources/images/product-1.png')); ?>"
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
                        <a href="<?php echo e(\Illuminate\Support\Facades\Vite::asset('resources/images/product-1.png')); ?>"
                           class="image-link-pv-systems">
                            <div class="homepage-tab-menu-product-img">
                                <img src="<?php echo e(\Illuminate\Support\Facades\Vite::asset('resources/images/product-1.png')); ?>"
                                     alt="" class="w-100">
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-12 col-md-6">
                        <a href="<?php echo e(\Illuminate\Support\Facades\Vite::asset('resources/images/product-2.jpg')); ?>"
                           class="image-link-pv-systems">
                            <div class="homepage-tab-menu-product-img">
                                <img src="<?php echo e(\Illuminate\Support\Facades\Vite::asset('resources/images/product-2.jpg')); ?>"
                                     alt="" class="w-100">
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-12 col-md-6">
                        <a href="<?php echo e(\Illuminate\Support\Facades\Vite::asset('resources/images/product-3.jpg')); ?>"
                           class="image-link-pv-systems">
                            <div class="homepage-tab-menu-product-img">
                                <img src="<?php echo e(\Illuminate\Support\Facades\Vite::asset('resources/images/product-3.jpg')); ?>"
                                     alt="" class="w-100">
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-12 col-md-6">
                        <a href="<?php echo e(\Illuminate\Support\Facades\Vite::asset('resources/images/product-4.jpg')); ?>"
                           class="image-link-pv-systems">
                            <div class="homepage-tab-menu-product-img">
                                <img src="<?php echo e(\Illuminate\Support\Facades\Vite::asset('resources/images/product-4.jpg')); ?>"
                                     alt="" class="w-100">
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-12 col-md-6">
                        <a href="<?php echo e(\Illuminate\Support\Facades\Vite::asset('resources/images/product-4.jpg')); ?>"
                           class="image-link-pv-systems">
                            <div class="homepage-tab-menu-product-img">
                                <img src="<?php echo e(\Illuminate\Support\Facades\Vite::asset('resources/images/product-4.jpg')); ?>"
                                     alt="" class="w-100">
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-12 col-md-6">
                        <a href="<?php echo e(\Illuminate\Support\Facades\Vite::asset('resources/images/product-3.jpg')); ?>"
                           class="image-link-pv-systems">
                            <div class="homepage-tab-menu-product-img">
                                <img src="<?php echo e(\Illuminate\Support\Facades\Vite::asset('resources/images/product-3.jpg')); ?>"
                                     alt="" class="w-100">
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-12 col-md-6">
                        <a href="<?php echo e(\Illuminate\Support\Facades\Vite::asset('resources/images/product-2.jpg')); ?>"
                           class="image-link-pv-systems">
                            <div class="homepage-tab-menu-product-img">
                                <img src="<?php echo e(\Illuminate\Support\Facades\Vite::asset('resources/images/product-2.jpg')); ?>"
                                     alt="" class="w-100">
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-12 col-md-6">
                        <a href="<?php echo e(\Illuminate\Support\Facades\Vite::asset('resources/images/product-1.png')); ?>"
                           class="image-link-pv-systems">
                            <div class="homepage-tab-menu-product-img">
                                <img src="<?php echo e(\Illuminate\Support\Facades\Vite::asset('resources/images/product-1.png')); ?>"
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
                        <a href="<?php echo e(\Illuminate\Support\Facades\Vite::asset('resources/images/product-1.png')); ?>"
                           class="image-link-solar-heating">
                            <div class="homepage-tab-menu-product-img">
                                <img src="<?php echo e(\Illuminate\Support\Facades\Vite::asset('resources/images/product-1.png')); ?>"
                                     alt="" class="w-100">
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-12 col-md-6">
                        <a href="<?php echo e(\Illuminate\Support\Facades\Vite::asset('resources/images/product-2.jpg')); ?>"
                           class="image-link-solar-heating">
                            <div class="homepage-tab-menu-product-img">
                                <img src="<?php echo e(\Illuminate\Support\Facades\Vite::asset('resources/images/product-2.jpg')); ?>"
                                     alt="" class="w-100">
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-12 col-md-6">
                        <a href="<?php echo e(\Illuminate\Support\Facades\Vite::asset('resources/images/product-3.jpg')); ?>"
                           class="image-link-solar-heating">
                            <div class="homepage-tab-menu-product-img">
                                <img src="<?php echo e(\Illuminate\Support\Facades\Vite::asset('resources/images/product-3.jpg')); ?>"
                                     alt="" class="w-100">
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-12 col-md-6">
                        <a href="<?php echo e(\Illuminate\Support\Facades\Vite::asset('resources/images/product-4.jpg')); ?>"
                           class="image-link-solar-heating">
                            <div class="homepage-tab-menu-product-img">
                                <img src="<?php echo e(\Illuminate\Support\Facades\Vite::asset('resources/images/product-4.jpg')); ?>"
                                     alt="" class="w-100">
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-12 col-md-6">
                        <a href="<?php echo e(\Illuminate\Support\Facades\Vite::asset('resources/images/product-4.jpg')); ?>"
                           class="image-link-solar-heating">
                            <div class="homepage-tab-menu-product-img">
                                <img src="<?php echo e(\Illuminate\Support\Facades\Vite::asset('resources/images/product-4.jpg')); ?>"
                                     alt="" class="w-100">
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-12 col-md-6">
                        <a href="<?php echo e(\Illuminate\Support\Facades\Vite::asset('resources/images/product-3.jpg')); ?>"
                           class="image-link-solar-heating">
                            <div class="homepage-tab-menu-product-img">
                                <img src="<?php echo e(\Illuminate\Support\Facades\Vite::asset('resources/images/product-3.jpg')); ?>"
                                     alt="" class="w-100">
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-12 col-md-6">
                        <a href="<?php echo e(\Illuminate\Support\Facades\Vite::asset('resources/images/product-2.jpg')); ?>"
                           class="image-link-solar-heating">
                            <div class="homepage-tab-menu-product-img">
                                <img src="<?php echo e(\Illuminate\Support\Facades\Vite::asset('resources/images/product-2.jpg')); ?>"
                                     alt="" class="w-100">
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-12 col-md-6">
                        <a href="<?php echo e(\Illuminate\Support\Facades\Vite::asset('resources/images/product-1.png')); ?>"
                           class="image-link-solar-heating">
                            <div class="homepage-tab-menu-product-img">
                                <img src="<?php echo e(\Illuminate\Support\Facades\Vite::asset('resources/images/product-1.png')); ?>"
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
                        <?php if(!empty(config('settings.homePageOurGoalsTitle'))): ?>
                            <div>
                                <h2><?php echo e(config('settings.homePageOurGoalsTitle')); ?></h2>
                            </div>
                        <?php endif; ?>
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
                        <?php if(!empty(config('settings.homePageOurGoalsDescription'))): ?>
                            <div class="text-muted">
                                <?php echo e(config('settings.homePageOurGoalsDescription')); ?>

                            </div>
                        <?php endif; ?>
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
                                    <?php if(!empty(config('settings.homePageOurGoalsCardTitle1'))): ?>
                                        <div>
                                            <h4>
                                                <?php echo e(config('settings.homePageOurGoalsCardTitle1')); ?>

                                            </h4>
                                        </div>
                                    <?php endif; ?>
                                    <?php if(!empty(config('settings.homePageOurGoalsCardDescription1'))): ?>

                                        <div class="text-muted">
                                            <?php echo e(config('settings.homePageOurGoalsCardDescription1')); ?>

                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="d-flex align-items-center goal-wrapper">
                                <div class="goal-item-icon-box-wrapper me-3">
                                    <div class="goal-item-icon-box">
                                        <i class="fa-regular fa-lightbulb"></i>
                                    </div>
                                </div>
                                <div class="goal-item-text ms-4">
                                    <?php if(!empty(config('settings.homePageOurGoalsCardTitle2'))): ?>
                                        <div>
                                            <h4>
                                                <?php echo e(config('settings.homePageOurGoalsCardTitle2')); ?>

                                            </h4>
                                        </div>
                                    <?php endif; ?>
                                    <?php if(!empty(config('settings.homePageOurGoalsCardDescription2'))): ?>

                                        <div class="text-muted">
                                            <?php echo e(config('settings.homePageOurGoalsCardDescription2')); ?>

                                        </div>
                                    <?php endif; ?>
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
                                    <?php if(!empty(config('settings.homePageOurGoalsCardTitle3'))): ?>
                                        <div>
                                            <h4>
                                                <?php echo e(config('settings.homePageOurGoalsCardTitle3')); ?>

                                            </h4>
                                        </div>
                                    <?php endif; ?>
                                    <?php if(!empty(config('settings.homePageOurGoalsCardDescription3'))): ?>

                                        <div class="text-muted">
                                            <?php echo e(config('settings.homePageOurGoalsCardDescription3')); ?>

                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="d-flex align-items-center goal-wrapper">
                                <div class="goal-item-icon-box-wrapper me-3">
                                    <div class="goal-item-icon-box">
                                        <i class="fa-solid fa-recycle"></i>
                                    </div>
                                </div>
                                <div class="goal-item-text ms-4">
                                    <?php if(!empty(config('settings.homePageOurGoalsCardTitle4'))): ?>
                                        <div>
                                            <h4>
                                                <?php echo e(config('settings.homePageOurGoalsCardTitle4')); ?>

                                            </h4>
                                        </div>
                                    <?php endif; ?>
                                    <?php if(!empty(config('settings.homePageOurGoalsCardDescription4'))): ?>

                                        <div class="text-muted">
                                            <?php echo e(config('settings.homePageOurGoalsCardDescription4')); ?>

                                        </div>
                                    <?php endif; ?>
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
                            <img src="<?php echo e(\Illuminate\Support\Facades\Vite::asset('resources/images/avatar01.png')); ?>"
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
                            <img src="<?php echo e(\Illuminate\Support\Facades\Vite::asset('resources/images/avatar.jpg')); ?>"
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
                            <img src="<?php echo e(\Illuminate\Support\Facades\Vite::asset('resources/images/avatar01.png')); ?>"
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

<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/ozay-enerji-sistemleri/resources/views/home.blade.php ENDPATH**/ ?>