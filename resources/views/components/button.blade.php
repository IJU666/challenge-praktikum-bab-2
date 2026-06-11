@props([
    'variant' => 'primary',    // primary | secondary | success | danger | warning | info | dark | light
    'type'    => 'outline',    // solid | outline | ghost
    'size'    => 'md',         // sm | md | lg
    'href'    => null,         // jika diisi, render sebagai <a>
    'icon'    => null,         // nama class Bootstrap Icon, misal 'bi-send'
    'iconPos' => 'left',       // left | right
    'block'   => false,        // true = full width
    'loading' => false,        // true = tampilkan spinner
    'rounded' => false,        // true = rounded-pill
    'disabled'=> false,
])

@php
// Kelas Bootstrap berdasarkan type
$btnClass = match($type) {
    'solid'   => "btn-{$variant}",
    'outline' => "btn-outline-{$variant}",
    'ghost'   => "btn-{$variant} bg-opacity-10 border-0 text-{$variant}",
    default   => "btn-outline-{$variant}",
};

$sizeClass    = $size !== 'md' ? 'btn-' . $size : '';
$blockClass   = $block   ? 'w-100' : '';
$roundedClass = $rounded ? 'rounded-pill' : '';
$disabledAttr = $disabled || $loading ? 'disabled' : '';

$tag = $href ? 'a' : 'button';
$extraAttr = $href
    ? 'href="' . $href . '"'
    : 'type="button"';
@endphp

<{{ $tag }}
    {{ $extraAttr }}
    {{ $attributes->merge([
        'class' => "btn {$btnClass} {$sizeClass} {$blockClass} {$roundedClass}",
     ]) }}
    {{ $disabledAttr }}
>
    {{-- Loading spinner --}}
    @if ($loading)
        <span class="spinner-border spinner-border-sm me-1" role="status" aria-hidden="true"></span>
        Loading...

    @else
        {{-- Icon kiri --}}
        @if ($icon && $iconPos === 'left')
            <i class="bi {{ $icon }} {{ $slot->isEmpty() ? '' : 'me-1' }}"></i>
        @endif

        {{ $slot }}

        {{-- Icon kanan --}}
        @if ($icon && $iconPos === 'right')
            <i class="bi {{ $icon }} {{ $slot->isEmpty() ? '' : 'ms-1' }}"></i>
        @endif
    @endif

</{{ $tag }}>
