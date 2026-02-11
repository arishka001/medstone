<div
    class="hidden flex-col items-center gap-15 rounded-3xl bg-[#FBFBFB] p-2.5 lg:flex"
>
    <div class="flex flex-col gap-4 p-2.5">
        <h3 class="text-xl/[100%] xl:text-2xl/[100%]">
            {{ __('pages/doctors.vacancy-card.title') }}
        </h3>

        <p class="text-base/[100%]">
            {{ __('pages/doctors.vacancy-card.descr') }}
        </p>
    </div>

    <div class="mt-auto flex size-42.5">
        <svg
            width="170"
            height="170"
            viewBox="0 0 170 170"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
        >
            <path d="M84.4531 0V170" stroke="#D7D7D7" />
            <path d="M170 84.4512L-4.17233e-06 84.4512" stroke="#D7D7D7" />
        </svg>
    </div>

    <x-buttons.callback-btn class="mt-auto">
        {{ __('pages/doctors.vacancy-card.btn') }}
    </x-buttons.callback-btn>
</div>
