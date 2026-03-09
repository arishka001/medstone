@php
    $blogs = __('pages/blog.list-blogs');
    $item = collect($blogs)->first(fn ($d) => $d['slug'] === $article);
    abort_if(! $item, 404);
@endphp

<x-layouts.app>
    <x-blog.main-section.main-section :item="$item" />

    <x-blog.information.information :item="$item" />

    <x-common.faq.section-faq />
</x-layouts.app>
