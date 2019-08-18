<svg
        xmlns="http://www.w3.org/2000/svg"
        width="{{ $width ?? '24' }}"
        height="{{ $height ?? '24' }}"
        viewBox="0 0 24 24"
        fill="none"
        stroke="currentColor"
        stroke-width="2"
        stroke-linecap="round"
        stroke-linejoin="round"
        class="feather feather-{{ $icon }}"
>
    @include("_partials.icons.$icon")
</svg>
