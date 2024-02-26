<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- Tailwind CSS -->
    @vite('resources/css/app.css')

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="bg-[#E5E5E5]">

    
    <div class="md:flex">
        
        <!-- Navbar -->
        @include('layouts.navbar')
        
        <div class="container flex flex-col p-5 md:ml-[35vh]">

            <div class="">
                <div class="title font-bold text-3xl border-b-2 border-[#ABABAB] p-3">
                    <h1>LIST TUGAS</h1>
                </div>
                <div class="card-container">
                    <a href="">
                    <div class="grid grid-cols-1 gap-4 ">
                        <div class="bg-[#f5f5f5] border border-[#ABABAB] flex items-center gap-2 px-2 rounded-xl mt-5">
                            <div class="flex items-center gap-2">

                            <div class="card-tugas h-[5rem] flex items-center">
                                    <div class="img bg-[#F5F5F5] text-[#4747f3] rounded-full flex justify-center items-center p-2 text-xl w-fit">
                                        <i class="fa-solid fa-book"></i>
                                    </div>
                            </div>
                            <div class="">
                                <div class="flex text-lg font-bold items-center gap-2">
                                    <h1 class=""> - </h1>
                                    <h2 class=""></h2>
                                </div>
                                <small>Dateline :</small>
                            </div>
                        </div>

                        <div class="flex items-center gap-2 font-bold ml-auto mr-3">
                            <span class="text-[#4747f3]">
                                <i class="fa-solid fa-user"></i>
                            </span>
                            <h1>0 / 30</h1>
                        </div>

                        </div>
                    </div>
                </a>
                </div>
            </div>
        </div>
    </div>

    @vite('resources/js/app.js')

    <script src="{{ asset('js/script.js') }}">
    </script>
</body>
</html>
