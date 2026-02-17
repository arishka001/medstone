<ul {{
    $attributes -> merge(['class' => 'flex gap-2.5 w-full'])
}} >
    @foreach(__('common/reviews.reviews-for-services') as $key => $item)
        <li class="w-full flex flex-col sm:flex-row lg:w-fit p-2.5 gap-2.5 rounded-2xl  bg-white">

                <div class="flex flex-col gap-1.25">
                   <div class="flex items-center gap-1.25">
                        <span class="text-sm/[100%] sm:text-base/[100%]">
                        {{ $item['estimate'] }}
                    </span>
                       <div class="flex gap-px">
                           @php
                               $stars = min($item['estimate'] ,5);
                           @endphp
                           @for($i= 0; $i<$stars; $i++)
                               <x-svg.star />
                           @endfor
                       </div>
                   </div>
                    <span class="text-xs/[100%] text-light-gray sm:text-sm/[100%]">
                          {{ $item['count-reviews'] }}
                    </span>
                </div>

                <div class="flex items-center gap-1.25">
                    <img
                        src="{{ Vite::image('components/reviews/' . $item['svg']) }}"
                        alt=""
                        class="rounded-3xl size-5 sm:size-8.5"
                    />

                    <p class="text-xs/[100%] underline text-nowrap underline-offset-1 sm:text-base/[100%]">
                        {{ $item['name'] }}
                    </p>
                </div>

        </li>
    @endforeach
</ul>
