@props(['title', 'routes', 'submenus' => [], 'menuIndex'])

@php
    $isActive = in_array(Route::currentRouteName(), $routes);
@endphp

<li x-data="{ open: {{ $isActive ? 'true' : 'false' }} }" x-init="$watch('open', value => { if ( value && !{{ $isActive ? 'true' : 'false' }}) { $dispatch('menu-open', {{ $menuIndex }}); } })"
    @menu-open.window="if (!{{ $isActive ? 'true' : 'false' }}) { open = ($event.detail === {{ $menuIndex }}) }">

    <button type="button"
        class="flex items-center w-full p-4 text-base text-gray-900 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
        @click="open = !open" :class="{ 'bg-gray-100 dark:bg-gray-700': open }">

        <span
            class="{{ $isActive ? 'text-gray-900 dark:text-gray-100 font-semibold' : 'text-gray-500 dark:text-gray-400 font-medium' }}">
            {{ $icon }}
        </span>

        <span
            class="flex-1 ms-3 text-left whitespace-nowrap {{ $isActive ? 'text-gray-900 dark:text-gray-100 font-semibold' : 'text-gray-500 dark:text-gray-400 font-medium' }}">
            {{ __($title) }}
        </span>

        <svg class="w-3 h-3 transition-transform duration-200 transform {{ $isActive ? 'text-gray-900 dark:text-gray-100 font-semibold' : 'text-gray-500 dark:text-gray-400 font-medium' }}"
            :class="open ? 'rotate-180' : 'rotate-0'" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
            fill="none" viewBox="0 0 10 6">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="m1 1 4 4 4-4" />
        </svg>
    </button>

    <ul x-show="open" class="py-2 space-y-2">
        @foreach ($submenus as $submenu)
            <li>
                <a href="{{ route($submenu['route']) }}"
                    class="w-full p-2 pl-11 hover:text-gray-900 dark:hover:text-gray-100 {{ request()->routeIs($submenu['route']) ? 'text-gray-900 dark:text-gray-100 font-semibold' : 'text-gray-500 dark:text-gray-400 font-medium' }}">
                    {{ __($submenu['title']) }}
                </a>
            </li>
        @endforeach
    </ul>
</li>
