<div
    {{
        $attributes->merge([
            'class' => 'flex gap-1.25 self-end',
        ])
    }}
>
    <x-svg.arrow
        class="swiper-prev rotate-180 rounded-xl hover:bg-basic-brown hover:text-white"
    />
    <x-svg.arrow
        class="swiper-next rounded-xl hover:bg-basic-brown hover:text-white"
    />
</div>
