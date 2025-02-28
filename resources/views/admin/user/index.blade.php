<x-admin-layout>

    <div class="flex justify-between">
        <h1 class="text-xl font-semibold capitalize text-gray-600 dark:text-gray-300">{{ __('Usuarios del sistema') }}
        </h1>
        @canany(['users.create', 'users.edit'])
        @endcanany
    </div>

    <div class="mt-3">
    </div>

</x-admin-layout>
