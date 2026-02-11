<div class="swiper w-full overflow-visible">
    <div class="swiper-wrapper">
        @foreach (__('pages/works.list-works') as $key => $item)
            <x-works.card :item="$item" :loop="$loop" />
        @endforeach
    </div>
</div>
