<div class="flex flex-col gap-5 lg:flex-row lg:justify-between">
    <div class="flex flex-col gap-2.5 sm:flex-row sm:items-center sm:gap-5">
        <img
            src="{{ Vite::image('doctors/list-doctors/toldieva.png') }}"
            alt=""
            class="size-70 self-center rounded-full object-cover object-top sm:size-30"
        />

        <div class="flex flex-col">
            <p class="text-xl/[120%]">
                {{ __('pages/doctors.doctors-list.main-doctor.surname') }}

                {{ __('pages/doctors.doctors-list.main-doctor.name') }}
            </p>
            <span class="text-base/[100%] text-light-gray">
                {{ __('pages/doctors.doctors-list.main-doctor.main-doctor') }}
                ,
                {{ __('pages/doctors.doctors-list.main-doctor.position') }}
            </span>
        </div>
    </div>

    <x-buttons.callback-btn class="lg:w-fit lg:self-end" />
</div>
