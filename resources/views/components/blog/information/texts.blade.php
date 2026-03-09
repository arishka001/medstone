<div class="flex flex-col gap-10 lg:w-2/3 lg:gap-15 xl:w-3/4">
    <div class="flex flex-col gap-5 lg:gap-7.5">
        <p class="text-base/[150%] lg:text-lg/[140%] xl:text-xl/[140%]">
            {{ $item['texts']['main-text'] }}
        </p>

        <x-common.services.main-section.reviews li-class="bg-light-white" />
    </div>

    @foreach ($item['texts'] as $key => $block)
        @if ($key !== 'main-text' && ! empty($block['title']))
            <div id="{{ $key }}" class="flex flex-col gap-5 lg:gap-7.5">
                <h2
                    class="text-2xl/[100%] sm:text-3xl/[100%] lg:text-4xl/[100%] xl:text-[60px]/[90%]"
                >
                    {!! $block['title'] !!}
                </h2>

                @if (! empty($block['img']))
                    <img
                        src="{{ Vite::image('blog/' . $block['img']) }}"
                        alt=""
                        class="w-full rounded-3xl object-cover"
                    />
                @endif

                <div
                    class="flex flex-col gap-3 text-base/[150%] lg:gap-5 lg:text-lg/[140%] xl:text-xl/[140%]"
                >
                    @foreach ($block['descr'] as $dkey => $text)
                        @if ($dkey === 'points')
                            @if (! empty($text['title']))
                                <p>{!! $text['title'] !!}</p>
                            @endif

                            <ul class="flex list-disc flex-col gap-1.5 pl-5">
                                @foreach ($text['list'] as $point)
                                    <li>{!! $point !!}</li>
                                @endforeach
                            </ul>
                        @elseif (! is_array($text))
                            <p>{!! $text !!}</p>
                        @endif
                    @endforeach
                </div>
            </div>
        @endif
    @endforeach
</div>
