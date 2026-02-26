@props([
    'page',
    'benefits' => null,
])

@php
    $listBenefits = $benefits ?? __('pages/' . $page . '.main-section.benefits');
@endphp

<ul
    {{
        $attributes->merge([
            'class' => 'hidden flex-nowrap gap-1.25 sm:flex sm:w-full',
        ])
    }}
>
    @foreach ($listBenefits as $key => $item)
        <li
            class="rounded-3xl border border-b-basic-gray px-3.5 py-1.5 text-base text-nowrap"
        >
            {{ $item }}
        </li>
    @endforeach
</ul>
