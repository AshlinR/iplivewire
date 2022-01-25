        <nav aria-label="sidebar" aria-orientation="vertical"
            class="flex flex-col items-center flex-none text-center text-gray-400 bg-teal-900 border-r">
            <div class="flex items-center w-full h-16">
                <img class="w-6 h-6 mx-auto"
                    src="https://raw.githubusercontent.com/bluebrown/tailwind-zendesk-clone/master/public/assets/leaves.png" />
            </div>

            <ul>
                <li>
                    <x-nav.sidebar.button title="Home" href="/dashboard">
                        <x-icon.home />
                    </x-nav.sidebar.button>
                </li>
                <li>
                    <x-nav.sidebar.button title="Entities" href="{{ route('entity.index') }}"
                        class="flex items-center w-full h-16 px-6 hover:text-green">
                        <x-icon.users />
                    </x-nav.sidebar.button>
                </li>
                <li>
                    <x-nav.sidebar.button title="Jurisdictions" href="{{ route('jurisdiction.index') }}"
                        class="flex items-center w-full h-16 px-6 hover:text-teal">
                        <x-icon.globe />
                    </x-nav.sidebar.button>
                </li>
                <li>
                    <x-nav.sidebar.button title="Classifiers" href="/jurisdictions"
                        class="flex items-center w-full h-16 px-6 hover:text-teal">
                        <x-icon.folder />
                    </x-nav.sidebar.button>
                </li>
                <li>
                    <x-nav.sidebar.button title="Classifiers" href="/jurisdictions"
                        class="flex items-center w-full h-16 px-6 hover:text-teal">
                        <x-icon.cog />
                    </x-nav.sidebar.button>
                </li>
            </ul>

            <div class="flex items-center w-full h-16 mt-auto">
                <img style="filter: invert(85%);" class="w-10 h-8 mx-auto"
                    src="https://raw.githubusercontent.com/bluebrown/tailwind-zendesk-clone/master/public/assets/chi.png" />
            </div>
        </nav>
