<div class="flex flex-col gap-5 sm:gap-10">
    <div
        class="flex flex-col gap-2.5 lg:relative lg:h-full lg:w-75 lg:gap-0 xl:w-78.75 2xl:w-95"
    >
        <img
            src="{{ vite::image('doctors/list-doctors/toldieva.png') }}"
            alt=""
            class="h-80 w-auto rounded-3xl object-cover object-top sm:h-125 lg:absolute lg:top-0 lg:h-full lg:w-full"
        />
        <img
            src="{{ vite::image('medstone-stamp.png') }}"
            alt=""
            class="absolute -top-12 -right-12 z-20 hidden h-auto w-29 xl:block"
        />

        <div
            class="flex flex-col lg:absolute lg:inset-x-2.5 lg:bottom-2.5 lg:z-10 lg:self-center lg:rounded-3xl lg:bg-white lg:p-4"
        >
            <p class="text-lg/[100%]">
                {{ __('pages/doctors.doctors-list.main-doctor.surname') }}

                {{ __('pages/doctors.doctors-list.main-doctor.name') }}
            </p>
            <span class="text-sm text-light-gray">
                {{ __('pages/doctors.doctors-list.main-doctor.main-doctor') }}
                ,
                {{ __('pages/doctors.doctors-list.main-doctor.position') }}
            </span>
        </div>
    </div>

    <x-buttons.callback-btn class="group lg:hidden" />
</div>
