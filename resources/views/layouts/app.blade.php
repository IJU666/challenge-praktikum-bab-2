<!DOCTYPE html>
<html lang="id" data-bs-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Website Saya') - Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            transition: background-color 0.3s ease, color 0.3s ease;
        }
        .navbar-brand { font-weight: 700; font-size: 1.5rem; }
        .nav-link.active { font-weight: 600; }
        footer { background-color: #212529; color: #adb5bd; }
        footer a { color: #adb5bd; text-decoration: none; }
        footer a:hover { color: #fff; }

        /* Smooth transition untuk semua elemen saat mode berganti */
        *, *::before, *::after {
            transition: background-color 0.3s ease, border-color 0.3s ease, color 0.2s ease;
        }

        /* Tombol toggle */
        #darkModeToggle {
            width: 38px; height: 38px;
            border-radius: 50%;
            display: flex; align-items: center; justify-content: center;
            font-size: 1rem;
            border: 2px solid rgba(255,255,255,0.3);
            background: transparent;
            color: rgba(255,255,255,0.85);
            cursor: pointer;
            transition: border-color 0.2s, background 0.2s;
        }
        #darkModeToggle:hover {
            background: rgba(255,255,255,0.1);
            border-color: rgba(255,255,255,0.6);
        }
    </style>
    @stack('styles')
</head>
<body>

{{-- NAVBAR --}}
<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top shadow">
    <div class="container">
        <a class="navbar-brand text-warning" href="{{ url('/') }}">
            <i class="bi bi-code-slash"></i> MyPortfolio
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="{{ url('/') }}">
                        <i class="bi bi-house"></i> Beranda
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('tentang') ? 'active' : '' }}" href="{{ url('/tentang') }}">
                        <i class="bi bi-people"></i> Tentang
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('portofolio') ? 'active' : '' }}" href="{{ url('/portofolio') }}">
                        <i class="bi bi-grid"></i> Portofolio
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('blog') ? 'active' : '' }}" href="{{ url('/blog') }}">
                        <i class="bi bi-journal-text"></i> Blog
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('kontak') ? 'active' : '' }}" href="{{ url('/kontak') }}">
                        <i class="bi bi-envelope"></i> Kontak
                    </a>
                </li>

                {{-- TOMBOL TOGGLE DARK/LIGHT MODE --}}
                <li class="nav-item ms-2 d-flex align-items-center">
                    <button id="darkModeToggle" title="Toggle Dark Mode">
                        <i class="bi bi-moon-fill" id="toggleIcon"></i>
                    </button>
                </li>
            </ul>
        </div>
    </div>
</nav>

{{-- KONTEN UTAMA --}}
<main>
    @yield('content')
</main>

{{-- FOOTER --}}
<footer class="py-5 mt-5">
    <div class="container">
        <div class="row g-4">
            <div class="col-md-4">
                <h5 class="text-white fw-bold"><i class="bi bi-code-slash text-warning"></i> MyPortfolio</h5>
                <p class="small">Website portofolio sederhana yang dibuat menggunakan Laravel 13 dan Bootstrap 5.</p>
            </div>
            <div class="col-md-4">
                <h6 class="text-white fw-bold">Navigasi</h6>
                <ul class="list-unstyled small">
                    <li><a href="{{ url('/') }}">Beranda</a></li>
                    <li><a href="{{ url('/tentang') }}">Tentang</a></li>
                    <li><a href="{{ url('/portofolio') }}">Portofolio</a></li>
                    <li><a href="{{ url('/blog') }}">Blog</a></li>
                    <li><a href="{{ url('/kontak') }}">Kontak</a></li>
                </ul>
            </div>
            <div class="col-md-4">
                <h6 class="text-white fw-bold">Ikuti Kami</h6>
                <div class="d-flex gap-3 fs-4">
                    <a href="#"><i class="bi bi-instagram"></i></a>
                    <a href="#"><i class="bi bi-github"></i></a>
                    <a href="#"><i class="bi bi-linkedin"></i></a>
                    <a href="#"><i class="bi bi-twitter-x"></i></a>
                </div>
            </div>
        </div>
        <hr class="border-secondary mt-4">
        <p class="text-center small mb-0">© {{ date('Y') }} MyPortfolio. Dibuat dengan ❤️ menggunakan Laravel 13.</p>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

@stack('scripts')

{{-- DARK MODE TOGGLE SCRIPT --}}
<script>
    const html        = document.documentElement;
    const toggleBtn   = document.getElementById('darkModeToggle');
    const toggleIcon  = document.getElementById('toggleIcon');

    // Terapkan preferensi yang tersimpan di localStorage saat halaman dimuat
    const savedTheme = localStorage.getItem('theme') || 'light';
    applyTheme(savedTheme);

    toggleBtn.addEventListener('click', function () {
        const currentTheme = html.getAttribute('data-bs-theme');
        const newTheme = currentTheme === 'dark' ? 'light' : 'dark';
        applyTheme(newTheme);
        localStorage.setItem('theme', newTheme); // Simpan preferensi
    });

    function applyTheme(theme) {
        html.setAttribute('data-bs-theme', theme);
        if (theme === 'dark') {
            toggleIcon.className = 'bi bi-sun-fill';
            toggleBtn.title = 'Beralih ke Light Mode';
        } else {
            toggleIcon.className = 'bi bi-moon-fill';
            toggleBtn.title = 'Beralih ke Dark Mode';
        }
    }
</script>

</body>
</html>
