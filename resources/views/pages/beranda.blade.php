@extends('layouts.app')

@section('title', 'Beranda')

@push('styles')
<style>
    .hero-section {
        background: linear-gradient(135deg, #1a1a2e 0%, #16213e 50%, #0f3460 100%);
        min-height: 90vh;
        display: flex;
        align-items: center;
        position: relative;
        overflow: hidden;
    }
    .hero-section::before {
        content: '';
        position: absolute;
        width: 400px; height: 400px;
        background: rgba(255, 193, 7, 0.05);
        border-radius: 50%;
        top: -100px; right: -100px;
    }
    .hero-section::after {
        content: '';
        position: absolute;
        width: 300px; height: 300px;
        background: rgba(13, 110, 253, 0.08);
        border-radius: 50%;
        bottom: -80px; left: -80px;
    }
    .hero-title {
        font-size: 3.5rem;
        font-weight: 800;
        line-height: 1.2;
    }
    .hero-subtitle { font-size: 1.2rem; opacity: 0.8; }
    .typing-text { color: #ffc107; }
    .feature-card {
        border: none;
        border-radius: 16px;
        transition: transform 0.3s, box-shadow 0.3s;
        overflow: hidden;
    }
    .feature-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 20px 40px rgba(0,0,0,0.12) !important;
    }
    .feature-icon {
        width: 70px; height: 70px;
        border-radius: 16px;
        display: flex; align-items: center; justify-content: center;
        font-size: 2rem; margin-bottom: 1rem;
    }
    .stats-section { background: #f8f9fa; }
    .stat-number { font-size: 2.5rem; font-weight: 800; }
</style>
@endpush

@section('content')


<section class="hero-section text-white">
    <div class="container position-relative" style="z-index:1">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <span class="badge bg-warning text-dark mb-3 px-3 py-2">👋 Selamat Datang</span>
                <h1 class="hero-title mb-3">
                    Kami Membuat <br>
                    <span class="typing-text">Website Impianmu</span>
                </h1>
                <p class="hero-subtitle mb-4">
                    Tim profesional yang berpengalaman dalam membangun aplikasi web modern
                    menggunakan teknologi terkini seperti Laravel, Vue.js, dan Bootstrap.
                </p>
                <div class="d-flex gap-3 flex-wrap">
                    <a href="{{ url('/portofolio') }}" class="btn btn-warning btn-lg px-4 fw-bold">
                        <i class="bi bi-grid me-2"></i>Lihat Portofolio
                    </a>
                    <a href="{{ url('/kontak') }}" class="btn btn-outline-light btn-lg px-4">
                        <i class="bi bi-envelope me-2"></i>Hubungi Kami
                    </a>
                </div>
                <div class="d-flex gap-4 mt-4">
                    <div>
                        <div class="fw-bold fs-4">50+</div>
                        <small class="opacity-75">Proyek Selesai</small>
                    </div>
                    <div class="border-start border-secondary ps-4">
                        <div class="fw-bold fs-4">30+</div>
                        <small class="opacity-75">Klien Puas</small>
                    </div>
                    <div class="border-start border-secondary ps-4">
                        <div class="fw-bold fs-4">5+</div>
                        <small class="opacity-75">Tahun Pengalaman</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 text-center">
                <div style="font-size: 15rem; line-height: 1; opacity: 0.15;">💻</div>
            </div>
        </div>
    </div>
</section>

<section class="py-6 py-5">
    <div class="container">
        <div class="text-center mb-5">
            <span class="badge bg-primary-subtle text-primary px-3 py-2 mb-2">Layanan Kami</span>
            <h2 class="fw-bold fs-1">Apa yang Kami Tawarkan?</h2>
            <p class="text-muted fs-5">Tiga layanan unggulan yang siap membantu bisnis kamu berkembang</p>
        </div>

        <div class="row g-4">
            <div class="col-md-4">
                <div class="card feature-card h-100 shadow-sm p-4">
                    <div class="card-body">
                        <div class="feature-icon bg-primary bg-opacity-10 text-primary">
                            <i class="bi bi-laptop"></i>
                        </div>
                        <h4 class="fw-bold mb-3">Web Development</h4>
                        <p class="text-muted">
                            Membangun website modern, responsif, dan berkinerja tinggi menggunakan
                            Laravel, React, dan teknologi terkini sesuai kebutuhan bisnis kamu.
                        </p>
                        <ul class="list-unstyled text-muted small">
                            <li><i class="bi bi-check-circle-fill text-success me-2"></i>Laravel & PHP</li>
                            <li><i class="bi bi-check-circle-fill text-success me-2"></i>Responsive Design</li>
                            <li><i class="bi bi-check-circle-fill text-success me-2"></i>Optimasi Performa</li>
                        </ul>
                        <a href="{{ url('/portofolio') }}" class="btn btn-primary mt-3">
                            Lihat Contoh <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card feature-card h-100 shadow-sm p-4 border-warning border-2">
                    <div class="card-body">
                        <div class="feature-icon bg-warning bg-opacity-10 text-warning">
                            <i class="bi bi-phone"></i>
                        </div>
                        <span class="badge bg-warning text-dark mb-2">Populer</span>
                        <h4 class="fw-bold mb-3">UI/UX Design</h4>
                        <p class="text-muted">
                            Merancang antarmuka yang indah dan pengalaman pengguna yang intuitif,
                            membuat pengguna betah dan mudah menggunakan aplikasimu.
                        </p>
                        <ul class="list-unstyled text-muted small">
                            <li><i class="bi bi-check-circle-fill text-success me-2"></i>Figma & Adobe XD</li>
                            <li><i class="bi bi-check-circle-fill text-success me-2"></i>User Research</li>
                            <li><i class="bi bi-check-circle-fill text-success me-2"></i>Prototyping</li>
                        </ul>
                        <a href="{{ url('/kontak') }}" class="btn btn-warning mt-3">
                            Konsultasi <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card feature-card h-100 shadow-sm p-4">
                    <div class="card-body">
                        <div class="feature-icon bg-success bg-opacity-10 text-success">
                            <i class="bi bi-bar-chart-line"></i>
                        </div>
                        <h4 class="fw-bold mb-3">Digital Marketing</h4>
                        <p class="text-muted">
                            Strategi pemasaran digital yang tepat sasaran untuk meningkatkan
                            visibilitas online dan mendatangkan lebih banyak pelanggan potensial.
                        </p>
                        <ul class="list-unstyled text-muted small">
                            <li><i class="bi bi-check-circle-fill text-success me-2"></i>SEO Optimization</li>
                            <li><i class="bi bi-check-circle-fill text-success me-2"></i>Social Media</li>
                            <li><i class="bi bi-check-circle-fill text-success me-2"></i>Google Ads</li>
                        </ul>
                        <a href="{{ url('/kontak') }}" class="btn btn-success mt-3">
                            Mulai Sekarang <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="stats-section py-5">
    <div class="container">
        <div class="row g-4 text-center">
            <div class="col-6 col-md-3">
                <div class="stat-number text-primary">50+</div>
                <p class="text-muted mb-0">Proyek Selesai</p>
            </div>
            <div class="col-6 col-md-3">
                <div class="stat-number text-warning">30+</div>
                <p class="text-muted mb-0">Klien Puas</p>
            </div>
            <div class="col-6 col-md-3">
                <div class="stat-number text-success">10+</div>
                <p class="text-muted mb-0">Anggota Tim</p>
            </div>
            <div class="col-6 col-md-3">
                <div class="stat-number text-danger">5+</div>
                <p class="text-muted mb-0">Tahun Pengalaman</p>
            </div>
        </div>
    </div>
</section>

@endsection
