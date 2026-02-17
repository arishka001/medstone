@props(['page'])

<section class="overflow-hidden bg-light-white">
    <div
        class="container xl:items-stretch lg:flex gap-11.5 py-7.5  sm:py-10 lg:pt-15 xl:gap-28 lg:gap-5 2xl:gap-90"
    >

        <div class="flex flex-col gap-7.5 lg:justify-between sm:gap-16 sm:w-5/6 lg:w-full lg:gap-18.75 xl:gap-0 ">
{{--            <div class="flex items-center gap-1 w-fit text-base/[100%]">--}}
{{--                <span>--}}
{{--                    Главная--}}
{{--                </span>--}}

{{--                <svg class="text-light-gray bg-transparent size-5" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
{{--                    <path d="M7.5 15L12.5 10L7.5 5" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round"/>--}}
{{--                </svg>--}}

{{--                <span class="text-light-gray">--}}
{{--                     {{ $page }}--}}
{{--                </span>--}}
{{--            </div>--}}
            <x-common.breadscrumbs :page="$page"/>


            <div class="flex flex-col gap-5 xl:gap-7.5">
                <div class="flex flex-col gap-5">
                    <x-common.services.main-section.procedures :page="$page"/>

                    <x-common.services.main-section.text :page="$page"/>
                </div>

                <x-main.first-section.buttons />
            </div>

            <x-common.services.main-section.img :page="$page" class="w-full h-110 object-cover rounded-3xl sm:hidden"/>

            <x-common.services.main-section.reviews class="lg:mt-10 xl:mt-0"/>
        </div>

        <x-common.services.main-section.img :page="$page" class="hidden lg:pt-6.25 lg:object-cover lg:self-start lg:block lg:size-117.5 lg:rounded-[140px] xl:size-155 xl:rounded-[170px] 2xl:size-167.5 2xl:rounded-[200px]"/>

    </div>
</section>
