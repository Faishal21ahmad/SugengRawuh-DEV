@extends('dashboard.layouts.main')
@section('containerDB')

<div class="mx-auto">
    {{-- button pilih hari --}}
    <div class="block">
        <button type="button" class="text-lg text-white flex font-bold rounded-lg text-center px-6 py-2 m-2 items-center dark:bg-gray-800" id="date-menu-button" aria-expanded="false" data-dropdown-toggle="date-dropdown" data-dropdown-placement="bottom">Hari ini <i class="fi fi-sr-angle-small-down flex items-center ml-3"></i></button>
    </div>
    {{-- Informasi Penjualan --}}
    <div class="flex items-center">
        <a href="#" class="block max-w-lg p-6 m-2 flex-auto  bg-white border border-gray-200 rounded-lg shadow-md hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            <h5 class="mb-2 text-8xl font-bold text-center tracking-tight text-gray-900 dark:text-white">10</h5>
            <p class=" text-gray-700 font-bold dark:text-white text-center">Menu Terjual</p>
        </a>
        <a href="#" class="block max-w-lg p-6 m-2 flex-auto  bg-white border border-gray-200 rounded-lg shadow-md hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            <h5 class="mb-2 text-8xl font-bold text-center tracking-tight text-gray-900 dark:text-white">10</h5>
            <p class=" text-gray-700 font-bold dark:text-white text-center">Transaksi</p>
        </a>
        <a href="#" class="block max-w-lg p-6 m-2 flex-auto  bg-white border border-gray-200 rounded-lg shadow-md hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            <h5 class="mb-2 text-8xl font-bold text-center tracking-tight text-gray-900 dark:text-white">10</h5>
            <p class=" text-gray-700 font-bold dark:text-white text-center">Pesan Masuk</p>
        </a>
        <a href="#" class="block h-44 py-12 m-2 flex-auto  bg-white border border-gray-200 rounded-lg shadow-md hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            <h5 class="mb-2 text-5xl font-bold text-center tracking-tight text-gray-900 dark:text-white">Rp. 10.000.000</h5>
            <p class="mt-7 text-gray-700 font-bold dark:text-white text-center">Uang Masuk</p>
        </a>
    </div>

    {{-- Text Top seller --}}
    <div class="block mt-10 mb-4">
        <label class="text-2xl font-bold p-6">Top seller</label>
    </div>
    {{-- Card Top Seller --}}
    <ul class="flex">
        <li class="flex-auto h-80 w-96 bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700 m-2">
            <img class="rounded-t-lg object-cover h-52 w-full" src="{{ asset('storage/menu-img/mie ayam1.jpg'); }}" alt="" />
            <div class="p-3">
                <h5 class="px-1 mb-1 text-xl font-semibold text-gray-900 dark:text-white">Mie Ayam Spesial</h5>
            </div>
        </li>
        <li class="flex-auto h-80 w-96 bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700 m-2">
            <img class="rounded-t-lg object-cover h-52 w-full" src="{{ asset('storage/menu-img/nasi goreng spesial.jpg'); }}" alt="" />
            <div class="p-3">
                <h5 class="px-1 mb-1 text-xl font-semibold text-gray-900 dark:text-white">Nasi Spesial Spesial Spesial Spesial Spesial Spesial </h5>
            </div>
        </li>
        <li class="flex-auto h-80 w-96 bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700 m-2">
            <img class="rounded-t-lg object-cover h-52 w-full" src="{{ asset('storage/menu-img/sop iga.jpg'); }}" alt="" />
            <div class="p-3">
                <h5 class="px-1 mb-1 text-xl font-semibold text-gray-900 dark:text-white">Sop Iga Spesial</h5>
            </div>
        </li>
        <li class="flex-auto h-80 w-96 bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700 m-2">
            <img class="rounded-t-lg object-cover h-52 w-full" src="{{ asset('storage/menu-img/teh kuli.jpg'); }}" alt="" />
            <div class="p-3">
                <h5 class="px-1 mb-1 text-xl font-semibold text-gray-900 dark:text-white">Teh Kuli</h5>
            </div>
        </li>
    </ul>
    {{-- <div class="overflow-x-auto ">
        <div class="p-1 flex ">
            <div class="h-72 w-64 bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700 m-1">
                <a href="#">
                    <img class="rounded-t-lg object-cover h-52 w-full" src="{{ asset('storage/menu-img/sop iga.jpg'); }}" alt="" />
                </a>
                <div class="p-3">
                    <h5 class="px-1 mb-1 text-xl font-semibold text-gray-900 dark:text-white">Iga Spesial</h5>
                </div>
            </div>
            <div class="h-72 w-64 bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700 m-1">
                <a href="#">
                    <img class="rounded-t-lg object-cover h-52 w-full" src="{{ asset('storage/menu-img/sop iga.jpg'); }}" alt="" />
                </a>
                <div class="p-3">
                    <h5 class="px-1 mb-1 text-xl font-semibold text-gray-900 dark:text-white">Iga Spesial</h5>
                </div>
            </div>
            <div class="h-72 w-64 bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700 m-1">
                <a href="#">
                    <img class="rounded-t-lg object-cover h-52 w-full" src="{{ asset('storage/menu-img/sop iga.jpg'); }}" alt="" />
                </a>
                <div class="p-3">
                    <h5 class="px-1 mb-1 text-xl font-semibold text-gray-900 dark:text-white">Iga Spesial</h5>
                </div>
            </div>
            <div class="h-72 w-64 bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700 m-1">
                <a href="#">
                    <img class="rounded-t-lg object-cover h-52 w-full" src="{{ asset('storage/menu-img/sop iga.jpg'); }}" alt="" />
                </a>
                <div class="p-3">
                    <h5 class="px-1 mb-1 text-xl font-semibold text-gray-900 dark:text-white">Iga Spesial</h5>
                </div>
            </div>
        </div>
    </div> --}}
    {{-- <div class="relative rounded-xl overflow-auto p-8">
        <div class="grid grid-cols-2 gap-4 font-mono text-white text-sm text-center font-bold leading-6">
            <div class="p-4 rounded-lg shadow-lg bg-sky-500 col-start-1 col-span-2">01</div>
            <div class="p-4 rounded-lg shadow-lg bg-sky-500 col-start-1 col-end-1">02</div>
            <div class="p-4 rounded-lg shadow-lg bg-sky-500 col-start-2 col-end-2 ">03</div>
        </div>
    </div> --}}
</div>
<!-- Dropdown Atur tanggal -->
<div class="z-50 hidden w-36 my-6 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600" id="date-dropdown">
    <ul class="py-1" aria-labelledby="date-menu-button">
    <li>
        <a href="/" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Hari ini</a>
    </li>
    <li>
        <a href="/dashboard" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Pekan</a>
    </li>
    <li>
        <a href="/dashboard" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Bulan</a>
    </li>
</div>

@endsection