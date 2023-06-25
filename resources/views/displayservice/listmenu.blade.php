
    <div class=" h-modal overflow-x-hidden flex flex-wrap  z-0">
        <?php
        for ($i = 1; $i <= 10; $i++) {
            ?>
            <div class="m-2 max-w-xs bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700" >
            {{-- @if ($item['img']) --}}
                {{-- <img class="rounded-t-lg object-cover h-64 w-96" src="{{ asset('storage/' . $item['img']); }}" alt="" /> --}}
            {{-- @else --}}
                <img class="rounded-t-lg object-cover h-44 w-64" src="{{ asset('img/404.png'); }}" alt="" >
            {{-- @endif --}}
            <div class="p-5">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Nasgor Sesial
                    <a href="#" class="float-right items-center viewMenuvi"><i class="fi fi-br-menu-dots-vertical"></i></a></h5>
                <p class="mb-4 font-normal text-gray-700 dark:text-gray-400">Rp.55000</p>
            </div>
            <div class="p-5 flex flex-auto">
                {{-- @if ($item['status'] === 'tersedia') --}}
                <a href="" class="inline-flex w-full items-baseline py-3 text-sm font-medium text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 "> 
                    <p class="mx-auto flex items-center">Tersedia</p>
                </a>
                {{-- @else
                <a href="" class="inline-flex w-full items-baseline py-3 text-sm font-medium text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800 "> 
                    <p class="mx-auto flex items-center">Tidak Tersedia</p>
                </a>
                @endif --}}
                
            </div>
        </div>
        <?php
        }
        ?>
    </div>

