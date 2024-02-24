<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>

    @vite('resources/css/app.css')


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="bg-[#E5E5E5]">


    <div class="md:flex relative">
        @include('layouts.navbar')
        
        <div class="container mt-2 md:mt-auto md:mr-auto md:ml-[13.4rem] px-2 md:px-5 py-5 md:py-8 flex flex-col md:justify-around justify-center gap-6 ">
            
            <div class="banner md:w-[63rem] w-[23.5rem] md:h-[10rem] p-5 flex justify-end flex-col bg-[#4747F3] rounded-md">
                            <div class="container flex items-center justify-start flex-row-reverse gap-5">
                                <div class="userProfile mb-3 md:block hidden">
                                    <a href="/profile"><img src="{{ asset('img/user.jpg') }}" class="rounded-full w-10" alt=""></a>
                                </div>
                                <div class="user text-white md:block  hidden mb-3">
                                    <p>{{ auth()->user()->nama }}</p>
                                </div>
                            </div>
                <h1 class="text-white font-bold md:text-4xl text-xl">Selamat Datang,</h1>
                <h1 class="text-white font-medium md:text-xl text-xs">Lakukan yang terbaik di semua kesempatan yang kamu
                    miliki.</h1>
            </div>

            <div class="Absensi flex gap-3 flex-col">
                <div class="text">
                    <h1 class="font-bold text-base md:text-xl">Sudah absen ?</h1>
                </div>
                <form action="">
                    <button class="bg-[#4747F3] text-white font-medium text-sm md:text-xl p-1.5 flex gap-3 rounded-md w-24 md:w-32">
                        <span class="text-white"><i class="fa-solid fa-school"></i></span>
                        Absen
                    </button>
                </form>
            </div>

            <div class="pelajaran gap-3 flex flex-col">

                <div class="title">
                    <h1 class="font-bold md:text-xl">Mata pelajaran hari ini :</h1>
                </div>

                <div class="card-group flex ">

                    <div class="grid grid-cols-3 md:grid-cols-5 gap-6">

                        <div class="card bg-[#F5F5F5] w-28 md:w-44">
                            <div class="card-img">
                                <img src=" {{ asset('img/mtk.jpg') }} " alt="">
                            </div>
                            <div class="card-body flex flex-col px-1.5 md:px-3 py-2 gap-2">
                                <div class="">
                                    <h1 class="font-bold text-xs md:text-md">Matematika</h1>
                                    <h1 class="font-medium text-[9px] md:text-xs">Pak Abdoel</h1>
                                </div>
                                <h1 class="font-medium text-[8px] md:text-sm"><span><i class="fa-solid fa-clock"></i></span> Jam 08.00 - 09.00</h1>
                                <form action="" class="flex justify-center mt-2">
                                    <button class="bg-[#4747F3] text-white font-medium text-[9px] md:text-sm items-center justify-center p-1 md:p-1.5 flex gap-3 rounded-sm w-32">
                                        Masuk
                                    </button>
                                </form>
                            </div>
                        </div>


                    </div>


                </div>

            </div>

            <div class="pelajaran gap-3 flex flex-col">

                <div class="title">
                    <h1 class="font-bold md:text-xl">Mata pelajaran besok :</h1>
                </div>

                <div class="card-group flex ">

                    <div class="grid grid-cols-3 md:grid-cols-5 gap-6">

                        <div class="card bg-[#F5F5F5] w-28 md:w-44">
                            <div class="card-img">
                                <img src=" {{ asset('img/mtk.jpg') }} " alt="">
                            </div>
                            <div class="card-body flex flex-col px-1.5 md:px-3 py-2 gap-2">
                                <div class="">
                                    <h1 class="font-bold text-xs md:text-md">Matematika</h1>
                                    <h1 class="font-medium text-[9px] md:text-xs">Pak Abdoel</h1>
                                </div>
                                <h1 class="font-medium text-[8px] md:text-sm"><span><i class="fa-solid fa-clock"></i></span> Jam 08.00 - 09.00</h1>
                                <form action="" class="flex justify-center mt-2">
                                    <button class="bg-[#4747F3] text-white font-medium text-[9px] md:text-sm items-center justify-center p-1 md:p-1.5 flex gap-3 rounded-sm w-32">
                                        Masuk
                                    </button>
                                </form>
                            </div>
                        </div>


                    </div>


                </div>

            </div>

        </div>



    </div>

    @vite('resources/js/app.js')
</body>

</html>
