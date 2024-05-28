<aside class="sidebar">
    <a href="{{route('admin.dashboard.index')}}">
        <div class="sidebar-logo">
            <img class="img-fluid mb-3" src="{{ Vite::asset('resources/images/logo.png') }}">
            <h5>ÖZAY<br/><span class="fw-bold">ADMİN PANEL</span></h5>
        </div>
    </a>
    <div class="sidebar-nav">
        <ul class="nav flex-column accordion accordion-flush">
            <li class="nav-item accordion-item">
                <h2 class="accordion-header nav-link" id="flush-headingTwo">
                    <button
                        class="accordion-button header-btn collapsed d-flex align-items-center justify-content-center"
                        type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo"
                        aria-expanded="false" aria-controls="flush-collapseTwo">
                        <i class="fa-solid fa-solar-panel"></i>
                        <span class="ms-1">Ürünler</span>
                        <i class="fa-solid fa-angle-down accordion-down-btn"></i>
                    </button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExampleTwo">
                    <div class="accordion-body-wrapper mt-1">
                        <a class="accordion-body accordion-body-text" href="{{route('admin.products.index')}}">Ürünler Listesi</a>
                    </div>
                    <div class="mt-3 accordion-body-wrapper">
                        <a class="accordion-body accordion-body-text" href="{{route('admin.productCategories.index')}}">Ürün Kategorileri</a>
                    </div>
                </div>
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
            <li class="nav-item">
                <a class="nav-link" href="{{route('admin.comments.index')}}">
                    <i class="fa-solid fa-comment"></i>
                    <span>Yorumlar</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('admin.branchOffices.index')}}">
                    <i class="fa-solid fa-building"></i>
                    <span>Şubeler</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('admin.galleries.index')}}">
                    <i class="fa-regular fa-images"></i>
                    <span>Galeri</span>
                </a>
            </li>
        </ul>
    </div>
</aside>
