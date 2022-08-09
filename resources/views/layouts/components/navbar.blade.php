<nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
    id="layout-navbar" shadow rounded style="z-index: 1">
    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
            <i class="bx bx-menu bx-sm"></i>
        </a>
    </div>

    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
        <!-- Search -->
        <div class="navbar-nav align-items-center">
            <div class="nav-item d-flex align-items-center">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Halaman Admin
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="{{route('home')}}">Beranda</a></li>
                            <li><a class="dropdown-item" href="{{route('jurusan.index')}}">Jurusan</a></li>
                            <li><a class="dropdown-item" href="{{route('eskul.index')}}">Eskul</a></li>
                            <li><a class="dropdown-item" href="{{route('galeri.index')}}">Galeri</a></li>
                            <li><a class="dropdown-item" href="{{route('pendaftaran.index')}}">Pendaftaran</a></li>
                        </ul>
                    </li>
                </ul>
                <div style="padding: 20px">
                <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
                    <span class="text-lg fab fa-twitter"></span>
                </a>
                <a href="https://www.instagram.com/smkassalaam/?hl=en" target="_blank" class="text-secondary me-xl-4 me-4">
                    <span class="text-lg fab fa-instagram"></span>
                </a>
                <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
                    <span class="text-lg fab fa-github"></span>
                </a>
                <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
                    <span class="text-lg fab fa-facebook"></span>
                </a>
                </div>
            </div>
        </div>

        <!-- /Search -->

        <ul class="navbar-nav flex-row align-items-center ms-auto">
            <!-- Place this tag where you want the button to render. -->

            <!-- User -->
            <li class="nav-item navbar-dropdown dropdown-user dropdown">
                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                        <img src="{{asset('assets/img/avatars/1.png')}}" alt class="w-px-40 h-auto rounded-circle" />
                    </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                        <a class="dropdown-item" href="#">
                            <div class="d-flex">
                                <div class="flex-shrink-0 me-3">
                                    <div class="avatar avatar-online">
                                        <img src="{{asset('assets/img/avatars/1.png')}}" alt
                                            class="w-px-40 h-auto rounded-circle" />
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <span class="fw-semibold d-block">{{ Auth::user()->name }}</span>
                                    <small class="text-muted">{{ Auth::user()->email }}</small>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <div class="dropdown-divider"></div>
                    </li>
                    <li>
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();" role="button"><i
                                class="bx bx-power-off me-2"></i>
                            <span class="align-middle">Log Out</span></a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                        </a>
                    </li>
                </ul>
            </li>
            <!--/ User -->
        </ul>
    </div>
</nav>