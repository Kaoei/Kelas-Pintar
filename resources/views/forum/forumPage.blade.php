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
        <div class="bg-black flex md:items-center items-center justify-center">
            <div id="overlay" class="fixed top-0 left-0 w-full h-full bg-black opacity-0 transition-opacity duration-300 z-50 pointer-events-none"></div>
            <!-- Modal -->
            <div class="modal absolute z-50 bg-[#F5F5F5] p-5 flex-col gap-5 w-[20rem] md:w-[32rem] rounded-xl border border-[#ababab] hidden md:right-72 bottom-72 md:bottom-auto">
                <span class="text-3xl md:text-4xl -mt-3 md:-mt-4 absolute flex ml-[16rem] md:ml-[27.5rem] text-[#4747F3]" id="close-modal">
                    <i class="fa-solid fa-xmark"></i>
                </span>
                <h1 class="text-black font-medium">Pesan Highlight :</h1>
                <form action="" class="flex flex-col justify-center gap-5   ">
                    <textarea id="highlight-message" cols="15" rows="5" class="border-2 border-[#ababab rounded-xl]" style="resize: none" placeholder="Max 200 characters"></textarea>
                    <button id="post-highlight" class="text-white bg-[#4747F3] text-md p-2">POST</button>
                </form>
            </div>
        </div>
        
        <!-- Navbar -->
        @include('layouts.navbar')
        
        <div class="container flex flex-col p-5 md:ml-[35vh]">

            <div class="userProfile ml-auto mb-3 md:block hidden">
                <img src="{{ asset('img/user.jpg') }}" class="rounded-full w-10" alt=""> 
            </div>
            <!-- Chat Highlight -->
            <div class="highlightMsg">
                <div class="relative">
                    <div class="overflow-hidden">
                        <div class="flex chat-container gap-x-4">
                            <!-- Chat Box -->
                            <div class="chatbox bg-[#F6F6F6] flex flex-col p-5 gap-5 w-72 rounded-xl border border-[#ABABAB]">
                                <div class="user flex items-center gap-2">
                                    <div class="photoProfile">
                                        <img src="{{ asset('img/user.jpg') }}" class="rounded-full w-8" alt="">
                                    </div>
                                    <div class="name">
                                        <h1>John Doe</h1>
                                    </div>
                                </div>
                                <div class="msg">
                                    <div class="msgContent text-sm">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.</p>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                    <button id="prevBtn" class="prev absolute top-1/2 left-4 transform -translate-y-1/2 bg-gray-700 bg-opacity-30 text-white px-4 py-2 rounded"><</button>
                    <button id="nextBtn" class="next absolute top-1/2 right-4 transform -translate-y-1/2 bg-opacity-30 bg-gray-700 text-white px-4 py-2 rounded">></button>
                </div>
            </div>

            <div class="InputQuestion bg-[#F6F6F6]  p-3 mt-5 rounded-xl">
                <div class="flex">
                    <div class="profile">
                        <img src="{{ asset('img/user.jpg') }}" class="rounded-full w-10" alt="">
                    </div>
                    <div class="inputform">
                        <form action="" class="flex gap-3">
                            <input type="text" placeholder="Tulis pertanyaanmu disini" class="w-[16rem] md:w-[55rem] p-2 rounded-xl border-[#ababab] border">
                            <button class="text-[#4747F3] text-2xl md:text-3xl">
                                <i class="fa-solid fa-paper-plane"></i>
                            </button>
                        </form>
                    </div>
                </div>
                <button id="open-modal" class="text-white bg-[#4747F3] p-2 rounded-xl text-sm mt-3"><span><i class="fa-solid fa-plus"></i></span> Pesan Highlight</button>
            </div>

            <!-- Forum Chat -->
            <div class="forumChat bg-[#f6f6f6] flex flex-col p-5 gap-5 rounded-2xl mt-10 mb-10">
                <!-- Forum Chat Content -->
                <div class="border-b-2 border-[#ababab]">
                    <div class="userSend flex items-center gap-3">
                        <div class="pp">
                            <img src="{{ asset('img/user.jpg') }}" class="rounded-full w-8" alt="">
                        </div>
                        <div class="username">
                            <h1>John Doe</h1>
                        </div>
                        <div class="time text-[#ababab]">
                            <small>12.00 am</small>
                        </div>
                    </div>
                    <div class="msgContent p-5">
                        <p>
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sequi voluptas quod consequuntur, iste assumenda impedit obcaecati
                        </p>
                    </div>
                </div>

                <!-- Comments Section -->
                <div class="comments flex items-center gap-5 p-3">
                    <div class="usersender">
                        <div class="pp">
                            <img src="{{ asset('img/user.jpg') }}" class="rounded-full w-12" alt="">
                        </div>
                    </div>
                    <div class="inputform">
                        <form action="" class="flex gap-3 items-center">
                            <input type="text" placeholder="Komentar" class="w-[15rem]  md:w-[55rem] p-2 rounded-xl border-[#ababab] border">
                            <button class="text-[#4747F3] text-xl absolute right-16">
                                <i class="fa-solid fa-paper-plane"></i>
                            </button>
                        </form>
                    </div>
                </div>
                
                <a href="" class="text-center text-sm text-[#4747F3]">Lihat Semua Komentar</a>
            </div>
        </div>
    </div>

    @vite('resources/js/app.js')

    <script src="{{ asset('js/script.js') }}">
    </script>
</body>
</html>
