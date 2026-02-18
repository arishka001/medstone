<li class="hidden relative overflow-hidden lg:p-8.25 sm:flex p-5 rounded-3xl bg-[#FBFBFB]">
    <img
        src="{{ Vite::image('components/services/bg-installment.png') }}"
        alt=""
        class="absolute h-58.75 w-87.5 -top-5 -right-18 lg:-right-14 lg:-top-18 lg:h-87.5 lg:w-128.75 xl:-right-11 xl:-top-26 xl:h-112.5 xl:w-162.5 2xl:-right-6"
    />

    <div class="relative z-10 flex flex-col gap-5 items-start w-2/3">
        <div class="text-base/[100%] rounded-xl py-1.75 px-2.5 text-white bg-extra-light-brown">
            {{ __('common/services.block-installment.dates') }}
        </div>

       <div class="flex flex-col gap-2.5">
           <h3 class="text-2xl/[90%] lg:text-4xl/[90%]">
               {{ __('common/services.block-installment.title') }}
           </h3>

           <p class="text-base/[120%]">
               {!!  __('common/services.block-installment.descr.part1')  !!}
           <br>
              <span class="font-semibold">
                   {!!  __('common/services.block-installment.descr.part2')  !!}
              </span>
           </p>
       </div>
    </div>
</li>
