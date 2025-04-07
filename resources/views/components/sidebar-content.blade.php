<ul class="mt-2 space-y-1" x-data >
    <li>
        <a href="#"
            class="block px-4 py-2 text-sm font-medium rounded-lg  text-gray-500 hover:bg-gray-100 hover:text-gray-700 @if(request()->routeIs('dashboard')) bg-blue-900 text-white @endif">
            <i class="mx-2 ri-settings-2-line"></i>    Dashboard </a>
    </li>


    <!-- Manage Crops -->
    <li x-data="{ open: true }">
        <div class="flex items-center justify-between px-4 py-2 text-gray-500 rounded-lg cursor-pointer hover:bg-gray-100 hover:text-gray-700"
            @click="open = !open">
            <span class="text-sm font-medium"> <i class="mx-2 ri-tree-line"></i> Manage Crops </span>
            <span class="transition duration-300 shrink-0" :class="{ '-rotate-180': open }">
                <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 20 20"
                    fill="currentColor">
                    <path fill-rule="evenodd"
                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                        clip-rule="evenodd" />
                </svg>
            </span>
        </div>

        <ul x-show="open" x-collapse class="px-4 mt-2 space-y-1">
            <!-- Soybean -->
            <li x-data="{ open: false }">
                <li>
                    <a href="#"
                        class="block px-4 py-2 text-sm font-medium text-gray-500 rounded-lg hover:bg-gray-100 hover:text-gray-700">
                        <i class="mx-2 ri-home-5-line"></i>On-Farm Sites </a>
                </li>
            </li>
            <li x-data="{ open: false }">
                <li>
                    <a href="#"
                        class="block px-4 py-2 text-sm font-medium text-gray-500 rounded-lg hover:bg-gray-100 hover:text-gray-700">
                        <i class="mx-2 ri-building-2-line"></i> On-Station Sites </a>
                </li>
            </li>

        </ul>
    </li>

    <li>
        <a href="#"
            class="block px-4 py-2 text-sm font-medium text-gray-500 rounded-lg hover:bg-gray-100 hover:text-gray-700">
            <i class="mx-2 ri-sun-cloudy-line"></i>     Manage Seasons </a>
    </li>

    <li>
        <a href="#"
            class="block px-4 py-2 text-sm font-medium text-gray-500 rounded-lg hover:bg-gray-100 hover:text-gray-700">
            <i class="mx-2 ri-list-settings-fill"></i>  Operations </a>
    </li>

    <li>
        <a href="/profile"
            class="block px-4 py-2 text-sm font-medium text-gray-500 rounded-lg hover:bg-gray-100 hover:text-gray-700">
            <i class="mx-2 ri-user-line"></i>  Profile Settings </a>
    </li>
</ul>
