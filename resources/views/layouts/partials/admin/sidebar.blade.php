<aside id="logo-sidebar"
    class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700"
    aria-label="Sidebar">
    <div class="h-full px-3 pb-4 overflow-y-auto bg-white dark:bg-gray-800">
        <ul class="space-y-2 font-medium">

            <x-admin.menu-plain href="{{ route('admin.admin') }}" title="{{ __('Dashboard') }}">
                <x-slot name="icon">
                    <i class="fa-solid fa-house"></i>
                </x-slot>
            </x-admin.menu-plain>

            @canany(['users.show', 'roles.show'])
                <x-admin.menu-dropdown title="{{ __('Settings') }}" :routes="['admin.users', 'admin.roles']" :submenus="[
                    ['route' => 'admin.users', 'title' => __('Users'), 'permission' => 'users.show'],
                    ['route' => 'admin.roles', 'title' => __('Roles and Permisions'), 'permission' => 'roles.show'],
                ]" :menuIndex="1">
                    <x-slot name="icon">
                        <i class="fa-solid fa-cog"></i>
                    </x-slot>
                </x-admin.menu-dropdown>
            @endcanany
        </ul>
    </div>
</aside>
