<!-- resources/views/navbar.blade.php -->
<style>
    .nav-pills-centered { 
        display: inline-flex; 
        gap: .35rem; 
        background: rgba(255,255,255,0.06); 
        padding: 6px 10px; 
        border-radius: 999px; 
        box-shadow: 0 8px 26px rgba(11,42,102,0.12); 
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
        background: rgba(255,255,255,0.12); 
    }

    /* Override Bootstrap dropdown dengan !important yang lebih spesifik */
    .dropdown-menu {
        background: #212874ff !important;
        backdrop-filter: blur(10px);
        color: white !important;
        border-radius: 12px;
        padding: 6px 0;
        min-width: 140px;
        box-shadow: 0 8px 26px rgba(11,42,102,0.22);
        z-index: 9999 !important;
         position: fixed !important; /* Ubah dari absolute ke fixed */
    top: auto !important; /* Biarkan otomatis berdasarkan toggle */
    left: auto !important;
    transform: translateY(0) !important; /* Pastikan tidak ada shift */
    width: 200px !important; /* Lebar tetap */
    max-width: 200px !important;

    }
    .dropdown-menu.show {
        display: block !important; /* Tampilkan saat toggle */
    }
    .dropdown-menu .dropdown-item {
        display: block !important;
        padding: 8px 14px !important;
        color: #fff !important;
        text-decoration: none !important;
        font-size: .85rem !important;
        background: transparent !important;
    }
    .dropdown-menu .dropdown-item:hover {
        background: rgba(255,255,255,0.25) !important;
    }
    .dropdown-menu .dropdown-item.active {
        background: rgba(255,255,255,0.12) !important;
    }

    /* Pastikan top-banner tidak memotong dropdown */
    .top-banner {
        overflow: visible !important;
        position: relative;
    }

    /* Responsif untuk mobile */
    @media (max-width: 768px) {
        .dropdown-menu {
            position: fixed !important;
            top: auto !important;
            left: auto !important;
            width: 100% !important;
            max-width: 200px !important;
            box-shadow: 0 8px 26px rgba(11,42,102,0.3) !important;
        }
    }
</style>

<div class="d-flex justify-content-center" style="padding-top:6px; position:relative; z-index:2;">
    <div class="nav-pills-centered" role="navigation" aria-label="Menu utama">
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('beranda') ? 'active' : '' }}" href="{{ url('/beranda') }}">
                    Beranda
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('profil') ? 'active' : '' }}" href="{{ url('/profil') }}">
                    Profil
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('layanan') ? 'active' : '' }}" href="{{ url('/layanan') }}">
                    Layanan
                </a>
            </li>
            <!-- Dropdown Lainnya -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle {{ Request::is('informasi') || Request::is('tentang') || Request::is('faq') ? 'active' : '' }}" 
                   href="#" id="navbarDropdown" role="button">
                    Lainnya
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item {{ Request::is('informasi') ? 'active' : '' }}" href="{{ url('/informasi') }}">Informasi</a></li>
                    <li><a class="dropdown-item {{ Request::is('tentang') ? 'active' : '' }}" href="{{ url('/tentang') }}">Tentang Kami</a></li>
                    <li><a class="dropdown-item {{ Request::is('faq') ? 'active' : '' }}" href="{{ url('/faq') }}">FAQ</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>

<!-- Fallback JS untuk toggle dropdown jika Bootstrap gagal -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const toggle = document.querySelector('.dropdown-toggle');
        const menu = document.querySelector('.dropdown-menu');
        
        if (toggle && menu) {
            toggle.addEventListener('click', function(e) {
                e.preventDefault();
                menu.classList.toggle('show'); // Toggle visibility
            });
            
            // Tutup dropdown saat klik di luar
            document.addEventListener('click', function(e) {
                if (!toggle.contains(e.target) && !menu.contains(e.target)) {
                    menu.classList.remove('show');
                }
            });
        }
    });
</script>