<div class="swiper-slide">
    <div
        class="relative flex h-full w-full flex-none flex-col gap-5 overflow-hidden rounded-3xl bg-[#FBFBFB] p-5 lg:items-end lg:gap-7.5 lg:p-15"
    >
        <img
            src="{{ Vite::image('components/reviews/bg-review.png') }}"
            alt=""
            class="absolute top-20 left-0 h-full w-96 object-center lg:top-15"
        />

        <p class="text-lg/tight sm:text-xl/tight lg:w-4/5 lg:text-2xl/[120%]">
            {{ $item['review'] }}
        </p>

        <div
            class="flex flex-col gap-7.5 sm:gap-10 lg:w-4/5 lg:flex-row lg:justify-between lg:gap-2.5"
        >
            <div class="flex flex-col items-start lg:flex-1">
                <h4 class="w-4/5 text-xl/[100%] sm:text-2xl lg:text-2xl/[120%]">
                    {{ $item['author'] }}
                </h4>
                <span class="text-base text-light-gray">
                    {{ $item['date'] }}
                </span>
            </div>

            <button
                class="flex h-12.5 w-full items-center justify-center rounded-3xl border border-basic-brown text-base/[100%] sm:w-fit sm:px-15"
            >
                {{ __('common/reviews.read-button') }}
            </button>
        </div>
    </div>
</div>
