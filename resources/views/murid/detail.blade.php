<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body class="block md:flex">
    @include('layouts.navbar')
    <div class="p-5 flex justify-center md:justify-end md:w-full md:h-screen">
        <div class="md:absolute">
            <img src="{{ asset('img/user.jpg') }}" class="hidden md:block rounded-full w-10" alt="">
        </div>
        <div class="w-full md:w-4/5">
            <div>
                <h1 class="text-2xl font-bold text-[#4747F3] ml-2 font-poppins mt-10 md:mt-20">Murid Yang sudah mengerjakan</h1>
                <div class="border-b-2 border-black my-4"></div>
                <div class="w-full bg-gray-200 rounded-md p-2 flex justify-between">
                    <div class="flex items-center gap-5">
                        <img class="rounded-full bg-gray-100 w-10" src="{{ asset('img/user.jpg') }}">
                        <h1>Nama akun</h1>
                    </div>

                    <div class="flex items-center gap-5">
                        <h1>0/100</h1>
                    </div>
                </div>
            </div>

            <div>
                <h1 class="text-2xl font-bold text-[#4747F3] ml-2 font-poppins mt-10">Murid Yang belum mengerjakan</h1>
                <div class="border-b-2 border-black my-4"></div>
                <div class="w-full bg-gray-200 rounded-md p-2 flex justify-between">
                    <div class="flex items-center gap-5">
                        <img class="rounded-full bg-gray-100 w-10" src="{{ asset('img/user.jpg') }}">
                        <h1>Nama akun</h1>
                    </div>

                    <div class="flex items-center gap-5">
                        <h1>0/100</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>