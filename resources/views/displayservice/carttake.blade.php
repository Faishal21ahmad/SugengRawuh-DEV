@extends('displayservice.servicemain')
@section('cart')
<form action="/DS" method="POST">
    @csrf
    {{-- Input Nama Pemesan --}}
    <div class="w-full">
        <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Pemesan</label>
        <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white dark:border-gray-600 dark:placeholder-gray-400 dark:text-black " placeholder="nama pemesan ....." required>
    </div>
    {{-- Detail Menu Yang Dipilih --}}
    <div  class="mt-4 h-96 overflow-y-auto scrollbar-hide"  aria-labelledby="dropdownSearchButton" id="listmenu">
        {{-- Menu 1 --}}
        <div id="menu1" class="hidden p-2 my-1 rounded-lg  bg-gray-50 dark:bg-gray-700 flex flex-auto">
            <img class="rounded-lg h-16 w-24" src="{{ asset('storage/menu-img/mie ayam1.jpg'); }}" alt="" >
            <div class="text-gray-500 dark:text-white my-auto items-center w-auto">
                <p class="text-lg font-bold px-2 line-clamp-2">Mie Ayam Spesial</p>
            </div>
            <div class="text-gray-500 dark:text-white flex my-auto ml-auto pr-5 ">
                <a href="" class=""><i class="fi fi-sr-minus-circle text-2xl"></i></a>
                <p class="text-lg font-semibold mx-5">1</p>
                <a href="#"><i class="fi fi-sr-add text-2xl"></i></a>
            </div>
        </div>
        {{-- Menu 2 & all --}}
        <div id="menu2" class="hidden p-2 my-1 rounded-lg  bg-gray-50 dark:bg-gray-700 flex flex-auto">
            <img class="rounded-lg h-16 w-24" src="{{ asset('storage/menu-img/nasi goreng spesial.jpg'); }}" alt="" >
            <div class="text-gray-500 dark:text-white my-auto items-center w-auto">
                <p class="text-lg font-bold px-2 line-clamp-2">Nasi Goreng Spesial</p>
            </div>
            <div class="text-gray-500 dark:text-white flex my-auto ml-auto pr-5 ">
                <a href="" class="">
                <i class="fi fi-sr-minus-circle text-2xl"></i>
                </a>
                <p class="text-lg font-semibold mx-5">1</p>
                <a href="#">
                    <i class="fi fi-sr-add text-2xl"></i>
                </a>
            </div>
        </div>
        <div id="menu3" class="hidden p-2 my-1 rounded-lg  bg-gray-50 dark:bg-gray-700 flex flex-auto">
            <img class="rounded-lg h-16 w-24" src="{{ asset('storage/menu-img/sate.jpg'); }}" alt="" >
            <div class="text-gray-500 dark:text-white my-auto items-center w-auto">
                <p class="text-lg font-bold px-2 line-clamp-2">Sate Kambing Spesial</p>
            </div>
            <div class="text-gray-500 dark:text-white flex my-auto ml-auto pr-5 ">
                <a href="" class="">
                <i class="fi fi-sr-minus-circle text-2xl"></i>
                </a>
                <p class="text-lg font-semibold mx-5">1</p>
                <a href="#">
                    <i class="fi fi-sr-add text-2xl"></i>
                </a>
            </div>
        </div>
        <div id="menu4" class="hidden p-2 my-1 rounded-lg  bg-gray-50 dark:bg-gray-700 flex flex-auto">
            <img class="rounded-lg h-16 w-24" src="{{ asset('storage/menu-img/sop iga.jpg'); }}" alt="" >
            <div class="text-gray-500 dark:text-white my-auto items-center w-auto">
                <p class="text-lg font-bold px-2 line-clamp-2">Sop Iga Spesial</p>
            </div>
            <div class="text-gray-500 dark:text-white flex my-auto ml-auto pr-5 ">
                <a href="" class="">
                <i class="fi fi-sr-minus-circle text-2xl"></i>
                </a>
                <p class="text-lg font-semibold mx-5">1</p>
                <a href="#">
                    <i class="fi fi-sr-add text-2xl"></i>
                </a>
            </div>
        </div>
        <div id="menu5" class="hidden p-2 my-1 rounded-lg  bg-gray-50 dark:bg-gray-700 flex flex-auto">
            <img class="rounded-lg h-16 w-24" src="{{ asset('storage/menu-img/teh kuli.jpg'); }}" alt="" >
            <div class="text-gray-500 dark:text-white my-auto items-center w-auto">
                <p class="text-lg font-bold px-2 line-clamp-2">Teh Kuli</p>
            </div>
            <div class="text-gray-500 dark:text-white flex my-auto ml-auto pr-5 ">
                <a href="" class="">
                <i class="fi fi-sr-minus-circle text-2xl"></i>
                </a>
                <p class="text-lg font-semibold mx-5">1</p>
                <a href="#">
                    <i class="fi fi-sr-add text-2xl"></i>
                </a>
            </div>
        </div>
        <div id="menu6" class="hidden p-2 my-1 rounded-lg  bg-gray-50 dark:bg-gray-700 flex flex-auto">
            <img class="rounded-lg h-16 w-24" src="{{ asset('storage/menu-img/bakso.jpeg'); }}" alt="" >
            <div class="text-gray-500 dark:text-white my-auto items-center w-auto">
                <p class="text-lg font-bold px-2 line-clamp-2">Bakso Spesial</p>
            </div>
            <div class="text-gray-500 dark:text-white flex my-auto ml-auto pr-5 ">
                <a href="" class="">
                <i class="fi fi-sr-minus-circle text-2xl"></i>
                </a>
                <p class="text-lg font-semibold mx-5">1</p>
                <a href="#">
                    <i class="fi fi-sr-add text-2xl"></i>
                </a>
            </div>
        </div>
        <div id="menu7" class="hidden p-2 my-1 rounded-lg  bg-gray-50 dark:bg-gray-700 flex flex-auto">
            <img class="rounded-lg h-16 w-24" src="{{ asset('storage/menu-img/wedang jahe.jpg'); }}" alt="" >
            <div class="text-gray-500 dark:text-white my-auto items-center w-auto">
                <p class="text-lg font-bold px-2 line-clamp-2">Wedang Jahe</p>
            </div>
            <div class="text-gray-500 dark:text-white flex my-auto ml-auto pr-5 ">
                <a href="" class="">
                <i class="fi fi-sr-minus-circle text-2xl"></i>
                </a>
                <p class="text-lg font-semibold mx-5">1</p>
                <a href="#">
                    <i class="fi fi-sr-add text-2xl"></i>
                </a>
            </div>
        </div>
        <div id="menu8" class="hidden p-2 my-1 rounded-lg  bg-gray-50 dark:bg-gray-700 flex flex-auto">
            <img class="rounded-lg h-16 w-24" src="{{ asset('storage/menu-img/mie ayam1.jpg'); }}" alt="" >
            <div class="text-gray-500 dark:text-white my-auto items-center w-auto">
                <p class="text-lg font-bold px-2 line-clamp-2">Mie Ayam Spesial Jumbo</p>
            </div>
            <div class="text-gray-500 dark:text-white flex my-auto ml-auto pr-5 ">
                <a href="" class="">
                <i class="fi fi-sr-minus-circle text-2xl"></i>
                </a>
                <p class="text-lg font-semibold mx-5">1</p>
                <a href="#">
                    <i class="fi fi-sr-add text-2xl"></i>
                </a>
            </div>
        </div>
    </div>

    {{-- Pilih Pembayaran --}}
    <div class="w-full h-24 bg-slate-800 absolute bottom-0 mb-20 -ml-6">
        <div class="mx-4 mb-2">
            <h3 class="p-2 text-lg font-medium text-gray-900 dark:text-white">Pilih Pembayaran</h3>
            <ul class="justify-items-start overflow-x-auto flex flex-nowrap object-cover">
                {{-- Kasir --}}
                <li class="mx-1">
                    <input type="radio" id="bayar1" name="jenispembayaran_id" value="1" class="hidden peer" checked>
                    <label for="bayar1" class="inline-flex items-center justify-between px-8 py-2 text-white bg-white border border-blue-600 rounded-lg cursor-pointer 
                        dark:hover:text-gray-300 dark:border-blue-600 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 
                    peer-checked:bg-blue-600 dark:text-gray-400 dark:bg-gray-800 ">                           
                        <div class="block">
                            <P class="w-full text-white text-lg font-semibold">kasir</P>
                        </div>
                    </label>
                </li>
                {{-- Qris --}}
                <li class="mx-1">
                    <input type="radio" id="bayar2" name="jenispembayaran_id" value="2" class="hidden peer">
                    <label for="bayar2" class="inline-flex items-center justify-between px-8 py-2 text-white bg-white border border-blue-600 rounded-lg cursor-pointer 
                    dark:hover:text-gray-300 dark:border-blue-600 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 
                    peer-checked:bg-blue-600 dark:text-gray-400 dark:bg-gray-800 ">                           
                        <div class="block">
                            <P class="w-full text-white text-lg font-semibold">Qris</P>
                        </div>
                    </label>
                </li>
        </div>
    </div> 

    {{-- Informasi Singkat Dari Pembelian --}}
    <div class="px-5 w-full h-16 bg-slate-800 absolute bottom-0 mb-2 -ml-6 flex">
        <div class="w-3/4 h-14 flex justify-between text-white">
            {{-- Jumlah menu yang di beli --}}
            <p class="font-bold text-lg text-start py-3">3 Menu</p>
            {{-- Total harga --}}
            <p class="font-bold text-lg text-end py-3 mr-3">Rp.45000
        </div>
        <div class="w-1/4 h-14">
            <a href="/dispservi/done" class="inline-flex w-full items-baseline py-4 text-sm font-medium text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"> 
                <p class="mx-auto font-bold items-center">Pesan</p>
            </a>
        </div>
    </div>   
</form>
@endsection








        {{-- List menu --}}
        {{-- <div class="mt-2">
            <?php
            for ($i = 1; $i <= 3; $i++) {
                ?>
            <div class="p-1 my-1 rounded-lg  bg-gray-50 dark:bg-gray-700 flex flex-auto">
                <img class="rounded-lg h-16 w-24" src="{{ asset('img/404.png'); }}" alt="" >
                <div class="text-gray-500 dark:text-white my-auto items-center w-auto">
                    <p class="text-xs px-2">Mie ayam</p>
                    <p class="text-xs px-2">13.000</p>
                </div>
                <div class="text-gray-500 dark:text-white flex my-auto ml-auto pr-5">
                    <a href="" class="">
                        <i class="fi fi-sr-cross-circle text-2xl"></i>
                    </a>
                    <p class="text-lg mx-5">2</p>
                    <a href="#">
                        <i class="fi fi-sr-add text-2xl"></i>
                    </a>
                </div>
            </div>
            <?php
            }
            ?>
        </div> --}}

