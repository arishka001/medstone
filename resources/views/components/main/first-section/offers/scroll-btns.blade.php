<div
    {{ $attributes->merge(['class' => 'absolute pointer-events-none z-30 flex gap-1.5']) }}
>
    <x-svg.arrow
        class="swiper-prev pointer-events-auto rotate-180 rounded-xl"
    />
    <x-svg.arrow class="swiper-next pointer-events-auto rounded-xl" />
</div>
