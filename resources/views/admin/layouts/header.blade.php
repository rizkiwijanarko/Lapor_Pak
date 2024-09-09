<header class="w-full h-[78px] bg-white shadow flex justify-end p-5">
    <div class="flex gap-4 items-center relative">
        <div>
            <div class="text-end text-sm text-gray-800">admin</div>
            <div class=" text-xs text-gray-600">admin.laravel@labs64.com</div>
        </div>
        <div>
            <img src="https://www.pngitem.com/pimgs/m/579-5798505_user-placeholder-svg-hd-png-download.png"
                class="rounded-full size-10 object-cover object-bottom">
        </div>

        <button onclick="toggleDropdown()" id="dropdown-button-profile">
            <box-icon id="dropdown-icon" name='chevron-down' color='grey'></box-icon>
        </button>

        <div id="dropdown-profile"
            class="absolute top-[59px] right-0 bg-white py-2 border-2 border-gray-200 px-4 hidden">

            <div class="text-center mt-2 text-sm text-gray-800">admin</div>
            <div class="text-center text-xs text-gray-500">admin.laravel@labs64.com</div>

            <div class="border-t mt-4 mb-2 border-gray-300"></div>

            <a href="#" class="flex gap-3 items-center w-full p-2 transition-all hover:bg-gray-100">
                <box-icon name='log-out' color="gray"></box-icon>
                <div class="text-gray-600 text-sm">Log Out</div>
            </a>
        </div>
    </div>
</header>
