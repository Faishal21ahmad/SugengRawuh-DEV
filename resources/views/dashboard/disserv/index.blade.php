@extends('dashboard.layouts.main')
@section('containerDB')
<div class="p-4">
    <div class="ml-auto mr-10">
        <button type="button" class="inline-flex items-end px-7 py-3 m-1 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-blue-800">
            Tambah Display Service
        </button>
    </div>
</div>

<div class="container flex flex-wrap m-5">
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
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
                            Active
                        </td>
                        <td class="px-10 py-4 flex flex-auto">
                            <a href="#" class="mx-1 inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                <i class="fi fi-br-check"></i>
                            </a>
                            <form action="" method="post" class="d-inline">
                                    @method('delete')
                                    @csrf
                                    <button class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-lg w-full sm:w-auto px-5 py-1.5 mx-1 text-center dark:bg-red-750 dark:hover:bg-red-800 dark:focus:ring-red-900" onclick="return confirm('Konfirmasi, Display Service Akan Di Delete?')"><span data-feather="x-circle"></span><i class="fi fi-rs-trash"></i></button>
                            </form>
                        </td>
                    </tr>
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
                            Disable
                        </td>
                        <td class="px-10 py-4 flex flex-auto">
                            <a href="#" class="mx-1 inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-reed-700 rounded-lg bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-750 dark:hover:bg-red-800 dark:focus:ring-red-900">
                                <i class="fi fi-br-cross"></i>
                            </a>
                        
                            <form action="" method="post" class="d-inline">
                                    @method('delete')
                                    @csrf
                                    <button class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-lg w-full sm:w-auto px-5 py-1.5 mx-1 text-center dark:bg-red-750 dark:hover:bg-red-800 dark:focus:ring-red-900" onclick="return confirm('Konfirmasi, Display Service Akan Di Delete?')"><span data-feather="x-circle"></span><i class="fi fi-rs-trash"></i></button>
                            </form>
                        </td>
                    </tr>
            </tbody>
        </table>
    </div>
</div>



<script>
    //open close tambah modal
    const modal = document.querySelector('.modal');

    const kategori = document.querySelector('.kategori');
    const closeModal = document.querySelector('.closeModal');


    kategori.addEventListener('click', function(){
        modal.classList.remove('hidden')
    })

    closeModal.addEventListener('click', function(){
        modal.classList.add('hidden')
    })
    //open close tambah modal
</script>

@endsection