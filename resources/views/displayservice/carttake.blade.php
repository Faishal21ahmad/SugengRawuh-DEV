@extends('displayservice.servicemain')
@section('cart')


        
<div class="w-full">
    <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Pemesan</label>
    <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white dark:border-gray-600 dark:placeholder-gray-400 dark:text-black " placeholder="John" required>
</div>

{{-- <div class="mt-4 h-96 overflow-y-auto scrollbar-hide"  aria-labelledby="dropdownSearchButton" id="listmenu">
    <?php
    for ($i = 1; $i <= 20; $i++) {
        ?>
    <div class="p-2 my-1 rounded-lg  bg-gray-50 dark:bg-gray-700 flex flex-auto">
        <img class="rounded-lg h-16 w-24" src="{{ asset('storage/menu-img/sotoayam.jpg'); }}" alt="" >
            <div class="text-gray-500 dark:text-white my-auto items-center w-auto">
                <p class="text-lg font-bold px-2">Mie ayam</p>
                <p class="text-lg font-semibold px-2">13.000</p>
            </div>
        <div class="text-gray-500 dark:text-white flex my-auto ml-auto pr-5 ">
            <a href="" class="">
                <i class="fi fi-sr-cross-circle text-2xl"></i>
            </a>
            <p class="text-lg font-semibold mx-5">2</p>
            <a href="#">
                <i class="fi fi-sr-add text-2xl"></i>
            </a>
        </div>
    </div>
    <?php
}
?>
</div> --}}

<div class="mt-4 h-96 overflow-y-auto scrollbar-hide"  aria-labelledby="dropdownSearchButton" id="listmenu">
    
    <div class="p-2 my-1 rounded-lg  bg-gray-50 dark:bg-gray-700 flex flex-auto">
        <img class="rounded-lg h-16 w-24" src="{{ asset('storage/menu-img/mie ayam1.jpg'); }}" alt="" >
            <div class="text-gray-500 dark:text-white my-auto items-center w-auto">
                <p class="text-lg font-bold px-2 line-clamp-2">Mie Ayam Spesial</p>
            </div>
        <div class="text-gray-500 dark:text-white flex my-auto ml-auto pr-5 ">
            <a href="" class="">
                <i class="fi fi-sr-cross-circle text-2xl"></i>
            </a>
            <p class="text-lg font-semibold mx-5">2</p>
            <a href="#">
                <i class="fi fi-sr-add text-2xl"></i>
            </a>
        </div>
    </div>
    <div class="p-2 my-1 rounded-lg  bg-gray-50 dark:bg-gray-700 flex flex-auto">
        <img class="rounded-lg h-16 w-24" src="{{ asset('storage/menu-img/sotoayam.jpg'); }}" alt="" >
            <div class="text-gray-500 dark:text-white my-auto items-center w-auto">
                <p class="text-lg font-bold px-2">Sate Kambing Spesial</p>
            </div>
        <div class="text-gray-500 dark:text-white flex my-auto ml-auto pr-5 ">
            <a href="" class="">
                <i class="fi fi-sr-cross-circle text-2xl"></i>
            </a>
            <p class="text-lg font-semibold mx-5">2</p>
            <a href="#">
                <i class="fi fi-sr-add text-2xl"></i>
            </a>
        </div>
    </div>
    <div class="p-2 my-1 rounded-lg  bg-gray-50 dark:bg-gray-700 flex flex-auto">
        <img class="rounded-lg h-16 w-24" src="{{ asset('storage/menu-img/sop iga.jpg'); }}" alt="" >
            <div class="text-gray-500 dark:text-white my-auto items-center w-auto">
                <p class="text-lg font-bold px-2">Sop Iga Spesial</p>
            </div>
        <div class="text-gray-500 dark:text-white flex my-auto ml-auto pr-5 ">
            <a href="" class="">
                <i class="fi fi-sr-cross-circle text-2xl"></i>
            </a>
            <p class="text-lg font-semibold mx-5">2</p>
            <a href="#">
                <i class="fi fi-sr-add text-2xl"></i>
            </a>
        </div>
    </div>
   
</div>

        {{-- <div class="w-full h-1/2 bg-slate-200 flex">
            <div class="w-full h-10 bg-slate-500 content-end">
                
            </div>
        </div>    --}}


        <div class="w-full h-24 bg-slate-800 absolute bottom-0 mb-20 -ml-6">
            <div class="mx-4 mb-2">
                <h3 class="p-2 text-lg font-medium text-gray-900 dark:text-white">Pilih Pembayaran</h3>
                <ul class="justify-items-start overflow-x-auto flex flex-nowrap object-cover">
                   
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

        <div class="px-5 w-full h-16 bg-slate-800 absolute bottom-0 mb-2 -ml-6 flex">
            <div class="w-3/4 h-14 flex justify-between text-white">
                <p class="font-bold text-lg text-start py-3">
                   3 Menu
                </p>
                <p class="font-bold text-lg text-end py-3 mr-3">
                    Rp.50000
                </p>
            </div>
            <div class="w-1/4 h-14 ">
                <a href="/dispservi/done" class="inline-flex w-full items-baseline py-4 text-sm font-medium text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 "> 
                    <p class="mx-auto font-bold items-center">Pesan</p>
                </a>
            </div>
        </div>   
            






















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

@endsection