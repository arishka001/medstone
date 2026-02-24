@props([
    'page',
    'title1' => null,
    'title2' => null,
    'descr' => null,
    'segmentImg' => null,
])

<section class="overflow-hidden bg-light-white">
    <div
        class="container gap-11.5 py-7.5 sm:py-10 lg:relative lg:flex lg:gap-5 lg:pt-15 xl:items-stretch xl:gap-28 xl:pb-19.25 2xl:gap-80 2xl:pb-21"
    >
        <div
            class="flex flex-col gap-7.5 sm:w-5/6 sm:gap-16 lg:relative lg:z-20 lg:w-full lg:justify-between lg:gap-18.75 xl:gap-0"
        >
            <x-common.breadscrumbs :page="$page" />

            <div class="flex flex-col gap-5 xl:gap-7.5">
                <div class="flex flex-col gap-5">
                    <x-common.services.main-section.procedures :page="$page" />

                    <x-common.services.main-section.text
                        :page="$page"
                        :title1="$title1"
                        :title2="$title2"
                        :descr="$descr"
                    />
                </div>

                <x-main.first-section.buttons />
            </div>

            <x-common.services.main-section.img
                :page="$page"
                :segment-img="$segmentImg"
                class="h-110 w-full rounded-3xl object-cover sm:hidden"
            />

            <x-common.services.main-section.reviews class="lg:mt-10 xl:mt-0" />
        </div>

        <x-common.services.main-section.img
            :page="$page"
            :segment-img="$segmentImg"
            class="hidden lg:relative lg:z-20 lg:block lg:size-117.5 lg:self-start lg:rounded-[140px] lg:object-cover lg:pt-6.25 xl:size-155 xl:rounded-[170px] 2xl:size-167.5 2xl:rounded-[200px]"
        />

        <x-common.services.main-section.bg-circles-kids :page="$page" />
    </div>
</section>
