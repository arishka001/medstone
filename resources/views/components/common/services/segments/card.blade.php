@php
    $parentUrl = url(str_replace('.', '/', $page));
    $segmentUrl = $parentUrl . '/' . $item['slug'];
@endphp

<li class="w-full flex lg:justify-between lg:p-7.5 lg:gap-11.25 xl:gap-13 p-5 2xl:gap-50 rounded-3xl transition-all duration-200 bg-[#FBFBFB] group hover:shadow-custom">
  <div class="flex flex-col gap-5 w-full lg:flex-row lg:gap-10">
      <div class="flex justify-between items-center">
          <div class="flex flex-col gap-0.75 lg:min-w-75">
              <a href="{{ $segmentUrl }}">
                  <h3 class="text-xl/[100%] sm:text-2xl/[100%]">
                      {{  $item['name'] }}
                  </h3>
              </a>
              <p class="text-extra-light-brown text-nowrap text-sm/[100%] sm:text-base/[100%]">
                  {{  $item['price'] }}
              </p>
          </div>

          <x-svg.arrow class="lg:hidden group-hover:text-light-white group-hover:bg-basic-brown"/>
      </div>

      <div class="flex flex-col sm:flex-row sm:flex-wrap gap-1.25 sm:w-11/12 lg:w-full">

          @foreach($item['sublist'] as $segment)
              <a href="{{ $segmentUrl . '#' . $segment['anchor'] }}" class="self-start inline-flex h-fit bg-[#F6F6F6] text-extra-light-brown text-base/[90%]  items-center transition-colors duration-200 hover:bg-[#EDEDED] justify-center py-1.5 px-3 rounded-xl">
                  <span> {!! $segment['name'] !!}</span>
              </a>
          @endforeach
      </div>
  </div>

    <x-svg.arrow class="hidden lg:flex lg:self-center group-hover:text-light-white group-hover:bg-basic-brown"/>

</li>
