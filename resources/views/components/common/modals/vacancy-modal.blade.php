<div
    id="vacancy-modal"
    class="pointer-events-none fixed inset-0 z-100 flex items-end justify-center opacity-0 transition-opacity duration-300 sm:items-center"
>
    <div
        onclick="closeModal('vacancy-modal')"
        class="absolute inset-0 hidden bg-black/50 sm:block"
    ></div>

    <div
        class="relative z-10 flex h-full w-full flex-col gap-10 bg-light-white p-8.75 sm:h-auto sm:max-w-xl sm:rounded-3xl sm:p-10"
    >
        <x-common.modals.common.closer id="vacancy-modal" />

        <x-common.modals.common.title-descr
            title1=" {!! __('common/modals.vacancy-modal.title.part1') !!}"
            descr=" {!! __('common/modals.descr') !!}"
        />

        <form
            data-validate
            class="flex flex-1 flex-col justify-between gap-5 sm:flex-none"
            onsubmit="return false;"
        >
            <p id="vacancy-position-title" class="text-xl/[90%]"></p>

            <x-common.modals.common.inputs>
                <textarea
                    placeholder="{{ __('common/modals.input-letter') }}"
                    rows="5"
                    class="w-full resize-none rounded-3xl bg-white px-5 py-4 text-base/[100%] outline-none placeholder:text-light-gray"
                    required
                ></textarea>
            </x-common.modals.common.inputs>

            <div class="flex flex-col gap-px">
                <x-common.modals.common.attach-file />

                <span class="text-sm/[100%] text-light-gray">
                    {{ __('common/modals.vacancy-modal.file.size') }}
                </span>
            </div>

            <x-common.modals.common.btn-submit
                btn="{{ __('common/modals.vacancy-modal.btn-submit') }}"
            />
        </form>
    </div>
</div>
