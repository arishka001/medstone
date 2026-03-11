<x-layouts.app
    title="{{__('pages/blog.meta.title')}}"
    description="{{__('pages/blog.meta.description')}}"
>
    <section class="flex flex-col gap-10 pt-7.5 sm:pt-10 lg:gap-15 lg:pt-15">
        <x-common.page-header
            class="container"
            title=" {{ __('pages/blog.title.part1') }}"
        />

        <x-blog.blog-categories />

        <div class="container">
            <x-blog.list />
        </div>
    </section>
</x-layouts.app>
