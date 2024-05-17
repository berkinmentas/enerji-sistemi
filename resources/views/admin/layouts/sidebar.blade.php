<aside class="sidebar">
    <a href="{{route('admin.dashboard.index')}}">
        <div class="sidebar-logo">
            <img class="img-fluid mb-3" src="{{ Vite::asset('resources/images/logo.png') }}">
            <h5>ÖZAY<br/><span class="fw-bold">ADMİN PANEL</span></h5>
        </div>
    </a>
    <div class="sidebar-nav">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link" href="{{route('admin.products.index')}}">
                    <i class="fa-solid fa-solar-panel"></i>
                    <span>Ürünler</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('admin.pages.index')}}">
                    <i class="fa-solid fa-file"></i>
                    <span>Sayfalar</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('admin.settings.edit')}}">
                    <i class="fa-solid fa-sliders"></i>
                    <span>Ayarlar</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('admin.contacts.index')}}">
                    <i class="fa-solid fa-message"></i>
                    <span>İletişim Mesajları</span>
                </a>
            </li>
        </ul>
    </div>
</aside>
