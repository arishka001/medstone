<ul class="relative grid grid-cols-1 gap-2.5 lg:grid-cols-2 xl:grid-cols-4">
    @foreach (__('pages/home.section-services') as $key => $item)
        <a href="{{ route($item['href']) }}">
            <li
                class="group flex justify-between gap-2.5 rounded-3xl bg-white p-5 transition-all duration-300 hover:shadow-card xl:flex-col xl:gap-0"
            >
                <div class="flex flex-col gap-5 sm:gap-2.5">
                    <h3 class="text-2xl/[100%]">
                        {{ $item['title'] }}
                    </h3>
                    <p class="text-base/[120%] sm:w-2/3 lg:w-4/5 xl:w-full">
                        {{ $item['descr'] }}
                    </p>
                </div>

                <x-svg.arrow
                    class="group-hover:bg-basic-brown group-hover:text-white sm:self-center xl:self-end"
                    href-name="{{$item['href']}}"
                />
            </li>
        </a>
    @endforeach

    <x-main.first-section.offers />
</ul>
