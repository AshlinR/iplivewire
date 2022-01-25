            <!-- section body top nav -->
            <nav aria-label="top bar" class="flex justify-between flex-none h-16 bg-white">
                <!-- top bar left -->
                <ul aria-label="top bar left" aria-orientation="horizontal" class="flex">
                    <!-- add button -->
                    <li class="relative z-10 group">
                        <button aria-controls="add" aria-expanded="false" aria-haspopup="listbox"
                            class="flex items-center h-full px-4 text-sm">
                            <i>
                                <svg class="w-3 h-3 mx-auto fill-current" xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24">
                                    <path d="M24 10h-10v-10h-2v10h-10v2h10v10h2v-10h10z" />
                                </svg>
                            </i>
                            <span class="ml-2">Add</span>
                        </button>
                        <span class="absolute hidden p-1 group-hover:block">
                            <ul id="add" role="listbox"
                                class="w-screen max-w-md py-2 leading-relaxed bg-white border rounded-md shadow-lg outline-none w-dropdown-large focus:outline-none">
                                <li role="separator" class="mb-2">
                                    <label class="block px-4 py-3 font-semibold">
                                        New
                                    </label>
                                    <hr />
                                </li>
                                <li role="option"
                                    class="px-6 py-1 my-1 cursor-pointer focus:outline-none focus:bg-blue-100 hover:bg-blue-100">
                                    Matter
                                </li>
                                <li role="option"
                                    class="px-6 py-1 my-1 cursor-pointer focus:outline-none focus:bg-blue-100 hover:bg-blue-100">
                                    Actor
                                </li>
                                <li role="option"
                                    class="px-6 py-1 my-1 cursor-pointer focus:outline-none focus:bg-blue-100 hover:bg-blue-100">
                                    Rule
                                </li>
                                <li role="separator" class="mb-2">
                                    <label class="block px-4 py-3 font-semibold">Recently Viewed</label>
                                    <hr />
                                </li>
                                <li role="option"
                                    class="px-6 py-1 my-1 cursor-pointer focus:outline-none focus:bg-blue-100 hover:bg-blue-100">
                                    <div class="flex">
                                        <div class="pr-2">
                                            <span style="padding: 2px 5px; font-size: 0.7rem;"
                                                class="font-mono leading-none text-white bg-red-600 rounded-sm">O</span>
                                        </div>
                                        <div class="flex-1">
                                            <p>Vertias - ams opps issue</p>
                                            <p class="text-gray-600">
                                                <span>#ticket/14352</span>
                                                <span class="mx-1 font-black">&#183;</span>
                                                <span>Nico Braun</span>
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <li role="option"
                                    class="px-6 py-1 my-1 cursor-pointer focus:outline-none focus:bg-blue-100 hover:bg-blue-100">
                                    <div class="flex">
                                        <div class="pr-2">
                                            <span style="padding: 2px 5px; font-size: 0.7rem;"
                                                class="font-mono leading-none text-black bg-yellow-400 rounded-sm">N</span>
                                        </div>
                                        <div class="flex-1">
                                            <p>Vertias - ams opps issue</p>
                                            <p class="text-gray-600">
                                                <span>#ticket/14352</span>
                                                <span class="mx-1 font-black">&#183;</span>
                                                <span>Nico Braun</span>
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <li role="option"
                                    class="px-6 py-1 my-1 cursor-pointer focus:outline-none focus:bg-blue-100 hover:bg-blue-100">
                                    <div class="flex">
                                        <div class="pr-2">
                                            <span style="padding: 2px 5px; font-size: 0.7rem;"
                                                class="font-mono leading-none text-white bg-gray-500 rounded-sm">S</span>
                                        </div>
                                        <div class="flex-1">
                                            <p>Vertias - ams opps issue</p>
                                            <p class="text-gray-600">
                                                <span>#ticket/14352</span>
                                                <span class="mx-1 font-black">&#183;</span>
                                                <span>Nico Braun</span>
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <li role="option"
                                    class="px-6 py-1 my-1 cursor-pointer focus:outline-none focus:bg-blue-100 hover:bg-blue-100">
                                    <div class="flex">
                                        <div class="pr-2">
                                            <span style="padding: 2px 5px; font-size: 0.7rem;"
                                                class="font-mono leading-none text-white bg-blue-600 rounded-sm">P</span>
                                        </div>
                                        <div class="flex-1">
                                            <p>Vertias - ams opps issue</p>
                                            <p class="text-gray-600">
                                                <span>#ticket/14352</span>
                                                <span class="mx-1 font-black">&#183;</span>
                                                <span>Nico Braun</span>
                                            </p>
                                        </div>
                                    </div>
                                </li>

                                <li role="option"
                                    class="px-6 py-1 my-1 cursor-pointer focus:outline-none focus:bg-blue-100 hover:bg-blue-100">
                                    <div class="flex">
                                        <div class="pr-2">
                                            <span style="padding: 2px 5px; font-size: 0.7rem;"
                                                class="font-mono leading-none text-white bg-gray-800 rounded-sm">H</span>
                                        </div>
                                        <div class="flex-1">
                                            <p>Vertias - ams opps issue</p>
                                            <p class="text-gray-600">
                                                <span>#ticket/14352</span>
                                                <span class="mx-1 font-black">&#183;</span>
                                                <span>Nico Braun</span>
                                            </p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </span>
                    </li>
                </ul>

                <!-- to bar right  -->
                <ul aria-label="top bar right" aria-orientation="horizontal" class="flex items-center px-8">
                    <li class="relative">
                        <input title="Search Bar" aria-label="search bar" role="search"
                            class="w-4 py-2 pl-4 pr-8 placeholder-transparent transition-all duration-300 ease-in-out rounded-md cursor-pointer focus:border-black focus:cursor-text focus:w-64 focus:placeholder-gray-500"
                            type="text" placeholder="Search Chi Desk Support" />
                        <i class="absolute top-0 right-0 flex items-center h-full pr-3 pointer-events-none">
                            <svg class="w-4 h-4 mx-auto fill-current" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24">
                                <path
                                    d="M21.172 24l-7.387-7.387c-1.388.874-3.024 1.387-4.785 1.387-4.971 0-9-4.029-9-9s4.029-9 9-9 9 4.029 9 9c0 1.761-.514 3.398-1.387 4.785l7.387 7.387-2.828 2.828zm-12.172-8c3.859 0 7-3.14 7-7s-3.141-7-7-7-7 3.14-7 7 3.141 7 7 7z" />
                            </svg>
                        </i>
                    </li>

                    <li class="w-8 h-8 ml-3">
                        <button title="Notifications" aria-label="notifications"
                            class="w-full h-full text-white bg-gray-600 rounded-md focus:outline-none focus:shadow-outline">
                            <i>
                                <svg class="w-4 h-4 mx-auto fill-current" xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24">
                                    <path
                                        d="M15.137 3.945c-.644-.374-1.042-1.07-1.041-1.82v-.003c.001-1.172-.938-2.122-2.096-2.122s-2.097.95-2.097 2.122v.003c.001.751-.396 1.446-1.041 1.82-4.667 2.712-1.985 11.715-6.862 13.306v1.749h20v-1.749c-4.877-1.591-2.195-10.594-6.863-13.306zm-3.137-2.945c.552 0 1 .449 1 1 0 .552-.448 1-1 1s-1-.448-1-1c0-.551.448-1 1-1zm3 20c0 1.598-1.392 3-2.971 3s-3.029-1.402-3.029-3h6z" />
                                </svg>
                            </i>
                        </button>
                    </li>

                    <li class="w-8 h-8 ml-3">
                        <button title="v2 REPL" aria-label="repl"
                            class="w-full h-full text-white bg-gray-600 rounded-md focus:outline-none focus:shadow-outline">
                            <i>
                                <svg class="w-4 h-4 mx-auto fill-current" xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24">
                                    <path
                                        d="M22 6v16h-20v-16h20zm2-6h-24v24h24v-24zm-11 11v1.649l3.229 1.351-3.229 1.347v1.653l5-2.201v-1.599l-5-2.2zm-7 2.201v1.599l5 2.2v-1.653l-3.229-1.347 3.229-1.351v-1.649l-5 2.201z" />
                                </svg>
                            </i>
                        </button>
                    </li>

                    <li class="w-8 h-8 ml-3">
                        <button title="Products" aria-label="chi desk products"
                            class="w-full h-full rounded-md focus:outline-none focus:shadow-outline">
                            <i class="text-gray-600">
                                <svg class="w-5 h-5 mx-auto fill-current" xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24">
                                    <path
                                        d="M11 11h-11v-11h11v11zm13 0h-11v-11h11v11zm-13 13h-11v-11h11v11zm13 0h-11v-11h11v11z" />
                                </svg>
                            </i>
                        </button>
                    </li>

                    <li class="w-10 h-10 ml-3">
                        <button title="Page Menu" aria-label="page menu"
                            class="w-full h-full border rounded-full focus:outline-none focus:shadow-outline">
                            <img class="w-full h-full mx-auto rounded-full"
                                src="https://raw.githubusercontent.com/bluebrown/tailwind-zendesk-clone/master/public/assets/me.jpg" />
                        </button>
                    </li>
                </ul>
            </nav>
