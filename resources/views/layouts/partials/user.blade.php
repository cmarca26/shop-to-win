<div class="flex items-center ms-3">
    <div>
        @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
            <button
                class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition"
                aria-expanded="false" data-dropdown-toggle="dropdown-user">
                <img class="h-10 w-10 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}"
                    alt="{{ Auth::user()->name }}" />
            </button>
        @else
            <span class="inline-flex rounded-md">
                <button type="button"
                    class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition"
                    aria-expanded="false" data-dropdown-toggle="dropdown-user">
                    {{ Auth::user()->name }}
                    <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                        fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd" />
                    </svg>
                </button>
            </span>
        @endif
    </div>

    <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow-sm dark:bg-gray-700 dark:divide-gray-600"
        id="dropdown-user">
        <div class="px-4 py-3" role="none">
            <p class="text-sm text-gray-900 dark:text-white text-center" role="none">
                {{ Auth::user()->name }}
            </p>
            <p class="text-sm font-medium text-gray-900 truncate dark:text-gray-300 text-center" role="none">
                {{ Auth::user()->email }}
            </p>
        </div>
        <ul class="py-1" role="none">
            <li>
                <a href="{{ route('profile.show') }}"
                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white"
                    role="menuitem"> {{ __('Profile') }}</a>
            </li>
            @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                <li>
                    <a href="{{ route('api-tokens.index') }}"
                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white"
                        role="menuitem">{{ __('API Tokens') }}</a>
                <li>
            @endif
        </ul>
        
        <div class="py-2">
            <form method="POST" action="{{ route('logout') }}" x-data>
                @csrf
                <li>
                    <a href="{{ route('logout') }}" @click.prevent="$root.submit();"
                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white"
                        role="menuitem"> {{ __('Log Out') }}</a>
                </li>
            </form>
        </div>
    </div>
</div>
