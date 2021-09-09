<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                        {{-- <x-jet-application-mark class="block h-9 w-auto" /> --}}
                        <svg width="35" height="35" viewBox="0 0 130 150" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M1.62622 36.4668C2.44113 35.3054 3.2622 34.949 3.2622 34.949C3.2622 34.949 52.2868 6.31121 60.9341 1.32305C61.6383 0.910029 62.021 0.685656 62.021 0.685656C62.021 0.685656 63.1435 -0.0429882 65 0.00203432C66.8565 -0.0429895 67.979 0.685656 67.979 0.685656C67.979 0.685656 68.3618 0.910074 69.0661 1.32317C77.714 6.31168 126.738 34.949 126.738 34.949C126.738 34.949 127.559 35.3054 128.374 36.4668C129.958 37.9333 129.999 39.844 129.999 39.844C129.999 39.844 129.994 46.3408 129.988 55.3835C129.991 69.2333 129.982 90.3932 129.977 101.108C129.979 104.042 129.982 106.417 129.987 107.989C129.998 108.153 130.008 108.434 129.99 108.797C129.993 109.406 129.996 109.816 129.999 110C130.057 113.106 126.224 115.439 126.224 115.439L68.5183 149.157C67.2876 149.814 66.0682 150.016 65 149.999C63.9317 150.016 62.7124 149.814 61.4817 149.157L3.77571 115.439C3.77571 115.439 -0.0572408 113.106 0.000649206 110C0.00411884 109.816 0.00717617 109.406 0.00985793 108.797C-0.00793716 108.434 0.00216109 108.153 0.0128493 107.989C0.017798 106.417 0.0212011 104.042 0.0233842 101.108C0.0180505 90.3928 0.00894789 69.2296 0.0123331 55.3797C0.00630046 46.339 0.000643072 39.844 0.000643072 39.844C0.000643072 39.844 0.0416485 37.9333 1.62622 36.4668ZM23.0663 109.859C34.8815 116.733 62.7161 133.037 62.7161 133.037C62.7161 133.037 63.657 133.551 65 133.672C66.343 133.551 67.2839 133.037 67.2839 133.037C67.2839 133.037 95.1185 116.733 106.934 109.859L67.7689 85.8767C67.7689 85.8767 65.8885 84.6202 65 81.8386C64.1116 84.6202 62.2311 85.8767 62.2311 85.8767L23.0663 109.859ZM64.5453 66.8685L14.4437 97.5593C14.4421 94.7954 14.4401 90.4328 14.4386 85.4388L14.434 63.3262C14.4345 56.4749 14.4376 51.0209 14.4457 49.6164C14.4746 44.7445 16.9863 43.6572 16.9863 43.6572C16.9863 43.6572 60.3218 18.4244 63.1391 16.8432C63.8188 16.5491 64.4436 16.3982 65 16.3383C65.5564 16.3982 66.1812 16.5491 66.8609 16.8432C69.6783 18.4244 113.014 43.6572 113.014 43.6572C113.014 43.6572 115.525 44.7445 115.554 49.6164C115.562 51.0209 115.565 56.4749 115.566 63.3262L115.561 85.4388C115.56 90.4328 115.558 94.7954 115.556 97.5593L65.4547 66.8685V66.3114L65 66.59L64.5453 66.3114V66.8685Z"
                                fill="#38ABBE" />
                        </svg>
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-jet-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                        {{ __('Dashboard') }}
                    </x-jet-nav-link>
                </div>
            </div>

            <div class="hidden sm:flex sm:items-center sm:ml-6">
                <!-- Teams Dropdown -->
                @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
                    <div class="ml-3 relative">
                        <x-jet-dropdown align="right" width="60">
                            <x-slot name="trigger">
                                <span class="inline-flex rounded-md">
                                    <button type="button"
                                        class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:bg-gray-50 hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition">
                                        {{ Auth::user()->currentTeam->name }}

                                        <svg width="130" height="150" viewBox="0 0 130 150" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M1.62622 36.4668C2.44113 35.3054 3.2622 34.949 3.2622 34.949C3.2622 34.949 52.2868 6.31121 60.9341 1.32305C61.6383 0.910029 62.021 0.685656 62.021 0.685656C62.021 0.685656 63.1435 -0.0429882 65 0.00203432C66.8565 -0.0429895 67.979 0.685656 67.979 0.685656C67.979 0.685656 68.3618 0.910074 69.0661 1.32317C77.714 6.31168 126.738 34.949 126.738 34.949C126.738 34.949 127.559 35.3054 128.374 36.4668C129.958 37.9333 129.999 39.844 129.999 39.844C129.999 39.844 129.994 46.3408 129.988 55.3835C129.991 69.2333 129.982 90.3932 129.977 101.108C129.979 104.042 129.982 106.417 129.987 107.989C129.998 108.153 130.008 108.434 129.99 108.797C129.993 109.406 129.996 109.816 129.999 110C130.057 113.106 126.224 115.439 126.224 115.439L68.5183 149.157C67.2876 149.814 66.0682 150.016 65 149.999C63.9317 150.016 62.7124 149.814 61.4817 149.157L3.77571 115.439C3.77571 115.439 -0.0572408 113.106 0.000649206 110C0.00411884 109.816 0.00717617 109.406 0.00985793 108.797C-0.00793716 108.434 0.00216109 108.153 0.0128493 107.989C0.017798 106.417 0.0212011 104.042 0.0233842 101.108C0.0180505 90.3928 0.00894789 69.2296 0.0123331 55.3797C0.00630046 46.339 0.000643072 39.844 0.000643072 39.844C0.000643072 39.844 0.0416485 37.9333 1.62622 36.4668ZM23.0663 109.859C34.8815 116.733 62.7161 133.037 62.7161 133.037C62.7161 133.037 63.657 133.551 65 133.672C66.343 133.551 67.2839 133.037 67.2839 133.037C67.2839 133.037 95.1185 116.733 106.934 109.859L67.7689 85.8767C67.7689 85.8767 65.8885 84.6202 65 81.8386C64.1116 84.6202 62.2311 85.8767 62.2311 85.8767L23.0663 109.859ZM64.5453 66.8685L14.4437 97.5593C14.4421 94.7954 14.4401 90.4328 14.4386 85.4388L14.434 63.3262C14.4345 56.4749 14.4376 51.0209 14.4457 49.6164C14.4746 44.7445 16.9863 43.6572 16.9863 43.6572C16.9863 43.6572 60.3218 18.4244 63.1391 16.8432C63.8188 16.5491 64.4436 16.3982 65 16.3383C65.5564 16.3982 66.1812 16.5491 66.8609 16.8432C69.6783 18.4244 113.014 43.6572 113.014 43.6572C113.014 43.6572 115.525 44.7445 115.554 49.6164C115.562 51.0209 115.565 56.4749 115.566 63.3262L115.561 85.4388C115.56 90.4328 115.558 94.7954 115.556 97.5593L65.4547 66.8685V66.3114L65 66.59L64.5453 66.3114V66.8685Z"
                                                fill="#38ABBE" />
                                        </svg>
                                    </button>
                                </span>
                            </x-slot>

                            <x-slot name="content">
                                <div class="w-60">
                                    <!-- Team Management -->
                                    <div class="block px-4 py-2 text-xs text-gray-400">
                                        {{ __('Manage Team') }}
                                    </div>

                                    <!-- Team Settings -->
                                    <x-jet-dropdown-link
                                        href="{{ route('teams.show', Auth::user()->currentTeam->id) }}">
                                        {{ __('Team Settings') }}
                                    </x-jet-dropdown-link>

                                    @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                                        <x-jet-dropdown-link href="{{ route('teams.create') }}">
                                            {{ __('Create New Team') }}
                                        </x-jet-dropdown-link>
                                    @endcan

                                    <div class="border-t border-gray-100"></div>

                                    <!-- Team Switcher -->
                                    <div class="block px-4 py-2 text-xs text-gray-400">
                                        {{ __('Switch Teams') }}
                                    </div>

                                    @foreach (Auth::user()->allTeams() as $team)
                                        <x-jet-switchable-team :team="$team" />
                                    @endforeach
                                </div>
                            </x-slot>
                        </x-jet-dropdown>
                    </div>
                @endif

                <!-- Settings Dropdown -->
                <div class="ml-3 relative">
                    <x-jet-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                <button
                                    class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                    <img class="h-8 w-8 rounded-full object-cover"
                                        src="{{ Auth::user()->profile_photo_url }}"
                                        alt="{{ Auth::user()->name }}" />
                                </button>
                            @else
                                <span class="inline-flex rounded-md">
                                    <button type="button"
                                        class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition">
                                        {{ Auth::user()->name }}

                                        <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                </span>
                            @endif
                        </x-slot>

                        <x-slot name="content">
                            <!-- Account Management -->
                            <div class="block px-4 py-2 text-xs text-gray-400">
                                {{ __('Manage Account') }}
                            </div>

                            <x-jet-dropdown-link href="{{ route('profile.show') }}">
                                {{ __('Profile') }}
                            </x-jet-dropdown-link>

                            @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                <x-jet-dropdown-link href="{{ route('api-tokens.index') }}">
                                    {{ __('API Tokens') }}
                                </x-jet-dropdown-link>
                            @endif

                            <div class="border-t border-gray-100"></div>

                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-jet-dropdown-link href="{{ route('logout') }}" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-jet-dropdown-link>
                            </form>
                        </x-slot>
                    </x-jet-dropdown>
                </div>
            </div>

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open"
                    class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-jet-responsive-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-jet-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="flex items-center px-4">
                @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                    <div class="flex-shrink-0 mr-3">
                        <img class="h-10 w-10 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}"
                            alt="{{ Auth::user()->name }}" />
                    </div>
                @endif

                <div>
                    <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                    <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                </div>
            </div>

            <div class="mt-3 space-y-1">
                <!-- Account Management -->
                <x-jet-responsive-nav-link href="{{ route('profile.show') }}"
                    :active="request()->routeIs('profile.show')">
                    {{ __('Profile') }}
                </x-jet-responsive-nav-link>

                @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                    <x-jet-responsive-nav-link href="{{ route('api-tokens.index') }}"
                        :active="request()->routeIs('api-tokens.index')">
                        {{ __('API Tokens') }}
                    </x-jet-responsive-nav-link>
                @endif

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-jet-responsive-nav-link href="{{ route('logout') }}" onclick="event.preventDefault();
                                    this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-jet-responsive-nav-link>
                </form>

                <!-- Team Management -->
                @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
                    <div class="border-t border-gray-200"></div>

                    <div class="block px-4 py-2 text-xs text-gray-400">
                        {{ __('Manage Team') }}
                    </div>

                    <!-- Team Settings -->
                    <x-jet-responsive-nav-link href="{{ route('teams.show', Auth::user()->currentTeam->id) }}"
                        :active="request()->routeIs('teams.show')">
                        {{ __('Team Settings') }}
                    </x-jet-responsive-nav-link>

                    @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                        <x-jet-responsive-nav-link href="{{ route('teams.create') }}"
                            :active="request()->routeIs('teams.create')">
                            {{ __('Create New Team') }}
                        </x-jet-responsive-nav-link>
                    @endcan

                    <div class="border-t border-gray-200"></div>

                    <!-- Team Switcher -->
                    <div class="block px-4 py-2 text-xs text-gray-400">
                        {{ __('Switch Teams') }}
                    </div>

                    @foreach (Auth::user()->allTeams() as $team)
                        <x-jet-switchable-team :team="$team" component="jet-responsive-nav-link" />
                    @endforeach
                @endif
            </div>
        </div>
    </div>
</nav>
