<div class="flex px-4 py-3">
    <button data-drawer-target="sidebar-multi-level-sidebar" data-drawer-toggle="sidebar-multi-level-sidebar" aria-controls="sidebar-multi-level-sidebar" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
        <span class="sr-only">Open sidebar</span>
        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
        </svg>
    </button>
        <h1 class="flex-auto text-start text-2xl font-bold">{{ $header }}</h1>
        <button type="button" class=" text-lg font-bold rounded text-center md:mr-0 flex items-center" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">Hai, {{ auth()->user()->owner }}<i class="fi fi-sr-angle-small-down flex items-center mx-0.5"></i></button>
</div>

<!-- Dropdown menu -->
<div class="z-50 hidden my-2 text-base list-none bg-white divide-y divide-gray-100 rounded shadow dark:bg-gray-700 dark:divide-gray-600" id="user-dropdown">
    <div class="px-4 py-3">
        <span class="block text-sm text-gray-900 dark:text-white">{{ auth()->user()->namarm }}</span>
        <span class="block text-sm font-medium text-gray-500 truncate dark:text-gray-400">{{ auth()->user()->email }}</span>
    </div>
    <ul class="py-1" aria-labelledby="user-menu-button">
        <li>
            <a href="/" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Home Page</a>
        </li>
        <li>
            <a href="/dashboard" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Dashboard</a>
        </li>
        <li>
            <a href="" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Earnings</a>
        </li>
        <li>
            <form action="/logout" method="POST">
                @csrf
                <button type="submit" class="w-full">
                    <span class="block px-4 py-2 text-sm text-left text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Logout</span>
                </button>
            </form>
        </li>
    </ul>
    <ul>
        <li class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Tema</li>
        {{-- Toggle MODE --}}
        {{-- Hilangkan comment ketika menggunakan linux agar mode bekerja --}}
        <li class="py-1 flex items-center justify-center ">
            <span class="mr-3 text-sm font-medium  text-gray-700 dark:text-gray-200">Light</span>
            <label class="relative inline-flex items-center cursor-pointer">
                <input type="checkbox" value="" id="dark-toggle" class="sr-only peer" checked>                            
                <div class="w-11 h-6 bg-gray-200 rounded-full peer peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
            </label>
            <span class="ml-3 text-sm font-medium  text-gray-700 dark:text-gray-200">Dark</span>
        </li>
    </ul>
</div>