Komponen

1. x-alert
Notifikasi dengan 4 tipe: success, danger, warning, info.
properti : type (default: info), title (opsional), dismissible (default: false)

<x-alert type="success">Data berhasil disimpan!</x-alert>

<x-alert type="danger" title="Terjadi Kesalahan">
    Password salah. Silakan coba lagi.
</x-alert>

<x-alert type="warning" :dismissible="true">Sesi hampir berakhir.</x-alert>

2. x-card
Card fleksibel dengan slot title, body, dan footer.
properti: shadow (default: sm), rounded (default: 3), border (default: true), hover (default: false)

<x-card>
    <p>Isi card biasa.</p>
</x-card>

<x-card :hover="true" shadow="md">
    <x-slot name="title">Profil Pengguna</x-slot>
    <p>Nama: Budi Santoso</p>
    <x-slot name="footer">Terakhir diperbarui: 5 Juni 2026</x-slot>
</x-card>

3. x-badge
Badge/label kecil untuk status atau kategori.
properti : color (default: primary), pill (default: false), outline (default: false), size (default: md)

<x-badge color="success">Aktif</x-badge>
<x-badge color="danger" :pill="true">Error</x-badge>
<x-badge color="warning" :outline="true" size="sm">Pending</x-badge>

4. x-button

Tombol serbaguna dengan berbagai variant dan fitur.
Props: variant (default: primary), type (default: outline), size (default: md), href, icon, iconPos (default: left), block, loading, rounded, disabled`

<x-button variant="primary" type="solid">Simpan</x-button>
<x-button variant="danger" type="outline" icon="bi-trash">Hapus</x-button>
<x-button variant="success" type="solid" icon="bi-download" iconPos="right">Download</x-button>
{{-- Sebagai link --}}
<x-button href="/halaman" type="solid" variant="primary">Buka Halaman</x-button>
{{-- Loading state --}}
<x-button type="solid" variant="primary" :loading="true">Memproses...</x-button>

5. x-breadcrumb
Navigasi breadcrumb. Item terakhir otomatis jadi halaman aktif.
properti : items (array), separator (default: /), style (default: default — pilihan: pills, arrow)

<x-breadcrumb :items="[
    ['label' => 'Beranda', 'url' => '/'],
    ['label' => 'Blog',    'url' => '/blog'],
    ['label' => 'Artikel Ini'],
]" />

{{-- Dengan icon dan separator kustom --}}
<x-breadcrumb separator="›" :items="[
    ['label' => 'Beranda', 'url' => '/', 'icon' => 'bi-house-fill'],
    ['label' => 'Profil'],
]" />

Struktur File saat ingin menggunakan blade component

resources/views/components/
├── alert.blade.php
├── card.blade.php
├── badge.blade.php
├── button.blade.php
└── breadcrumb.blade.php

