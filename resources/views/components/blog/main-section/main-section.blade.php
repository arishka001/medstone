@props([
    'item',
])

<section class="overflow-hidden bg-light-white">
    <div
        class="container gap-11.5 py-7.5 sm:py-10 lg:relative lg:flex lg:justify-between lg:pt-15 xl:items-stretch xl:pb-19.25 2xl:pb-21"
    >
        <div
            class="flex flex-col gap-7.5 sm:w-5/6 sm:gap-16 lg:relative lg:z-20 lg:min-w-0 lg:flex-1 lg:justify-between lg:gap-18.75 xl:gap-0"
        >
            <x-common.breadscrumbs :page="'blog'" />

            <div class="flex flex-col gap-5 xl:gap-7.5">
                <x-blog.main-section.time-and-date :item="$item" />

                <h1
                    class="text-[42px]/[80%] font-normal sm:text-5xl/[80%] xl:text-6xl/[80%]"
                >
                    {!! $item['name'] !!}
                </h1>
            </div>

            <x-common.services.main-section.img
                :page="'blog'"
                :segment-img="'blog/' . $item['img']"
                class="h-110 w-full rounded-3xl object-cover sm:hidden"
            />

            <x-blog.main-section.input-phone />
        </div>

        <x-common.services.main-section.img
            :page="'blog'"
            :segment-img="'blog/' . $item['img']"
            class="hidden shrink-0 lg:relative lg:z-20 lg:block lg:size-117.5 lg:self-start lg:rounded-[140px] lg:object-cover lg:pt-6.25 xl:size-155 xl:rounded-[170px] 2xl:size-167.5 2xl:rounded-[200px]"
        />
    </div>
</section>
