@props([
    'items'     => [],
    'separator' => '/',
    'style'     => 'default',
])

@php
if (empty($items)) return;

$lastIndex = count($items) - 1;

$wrapClass = match($style) {
    'pills' => 'breadcrumb-pills',
    'arrow' => 'breadcrumb-arrow',
    default => '',
};
@endphp

<style>
    .breadcrumb-pills .breadcrumb-item a {
        background: #e9ecef;
        padding: 2px 10px;
        border-radius: 50px;
        text-decoration: none;
        color: #495057;
        font-size: .85rem;
        transition: background .2s, color .2s;
    }
    .breadcrumb-pills .breadcrumb-item a:hover {
        background: #0d6efd;
        color: #fff;
    }
    .breadcrumb-pills .breadcrumb-item.active {
        background: #0d6efd;
        color: #fff;
        padding: 2px 10px;
        border-radius: 50px;
        font-size: .85rem;
    }
    .breadcrumb-pills .breadcrumb-item + .breadcrumb-item::before { content: none; }

    /* Arrow style */
    .breadcrumb-arrow .breadcrumb-item + .breadcrumb-item::before {
        content: '›';
        font-weight: bold;
        color: #adb5bd;
    }
</style>

<nav aria-label="breadcrumb" {{ $attributes }}>
    <ol class="breadcrumb {{ $wrapClass }} mb-0"
        @if($style === 'default' && $separator !== '/')
            style="--bs-breadcrumb-divider: '{{ $separator }}';"
        @endif
    >
        @foreach ($items as $index => $item)
            @if ($index === $lastIndex)
                {{-- Item terakhir = aktif, tidak ada link --}}
                <li class="breadcrumb-item active" aria-current="page">
                    {{ $item['label'] }}
                </li>
            @else
                <li class="breadcrumb-item">
                    <a href="{{ $item['url'] ?? '#' }}" class="text-decoration-none">
                        @if (!empty($item['icon']))
                            <i class="bi {{ $item['icon'] }} me-1"></i>
                        @endif
                        {{ $item['label'] }}
                    </a>
                </li>
            @endif
        @endforeach
    </ol>
</nav>
