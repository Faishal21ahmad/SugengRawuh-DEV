<div class="flex items-center ">
    <h1 class="p-6 flex-auto text-start text-2xl font-bold">{{ $header }}</h1>
    
 

    <div class="ml-auto mr-10">
        <button type="button" class="text-lg font-bold rounded text-center mx-3 md:mr-0 flex items-center" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">Hai, {{ auth()->user()->owner }}<i class="fi fi-sr-angle-small-down flex items-center mx-0.5"></i></button>
    </div>
</div>


<!-- Dropdown menu -->
<div class="z-50 hidden  my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow dark:bg-gray-700 dark:divide-gray-600" id="user-dropdown">
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