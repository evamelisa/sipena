<!-- resources/views/navbar.blade.php -->
<style>
    .nav-pills-centered{ 
    display:inline-flex; 
    gap:.35rem; 
    background: rgba(255,255,255,0.06); 
    padding:6px 10px; 
    border-radius:999px; 
    box-shadow:0 8px 26px rgba(11,42,102,0.12); 
    }
    .nav-pills-centered .nav-link{
    color:#fff;
    padding:.35rem .9rem;
    border-radius:30px;
    font-weight:600;
    font-size:.9rem;
    opacity:.98;
    text-decoration:none;
    }
    .nav-pills-centered .nav-link.active{
    background: rgba(255,255,255,0.12); 
    }

    /* Dropdown */
    .nav-item.dropdown {
    position: relative;
    }
    .dropdown-menu {
    position: absolute;
    top: 1.9rem;
    left: 0;
    background: rgba(255,255,255,0.12);
    backdrop-filter: blur(10px);
    border-radius: 12px;
    padding: 6px 0;
    min-width: 140px;
    display: none;
    box-shadow: 0 8px 26px rgba(11,42,102,0.22);
    z-index: 999;
    }
    .dropdown-menu a {
    display: block;
    padding: 8px 14px;
    color: #fff;
    text-decoration: none;
    font-size: .85rem;
    }
    .dropdown-menu a:hover {
    background: rgba(255,255,255,0.2);
    }
    .nav-item.dropdown:hover .dropdown-menu {
    display: block;
    }
    .nav-link.dropdown-toggle::after {
        content: "";
        display: inline-block;
        margin-left: 6px;
        width: 0; 
        height: 0; 
        border-left: 5px solid transparent;
        border-right: 5px solid transparent;
        border-top: 6px solid white; /* warna arrow */
    }

    </style>

    <div class="d-flex justify-content-center" style="padding-top:6px; position:relative; z-index:2;">
    <div class="nav-pills-centered" role="navigation" aria-label="Menu utama">
        <ul class="nav">
        <li class="nav-item"><a class="nav-link active" aria-current="page" href="{{ url('/beranda') }}">Beranda</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ url('/profil') }}">Profil</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ url('/layanan') }}">Layanan</a></li>

        <!-- Dropdown Lainnya -->
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button">Lainnya</a>
            <div class="dropdown-menu">
            <a href="{{ url('/informasi') }}">Informasi</a>
            <a href="{{ url('/tentang') }}">Tentang Kami</a>
            <a href="{{ url('/faq') }}">FAQ</a>
            </div>
        </li>
        </ul>
    </div>
    </div>
