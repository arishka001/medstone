@php
    $segments = __('pages/' . $service . '.services-segments.segments-list');
    $segment = collect($segments)->first(fn ($item) => $item['slug'] === $subservice);
    abort_if(! $segment, 404);
@endphp

<x-layouts.app>
    <x-common.services.main-section.main-section
        :page="$service"
        :title1="$segment['title']['part1']"
        :title2="$segment['title']['part2']"
        :descr="$segment['descr']"
        :segment-img="$segment['img']"
    />

    <x-common.subservices.prices-table
        :service="$service"
        :segment="$segment"
    />

    <x-common.section-works />

    <x-common.section-doctors />

    <x-common.faq.section-faq />
</x-layouts.app>
