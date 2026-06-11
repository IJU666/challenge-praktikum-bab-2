@extends('layouts.app')

@section('title', 'Portofolio')

@push('styles')
<style>
    .portfolio-hero {
        background: linear-gradient(135deg, #11998e 0%, #38ef7d 100%);
        padding: 80px 0;
    }
    .portfolio-card {
        border: none;
        border-radius: 16px;
        overflow: hidden;
        transition: transform 0.3s, box-shadow 0.3s;
    }
    .portfolio-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 20px 40px rgba(0,0,0,0.15) !important;
    }
    .portfolio-img {
        height: 200px;
        display: flex; align-items: center; justify-content: center;
        font-size: 4rem;
        position: relative;
        overflow: hidden;
    }
    .portfolio-overlay {
        position: absolute; inset: 0;
        background: rgba(0,0,0,0.6);
        display: flex; align-items: center; justify-content: center;
        opacity: 0; transition: opacity 0.3s;
        gap: 10px;
    }
    .portfolio-card:hover .portfolio-overlay { opacity: 1; }
    .filter-btn { border-radius: 50px; }
    .filter-btn.active { background: #0d6efd; color: white; border-color: #0d6efd; }
</style>
@endpush

@section('content')

<section class="portfolio-hero text-white text-center">
    <div class="container">
        <span class="badge bg-white text-success px-3 py-2 mb-2">Karya Kami</span>
        <h1 class="display-4 fw-bold mb-3">Portofolio Proyek</h1>
        <p class="fs-5 opacity-75 mx-auto" style="max-width:550px">
            Koleksi proyek terbaik yang telah kami kerjakan dengan penuh dedikasi dan kebanggaan.
        </p>
    </div>
</section>

<section class="py-5">
    <div class="container">

        <div class="d-flex flex-wrap justify-content-center gap-2 mb-5">
            <button class="btn btn-outline-primary filter-btn active">Semua</button>
            <button class="btn btn-outline-primary filter-btn">Web App</button>
            <button class="btn btn-outline-primary filter-btn">Mobile</button>
            <button class="btn btn-outline-primary filter-btn">UI/UX</button>
            <button class="btn btn-outline-primary filter-btn">E-Commerce</button>
        </div>

        @php
        $projects = [
            ['nama' => 'Toko Online Fashion',    'kategori' => 'E-Commerce',  'tech' => 'Laravel, Vue.js, MySQL',     'emoji' => '🛍️',  'warna' => '#667eea, #764ba2', 'tahun' => '2025'],
            ['nama' => 'Sistem Manajemen Sekolah','kategori' => 'Web App',     'tech' => 'Laravel, Bootstrap, MySQL',  'emoji' => '🏫',  'warna' => '#f093fb, #f5576c', 'tahun' => '2025'],
            ['nama' => 'Aplikasi Kasir Digital',  'kategori' => 'Web App',     'tech' => 'PHP, jQuery, SQLite',        'emoji' => '💰',  'warna' => '#4facfe, #00f2fe', 'tahun' => '2024'],
            ['nama' => 'Landing Page Startup',    'kategori' => 'UI/UX',       'tech' => 'HTML, CSS, JavaScript',      'emoji' => '🚀',  'warna' => '#43e97b, #38f9d7', 'tahun' => '2024'],
            ['nama' => 'Aplikasi Kesehatan',      'kategori' => 'Mobile',      'tech' => 'React Native, Firebase',     'emoji' => '❤️',  'warna' => '#fa709a, #fee140', 'tahun' => '2024'],
            ['nama' => 'Dashboard Analytics',     'kategori' => 'Web App',     'tech' => 'Laravel, Chart.js, Tailwind','emoji' => '📊',  'warna' => '#a18cd1, #fbc2eb', 'tahun' => '2023'],
            ['nama' => 'Website Restoran',        'kategori' => 'E-Commerce',  'tech' => 'Laravel, Bootstrap 5',       'emoji' => '🍽️',  'warna' => '#ffecd2, #fcb69f', 'tahun' => '2023'],
            ['nama' => 'Booking Hotel Online',    'kategori' => 'Web App',     'tech' => 'Laravel, Livewire, MySQL',   'emoji' => '🏨',  'warna' => '#a1c4fd, #c2e9fb', 'tahun' => '2023'],
            ['nama' => 'Redesign App Bank',       'kategori' => 'UI/UX',       'tech' => 'Figma, Adobe XD',            'emoji' => '🏦',  'warna' => '#d4fc79, #96e6a1', 'tahun' => '2022'],
        ];
        @endphp

        <div class="row g-4">
            @foreach ($projects as $project)
            <div class="col-sm-6 col-lg-4">
                <div class="card portfolio-card h-100 shadow-sm">
                    <div class="portfolio-img" style="background: linear-gradient(135deg, {{ $project['warna'] }})">
                        <span>{{ $project['emoji'] }}</span>
                        <div class="portfolio-overlay">
                            <a href="#" class="btn btn-sm btn-light rounded-pill px-3">
                                <i class="bi bi-eye me-1"></i>Preview
                            </a>
                            <a href="#" class="btn btn-sm btn-warning rounded-pill px-3">
                                <i class="bi bi-github me-1"></i>Code
                            </a>
                        </div>
                    </div>
                    <div class="card-body p-4">
                        <div class="d-flex justify-content-between align-items-start mb-2">
                            <span class="badge bg-primary-subtle text-primary">{{ $project['kategori'] }}</span>
                            <small class="text-muted"><i class="bi bi-calendar3 me-1"></i>{{ $project['tahun'] }}</small>
                        </div>
                        <h5 class="fw-bold mb-2">{{ $project['nama'] }}</h5>
                        <p class="text-muted small mb-0">
                            <i class="bi bi-code-slash me-1"></i>{{ $project['tech'] }}
                        </p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div class="text-center mt-5">
            <p class="text-muted">
                Menampilkan <strong>{{ count($projects) }}</strong> proyek &mdash;
                <a href="{{ url('/kontak') }}" class="text-primary text-decoration-none">
                    Punya proyek? Hubungi kami <i class="bi bi-arrow-right"></i>
                </a>
            </p>
        </div>
    </div>
</section>

@endsection

@push('scripts')
<script>
    // Filter button aktif (tampilan saja)
    document.querySelectorAll('.filter-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            document.querySelectorAll('.filter-btn').forEach(b => b.classList.remove('active'));
            this.classList.add('active');
        });
    });
</script>
@endpush
