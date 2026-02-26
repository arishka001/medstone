@props([
    'education' => null,
    'more' => null,
])

<section>
    <div class="container flex flex-col gap-10 lg:gap-17.5 xl:gap-7.5">
        <div class="gric-cols-1 grid gap-5 sm:gap-7.5 xl:grid-cols-2">
            <h3 class="text-2xl/[120%] font-medium sm:text-3xl/[120%]">
                {{ __('pages/doctors.education-title') }}
            </h3>
            <div class="flex flex-col gap-5">
                @foreach ($education as $key => $text)
                    <p class="text-lg/[120%] sm:text-xl/[120%]">
                        {{ $text }}
                    </p>
                @endforeach
            </div>
        </div>

        <div class="hidden h-px w-full bg-[#E2E2E2] xl:block"></div>

        <div class="gric-cols-1 grid gap-5 sm:gap-7.5 xl:grid-cols-2">
            <h3 class="text-2xl/[120%] font-medium sm:text-3xl/[120%]">
                {{ __('pages/doctors.more-info-title') }}
            </h3>
            <div class="h-px w-full bg-[#E2E2E2] xl:hidden"></div>

            <div class="flex flex-col gap-10 lg:gap-17.5 xl:gap-7.5 2xl:gap-10">
                <div class="flex flex-col gap-5">
                    @foreach ($more as $key => $text)
                        <p class="text-lg/[120%] sm:text-xl/[120%]">
                            {{ $text }}
                        </p>
                    @endforeach
                </div>

                <x-buttons.callback-btn>
                    {{ __('pages/home.first-section.btns.consultation') }}
                </x-buttons.callback-btn>
            </div>
        </div>
    </div>
</section>
