@php
    $doctors = __('pages/doctors.doctors-list');
    $item = collect($doctors)->first(fn ($d) => $d['slug'] === $doctor);
    abort_if(! $item, 404);
@endphp

<x-layouts.app>
    <x-common.services.main-section.main-section
        :page="'doctors'"
        title1=""
        :title2="$item['surname'] . ' ' . $item['name']"
        :descr="$item['descr']"
        :segment-img="'doctors/list-doctors/' . $item['img']"
        :benefits="$item['benefits']"
    />

    <x-doctor-page.education
        :education="$item['education']"
        :more="$item['more-info']"
    />

    <x-doctor-page.certificates :certificates="$item['certificates']" />

    <x-common.section-works />
</x-layouts.app>
