@props([
    'shadow'  => 'sm',     // false | sm | md | lg
    'rounded' => '3',      // 0 | 1 | 2 | 3 | 4 | 5
    'border'  => true,
    'hover'   => false,
])

@php
$shadowClass  = $shadow ? 'shadow-' . $shadow : '';
$borderClass  = $border ? '' : 'border-0';
$hoverStyle   = $hover
    ? 'transition: transform .25s, box-shadow .25s; cursor: pointer;'
    : '';
$hoverOnmouse = $hover
    ? "this.style.transform='translateY(-4px)';this.style.boxShadow='0 12px 28px rgba(0,0,0,.12)'"
    : '';
$hoverOffmouse = $hover
    ? "this.style.transform='';this.style.boxShadow=''"
    : '';
@endphp

<div {{ $attributes->merge([
        'class' => 'card rounded-' . $rounded . ' ' . $shadowClass . ' ' . $borderClass,
        'style' => $hoverStyle,
     ]) }}
     @if($hover)
         onmouseenter="{{ $hoverOnmouse }}"
         onmouseleave="{{ $hoverOffmouse }}"
     @endif
>

    {{-- Slot: title (opsional) --}}
    @if ($title ?? false)
        <div class="card-header fw-semibold py-3">
            {{ $title }}
        </div>
    @endif

    {{-- Slot: body (wajib) --}}
    <div class="card-body">
        {{ $slot }}
    </div>

    {{-- Slot: footer (opsional) --}}
    @if ($footer ?? false)
        <div class="card-footer text-muted py-3">
            {{ $footer }}
        </div>
    @endif

</div>
