<x-layouts.app>
    <x-common.services.main-section.main-section
        :page="$service"
        :title1="$segment['title']['part1']"
        :title2="$segment['title']['part2']"
        :descr="$segment['descr']"
        :segment-img="'pages/subservices/' . $segment['img']"
    />

    <x-common.subservices.prices.section-prices
        :service="$service"
        :segment="$segment"
    />

    <x-common.sections.section-works />

    <x-common.sections.section-doctors />

    <x-common.faq.section-faq />
</x-layouts.app>
