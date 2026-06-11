@props([
    'type'        => 'info',
    'title'       => null,
    'dismissible' => false,
])

@php
$config = [
    'success' => [
        'bg'     => 'alert-success',
        'icon'   => 'bi-check-circle-fill',
        'border' => 'border-success',
    ],
    'danger' => [
        'bg'     => 'alert-danger',
        'icon'   => 'bi-x-circle-fill',
        'border' => 'border-danger',
    ],
    'warning' => [
        'bg'     => 'alert-warning',
        'icon'   => 'bi-exclamation-triangle-fill',
        'border' => 'border-warning',
    ],
    'info' => [
        'bg'     => 'alert-info',
        'icon'   => 'bi-info-circle-fill',
        'border' => 'border-info',
    ],
];

$style = $config[$type] ?? $config['info'];
@endphp

<div {{ $attributes->merge([
        'class' => 'alert ' . $style['bg'] . ' border-start border-4 ' . $style['border'] . ' d-flex align-items-start gap-3 rounded-3 shadow-sm' . ($dismissible ? ' alert-dismissible fade show' : ''),
        'role'  => 'alert'
     ]) }}>

    {{-- Icon --}}
    <i class="bi {{ $style['icon'] }} fs-5 mt-1 flex-shrink-0"></i>

    {{-- Konten --}}
    <div class="flex-grow-1">
        @if ($title)
            <div class="fw-bold mb-1">{{ $title }}</div>
        @endif
        <div>{{ $slot }}</div>
    </div>

    {{-- Tombol tutup (opsional) --}}
    @if ($dismissible)
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    @endif
</div>
