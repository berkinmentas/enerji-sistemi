<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="_token" content="{{ csrf_token() }}">
    <title>
        @hasSection('title')
            @yield('title') | Özay Enerji Sistemleri
        @else
            Özay Enerji Sistemleri
        @endif
    </title>
    @vite(['resources/js/app.js'])
</head>
<body>


<header>

    <div class="navbar-search-area-wrapper">
        <div class="container">
            <div class="navbar-search-area d-flex row justify-content-between align-items-center py-2">
                <div class="navbar-search-area-social-wrapper col-lg-4 col-md-4 col-sm-12">
                    <span><a href="#faceboook" class="navbar-search-area-social"><i class="fa-brands fa-facebook-f"></i></a></span>
                    <span><a href="#twitter" class="navbar-search-area-social"><i
                                class="fa-brands fa-twitter"></i></a></span>
                    <span><a href="#youtube" class="navbar-search-area-social"><i
                                class="fa-brands fa-youtube"></i></a></span>
                </div>
                <div class="input-group navbar-search-area-search-box col-lg-8 col-md-8 col-sm-12">
                    <input type="text" class="form-control" placeholder="Bul..."
                           aria-label="Recipient's username" aria-describedby="button-addon2">
                    <button class="btn btn-outline-secondary navbar-search-area-search-box-icon" type="button"
                            id="button-addon2"><i
                            class="fa-solid fa-magnifying-glass"></i></button>
                </div>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg ">

        <div class="container">
            <a class="navbar-brand" href="/"><img
                    src="{{\Illuminate\Support\Facades\Vite::asset('resources/images/logo.png')}}"></a>
            <button class="navbar-mobile-button btn">
                <i class="fa-solid fa-bars"></i>
            </button>
            <div class="collapse  navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link header-btn" href="/">Ana Sayfa</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                           aria-expanded="false">
                            Ürünlerimiz
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{route('products.index', ['product_category_id' => 1])}}">Güneş Enerji Sistemleri</a>
                            </li>
                            <li><a class="dropdown-item" href="/tum-pv-paket-sistemleri">PV Paket Sistemleri</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                           aria-expanded="false">
                            Kurumsal
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/hakkimizda">Hakkımızda</a></li>
                            <li><a class="dropdown-item" href="/misyonumuz">Vizyon ve Misyonumuz</a></li>
                            @foreach($pages as $pageItem)
                                <li><a class="dropdown-item"
                                       href="{{ route('page.show', ['slug' => $pageItem->slug]) }}">{{ $pageItem->name }}</a>
                                </li>
                            @endforeach

                        </ul>
                    </li>
                    <li class="nav-item header-btn">
                        <a class="nav-link" href="#">Şubelerimiz</a>
                    </li>
                    <li class="nav-item header-btn">
                        <a class="nav-link" href="/iletisim">İletişim</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

</header>
<div class="navbar-mobile-modal">
    <div class="navbar-mobile-modal-content">
        <div class="container p-3">
            <div class="row d-flex justify-content-between align-items-between">
                <div class="navbar-mobile-modal-close-btn">
                    <i class="fa-solid fa-x"></i>
                </div>

                <ul class="navbar-nav ms-auto navbar-mobile-modal-menu accordion accordion-flush"
                    id="accordionFlushExample">
                    <li class="nav-item">
                        <a class="nav-link header-btn" href="/">Ana Sayfa</a>
                    </li>
                    <li class="nav-item header-btn">
                        <a class="nav-link" href="#">Ürünlerimiz</a>
                    </li>
                    <li class="nav-item accordion-item">
                        <h2 class="accordion-header" id="flush-headingTwo">
                            <button
                                class="accordion-button header-btn collapsed d-flex align-items-center justify-content-center"
                                type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo"
                                aria-expanded="false" aria-controls="flush-collapseTwo">
                                <span>Ürünlerimiz</span>
                                <i class="fa-solid fa-angle-down accordion-down-btn"></i>
                            </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse"
                             aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExampleTwo">
                            <div><a class="accordion-body accordion-body-text" href="{{route('products.index', ['product_category_id' => 1])}}">Güneş
                                    Enerji Sistemleri</a></div>
                            <div><a class="accordion-body accordion-body-text" href="/tum-pv-paket-sistemleri">PV Paket
                                    Sistemleri</a></div>
                        </div>
                    </li>
                    <li class="nav-item accordion-item">
                        <h2 class="accordion-header" id="flush-headingOne">
                            <button
                                class="accordion-button header-btn collapsed d-flex align-items-center justify-content-center"
                                type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne"
                                aria-expanded="false" aria-controls="flush-collapseOne">
                                <span>Kurumsal</span>
                                <i class="fa-solid fa-angle-down accordion-down-btn"></i>
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse"
                             aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div><a class="accordion-body accordion-body-text" href="/hakkimizda">Hakkımızda</a></div>
                            <div><a class="accordion-body accordion-body-text" href="/misyonumuz">Vizyon ve
                                    Misyonumuz</a></div>
                            @foreach($pages as $pageItem)
                                <div><a class="accordion-body accordion-body-text" href="{{ route('page.show', ['slug' => $pageItem->slug]) }}">{{ $pageItem->name }}</a></div>
                            @endforeach
                        </div>
                    </li>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/hakkimizda">Hakkımızda</a></li>
                        <li><a class="dropdown-item" href="/misyonumuz">Vizyon ve Misyonumuz</a></li>
                        @foreach($pages as $pageItem)
                            <li><a class="dropdown-item"
                                   href="{{ route('page.show', ['slug' => $pageItem->slug]) }}">{{ $pageItem->name }}</a>
                            </li>
                        @endforeach

                    </ul>
                    <li class="nav-item header-btn">
                        <a class="nav-link" href="#">Şubelerimiz</a>
                    </li>
                    <li class="nav-item header-btn">
                        <a class="nav-link" href="/iletisim">İletişim</a>
                    </li>

                </ul>
                <div class="navbar-mobile-modal-logo">
                    <img src="{{\Illuminate\Support\Facades\Vite::asset('resources/images/logo.png')}}" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
@yield('body')
@stack('js-stack')

<footer class="footer-area">
    <div class="container">
        <div class="footer-wrapper py-5">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="footer-logo"><img
                            src="{{\Illuminate\Support\Facades\Vite::asset('resources/images/logo.png')}}" alt=""></div>
                    <div class="footer-description footer">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Vivamus vel feugiat lectus. Quisque et egestas sem, eu rutrum est. Donec finibus rutrum ligula
                        eu consequat. Proin ultrices tempor tellus, vel dictum dolor viverra non. Donec aliquet dictum
                        enim. Duis tempus augue enim, non ornare nisi commodo porta.
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 px-5 footer-links">
                    <h3>Linkler</h3>
                    <div class="row mt-5">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="mb-2"><a href="#anasayfa" class="footer-link">Home</a></div>
                            <div class="mb-2"><a href="#urunler" class="footer-link">Ürünler</a></div>
                            <div class="mb-2"><a href="#kurumsal" class="footer-link">Kurumsal</a></div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="mb-2"><a href="#subelerimiz" class="footer-link">Şubelerimiz</a></div>
                            <div class="mb-2"><a href="#iletisim" class="footer-link">İletişim</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="footer-right-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla
                        malesuada lacus non blandit fringilla. Suspendisse id tellus et tellus dapibus fermentum. Sed
                        posuere purus libero, eu hendrerit nulla pulvinar ut. Ut a ante tempus, dapibus augue lobortis,
                        malesuada quam. Duis hendrerit tellus eget posuere porttitor. Pellentesque id nunc libero.
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
</body>

</html>

