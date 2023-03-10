{{--<nav class="bg-white border-gray-200 px-2 sm:px-4 py-2.5 dark:bg-gray-900">--}}
{{--    <div class="container flex flex-wrap items-center justify-between mx-auto">--}}
{{--        Logo--}}
{{--        <a href="{{route('home')}}" class="flex items-center ">--}}
{{--            <x-reusable.logo class="h-6 mr-3 sm:h-9 w-8"/>--}}
{{--            <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Cinema</span>--}}
{{--        </a>--}}
{{--        <div class="items-center justify-between hidden w-full lg:flex md:w-auto " id="mobile-menu-2">--}}
{{--            <ul class="flex flex-col p-4 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">--}}
{{--                <x-jet-nav-link href="{{ route('home') }}" :active="request()->routeIs('home')">--}}
{{--                    Home--}}
{{--                </x-jet-nav-link>--}}
{{--                <x-jet-nav-link href="{{ route('welcome') }}" :active="request()->routeIs('welcome')">--}}
{{--                    Today--}}
{{--                </x-jet-nav-link>--}}
{{--                <x-jet-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">--}}
{{--                    This week--}}
{{--                </x-jet-nav-link>--}}
{{--                <x-jet-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">--}}
{{--                    Upcoming weeks--}}
{{--                </x-jet-nav-link>--}}
{{--                <x-jet-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">--}}
{{--                    Top Movies--}}
{{--                </x-jet-nav-link>--}}
{{--                <x-jet-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">--}}
{{--                    Expected--}}
{{--                </x-jet-nav-link>--}}
{{--                <x-jet-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">--}}
{{--                    Contact me--}}
{{--                </x-jet-nav-link>--}}

{{--            </ul>--}}
{{--        </div>--}}
{{--        <div class="ml-auto">--}}
{{--            <x-jet-dropdown align="right" width="48">--}}
{{--                avatar--}}
{{--                <x-slot name="trigger">--}}
{{--                    <img class="rounded-full h-8 w-8 cursor-pointer"--}}
{{--                         src="https://ui-avatars.com/api/?name=Vinyl+Shop"--}}
{{--                         alt="">--}}
{{--                </x-slot>--}}
{{--                <x-slot name="content">--}}
{{--                    all users--}}
{{--                    <div class="block px-4 py-2 text-xs text-gray-400">My Name</div>--}}
{{--                    <x-jet-dropdown-link href="{{ route('home') }}">Dashboard</x-jet-dropdown-link>--}}
{{--                    <x-jet-dropdown-link href="{{ route('home') }}">Update Profile</x-jet-dropdown-link>--}}
{{--                    <div class="border-t border-gray-100"></div>--}}
{{--                    <x-jet-dropdown-link href="{{ route('home') }}">Logout</x-jet-dropdown-link>--}}
{{--                    <div class="border-t border-gray-100"></div>--}}
{{--                    admins only--}}
{{--                    <div class="block px-4 py-2 text-xs text-gray-400">Admin</div>--}}
{{--                    <x-jet-dropdown-link href="{{ route('home') }}">Genres</x-jet-dropdown-link>--}}
{{--                    <x-jet-dropdown-link href="{{ route('home') }}">Records</x-jet-dropdown-link>--}}
{{--                    <x-jet-dropdown-link href="{{ route('home') }}">Covers</x-jet-dropdown-link>--}}
{{--                    <x-jet-dropdown-link href="{{ route('home') }}">Users</x-jet-dropdown-link>--}}
{{--                    <x-jet-dropdown-link href="{{ route('home') }}">Orders</x-jet-dropdown-link>--}}
{{--                </x-slot>--}}
{{--            </x-jet-dropdown>--}}
{{--        </div>--}}
{{--        <div class="flex items-center ">--}}
{{--            <button data-collapse-toggle="mobile-menu-2" type="button"--}}
{{--                    class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"--}}
{{--                    aria-controls="mobile-menu-2" aria-expanded="false">--}}
{{--                <span class="sr-only">Open main menu</span>--}}
{{--                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"--}}
{{--                     xmlns="http://www.w3.org/2000/svg">--}}
{{--                    <path fill-rule="evenodd"--}}
{{--                          d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"--}}
{{--                          clip-rule="evenodd"></path>--}}
{{--                </svg>--}}
{{--            </button>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</nav>--}}

{{----}}
<nav class="bg-gray-800">
    <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
        <div class="relative flex h-16 items-center justify-between">
            <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                <!-- Mobile menu button-->
                <button type="button"
                        class="inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white"
                        aria-controls="mobile-menu" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                         stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"/>
                    </svg>
                    <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                         stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>
            <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
                <div class="flex flex-shrink-0 items-center">
                    <a href="{{route("home")}}" class="flex">
                        <x-reusable.logo class="block h-8 w-auto lg:hidden"/>
                        <x-reusable.logo class="hidden h-8 w-auto lg:block"/>
                        <span class="text-xl font-semibold dark:text-white">Cinema</span>
                    </a>
                </div>
                <div class="hidden sm:ml-6 sm:block ">
                    <div class="flex space-x-4">
                        <x-jet-nav-link href="{{ route('cinema') }}" :active="request()->routeIs('cinema')">
                            Cinema
                        </x-jet-nav-link>
                        <x-jet-nav-link href="{{ route('welcome') }}" :active="request()->routeIs('welcome')">
                            Today
                        </x-jet-nav-link>
                        <x-jet-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                            This week
                        </x-jet-nav-link>
                        @auth
                            <x-jet-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                                Request a movie
                            </x-jet-nav-link>
                        @endauth
                        <x-jet-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                            Contact me
                        </x-jet-nav-link>
                    </div>
                </div>
            </div>
            <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0" id="leftNav">
                @guest
                    <x-jet-nav-link href="{{ route('login') }}" :active="request()->routeIs('login')">
                        Login
                    </x-jet-nav-link>
                    <x-jet-nav-link href="{{ route('register') }}" :active="request()->routeIs('register')">
                        Register
                    </x-jet-nav-link>
                @endguest
                @auth
                    <button type="button"
                            class="rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
                        <span class="sr-only">View notifications</span>
                        <!-- Heroicon name: outline/bell -->
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                             stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0"/>
                        </svg>
                    </button>
                    <div class="relative ml-3">
                        <div>
                            <button type="button"
                                    class="flex rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800"
                                    id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                                <span class="sr-only">Open user menu</span>
                                <img class="h-8 w-8 rounded-full"
                                     src="https://ui-avatars.com/api/?name={{ urlencode(auth()->user()->first_name ." ". auth()->user()->last_name) }}"
                                     alt="{{ auth()->user()->first_name }}">>
                            </button>
                        </div>
                        <div
                            class="hidden absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
                            id="menu-profile-to-dropdown" role="menu" aria-orientation="vertical"
                            aria-labelledby="user-menu-button" tabindex="-1">
                            <div
                                class="block px-4 py-2 text-xs text-gray-400">{{ auth()->user()->first_name ." ". auth()->user()->last_name }}</div>
                            <x-jet-dropdown-link href="{{ route('profile.show') }}">Update Profile</x-jet-dropdown-link>
                            <x-jet-dropdown-link href="{{ route('dashboard') }}">Dashboard</x-jet-dropdown-link>
                            <x-jet-dropdown-link href="{{ route('home') }}">Settings</x-jet-dropdown-link>
                            <div class="border-t border-gray-100"></div>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit"
                                        class="block w-full text-left px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition">
                                    Logout
                                </button>
                            </form>

                            <div class="border-t border-gray-100"></div>
                            @if(auth()->user()->admin)
                                <div class="block px-4 py-2 text-xs text-gray-400">Admin</div>
                                <x-jet-dropdown-link href="{{ route('home') }}">Manage users</x-jet-dropdown-link>
                                <x-jet-dropdown-link href="{{ route('home') }}">Manage movies</x-jet-dropdown-link>
                                <x-jet-dropdown-link href="{{ route('home') }}">Manage showtimes</x-jet-dropdown-link>
                            @endif
                        </div>
                    </div>
                @endauth

                <!-- Profile dropdown -->
            </div>
        </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div class="hidden" id="mobile-menu">
        <div class="space-y-1 px-2 pt-2 pb-3">
            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
            <a href="#" class="bg-gray-900 text-white block px-3 py-2 rounded-md text-base font-medium"
               aria-current="page">Dashboard</a>

            <a href="#"
               class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Team</a>

            <a href="#"
               class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Projects</a>

            <a href="#"
               class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Calendar</a>
        </div>
    </div>
</nav>
@push('script')
    <script>
        const mobileMenuButton = document.querySelector("[aria-controls='mobile-menu']");
        const mobileMenu = document.getElementById("mobile-menu");

        mobileMenuButton.addEventListener("click", () => {
            mobileMenu.classList.toggle("hidden");
            mobileMenuButton.setAttribute("aria-expanded", mobileMenu.classList.contains("hidden") ? "false" : "true");
        });


        document.getElementById("user-menu-button").addEventListener("click", () => {
            const dropdown = document.getElementById("menu-profile-to-dropdown");
            dropdown.classList.toggle("hidden");
        });

    </script>
@endpush
