@props(['href', 'title'])

@php
    $isActive = request()->url() == url($href);
@endphp

<li>
    <a href="{{ $href }}"
        class="flex items-center p-4 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 group {{ $isActive ? 'text-gray-900 dark:text-gray-100 font-semibold' : 'text-gray-500 dark:text-gray-400 font-medium' }}">
        <span
            class="{{ $isActive ? 'text-gray-900 dark:text-gray-100 font-semibold' : 'text-gray-500 dark:text-gray-400 font-medium' }}">
            {{ $icon }}
        </span>
        <span class="ms-3">{{ __($title) }}</span>
    </a>
</li>
