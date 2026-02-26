@props(['page' => null])

@php
    $page = $page ?? request()->path(); // 'doctors' или 'stomatology/implantation'
    $segments = explode('.', str_replace('/', '.', $page));
    $path = '';
    $subservice = request()->route('subservice');
    $doctor = request()->route('doctor');
    $service =
        request()
            ->route()
            ->parameter('service') ?? explode('.', str_replace('/', '.', $page))[0];
@endphp

<div class="flex max-w-full min-w-0 items-center gap-1 text-base/[100%]">
    <a href="{{ route('home') }}">Главная</a>

    @foreach ($segments as $index => $segment)
        @php
            $path .= ($index === 0 ? '' : '.') . $segment;
            $title = __('pages/' . $path . '.breadcrumb');
        @endphp

        <x-svg.arrow-breadcrumb />

        @if ($index !== count($segments) - 1)
            <a
                href="{{ url(str_replace('.', '/', $path)) }}"
                class="text-nowrap text-light-gray"
            >
                {{ $title }}
            </a>
        @else
            @if ($subservice || $doctor)
                <a
                    href="{{ route($service) }}"
                    class="text-nowrap text-light-gray"
                >
                    {{ $title }}
                </a>
            @else
                <span class="min-w-0 truncate text-light-gray">
                    {{ $title }}
                </span>
            @endif
        @endif
    @endforeach

    @if ($subservice)
        @php
            $allSegments = __('pages/' . $service . '.services-segments.segments-list');
            $currentSegment = collect($allSegments)->first(fn ($item) => $item['slug'] === $subservice);
            $subserviceTitle = $currentSegment['title']['part1'] . ' ' . $currentSegment['title']['part2'];
        @endphp

        <x-svg.arrow-breadcrumb />

        <span class="min-w-0 truncate text-light-gray">
            {{ $subserviceTitle }}
        </span>
    @endif

    @if ($doctor)
        @php
            $allDoctors = __('pages/doctors.doctors-list');
            $currentDoctor = collect($allDoctors)->first(fn ($d) => $d['slug'] === $doctor);
            $doctorTitle = $currentDoctor['surname'] . ' ' . $currentDoctor['name'];
        @endphp

        <x-svg.arrow-breadcrumb />
        <span class="min-w-0 truncate text-light-gray">
            {{ $doctorTitle }}
        </span>
    @endif
</div>
