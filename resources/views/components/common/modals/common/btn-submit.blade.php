<div class="mt-auto flex flex-col gap-2.5">
    <x-buttons.callback-btn-dark
        type="submit"
        class="w-full disabled:cursor-not-allowed disabled:opacity-50 disabled:hover:bg-basic-brown disabled:hover:text-light-white"
        plus-class="hidden"
    >
        {{ $btn }}
    </x-buttons.callback-btn-dark>

    <x-common.agreement />
</div>

@props(['plusClass' => ''])
