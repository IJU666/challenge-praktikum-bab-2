@extends('layouts.app')

@section('title', 'Blog')

@push('styles')
<style>
    .blog-hero {
        background: linear-gradient(135deg, #fc4a1a 0%, #f7b733 100%);
        padding: 80px 0;
    }
    .blog-card {
        border: none;
        border-radius: 16px;
        overflow: hidden;
        transition: transform 0.3s, box-shadow 0.3s;
    }
    .blog-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 16px 32px rgba(0,0,0,0.12) !important;
    }
    .blog-thumbnail {
        height: 180px;
        display: flex; align-items: center; justify-content: center;
        font-size: 3.5rem;
    }
    .blog-card .card-body { padding: 1.5rem; }
    .article-number {
        font-size: 3rem; font-weight: 900;
        color: #dee2e6; line-height: 1;
    }
    .featured-card {
        border: none; border-radius: 20px; overflow: hidden;
    }
    .featured-thumbnail {
        height: 280px;
        display: flex; align-items: center; justify-content: center;
        font-size: 6rem;
    }
</style>
@endpush

@section('content')

<section class="blog-hero text-white text-center">
    <div class="container">
        <span class="badge bg-white text-warning px-3 py-2 mb-2" style="color:#fc4a1a !important">Blog</span>
        <h1 class="display-4 fw-bold mb-3">Artikel & Insights</h1>
        <p class="fs-5 opacity-75 mx-auto" style="max-width:550px">
            Berbagi pengetahuan, tips, dan pengalaman seputar dunia pengembangan web dan teknologi.
        </p>
    </div>
</section>

<section class="py-5">
    <div class="container">

        @php
        $artikels = [
            [
                'judul'    => 'Panduan Lengkap Laravel 13 untuk Pemula',
                'kategori' => 'Tutorial',
                'penulis'  => 'Andi Pratama',
                'tanggal'  => '5 Juni 2026',
                'waktu'    => '8 menit baca',
                'emoji'    => '🚀',
                'warna'    => '#667eea, #764ba2',
                'featured' => true,
                'ringkasan'=> 'Pelajari cara membuat aplikasi web modern menggunakan Laravel 13, mulai dari instalasi hingga deployment ke server production.',
            ],
            [
                'judul'    => '10 Tips Optimasi Performa Website',
                'kategori' => 'Tips & Trik',
                'penulis'  => 'Budi Santoso',
                'tanggal'  => '3 Juni 2026',
                'waktu'    => '5 menit baca',
                'emoji'    => '⚡',
                'warna'    => '#f093fb, #f5576c',
                'featured' => false,
                'ringkasan'=> 'Teknik-teknik ampuh untuk membuat website kamu loading lebih cepat dan memberikan pengalaman terbaik bagi pengguna.',
            ],
            [
                'judul'    => 'Memahami Konsep REST API dengan Laravel',
                'kategori' => 'Tutorial',
                'penulis'  => 'Andi Pratama',
                'tanggal'  => '1 Juni 2026',
                'waktu'    => '10 menit baca',
                'emoji'    => '🔌',
                'warna'    => '#4facfe, #00f2fe',
                'featured' => false,
                'ringkasan'=> 'Cara membuat REST API yang bersih, terstruktur, dan aman menggunakan Laravel dengan best practices terkini.',
            ],
            [
                'judul'    => 'UI/UX Design: Prinsip Dasar yang Wajib Tahu',
                'kategori' => 'Design',
                'penulis'  => 'Siti Rahayu',
                'tanggal'  => '28 Mei 2026',
                'waktu'    => '6 menit baca',
                'emoji'    => '🎨',
                'warna'    => '#43e97b, #38f9d7',
                'featured' => false,
                'ringkasan'=> 'Prinsip-prinsip desain yang harus dipahami setiap developer agar bisa membuat interface yang intuitif dan menarik.',
            ],
            [
                'judul'    => 'Docker untuk Developer Laravel',
                'kategori' => 'DevOps',
                'penulis'  => 'Rizky Firmansyah',
                'tanggal'  => '25 Mei 2026',
                'waktu'    => '7 menit baca',
                'emoji'    => '🐳',
                'warna'    => '#a18cd1, #fbc2eb',
                'featured' => false,
                'ringkasan'=> 'Setup environment development yang konsisten menggunakan Docker dan Docker Compose untuk proyek Laravel.',
            ],
            [
                'judul'    => 'Strategi SEO 2026 yang Masih Ampuh',
                'kategori' => 'Marketing',
                'penulis'  => 'Maya Putri',
                'tanggal'  => '20 Mei 2026',
                'waktu'    => '9 menit baca',
                'emoji'    => '📈',
                'warna'    => '#ffecd2, #fcb69f',
                'featured' => false,
                'ringkasan'=> 'Teknik SEO terbaru yang terbukti meningkatkan peringkat website di mesin pencari di tengah perubahan algoritma Google.',
            ],
        ];

        $kategoriWarna = [
            'Tutorial'   => 'primary',
            'Tips & Trik'=> 'success',
            'Design'     => 'danger',
            'DevOps'     => 'info',
            'Marketing'  => 'warning',
        ];
        @endphp

        @foreach ($artikels as $artikel)
            @if ($artikel['featured'])
            <div class="mb-5">
                <div class="card featured-card shadow-sm">
                    <div class="row g-0">
                        <div class="col-md-5">
                            <div class="featured-thumbnail h-100" style="background: linear-gradient(135deg, {{ $artikel['warna'] }})">
                                {{ $artikel['emoji'] }}
                            </div>
                        </div>
                        <div class="col-md-7 d-flex align-items-center">
                            <div class="card-body p-4 p-lg-5">
                                <div class="d-flex gap-2 mb-3">
                                    <span class="badge bg-warning text-dark">⭐ Featured</span>
                                    <span class="badge bg-{{ $kategoriWarna[$artikel['kategori']] ?? 'secondary' }}-subtle text-{{ $kategoriWarna[$artikel['kategori']] ?? 'secondary' }}">
                                        {{ $artikel['kategori'] }}
                                    </span>
                                </div>
                                <h2 class="fw-bold mb-3">{{ $artikel['judul'] }}</h2>
                                <p class="text-muted mb-4">{{ $artikel['ringkasan'] }}</p>
                                <div class="d-flex align-items-center gap-3 mb-4">
                                    <small class="text-muted"><i class="bi bi-person me-1"></i>{{ $artikel['penulis'] }}</small>
                                    <small class="text-muted"><i class="bi bi-calendar3 me-1"></i>{{ $artikel['tanggal'] }}</small>
                                    <small class="text-muted"><i class="bi bi-clock me-1"></i>{{ $artikel['waktu'] }}</small>
                                </div>
                                <a href="#" class="btn btn-primary px-4">
                                    Baca Selengkapnya <i class="bi bi-arrow-right ms-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif
        @endforeach

        <h4 class="fw-bold mb-4">Artikel Terbaru</h4>
        <div class="row g-4">
            @foreach ($artikels as $index => $artikel)
                @if (!$artikel['featured'])
                <div class="col-md-6 col-lg-4">
                    <div class="card blog-card h-100 shadow-sm">
                        <div class="blog-thumbnail" style="background: linear-gradient(135deg, {{ $artikel['warna'] }})">
                            {{ $artikel['emoji'] }}
                        </div>
                        <div class="card-body">
                            <span class="badge bg-{{ $kategoriWarna[$artikel['kategori']] ?? 'secondary' }}-subtle text-{{ $kategoriWarna[$artikel['kategori']] ?? 'secondary' }} mb-2">
                                {{ $artikel['kategori'] }}
                            </span>
                            <h5 class="fw-bold mb-2">{{ $artikel['judul'] }}</h5>
                            <p class="text-muted small mb-3">{{ $artikel['ringkasan'] }}</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <small class="text-muted">
                                    <i class="bi bi-person me-1"></i>{{ $artikel['penulis'] }}
                                </small>
                                <small class="text-muted">
                                    <i class="bi bi-clock me-1"></i>{{ $artikel['waktu'] }}
                                </small>
                            </div>
                        </div>
                        <div class="card-footer bg-transparent border-0 pb-3 px-4">
                            <a href="#" class="btn btn-sm btn-outline-primary w-100">
                                Baca Artikel <i class="bi bi-arrow-right ms-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
                @endif
            @endforeach
        </div>

        <div class="text-center mt-5">
            <p class="text-muted small">
                Menampilkan <strong>{{ count($artikels) }}</strong> artikel &mdash;
                update setiap minggu
            </p>
        </div>
    </div>
</section>

@endsection
