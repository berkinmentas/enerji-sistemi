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
                    <button class="btn btn-outline-secondary navbar-search-area-search-box-icon" type="button" id="button-addon2"><i
                            class="fa-solid fa-magnifying-glass"></i></button>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg ">

        <div class="container">
            <a class="navbar-brand" href="#anasayfa"><img
                    src="{{\Illuminate\Support\Facades\Vite::asset('resources/images/logo.png')}}"></a>
            <!--<a><img src="{{ Vite::asset('resources/images/bottom-scroll-button.png') }}"></a> -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse  navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link header-btn" href="#">Anasayfa</a>
                    </li>
                    <li class="nav-item header-btn">
                        <a class="nav-link" href="#">Ürünlerimiz</a>
                    </li>
                    <li class="nav-item header-btn">
                        <a class="nav-link" href="#">Kurumsal</a>
                    </li>
                    <li class="nav-item header-btn">
                        <a class="nav-link" href="#">Şubelerimiz</a>
                    </li>
                    <li class="nav-item header-btn">
                        <a class="nav-link" href="#">İletişim</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

@yield('body')

<footer class="footer-area">
    <div class="container">
        <div class="footer-wrapper py-5">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="footer-logo"><img src="{{\Illuminate\Support\Facades\Vite::asset('resources/images/logo.png')}}" alt=""></div>
                    <div class="footer-description footer">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus vel feugiat lectus. Quisque et egestas sem, eu rutrum est. Donec finibus rutrum ligula eu consequat. Proin ultrices tempor tellus, vel dictum dolor viverra non. Donec aliquet dictum enim. Duis tempus augue enim, non ornare nisi commodo porta. </div>
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
                    <div class="footer-right-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla malesuada lacus non blandit fringilla. Suspendisse id tellus et tellus dapibus fermentum. Sed posuere purus libero, eu hendrerit nulla pulvinar ut. Ut a ante tempus, dapibus augue lobortis, malesuada quam. Duis hendrerit tellus eget posuere porttitor. Pellentesque id nunc libero. </div>
                </div>
            </div>
        </div>
    </div>
</footer>
</body>

</html>

