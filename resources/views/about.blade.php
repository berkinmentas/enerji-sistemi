@extends('layouts.layout')
@section('about')

<section class="top-banner">
    <div class="text-center">
        <span><a href="/" class="home-link">Ana Sayfa</a></span>
        <span class="mx-1">/</span>
        <span class="home-active-page">Hakkımızda</span>
    </div>
</section>

<section class="about-us my-5 py-5">
        <div class="container">
            <div class="align-items-center justify-content-center d-flex">
            <div class="row">
                <div class="col-md-12 col-lg-6 col-sm-12">
                    <div class="about-us-image text-center">
                        <img class="img-fluid" src="{{\Illuminate\Support\Facades\Vite::asset('resources/images/home02.webp')}}" alt="">
                    </div>
                </div>
                <div class="col-md-12 col-lg-6 col-sm-12 ps-4 pt-sm-5">
                    <div>
                        <h4>Biz Kimiz ?</h4>
                        <div class="ms-1 mb-3 hero-dots">
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
                        <div class="who-whe-are-description text-muted">
                            1998 yılından itibaren faaliyet gösteren Özay Güneş Enerji Sistemleri toptan ve perakende satış hizmeti vermektedir. Türkiye çapında Şube ve Bayilerimizle ısıtma sektöründe hizmet vermeye devam ediyoruz.
                        </div>
                        <h5 class="mt-4">Kalite <span class="about-us-policy">Politikamız</span></h5>
                        <div class="our-policy text-muted">
                            Tüm çalışanlarımızın ortak katılımı ve çabaları ile kalite hedefleri doğrultusunda sürekli iyileştirme çalışmaları yapmak; müşterilerimizin ihtiyaç ve beklentilerini karşılayacak, kalite seviyesini eğitimli teknik elemanlar ile sağlamak; Vakum Tüplü Güneş enerjisi sistemleri sektöründe,rekabet ortamına bağlı olarak, kalitede lider olabilmek için çalışmak firmamızın temel politikasıdır.
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </section>
<section class="comments my-5">
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
@endsection
