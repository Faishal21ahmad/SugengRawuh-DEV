{{--  FOR LOOPING --}}
        {{-- <?php
        for ($i = 1; $i <= 15; $i++) {
            ?>
        <div class="m-3  bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700" >
            @if ($item['img'])
                <img class="rounded-t-lg object-cover h-64 w-96" src="{{ asset('storage/' . $item['img']); }}" alt="" />
            @else
            <img class="rounded-t-lg object-cover h-52 w-72" src="{{ asset('storage/menu-img/mie ayam1.jpg'); }}" alt="" >
            @endif
                <div class="px-5 pt-5">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Nasgor Sesial
                        <a href="#" class="float-right items-center viewMenuvi"><i class="fi fi-br-menu-dots-vertical text-4xl font-bold"></i></a></h5>
                    <p class="mb-4 font-normal text-gray-700 dark:text-gray-400">Rp.55000</p>
                </div>
                <div class="px-5 pb-5 flex flex-auto">
                    @if ($item['status'] === 'tersedia')
                    <a href="" class="inline-flex w-full items-baseline py-3 text-sm font-medium text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 "> 
                        <p class="mx-auto font-bold items-center">Beli</p>
                    </a>
                    @else
                    <a href="" class="inline-flex w-full items-baseline py-3 text-sm font-medium text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800 "> 
                        <p class="mx-auto font-bold text-lg flex items-center">Tidak Tersedia</p>
                    </a>
                    @endif
                    
                </div>
        </div>
        <?php
        }
        ?> --}}



  
<div class="m-2 mr-10 grid grid-cols-4 w-full">
   
    <div class=" max-w-sx bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700 m-3">
        <div class="">
            <img class="rounded-t-lg object-cover h-44 w-full" src="{{ asset('storage/menu-img/mie ayam1.jpg'); }}" alt="" />
        </div>
        <div class="relative p-3 h-48">
            <div class="flex">
                <p class="grow px-1 text-2xl font-bold text-gray-900 dark:text-white line-clamp-2">Mie Ayam Spesial </p>
                <a href="" class="flex-none text-2xl font-bold dark:text-white mt-2 viewMenuvi"><i class="fi fi-br-menu-dots-vertical p-1"></i></a>
            </div>
            
            <div class="absolute inset-x-0 bottom-0 p-3">
                <p class="px-1 mb-5 text-gray-700 dark:text-white font-semibold">Rp.15000</p>
                <a href="#" class="inline-flex w-full items-baseline py-2 text-xs font-normal text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 "> 
                    <p class="mx-auto font-bold text-lg flex items-center">Beli</p>
                </a>
            </div>
        </div>
    </div>

    <div class=" max-w-sx bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700 m-3">
        <div class="">
            <img class="rounded-t-lg object-cover h-44 w-full" src="{{ asset('storage/menu-img/nasi goreng spesial.jpg'); }}" alt="" />
        </div>
        <div class="relative p-3 h-48">
            <div class="flex">
                <p class="grow px-1 text-2xl font-bold text-gray-900 dark:text-white line-clamp-2">Nasi Goreng Spesial </p>
                <a href="" class="flex-none text-2xl font-bold dark:text-white mt-2 viewMenuvi"><i class="fi fi-br-menu-dots-vertical p-1"></i></a>
            </div>
            
            <div class="absolute inset-x-0 bottom-0 p-3">
                <p class="px-1 mb-5 text-gray-700 dark:text-white font-semibold">Rp.15000</p>
                <a href="#" class="inline-flex w-full items-baseline py-2 text-xs font-normal text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 "> 
                    <p class="mx-auto font-bold text-lg flex items-center">Beli</p>
                </a>
            </div>
        </div>
    </div>

    <div class=" max-w-sx bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700 m-3">
        <div class="">
            <img class="rounded-t-lg object-cover h-44 w-full" src="{{ asset('storage/menu-img/sate.jpg'); }}" alt="" />
        </div>
        <div class="relative p-3 h-48">
            <div class="flex">
                <p class="grow px-1 text-2xl font-bold text-gray-900 dark:text-white line-clamp-2">Sate Kambing Spesial</p>
                <a href="" class="flex-none text-2xl font-bold dark:text-white mt-2 viewMenuvi"><i class="fi fi-br-menu-dots-vertical p-1"></i></a>
            </div>
            
            <div class="absolute inset-x-0 bottom-0 p-3">
                <p class="px-1 mb-5 text-gray-700 dark:text-white font-semibold">Rp.15000</p>
                <a href="#" class="inline-flex w-full items-baseline py-2 text-xs font-normal text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 "> 
                    <p class="mx-auto font-bold text-lg flex items-center">Beli</p>
                </a>
            </div>
        </div>
    </div>

    <div class=" max-w-sx bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700 m-3">
        <div class="">
            <img class="rounded-t-lg object-cover h-44 w-full" src="{{ asset('storage/menu-img/sop iga.jpg'); }}" alt="" />
        </div>
        <div class="relative p-3 h-48">
            <div class="flex">
                <p class="grow px-1 text-2xl font-bold text-gray-900 dark:text-white line-clamp-2">Sop Iga Spesial</p>
                <a href="" class="flex-none text-2xl font-bold dark:text-white mt-2 viewMenuvi"><i class="fi fi-br-menu-dots-vertical p-1"></i></a>
            </div>
            
            <div class="absolute inset-x-0 bottom-0 p-3">
                <p class="px-1 mb-5 text-gray-700 dark:text-white font-semibold">Rp.15000</p>
                <a href="#" class="inline-flex w-full items-baseline py-2 text-xs font-normal text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 "> 
                    <p class="mx-auto font-bold text-lg flex items-center">Beli</p>
                </a>
            </div>
        </div>
    </div>

    <div class=" max-w-sx bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700 m-3">
        <div class="">
            <img class="rounded-t-lg object-cover h-44 w-full" src="{{ asset('storage/menu-img/teh kuli.jpg'); }}" alt="" />
        </div>
        <div class="relative p-3 h-48">
            <div class="flex">
                <p class="grow px-1 text-2xl font-bold text-gray-900 dark:text-white line-clamp-2">Teh Kuli</p>
                <a href="" class="flex-none text-2xl font-bold dark:text-white mt-2 viewMenuvi"><i class="fi fi-br-menu-dots-vertical p-1"></i></a>
            </div>
            
            <div class="absolute inset-x-0 bottom-0 p-3">
                <p class="px-1 mb-5 text-gray-700 dark:text-white font-semibold">Rp.1000</p>
                <a href="#" class="inline-flex w-full items-baseline py-2 text-xs font-normal text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 "> 
                    <p class="mx-auto font-bold text-lg flex items-center">Beli</p>
                </a>
            </div>
        </div>
    </div>

    <div class=" max-w-sx bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700 m-3">
        <div class="">
            <img class="rounded-t-lg object-cover h-44 w-full" src="{{ asset('storage/menu-img/sotoayam.jpg'); }}" alt="" />
        </div>
        <div class="relative p-3 h-48">
            <div class="flex">
                <p class="grow px-1 text-2xl font-bold text-gray-900 dark:text-white line-clamp-2">Soto Ayam Spesial </p>
                <a href="" class="flex-none text-2xl font-bold dark:text-white mt-2 viewMenuvi"><i class="fi fi-br-menu-dots-vertical p-1"></i></a>
            </div>
            
            <div class="absolute inset-x-0 bottom-0 p-3">
                <p class="px-1 mb-5 text-gray-700 dark:text-white font-semibold">Rp.15000</p>
                <a href="#" class="inline-flex w-full items-baseline py-2 text-xs font-normal text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 "> 
                    <p class="mx-auto font-bold text-lg flex items-center">Beli</p>
                </a>
            </div>
        </div>
    </div>

    <div class=" max-w-sx bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700 m-3">
        <div class="">
            <img class="rounded-t-lg object-cover h-44 w-full" src="{{ asset('storage/menu-img/bakso.jpeg'); }}" alt="" />
        </div>
        <div class="relative p-3 h-48">
            <div class="flex">
                <p class="grow px-1 text-2xl font-bold text-gray-900 dark:text-white line-clamp-2">Bakso Spesial </p>
                <a href="" class="flex-none text-2xl font-bold dark:text-white mt-2 viewMenuvi"><i class="fi fi-br-menu-dots-vertical p-1"></i></a>
            </div>
            
            <div class="absolute inset-x-0 bottom-0 p-3">
                <p class="px-1 mb-5 text-gray-700 dark:text-white font-semibold">Rp.15000</p>
                <a href="#" class="inline-flex w-full items-baseline py-2 text-xs font-normal text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 "> 
                    <p class="mx-auto font-bold text-lg flex items-center">Beli</p>
                </a>
            </div>
        </div>
    </div>

    <div class=" max-w-sx bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700 m-3">
        <div class="">
            <img class="rounded-t-lg object-cover h-44 w-full" src="{{ asset('storage/menu-img/mie ayam1.jpg'); }}" alt="" />
        </div>
        <div class="relative p-3 h-48">
            <div class="flex">
                <p class="grow px-1 text-2xl font-bold text-gray-900 dark:text-white line-clamp-2">Wedang Jahe </p>
                <a href="" class="flex-none text-2xl font-bold dark:text-white mt-2 viewMenuvi"><i class="fi fi-br-menu-dots-vertical p-1"></i></a>
            </div>
            
            <div class="absolute inset-x-0 bottom-0 p-3">
                <p class="px-1 mb-5 text-gray-700 dark:text-white font-semibold">Rp.5000</p>
                <a href="#" class="inline-flex w-full items-baseline py-2 text-xs font-normal text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 "> 
                    <p class="mx-auto font-bold text-lg flex items-center">Beli</p>
                </a>
            </div>
        </div>
    </div>

    <div class=" max-w-sx bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700 m-3">
        <div class="">
            <img class="rounded-t-lg object-cover h-44 w-full" src="{{ asset('storage/menu-img/mie ayam1.jpg'); }}" alt="" />
        </div>
        <div class="relative p-3 h-48">
            <div class="flex">
                <p class="grow px-1 text-2xl font-bold text-gray-900 dark:text-white line-clamp-2">Mie Ayam Spesial Jumbo</p>
                <a href="" class="flex-none text-2xl font-bold dark:text-white mt-2 viewMenuvi"><i class="fi fi-br-menu-dots-vertical p-1"></i></a>
            </div>
            
            <div class="absolute inset-x-0 bottom-0 p-3">
                <p class="px-1 mb-5 text-gray-700 dark:text-white font-semibold">Rp.20000</p>
                <a href="#" class="inline-flex w-full items-baseline py-2 text-xs font-normal text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 "> 
                    <p class="mx-auto font-bold text-lg flex items-center">Beli</p>
                </a>
            </div>
        </div>
    </div>
</div>





