<div class="relative container">
    <ul class="grid grid-cols-1 gap-2.5 lg:grid-cols-2 xl:grid-cols-4">
        @foreach (__('pages/home.section-services') as $key => $item)
            <li
                class="flex justify-between gap-2.5 rounded-3xl bg-white p-5 xl:flex-col xl:gap-0"
            >
                <div class="flex flex-col gap-5 sm:gap-2.5">
                    <h3 class="text-2xl/[100%]">
                        {{ $item['title'] }}
                    </h3>
                    <p class="text-base/[120%] sm:w-2/3 lg:w-4/5 xl:w-full">
                        {{ $item['descr'] }}
                    </p>
                </div>

                <a
                    href="{{ route($item['href']) }}"
                    class="sm:self-center xl:self-end"
                >
                    <x-svg.arrow href-name="{{$item['href']}}" />
                </a>
            </li>
        @endforeach

        <x-main.first-section.offers />
    </ul>
</div>
