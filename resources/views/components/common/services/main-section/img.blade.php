@props([
    'page',
    'segmentImg' => null,
])

@php
    $image = $segmentImg
        ? __('pages/subservices/' . $segmentImg)
        : 'pages/' . $page . '/main-section.png';
@endphp

<img
    {{
        $attributes->merge([
            'class' => '',
        ])
    }}
    src="{{ Vite::image($image) }}"
    alt=""
/>
