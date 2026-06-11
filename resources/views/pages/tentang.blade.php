@extends('layouts.app')

@section('title', 'Tentang Kami')

@push('styles')
<style>
    .about-hero {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        padding: 80px 0;
    }
    .team-card {
        border: none;
        border-radius: 16px;
        transition: transform 0.3s, box-shadow 0.3s;
        overflow: hidden;
    }
    .team-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 16px 32px rgba(0,0,0,0.12) !important;
    }
    .team-avatar {
        width: 100px; height: 100px;
        border-radius: 50%;
        object-fit: cover;
        border: 4px solid #fff;
        box-shadow: 0 4px 12px rgba(0,0,0,0.15);
    }
    .avatar-placeholder {
        width: 100px; height: 100px;
        border-radius: 50%;
        display: flex; align-items: center; justify-content: center;
        font-size: 2.5rem; font-weight: 700;
        color: white; margin: 0 auto;
        border: 4px solid #fff;
        box-shadow: 0 4px 12px rgba(0,0,0,0.15);
    }
    .timeline { position: relative; padding-left: 30px; }
    .timeline::before {
        content: '';
        position: absolute; left: 8px; top: 0; bottom: 0;
        width: 2px; background: #dee2e6;
    }
    .timeline-item { position: relative; margin-bottom: 2rem; }
    .timeline-dot {
        position: absolute; left: -26px; top: 4px;
        width: 16px; height: 16px;
        border-radius: 50%; background: #0d6efd;
        border: 3px solid #fff; box-shadow: 0 0 0 2px #0d6efd;
    }
</style>
@endpush

@section('content')

<section class="about-hero text-white text-center">
    <div class="container">
        <span class="badge bg-white text-purple mb-3 px-3 py-2" style="color:#764ba2">Tentang Kami</span>
        <h1 class="display-4 fw-bold mb-3">Kenali Tim Kami</h1>
        <p class="fs-5 opacity-75 mx-auto" style="max-width:600px">
            Kami adalah tim pengembang muda yang bersemangat menciptakan solusi digital
            kreatif dan inovatif untuk membantu bisnis berkembang.
        </p>
    </div>
</section>

<section class="py-5">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <span class="badge bg-primary-subtle text-primary px-3 py-2 mb-2">Cerita Kami</span>
                <h2 class="fw-bold fs-1 mb-4">Dari Garage ke Studio Digital</h2>
                <p class="text-muted fs-5 mb-3">
                    Berawal dari sebuah kamar kos yang sempit di tahun 2019, kami memulai perjalanan
                    dengan satu laptop dan satu impian besar — membuat teknologi lebih mudah diakses
                    oleh semua orang.
                </p>
                <p class="text-muted mb-4">
                    Kini kami telah berkembang menjadi tim yang solid dengan lebih dari 10 anggota
                    berpengalaman, telah menyelesaikan 50+ proyek, dan melayani klien dari berbagai
                    industri di seluruh Indonesia.
                </p>
                <div class="d-flex gap-3">
                    <div class="text-center p-3 bg-primary bg-opacity-10 rounded-3">
                        <div class="fw-bold fs-3 text-primary">2019</div>
                        <small class="text-muted">Berdiri</small>
                    </div>
                    <div class="text-center p-3 bg-success bg-opacity-10 rounded-3">
                        <div class="fw-bold fs-3 text-success">50+</div>
                        <small class="text-muted">Proyek</small>
                    </div>
                    <div class="text-center p-3 bg-warning bg-opacity-10 rounded-3">
                        <div class="fw-bold fs-3 text-warning">30+</div>
                        <small class="text-muted">Klien</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="timeline">
                    <div class="timeline-item">
                        <div class="timeline-dot"></div>
                        <h6 class="fw-bold">2019 — Awal Mula</h6>
                        <p class="text-muted small">Dibentuk oleh 3 mahasiswa teknik informatika dengan modal nekat dan semangat belajar.</p>
                    </div>
                    <div class="timeline-item">
                        <div class="timeline-dot" style="background:#ffc107; box-shadow: 0 0 0 2px #ffc107"></div>
                        <h6 class="fw-bold">2021 — Berkembang</h6>
                        <p class="text-muted small">Tim bertambah menjadi 7 orang, proyek pertama senilai 100 juta berhasil diselesaikan.</p>
                    </div>
                    <div class="timeline-item">
                        <div class="timeline-dot" style="background:#198754; box-shadow: 0 0 0 2px #198754"></div>
                        <h6 class="fw-bold">2023 — Ekspansi</h6>
                        <p class="text-muted small">Membuka kantor resmi, mendapat kepercayaan dari klien korporat nasional.</p>
                    </div>
                    <div class="timeline-item">
                        <div class="timeline-dot" style="background:#dc3545; box-shadow: 0 0 0 2px #dc3545"></div>
                        <h6 class="fw-bold">2025 — Kini</h6>
                        <p class="text-muted small">10+ anggota tim, 50+ proyek sukses, terus berinovasi dengan teknologi terbaru.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <span class="badge bg-success-subtle text-success px-3 py-2 mb-2">Tim Kami</span>
            <h2 class="fw-bold fs-1">Orang-orang di Balik Layar</h2>
            <p class="text-muted">Tim profesional yang berdedikasi untuk memberikan hasil terbaik</p>
        </div>

        @php
        $team = [
            ['nama' => 'Andi Pratama',    'jabatan' => 'CEO & Founder',        'keahlian' => 'Laravel, Vue.js',    'warna' => '#0d6efd', 'inisial' => 'AP'],
            ['nama' => 'Siti Rahayu',     'jabatan' => 'Lead UI/UX Designer',  'keahlian' => 'Figma, Adobe XD',    'warna' => '#e83e8c', 'inisial' => 'SR'],
            ['nama' => 'Budi Santoso',    'jabatan' => 'Backend Developer',    'keahlian' => 'PHP, MySQL, API',    'warna' => '#198754', 'inisial' => 'BS'],
            ['nama' => 'Dewi Lestari',    'jabatan' => 'Frontend Developer',   'keahlian' => 'React, Tailwind',    'warna' => '#ffc107', 'inisial' => 'DL'],
            ['nama' => 'Rizky Firmansyah','jabatan' => 'DevOps Engineer',      'keahlian' => 'Docker, AWS, CI/CD', 'warna' => '#0dcaf0', 'inisial' => 'RF'],
            ['nama' => 'Maya Putri',      'jabatan' => 'Digital Marketer',     'keahlian' => 'SEO, Google Ads',    'warna' => '#fd7e14', 'inisial' => 'MP'],
        ];
        @endphp

        <div class="row g-4">
            @foreach ($team as $member)
            <div class="col-sm-6 col-md-4">
                <div class="card team-card h-100 shadow-sm text-center p-4">
                    <div class="card-body">
                        <div class="avatar-placeholder mb-3" style="background: {{ $member['warna'] }}">
                            {{ $member['inisial'] }}
                        </div>
                        <h5 class="fw-bold mb-1">{{ $member['nama'] }}</h5>
                        <span class="badge bg-primary-subtle text-primary mb-2">{{ $member['jabatan'] }}</span>
                        <p class="text-muted small mb-3">{{ $member['keahlian'] }}</p>
                        <div class="d-flex justify-content-center gap-2">
                            <a href="#" class="btn btn-sm btn-outline-secondary rounded-circle" style="width:34px;height:34px;padding:4px">
                                <i class="bi bi-linkedin"></i>
                            </a>
                            <a href="#" class="btn btn-sm btn-outline-secondary rounded-circle" style="width:34px;height:34px;padding:4px">
                                <i class="bi bi-github"></i>
                            </a>
                            <a href="#" class="btn btn-sm btn-outline-secondary rounded-circle" style="width:34px;height:34px;padding:4px">
                                <i class="bi bi-envelope"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

@endsection
