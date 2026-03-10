<div
    class="answer-accordion flex hidden flex-col gap-7.5 text-base/[120%] lg:text-xl/[120%]"
>
    <div class="h-px w-full bg-[#E2E2E2]"></div>
    <p
        class="h-fit w-fit shrink-0 rounded-xl bg-[#F6F6F6] px-3 py-1.5 text-base/[90%] text-nowrap text-extra-light-brown sm:hidden"
    >
        {{ $item['experience'] }}
    </p>

    <div class="flex flex-col gap-5">
        <p class="font-medium">
            {{ __('pages/vacancies.title-responsibilities') }}
        </p>

        <ul class="flex list-disc flex-col gap-1 pl-5">
            @foreach ($item['responsibilities'] as $key => $condition)
                <li class="">
                    {!! $condition !!}
                </li>
            @endforeach
        </ul>
    </div>

    <div class="flex flex-col gap-5">
        <p class="font-medium">
            {{ __('pages/vacancies.title-requirements') }}
        </p>

        <ul class="flex list-disc flex-col gap-1 pl-5">
            @foreach ($item['requirements'] as $key => $condition)
                <li class="">
                    {!! $condition !!}
                </li>
            @endforeach
        </ul>
    </div>

    <div class="flex flex-col gap-5">
        <p class="font-medium">
            {{ __('pages/vacancies.title-suggestions') }}
        </p>

        <ul class="flex list-disc flex-col gap-1 pl-5">
            @foreach ($item['suggestions'] as $key => $condition)
                <li class="">
                    {!! $condition !!}
                </li>
            @endforeach
        </ul>
    </div>

    <x-buttons.callback-btn
        onclick="openModal('vacancy-modal', { position: '{{ $item['position'] }}'})"
        class="group mt-2.5 sm:w-fit sm:self-start sm:px-16"
    >
        {{ __('pages/vacancies.btn-apply') }}
    </x-buttons.callback-btn>
</div>
