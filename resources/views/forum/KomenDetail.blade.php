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
        @include('layouts.navbar')
        
        <div class="container flex flex-col p-5 md:ml-[35vh]">

            <div class="userProfile ml-auto mb-3 md:block hidden">
                <img src="{{ asset('img/user.jpg') }}" class="rounded-full w-10" alt=""> 
            </div>

            <div class="Comment bg-[#f6f6f6] p-5 flex flex-col gap-5 rounded-t-2xl">

                <div class="flex flex-col gap-5 border-b-2 border-[#ABABAB] p-3">

                <div class="userSender flex items-center gap-3">
                    <div class="photoProfile">
                        <img src="{{ asset('img/user.jpg') }}" class="rounded-full w-8" alt="">
                    </div>
                    <div class="name">
                        <h1>John Doe</h1>
                    </div>
                </div>

                <div class="msgContainer">
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Saepe, ipsam architecto debitis minima distinctio tempora, exercitationem omnis mollitia optio a molestias asperiores totam officia aliquid ad praesentium fugiat nostrum nulla.</p>
                </div>

            </div>

            <div class="reply">
                <div class="btn flex justify-center">
                    <button class="text-[#4747F3] text-sm text-center">Lihat semua komentar</button>
                </div>

                {{-- foreach disini --}}
                <div class="mt-5">

                    <div class="userSender
                    flex items-center gap-3">
                    <div class="photoProfile">
                        <img src="{{ asset('img/user.jpg') }}" class="rounded-full md:w-8 w-24" alt="">
                    </div>
                    <div class="text-sm bg-[#E5E5E5] p-3 rounded-2xl">
                        <small>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam provident iste veritatis id quo ab voluptas dolorum eligendi exercitationem vel laborum asperiores mollitia, iusto natus distinctio perferendis explicabo nulla neque.</small>
                    </div>
                    
                </div>
                <div class="mt-5">

                    <div class="userSender
                    flex items-center gap-3">
                    <div class="photoProfile">
                        <img src="{{ asset('img/user.jpg') }}" class="rounded-full md:w-8 w-24" alt="">
                    </div>
                    <div class="text-sm bg-[#E5E5E5] p-3 rounded-2xl">
                        <small>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam provident iste veritatis id quo ab voluptas dolorum eligendi exercitationem vel laborum asperiores mollitia, iusto natus distinctio perferendis explicabo nulla neque.</small>
                    </div>
                    
                </div>
                {{-- end --}}
            </div>

            <div class="inputform mt-5">
                <form action="" class="flex gap-3 items-center">
                    <input type="text" placeholder="Komentar" class="w-[32rem]  md:w-full p-2 rounded-xl border-[#ababab] border">
                    <button class="text-[#4747F3] text-xl absolute right-16 md:right-20">
                        <i class="fa-solid fa-paper-plane"></i>
                    </button>
                </form>

            </div>
        
            
        </div>
    
    @vite('resources/js/app.js')

    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>