@extends('layouts.app')

@section('title', 'Kontak')

@push('styles')
<style>
    .kontak-hero {
        background: linear-gradient(135deg, #2193b0 0%, #6dd5ed 100%);
        padding: 80px 0;
    }
    .kontak-card {
        border: none;
        border-radius: 20px;
        overflow: hidden;
    }
    .info-item {
        display: flex; align-items: flex-start; gap: 16px;
        padding: 16px; border-radius: 12px;
        transition: background 0.2s;
    }
    .info-item:hover { background: #f8f9fa; }
    .info-icon {
        width: 48px; height: 48px; border-radius: 12px;
        display: flex; align-items: center; justify-content: center;
        font-size: 1.3rem; flex-shrink: 0;
    }
    .form-control, .form-select {
        border-radius: 10px;
        border: 2px solid #e9ecef;
        padding: 12px 16px;
        transition: border-color 0.2s;
    }
    .form-control:focus, .form-select:focus {
        border-color: #0d6efd;
        box-shadow: 0 0 0 3px rgba(13,110,253,0.1);
    }
    .map-placeholder {
        height: 250px;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        border-radius: 12px;
        display: flex; align-items: center; justify-content: center;
        color: white; font-size: 3rem;
    }
</style>
@endpush

@section('content')

<section class="kontak-hero text-white text-center">
    <div class="container">
        <span class="badge bg-white px-3 py-2 mb-2" style="color:#2193b0">Hubungi Kami</span>
        <h1 class="display-4 fw-bold mb-3">Ayo Ngobrol!</h1>
        <p class="fs-5 opacity-75 mx-auto" style="max-width:550px">
            Punya pertanyaan, ide proyek, atau sekadar ingin berkenalan?
            Kami senang mendengar dari kamu.
        </p>
    </div>
</section>

<section class="py-5">
    <div class="container">
        <div class="row g-5">

            <div class="col-lg-5">
                <h3 class="fw-bold mb-2">Informasi Kontak</h3>
                <p class="text-muted mb-4">Pilih cara yang paling mudah untuk menghubungi kami.</p>

                <div class="info-item mb-2">
                    <div class="info-icon bg-primary bg-opacity-10 text-primary">
                        <i class="bi bi-geo-alt-fill"></i>
                    </div>
                    <div>
                        <div class="fw-bold mb-1">Alamat Kantor</div>
                        <p class="text-muted small mb-0">Jl. Raya Teknologi No. 42, Bandung Techno Park, Jawa Barat 40291</p>
                    </div>
                </div>

                <div class="info-item mb-2">
                    <div class="info-icon bg-success bg-opacity-10 text-success">
                        <i class="bi bi-whatsapp"></i>
                    </div>
                    <div>
                        <div class="fw-bold mb-1">WhatsApp</div>
                        <p class="text-muted small mb-0">+62 812-3456-7890</p>
                        <small class="text-success">Balas dalam 1 jam</small>
                    </div>
                </div>

                <div class="info-item mb-2">
                    <div class="info-icon bg-danger bg-opacity-10 text-danger">
                        <i class="bi bi-envelope-fill"></i>
                    </div>
                    <div>
                        <div class="fw-bold mb-1">Email</div>
                        <p class="text-muted small mb-0">hello@myportfolio.id</p>
                        <small class="text-muted">Balas dalam 24 jam</small>
                    </div>
                </div>

                <div class="info-item mb-4">
                    <div class="info-icon bg-warning bg-opacity-10 text-warning">
                        <i class="bi bi-clock-fill"></i>
                    </div>
                    <div>
                        <div class="fw-bold mb-1">Jam Kerja</div>
                        <p class="text-muted small mb-0">Senin – Jumat: 09.00 – 17.00 WIB</p>
                        <small class="text-muted">Sabtu: 09.00 – 12.00 WIB</small>
                    </div>
                </div>

                <h6 class="fw-bold mb-3">Ikuti Kami</h6>
                <div class="d-flex gap-2">
                    <a href="#" class="btn btn-outline-primary"><i class="bi bi-instagram"></i></a>
                    <a href="#" class="btn btn-outline-dark"><i class="bi bi-github"></i></a>
                    <a href="#" class="btn btn-outline-primary"><i class="bi bi-linkedin"></i></a>
                    <a href="#" class="btn btn-outline-info"><i class="bi bi-twitter-x"></i></a>
                </div>

                <div class="map-placeholder mt-4">
                    <div class="text-center">
                        <div>📍</div>
                        <p class="fs-6 mt-2 mb-0">Bandung, Jawa Barat</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-7">
                <div class="card kontak-card shadow-sm p-4 p-lg-5">
                    <h3 class="fw-bold mb-2">Kirim Pesan</h3>
                    <p class="text-muted mb-4">Isi form di bawah ini dan kami akan segera menghubungi kamu.</p>

                    <form>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label fw-semibold">Nama Lengkap <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" placeholder="Masukkan nama kamu">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label fw-semibold">Email <span class="text-danger">*</span></label>
                                <input type="email" class="form-control" placeholder="nama@email.com">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label fw-semibold">No. Telepon</label>
                                <input type="tel" class="form-control" placeholder="+62 8xx-xxxx-xxxx">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label fw-semibold">Layanan yang Dibutuhkan</label>
                                <select class="form-select">
                                    <option value="" disabled selected>Pilih layanan...</option>
                                    <option>Web Development</option>
                                    <option>UI/UX Design</option>
                                    <option>Digital Marketing</option>
                                    <option>Konsultasi</option>
                                    <option>Lainnya</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <label class="form-label fw-semibold">Subjek <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" placeholder="Topik pesan kamu">
                            </div>
                            <div class="col-12">
                                <label class="form-label fw-semibold">Pesan <span class="text-danger">*</span></label>
                                <textarea class="form-control" rows="5" placeholder="Ceritakan kebutuhan atau pertanyaan kamu di sini..."></textarea>
                            </div>
                            <div class="col-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="setuju">
                                    <label class="form-check-label text-muted small" for="setuju">
                                        Saya setuju dengan <a href="#" class="text-primary">kebijakan privasi</a> dan
                                        mengizinkan tim kami menghubungi kembali.
                                    </label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary btn-lg w-100 py-3">
                                    <i class="bi bi-send me-2"></i>Kirim Pesan
                                </button>
                                <p class="text-muted text-center small mt-2 mb-0">
                                    * Form belum berfungsi — tampilan saja
                                </p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection
