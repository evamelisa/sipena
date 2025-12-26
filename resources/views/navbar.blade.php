<!-- resources/views/navbar.blade.php -->
<style>
    body{
    font-family:'Poppins',sans-serif;
    background:var(--bg);
    margin:0;
    color:#233;
    overflow-x:hidden;
    padding-top:60px; 
}
    .navbar-wrapper {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        z-index: 9999;
        background: #092a69;
        padding: 10px 0;
        box-shadow: 0 4px 20px rgba(11, 42, 102, 0.3);
        transition: all 0.3s ease;
    }
    
    .navbar-wrapper.scrolled {
        padding: 5px 0;
        box-shadow: 0 6px 25px rgba(11, 42, 102, 0.4);
    }
    /* --- NAV PILLS WRAPPER --- */
    .nav-pills-centered { 
        display: inline-flex; 
        gap: .35rem; 
        background: rgba(255, 255, 255, 0.06); 
        padding: 6px 10px; 
        border-radius: 999px; 
        box-shadow: 0 8px 26px rgba(11, 42, 102, 0.12); 
    }

    .nav-pills-centered .nav-link {
        color: #fff;
        padding: .35rem .9rem;
        border-radius: 30px;
        font-weight: 600;
        font-size: .9rem;
        opacity: .98;
        text-decoration: none;
    }

    .nav-pills-centered .nav-link.active {
        background: rgba(255, 255, 255, 0.12);
    }

    /* --- DROPDOWN MENU STYLING --- */
    .dropdown-menu {
        background: rgba(33, 40, 116, 0.352) !important;
        backdrop-filter: blur(10px);
        color: white !important;
        border-radius: 12px;
        padding: 6px 0;
        min-width: 140px;
        box-shadow: 0 8px 26px rgba(11, 42, 102, 0.22);
        z-index: 10000 !important;

        position: absolute !important;
        width: 200px !important;
        max-width: 200px !important;

        display: none;
    }

    /* Dropdown muncul saat hover */
    .nav-item.dropdown:hover .dropdown-menu {
        display: block !important;
        opacity: 1 !important;
        visibility: visible !important;
    }

    /* Tetap show jika Bootstrap menambah class 'show' */
    .dropdown-menu.show {
        display: block !important;
    }

    /* Dropdown item */
    .dropdown-menu .dropdown-item {
        display: block !important;
        padding: 8px 14px !important;
        color: #fff !important;
        text-decoration: none !important;
        font-size: .85rem !important;
        background: transparent !important;
    }

    .dropdown-menu .dropdown-item:hover {
        background: rgba(255, 255, 255, 0.25) !important;
    }

    .dropdown-menu .dropdown-item.active {
        background: rgba(255, 255, 255, 0.12) !important;
    }

    /* Prevent clipping */
    .top-banner {
        overflow: visible !important;
        position: relative;
    }

    /* Mobile responsive */
    @media (max-width: 768px) {
    .dropdown-menu {
        width: 100% !important;
        max-width: 200px !important;
        box-shadow: 0 8px 26px rgba(11,42,102,0.3) !important;
    }
    }
</style>

<div class="navbar-wrapper">
    <!-- --- NAVBAR --- -->
    <div class="d-flex justify-content-center" style="padding-top: 6px; position: relative; z-index: 2;">
        <div class="nav-pills-centered" role="navigation" aria-label="Menu utama">
            <ul class="nav">

                <!-- BERANDA -->
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('beranda') ? 'active' : '' }}" href="{{ url('/beranda') }}">
                        Beranda
                    </a>
                </li>

                <!-- PROFIL -->
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('profil') ? 'active' : '' }}" href="{{ url('/profil') }}">
                        Profil
                    </a>
                </li>

                <!-- LAYANAN -->
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('layanan*', 'samsat-keliling*', 'samsat-corner*', 'samsat-bergerak*', 'kantor-samsat*', 'pelantar-emas*', 'jadwal-samsat*') ? 'active' : '' }}" href="{{ url('/layanan') }}">
                        Layanan
                    </a>
                </li>

                <!-- DROPDOWN -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle 
                        {{ Request::is('informasi') || Request::is('faq*') ? 'active' : '' }}"
                        href="#" id="navbarDropdown" role="button">
                        Lainnya
                    </a>

                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li>
                            <a class="dropdown-item {{ Request::is('informasi*') ? 'active' : '' }}"
                            href="{{ url('/informasi') }}">
                            Informasi
                            </a>
                        </li>

                        <li>
                            <a class="dropdown-item {{ Request::is('faq*') ? 'active' : '' }}"
                            href="{{ url('/faq') }}">
                            FAQ
                            </a>
                        </li>
                    </ul>
                </li>

            </ul>
        </div>
    </div>
</div>

<!-- ========== JAVASCRIPT - SCROLL EFFECT ========== -->
<script>        
    // Script untuk efek scroll navbar
    window.addEventListener('scroll', function() {
        const navbar = document.querySelector('.navbar-wrapper');
        if (navbar) {
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        }
    });
</script>