@extends('dashboard.layouts.main')
@section('containerDB')
{{-- buttton tambah display --}}
<div class="p-4">
    <div class="ml-auto mr-10">
        <button type="button" class="inline-flex items-end px-7 py-3 m-1 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none
         focus:ring-blue-300 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-blue-800">
            Tambah Display Service
        </button>
    </div>
</div>
{{-- Tabel list --}}
<div class="container flex flex-wrap m-5">
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            {{-- Isi colom --}}
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700
             dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        No
                    </th>
                    <th scope="col" class="px-10 py-3">
                        Display 
                    </th>
                    <th scope="col" class="px-10 py-3">
                        Code Auth
                    </th>
                    <th scope="col" class="px-10 py-3">
                        Status 
                    </th>
                    <th scope="col" class="px-20 py-3">
                        Aksi
                    </th>
                </tr>
            </thead>
            <tbody>
                {{-- Data Display 1 --}}
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        1
                        </th>
                        <td class="px-10 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            Display 1
                        </td>
                        <td class="px-10 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            Au765gN
                        </td>
                        <td class="px-10 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <p id="statusdisable1" class="hidden">Disable</p>
                            <p id="statusactive1" class="">Active</p>
                        </td>
                        
                        <td class="px-10 py-4 flex flex-auto">
                            <a href="#" id="disable1" class="hidden mx-1 inline-flex items-end px-3 py-2 text-sm font-medium text-center text-white bg-reed-700 rounded-lg bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 
                            dark:bg-red-750 dark:hover:bg-red-800 dark:focus:ring-red-900">
                                <i class="fi fi-br-cross"></i>
                            </a>
                            <a href="#" id="active1" class="mx-1 inline-flex items-end px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                <i class="fi fi-br-check"></i>
                            </a>
                            <form action="" method="post" class="d-inline">
                                    @method('delete')
                                    @csrf
                                    <button type="button" id="opentAlert1" class="opentAlert text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-lg w-full sm:w-auto px-5 py-1.5 mx-1 text-center dark:bg-red-750 dark:hover:bg-red-800 dark:focus:ring-red-900"><i class="fi fi-rs-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                    {{-- Data Display 2 --}}
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        2
                        </th>
                        <td class="px-10 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            Display 2
                        </td>
                        <td class="px-10 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            T96hnlH
                        </td>
                        <td class="px-10 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <p id="statusdisable2" class="">Disable</p>
                            <p id="statusactive2" class="hidden">Active</p>
                        </td>
                        <td class="px-10 py-4 flex flex-auto">
                            <a href="#" id="disable2" class="mx-1 inline-flex items-end px-3 py-2 text-sm font-medium text-center text-white bg-reed-700 rounded-lg bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-750 dark:hover:bg-red-800 dark:focus:ring-red-900">
                                <i class="fi fi-br-cross"></i>
                            </a>
                            <a href="#" id="active2" class="hidden mx-1 inline-flex items-end px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                <i class="fi fi-br-check"></i>
                            </a>
                        
                            <form action="" method="post" class="d-inline">
                                    @method('delete')
                                    @csrf
                                    <button type="button" id="opentAlert2" class="opentAlert text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-lg w-full sm:w-auto px-5 py-1.5 mx-1 text-center dark:bg-red-750 dark:hover:bg-red-800 dark:focus:ring-red-900"><i class="fi fi-rs-trash"></i></button>
                            </form>
                        </td>
                    </tr>

            </tbody>
        </table>
    </div>
</div>


{{-- Alert --}}
<div tabindex="-1" class="alertDel hidden h-screen w-screen bg-slate-600 fixed top-0 left-0 right-0 z-50 bg-opacity-60 p-1 flex">
    <div class="h-1/3 w-1/3 bg-slate-700 rounded-lg mx-auto my-auto flex overflow-auto scrollbar-hide">
   
        <div class="p-5 text-center mx-auto my-auto">
            
            <i class="fi fi-rr-exclamation text-7xl text-white"></i>
            <h3 class="my-8 text-3xl  font-semibold text-white dark:text-white">Display Service ini akan di hapus</h3>
            
            <button id="closeAlert" type="button" class=" text-gray-500 bg-white hover:bg-gray-100 
            focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium w-1/4 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-red-600  dark:text-gray-300 dark:border-red-700 dark:hover:text-white dark:hover:bg-red-700  dark:focus:ring-red-700 
            mr-5">Ya</button>
    
            <button  type="button" class="closeAlert text-gray-500 bg-white hover:bg-gray-100 
            focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium w-1/4 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600
             ml-5">Cancel</button>
        </div>
    </div>
</div>


<script>

//modal drawer alert delete
    const alertDel = document.querySelector('.alertDel');

    const opentAlert1 = document.getElementById('opentAlert1');
    const opentAlert2 = document.getElementById('opentAlert2');
    const closeAlert = document.querySelector('.closeAlert');
    const closeAlert1 = document.getElementById('closeAlert');

    opentAlert1.addEventListener('click', function(){
        alertDel.classList.remove('hidden')
    })
    
    opentAlert2.addEventListener('click', function(){
        alertDel.classList.remove('hidden')
    })
    closeAlert.addEventListener('click', function(){
        alertDel.classList.add('hidden')
    })
    closeAlert1.addEventListener('click', function(){
        alertDel.classList.add('hidden')
    })
//modal drawer alert delete

//modal drawer status 
    const statusdisable1 = document.getElementById('statusdisable1');
    const statusactive1 = document.getElementById('statusactive1');
    const disable1 = document.getElementById('disable1');
    const active1 = document.getElementById('active1');


    active1.addEventListener('click', function(){
        disable1.classList.remove('hidden')
        statusdisable1.classList.remove('hidden')

        active1.classList.add('hidden')
        statusactive1.classList.add('hidden')
    })

    disable1.addEventListener('click', function(){
        disable1.classList.add('hidden')
        statusdisable1.classList.add('hidden')

        active1.classList.remove('hidden')
        statusactive1.classList.remove('hidden')
    })

    const statusdisable2 = document.getElementById('statusdisable2');
    const statusactive2 = document.getElementById('statusactive2');
    const disable2 = document.getElementById('disable2');
    const active2 = document.getElementById('active2');

    active2.addEventListener('click', function(){
        disable2.classList.remove('hidden')
        statusdisable2.classList.remove('hidden')

        active2.classList.add('hidden')
        statusactive2.classList.add('hidden')
    })

    disable2.addEventListener('click', function(){
        disable2.classList.add('hidden')
        statusdisable2.classList.add('hidden')

        active2.classList.remove('hidden')
        statusactive2.classList.remove('hidden')
    })
//modal drawer status 
</script>

@endsection