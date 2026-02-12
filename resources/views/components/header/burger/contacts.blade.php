<div
    {{ $attributes->merge(['class' => 'grid-cols-1 items-start grid gap-7.5 sm:grid-cols-2']) }}
>
    <div class="flex w-full flex-col gap-2.5">
        <x-contacts.telephone
            class="text-xl/[100%] sm:text-2xl/[100%] lg:text-3xl/[100%]"
        />

        <x-contacts.mail
            class="text-xl/[100%] sm:text-2xl/[100%]"
            mail-class="hidden"
        />
    </div>

    <div class="flex flex-col gap-7.5 sm:gap-5">
        <div class="flex flex-col gap-1.5">
            <x-contacts.address
                class="text-xl sm:text-2xl/[100%] lg:text-3xl/[100%]"
            />

            <x-contacts.work-hours
                hours-class="hidden"
                class="text-light-gray"
            />
        </div>

        <x-buttons.set-up-route-btn />
    </div>
</div>
