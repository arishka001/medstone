@props(['page'])

<section class="overflow-hidden bg-light-white">
    <div
        class="container lg:relative py-7.5 sm:py-10 lg:flex gap-11.5 lg:pt-15 xl:gap-28 lg:gap-5 xl:items-stretch xl:pb-19.25 2xl:pb-21 2xl:gap-80"
    >

        <div class="flex flex-col gap-7.5 sm:gap-16 sm:w-5/6 lg:justify-between lg:w-full lg:relative lg:z-20 lg:gap-18.75 xl:gap-0 ">
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

        <x-common.services.main-section.img :page="$page" class="hidden lg:relative lg:z-20 lg:pt-6.25 lg:object-cover lg:self-start lg:block lg:size-117.5 lg:rounded-[140px] xl:size-155 xl:rounded-[170px] 2xl:size-167.5 2xl:rounded-[200px]"/>

        <x-common.services.main-section.bg-circles-kids :page="$page"/>
    </div>
</section>
