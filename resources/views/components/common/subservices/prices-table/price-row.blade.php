@props([
    'price',
])

@if (! empty($price['name']))
    <tr class="border-b border-[#E2E2E2] odd:bg-white even:bg-[#FBFBFB]">
        <td class="p-5 sm:hidden">
            <div class="flex flex-col gap-2.5 text-base/[120%]">
                <span>{{ $price['name'] }}</span>
                <span class="font-medium">
                    {{ $price['price'] }}
                </span>
            </div>
        </td>
        <td
            class="hidden py-5.5 pr-8 pl-7.5 text-base/[120%] sm:table-cell lg:py-8 lg:pr-20 xl:pr-80"
        >
            {{ $price['name'] }}
        </td>
        <td
            class="hidden px-15 py-5.5 text-left text-base/[120%] font-medium text-nowrap sm:table-cell lg:px-37.5 lg:py-8"
        >
            {{ $price['price'] }}
        </td>
    </tr>
@endif
