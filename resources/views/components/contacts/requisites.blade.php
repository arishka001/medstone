<section>
    <div class="container flex flex-col gap-10 lg:gap-15">
        <table class="w-full border-collapse">
            <tbody>
                @foreach (__('pages/contacts.requisites') as $item)
                    <tr
                        class="border-b border-[#E2E2E2] odd:bg-[#FBFBFB] even:bg-white"
                    >
                        <td class="p-5 sm:hidden">
                            <div
                                class="flex flex-col gap-2.5 text-base/[120%] lg:text-xl/[120%]"
                            >
                                <span class="text-light-gray">
                                    {{ $item['name'] }}
                                </span>
                                <span class="font-medium">
                                    {{ $item['descr'] }}
                                </span>
                            </div>
                        </td>
                        <td
                            class="hidden py-5.5 pr-8 pl-7.5 text-base/[120%] sm:table-cell lg:py-7.5 lg:text-xl/[120%]"
                        >
                            {{ $item['name'] }}
                        </td>
                        <td
                            class="hidden px-15 py-5.5 text-base/[120%] font-medium sm:table-cell lg:py-7.5 lg:text-xl/[120%]"
                        >
                            {{ $item['descr'] }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <x-buttons.download-requisites-btn />
    </div>
</section>
