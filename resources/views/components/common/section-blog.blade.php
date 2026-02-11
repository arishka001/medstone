<section>
    <div class="container flex flex-col gap-10 lg:gap-15">
        <x-typography.second-header
            kicker="{{ __('pages/blog.mini-text') }}"
            title="{!!  __('pages/blog.title.part1') !!}"
        />

        <x-blog.list />

        <x-buttons.open-more-btn href-name="{{route('home')}}">
            {{ __('pages/blog.btn-more-blogs') }}
        </x-buttons.open-more-btn>
    </div>
</section>
