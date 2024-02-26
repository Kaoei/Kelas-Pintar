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
        <!-- Modal -->
        <div id="modal"
            class="fixed hidden top-0 left-0 w-full h-full bg-black bg-opacity-50 flex justify-center items-center">
            <div class="bg-white p-8 rounded-lg">
                <h2 class="text-xl font-bold mb-4">Pesan Highlight :</h2>
                <form>
                    <div class="mb-4">
                        <label for="forum" class="block text-gray-700">Forum:</label>
                        <textarea id="forum" name="forum" placeholder="Max 200 character" class="rounded-md resize-none  px-4 py-2 w-full border border-[#ABABAB]" required cols="60" rows="5"></textarea>
                    </div>
                    <div class="flex justify-end">
                        <button id="submitNilaiButton"
                            class="bg-[#4747F3] text-white px-4 py-2 rounded-md">Submit</button>
                        <button id="cancelButton" type="button"
                            class="bg-gray-300 text-gray-700 px-4 py-2 rounded-md ml-2">Cancel</button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Navbar -->
        @include('layouts.navbar')

        <div class="container flex flex-col p-5 md:ml-[35vh]">
            @include('layouts.userprofile')
            <!-- Chat Highlight -->
            <div class="highlightMsg p-5 mt-5 mb-5">
                <div class="relative">
                    <div class="overflow-hidden">
                        <div class="flex chat-container gap-x-4">
                            <!-- Chat Box -->
                            @foreach ($result as $d)
                                <div
                                    class="chatbox bg-[#F6F6F6] flex flex-col p-5 gap-5 w-72 rounded-xl border border-[#ABABAB]">
                                    <div class="user flex items-center gap-2">
                                        <div class="photoProfile">
                                            <img src="{{ asset('img/user.jpg') }}" class="rounded-full w-8"
                                                alt="">
                                        </div>
                                        <div class="name">
                                            <h1>{{ $d->user }}</h1>
                                        </div>
                                    </div>
                                    <div class="msg">
                                        <div class="msgContent text-sm">
                                            <p>{{ $d->forum }}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                    <button id="prevBtn"
                        class="prev absolute top-1/2 left-4 transform -translate-y-1/2 bg-gray-700 bg-opacity-30 text-white px-4 py-2 rounded">
                        < </button>
                            <button id="nextBtn"
                                class="next absolute top-1/2 right-4 transform -translate-y-1/2 bg-opacity-30 bg-gray-700 text-white px-4 py-2 rounded">></button>
                </div>
            </div>

            <div class="InputQuestion bg-[#F6F6F6]  p-3 mt-5 rounded-xl">
                <div class="flex">
                    <div class="profile">
                        <img src="{{ asset('img/user.jpg') }}" class="rounded-full w-10" alt="">
                    </div>
                    <div class="inputform">
                        <form action="{{ route('createChat') }}" method="POST" class="flex gap-3">
                            @csrf
                            @method('POST')
                            <input type="hidden" name="user" value="{{ $user->nama }}">
                            <input type="text" placeholder="Tulis pertanyaanmu disini"
                                class="w-[16rem] md:w-[55rem] p-2 rounded-xl border-[#ababab] border" name="forum">
                            <button type="submit" class="text-[#4747F3] text-2xl md:text-3xl">
                                <i class="fa-solid fa-paper-plane"></i>
                            </button>
                        </form>
                    </div>
                </div>
                <button id="open-modal" class="text-white bg-[#4747F3] p-2 rounded-xl text-sm mt-3"><span><i
                            class="fa-solid fa-plus"></i></span> Pesan Highlight</button>
            </div>

            <!-- Forum Chat -->
            @foreach ($result as $d)
                <div class="forumChat bg-[#f6f6f6] flex flex-col p-5 gap-5 rounded-2xl mt-10 mb-10">
                    <!-- Forum Chat Content -->
                    <div class="border-b-2 border-[#ababab]">
                        <div class="userSend flex items-center gap-3">
                            <div class="pp">
                                <img src="{{ asset('img/user.jpg') }}" class="rounded-full w-8" alt="">
                            </div>
                            <div class="username">
                                <h1>{{ $d->user }}</h1>
                            </div>
                            <div class="time text-[#ababab]">
                                <small>{{ $d->created_at }}</small>
                            </div>
                        </div>
                        <div class="msgContent p-5">
                            <p>
                                {{ $d->forum }}
                            </p>
                        </div>
                    </div>

                    <!-- Replies -->
                    @if (isset($comments[$d->id_chat]))
                        @foreach ($comments[$d->id_chat] as $m)
                            <div class="flex gap-5">
                                <div class="pp">
                                    <img src="{{ asset('img/user.jpg') }}" class="rounded-full w-8" alt="">
                                </div>

                                <div>
                                    <div class="flex gap-5">
                                        <div class="username">
                                            <h1>{{ $m->user }}</h1>
                                        </div>
                                        <div class="time text-[#ababab]">
                                            <small>{{ $m->created_at }}</small>
                                        </div>
                                    </div>

                                    <div class="msgContent pt-1">
                                        <p>
                                            {{ $m->message }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif

                    <!-- Comments Section -->
                    <div class="comments flex items-center gap-5 p-3">
                        <div class="usersender">
                            <div class="pp">
                                <img src="{{ asset('img/user.jpg') }}" class="rounded-full w-12" alt="">
                            </div>
                        </div>
                        <div class="inputform">
                            <form action="{{ route('message') }}" method="POST" class="flex gap-3 items-center">
                                @csrf
                                @method('POST')
                                <input type="hidden" name="id_forum" value="{{ $d->id_chat }}">
                                <input type="hidden" name="user" value="{{ $user->nama }}">
                                <input type="text" placeholder="Komentar"
                                    class="w-[15rem]  md:w-[55rem] p-2 rounded-xl border-[#ababab] border"
                                    name="message">
                                <button type="submit" class="text-[#4747F3] text-xl absolute right-16">
                                    <i class="fa-solid fa-paper-plane"></i>
                                </button>
                            </form>
                        </div>
                    </div>

                    <a href="" class="text-center text-sm text-[#4747F3]">Lihat Semua Komentar</a>
                </div>
            @endforeach
        </div>
    </div>

    @vite('resources/js/app.js')
    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>
