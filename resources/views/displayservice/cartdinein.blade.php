@extends('displayservice.servicemain')
@section('cart')
<div class="p-6 dark:bg-gray-800 rounded-md">
  
        <div class="w-96">
            <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">First name</label>
            <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="John" required>
        </div>


       
            <div class="mt-4 h-96 inset-y-0 overflow-x-auto "  aria-labelledby="dropdownSearchButton" id="listmenu">
                <?php
                for ($i = 1; $i <= 20; $i++) {
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
 
</div>
@endsection