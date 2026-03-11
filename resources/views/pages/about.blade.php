<x-layouts.app
    id="about-clinic"
    title="{{__('pages/about.meta.title')}}"
    description="{{__('pages/about.meta.description')}}"
>
    <x-common.services.main-section.main-section page="about" />

    <x-common.services.about.about />

    <x-common.services.indicators.indicators />

    <x-common.faq.section-faq />

    <x-doctor-page.certificates
        kicker="{{ __('pages/about.section-certifications.mini-text') }}"
        title="{!! __('pages/about.section-certifications.title.part1') !!}"
        accent="{!! __('pages/about.section-certifications.title.part2') !!}"
        :certificates="__('pages/about.section-certifications.certificates')"
    />

    <x-dms.companies.companies />
</x-layouts.app>
