<!doctype html>
{{-- ganti tag html yang ata ketika menggunakan linux --}}
<html class="dark">
{{-- <html> --}}
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-bold-rounded/css/uicons-bold-rounded.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-bold-straight/css/uicons-bold-straight.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-solid-rounded/css/uicons-solid-rounded.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-solid-straight/css/uicons-solid-straight.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-straight/css/uicons-regular-straight.css'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    
    @vite('resources/css/app.css')
    <title>Rawuh {{ $title }}</title>
</head>
<body class="font-roboto">
     
    @include('dashboard.layouts.sidebar')

    <div class="p-4 sm:ml-64">
        <div class="p-4 rounded-lg dark:border-gray-700">
            @include('dashboard.layouts.header')
            @yield('containerDB')
        </div>
    </div>


{{-- JS --}}
    <script src="https://unpkg.com/flowbite@1.5.5/dist/flowbite.js"></script>
    <script>
        const darkToggle = document.querySelector('#dark-toggle');
        const html = document.querySelector('html');
        darkToggle.addEventListener('click', function(){
            if (darkToggle.checked){
                html.classList.add('dark');
            }else{
                html.classList.remove('dark');
            }
        });
    </script>
</body>
</html>




