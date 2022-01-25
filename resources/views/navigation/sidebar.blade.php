        <nav aria-label="sidebar" aria-orientation="vertical"
            class="flex flex-col items-center flex-none text-center text-gray-400 bg-blue-900 border-r">
            <x-nav.sidebar.button title="Home" href="/dashboard">
                <x-icon-home />
            </x-nav.sidebar.button>

            <ul>
                <li>
                    <x-nav.sidebar.button title="Home" href="/dashboard">
                        <x-icon-home />
                    </x-nav.sidebar.button>
                </li>
                {{-- <li>
                    <x-nav.sidebar.button title="Entities" href="{{ route('entity.index') }}"
                        class="flex items-center w-full h-16 px-6 hover:text-green">
                        <x-icon-users />
                    </x-nav.sidebar.button>
                </li>
                <li>
                    <x-nav.sidebar.button title="Jurisdictions" href="{{ route('jurisdiction.index') }}"
                        class="flex items-center w-full h-16 px-6 hover:text-teal">
                        <x-icon-globe />
                    </x-nav.sidebar.button>
                </li>
                <li>
                    <x-nav.sidebar.button title="Classifiers" href="/jurisdictions"
                        class="flex items-center w-full h-16 px-6 hover:text-teal">
                        <x-icon-folder />
                    </x-nav.sidebar.button>
                </li>
                <li>
                    <x-nav.sidebar.button title="Classifiers" href="/jurisdictions"
                        class="flex items-center w-full h-16 px-6 hover:text-teal">
                        <x-icon-home />
                    </x-nav.sidebar.button>
                </li> --}}
            </ul>

        </nav>
