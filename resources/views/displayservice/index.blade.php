<!doctype html>
{{-- ganti tag html yang ata ketika menggunakan linux --}}
<html class="dark">
{{-- <html> --}}
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
    <title>Display Service</title>
</head>
<body class="font-roboto">
    <div class="h-screen w-screen relative rounded-xl overflow-auto p-28">
        <div class="my-10 grid grid-cols-2 gap-10  text-white text-sm text-center font-bold leading-6">
            {{-- Grid Atas --}}
            <div class="h-64 p-4 rounded-lg shadow-lg bg-sky-500 col-start-1 col-span-2 dark:bg-gray-800 flex">
                <div class="w-44 my-auto mx-10">
                    <img src="{{ asset('img/SR.png'); }}" alt="">
                </div>
                <div class="my-auto mx-auto">
                    <h1 class="text-7xl p-2">Selamat Datang</h1>
                    <p class="text-4xl p-2">Pilih Pemesanan Anda</p>
                </div>
            </div>
            {{-- Grid kiri --}}
            <a href="/dispservi/take" class="flex">
                <div class="h-96 w-full flex-auto p-10 rounded-lg shadow-lg bg-sky-500 col-start-1 col-end-1 dark:bg-gray-800">
                  
                    <p class="text-7xl my-32">TAKE AWAY</p>
                </div>
            </a>
            {{-- Grid Kanan --}}
            <a href="/dispservi/dine" class="flex">
                <div class="h-96 w-full flex-auto  p-10  rounded-lg shadow-lg bg-sky-500 col-start-2 col-end-2 dark:bg-gray-800">
                    <p class="text-7xl my-32">DINE IN</p>
                </div>
            </a>
        </div>
    </div>
</body>
</html>




