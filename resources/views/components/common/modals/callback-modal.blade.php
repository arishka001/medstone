<div
    id="callback-modal"
    class="pointer-events-none fixed inset-0 z-100 flex items-end justify-center opacity-0 transition-opacity duration-300 sm:items-center"
>
    <div
        onclick="closeModal()"
        class="absolute inset-0 hidden bg-black/50 sm:block"
    ></div>

    <div
        class="relative z-10 flex h-full w-full flex-col gap-5 bg-light-white p-8.75 sm:h-auto sm:max-w-xl sm:rounded-3xl sm:p-10"
    >
        <x-common.modals.common.closer id="'callback-modal'" />

        <x-common.modals.common.title-descr
            title1=" {!! __('common/modals.modal-callback.title.part1') !!}"
            title2="{!! __('common/modals.modal-callback.title.part2') !!}"
            descr=" {!! __('common/modals.descr') !!}"
        />

        <form
            data-validate
            class="flex flex-1 flex-col justify-between sm:flex-none sm:gap-2.5"
            onsubmit="return false;"
        >
            <div class="flex flex-col gap-5">
                <p id="callback-doctor-title" class="hidden text-2xl/[90%]"></p>

                <x-common.modals.common.inputs />
            </div>

            <x-common.modals.common.btn-submit
                btn="{{ __('common/modals.modal-callback.btn-submit') }}"
            />
        </form>
    </div>
</div>
