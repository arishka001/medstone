<div
    @class([
        'grid grid-cols-1 gap-2.5 sm:grid-cols-2 lg:grid-cols-4' => request()->routeIs(
            'works',
        ),
        'swiper w-full overflow-visible' => ! request()->routeIs('works'),
    ])
>
    <div
        @class([
            'contents' => request()->routeIs('works'),
            'swiper-wrapper' => ! request()->routeIs('works'),
        ])
    >
        @foreach (__('pages/works.list-works') as $key => $item)
            <x-works.card :item="$item" :loop="$loop" />
        @endforeach
    </div>
</div>
