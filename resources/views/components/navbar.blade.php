<nav class="navbar navbar-expand-lg shadow-sm sticky-top">
    <div class="container">
        <a class="navbar-brand fw-bold d-flex align-items-center" href="{{ route('map') }}">
            <i class="fa-solid fa-earth-asia me-2 text-primary"></i>
            <span>{{ $title }}</span>
        </a>
        <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 gap-2">
                <li class="nav-item">
                    <a class="nav-link px-3 rounded-pill {{ request()->routeIs('home') ? 'active-nav-link' : 'hover-effect' }}"
                        href="{{ route('home') }}">
                        <i class="fa-solid fa-house"></i> Home
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-3 rounded-pill {{ request()->routeIs('map') ? 'active-nav-link' : 'hover-effect' }}"
                        href="{{ route('map') }}">
                        <i class="fa-solid fa-map me-1"></i> Map
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-3 rounded-pill {{ request()->routeIs('table') ? 'active-nav-link' : 'hover-effect' }}"
                        href="{{ route('table') }}">
                        <i class="fa-solid fa-table me-1"></i> Table
                    </a>
                </li>
                @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle px-3 rounded-pill {{ request()->routeIs('api.*') ? 'active-nav-link' : 'hover-effect' }}"
                            href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-solid fa-server me-1"></i> Data
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end animate slideIn shadow border-0 mt-2">
                            <li>
                                <a class="dropdown-item py-2 d-flex align-items-center" href="{{ route('api.points') }}"
                                    target="_blank">
                                    <i class="fa-solid fa-location-dot me-2 text-danger"></i>
                                    <span>Points</span>
                                </a>
                            </li>
                            <li>
                                <hr class="dropdown-divider mx-2">
                            </li>
                            <li>
                                <a class="dropdown-item py-2 d-flex align-items-center" href="{{ route('api.polylines') }}"
                                    target="_blank">
                                    <i class="fa-solid fa-grip-lines me-2 text-success"></i>
                                    <span>Polylines</span>
                                </a>
                            </li>
                            <li>
                                <hr class="dropdown-divider mx-2">
                            </li>
                            <li>
                                <a class="dropdown-item py-2 d-flex align-items-center" href="{{ route('api.polygons') }}"
                                    target="_blank">
                                    <i class="fa-regular fa-square me-2 text-primary"></i>
                                    <span>Polygons</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                @endauth

                {{-- jika user login --}}
                @auth
                    <li class="nav-item">
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button
                                class="nav-link px-3 rounded-pill text-danger {{ request()->routeIs('logout') ? 'active-nav-link' : 'hover-effect' }}">
                                <i class="fa-solid fa-right-from-bracket text-danger"></i> Log Out
                            </button>
                        </form>
                    </li>
                @endauth

                {{-- jika user belum login --}}
                @guest
                    <li class="nav-item">
                        <a class="nav-link px-3 rounded-pill text-primary {{ request()->routeIs('login') ? 'active-nav-link' : 'hover-effect' }}"
                            href="{{ route('login') }}">
                            <i class="fa-solid fa-right-from-bracket text-primary"></i> Log In
                        </a>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>

<style>
    .navbar {
        background-color: rgba(255, 255, 255, 0.95);
        backdrop-filter: blur(10px);
        -webkit-backdrop-filter: blur(10px);
    }

    .active-nav-link {
        background-color: var(--bs-primary);
        color: white !important;
        box-shadow: 0 2px 5px rgba(13, 110, 253, 0.3);
    }

    .hover-effect:hover {
        background-color: rgba(13, 110, 253, 0.1);
        transform: translateY(-1px);
    }

    .navbar .nav-link {
        font-weight: 500;
        transition: all 0.2s ease;
        color: #333;
        padding-top: 0.5rem;
        padding-bottom: 0.5rem;
    }

    .navbar-brand {
        font-size: 1.25rem;
        color: #333;
    }

    .dropdown-menu {
        border-radius: 0.75rem;
        padding: 0.5rem;
        min-width: 12rem;
    }

    .dropdown-item {
        border-radius: 0.5rem;
        transition: all 0.2s ease;
    }

    .dropdown-item:hover {
        background-color: rgba(13, 110, 253, 0.1);
        transform: translateX(3px);
    }

    .dropdown-item:active {
        background-color: var(--bs-primary);
    }

    /* Animation for dropdown */
    .animate {
        animation-duration: 0.2s;
        animation-fill-mode: both;
    }

    @keyframes slideIn {
        0% {
            opacity: 0;
            transform: translateY(10px);
        }

        100% {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .slideIn {
        animation-name: slideIn;
    }

    @media (max-width: 992px) {
        .navbar-nav {
            padding: 1rem 0;
        }

        .nav-item {
            margin: 0.25rem 0;
        }
    }
</style>
