@props([
    'class' => '',
    'route' => '',
    'routeAttribute' => '',
    'title' => '',
    'sortField' => '',
    'sortDirection' => '',
])
@php
    $searchArr = [];

    if (request()->has('query')) {
        $searchArr = array_merge($searchArr, ['query' => request('query')]);
    }
@endphp

<th @if ($class) class="{{ $class }} whitespace-nowrap" @endif>
    @if ($sortField || $sortDirection)
        <a href="{{ route($route, [$routeAttribute, ...$searchArr, 'sort' => $fieldName, 'direction' => $sortField === $fieldName && $sortDirection === 'asc' ? 'desc' : 'asc']) }}"
            class="group inline-flex items-center gap-x-2">
            {{ $title }}
            <span class="p-2">
                @if ($sortField === $fieldName)
                    @if ($sortDirection === 'asc')
                        <i data-lucide="arrow-down" class="flex-none text-gray-400 size-4"></i>
                    @else
                        <i data-lucide="arrow-up" class="flex-none text-gray-400 size-4"></i>
                    @endif
                @else
                    <i data-lucide="arrow-up-down"
                        class="invisible flex-none rounded text-gray-400 group-hover:visible group-focus:visible size-4"></i>
                @endif
            </span>
        </a>
    @else
        {{ $title }}
    @endif
</th>
