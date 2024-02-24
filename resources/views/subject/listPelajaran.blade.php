<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    @vite('resources/css/app.css')

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="bg-[#E5E5E5]">

    <div class="md:flex">

        <!-- Navbar -->
        @include('layouts.navbar')

        <div class="container flex flex-col p-5 md:ml-[35vh]">

            <div class="userProfile ml-auto mb-3 md:block hidden">
                <img src="{{ asset('img/user.jpg') }}" class="rounded-full w-10" alt="">
            </div>

            <div class="flex justify-center md:flex-row">

            <div class="grid grid-cols-2 md:grid-cols-3  gap-5">
                <!-- Card 1 -->
                <div class="card bg-[#f5f5f5] border border-[#ABABAB] rounded-xl relative">
                    <a href="#">
                        <div>
                            <img src="{{ asset('img/mtk.jpg') }}" class="w-80 rounded-t-xl" alt="">
                        </div>
                        <div class="detail flex flex-col gap-2 p-1.5">
                            <div class="subject">
                                <h1 class="font-bold  text-xl md:text-3xl">Matematika</h1>
                                <h1 class="font-medium text-sm">Pak Abdoel</h1>
                            </div>
                            <div class="text-xs flex gap-2 items-center">
                                <span><i class="fa-solid fa-calendar-days"></i></span>
                                <p>Senin, Rabu, Kamis</p>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Card 1 -->
                <div class="card bg-[#f5f5f5] border border-[#ABABAB] rounded-xl relative">
                    <a href="#">
                        <div>
                            <img src="{{ asset('img/bi.jpeg') }}" class="w-80 rounded-t-xl" alt="">
                        </div>
                        <div class="detail flex flex-col gap-2 p-1.5">
                            <div class="subject">
                                <h1 class="font-bold text-xl md:text-3xl">Matematika</h1>
                                <h1 class="font-medium text-sm">Pak Abdoel</h1>
                            </div>
                            <div class="text-xs flex gap-2 items-center">
                                <span><i class="fa-solid fa-calendar-days"></i></span>
                                <p>Senin, Rabu, Kamis</p>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Card 2 ips -->
                <div class="card bg-[#f5f5f5] border border-[#ABABAB] rounded-xl relative">
                    <a href="#">
                        <div>
                            <img src="{{ asset('img/ips.png') }}" class="w-80 rounded-t-xl" alt="">
                        </div>
                        <div class="detail flex flex-col gap-2 p-1.5">
                            <div class="subject">
                                <h1 class="font-bold text-xl md:text-3xl">Matematika</h1>
                                <h1 class="font-medium text-sm">Pak Abdoel</h1>
                            </div>
                            <div class="text-xs flex gap-2 items-center">
                                <span><i class="fa-solid fa-calendar-days"></i></span>
                                <p>Senin, Rabu, Kamis</p>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Card 2 ips -->
                <div class="card bg-[#f5f5f5] border border-[#ABABAB] rounded-xl relative">
                    <a href="#">
                        <div>
                            <img src="{{ asset('img/ipa.jpeg') }}" class="w-80 rounded-t-xl" alt="">
                        </div>
                        <div class="detail flex flex-col gap-2 p-1.5">
                            <div class="subject">
                                <h1 class="font-bold text-xl md:text-3xl">Matematika</h1>
                                <h1 class="font-medium text-sm">Pak Abdoel</h1>
                            </div>
                            <div class="text-xs flex gap-2 items-center">
                                <span><i class="fa-solid fa-calendar-days"></i></span>
                                <p>Senin, Rabu, Kamis</p>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Card 2 ips -->
                <div class="card bg-[#f5f5f5] border border-[#ABABAB] rounded-xl relative">
                    <a href="#">
                        <div class="">
                            <img src="{{ asset('img/fisika.jpg') }}" class="w-80 rounded-t-xl" alt="">
                        </div>
                        <div class="detail flex flex-col gap-2 p-1.5">
                            <div class="subject">
                                <h1 class="font-bold text-xl md:text-3xl">Matematika</h1>
                                <h1 class="font-medium text-sm">Pak Abdoel</h1>
                            </div>
                            <div class="text-xs flex gap-2 items-center">
                                <span><i class="fa-solid fa-calendar-days"></i></span>
                                <p>Senin, Rabu, Kamis</p>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Card 2 ips -->
                <div class="card bg-[#f5f5f5] border border-[#ABABAB] rounded-xl relative">
                    <a href="#">
                        <div>
                            <img src="{{ asset('img/eng.jpg') }}" class="w-80 rounded-t-xl" alt="">
                        </div>
                        <div class="detail flex flex-col gap-2 p-1.5">
                            <div class="subject">
                                <h1 class="font-bold text-xl md:text-3xl">Matematika</h1>
                                <h1 class="font-medium text-sm">Pak Abdoel</h1>
                            </div>
                            <div class="text-xs flex gap-2 items-center">
                                <span><i class="fa-solid fa-calendar-days"></i></span>
                                <p>Senin, Rabu, Kamis</p>
                            </div>
                        </div>
                    </a>
                </div>


            </div>
            <!-- End Grid Container -->
        </div>

        </div>
    </div>

    @vite('resources/js/app.js')

</body>

</html>
