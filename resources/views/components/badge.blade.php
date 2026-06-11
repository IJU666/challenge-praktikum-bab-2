@props([
    'color'   => 'primary',   // primary | secondary | success | danger | warning | info | dark | light
    'pill'    => false,        // true = rounded-pill
    'outline' => false,        // true = versi outline (border saja)
    'size'    => 'md',         // sm | md | lg
])

@php
$pillClass = $pill ? 'rounded-pill' : 'rounded-2';

$sizeStyle = match($size) {
    'sm' => 'font-size:.7rem; padding: .2em .5em;',
    'lg' => 'font-size:1rem;  padding: .4em .75em;',
    default => '',              // md = default Bootstrap
};

if ($outline) {
    // Outline: background transparan, border & teks berwarna
    $colorMap = [
        'primary'   => '#0d6efd',
        'secondary' => '#6c757d',
        'success'   => '#198754',
        'danger'    => '#dc3545',
        'warning'   => '#ffc107',
        'info'      => '#0dcaf0',
        'dark'      => '#212529',
        'light'     => '#f8f9fa',
    ];
    $hex        = $colorMap[$color] ?? '#0d6efd';
    $badgeClass = 'bg-transparent border';
    $inlineStyle = "border-color:{$hex}; color:{$hex}; {$sizeStyle}";
} else {
    $badgeClass  = "bg-{$color}" . ($color === 'warning' || $color === 'light' ? ' text-dark' : ' text-white');
    $inlineStyle = $sizeStyle;
}
@endphp

<span {{ $attributes->merge([
        'class' => "badge {$badgeClass} {$pillClass}",
        'style' => $inlineStyle,
     ]) }}>
    {{ $slot }}
</span>
