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

        <div class="container flex flex-col pt-5 gap-5 px-5 pb-0 md:ml-[35vh]">
            @include('layouts.userprofile')

            <div class="container-banner bg-[#4747F3] text-white font-bold pt-5 px-5 pb-2 h-[10rem] rounded-xl flex justify-end flex-col">
                <div class="text">
                    <h1 class="text-xl md:text-3xl">Matematika Kelas A</h1>
                    <h1 class="text-base md:text-lg font-normal">Judul tugas baru di post</h1>
                </div>
            </div>

            <div class="container-tambah-tugas  rounded-t-xl  pb-5 cursor-pointer">

                <div class="bg-[#f5f5f5] border border-[#ABABAB] flex  items-center gap-2 px-2 rounded-t-xl" id="tambahTugas">
                    <div class="card-tugas h-[5rem] flex items-center">
                        <div class="img bg-[#F5F5F5] text-[#4747f3] rounded-full flex justify-center items-center p-2 text-xl w-fit">
                            <img src="{{ asset('img/user.jpg') }}" class="w-10 rounded-full" alt="">
                        </div>
                    </div>

                    <div class="">
                        <div class="flex text-lg text-[#4747F3] font-bold items-center gap-2">
                            <h1 class="">Tambah tugas</h1>
                        </div>
                    </div>
                </div>

                <form id="dropdownForm" action="" method="" class="hidden bg-[#f5f5f5] border border-t-0 border-[#ABABAB] rounded-b-xl px-4 py-2 mb-5">
                    <div class="form-group flex flex-col mb-2">
                        <label for="assignmentName">Judul Tugas:</label>
                        <input type="text" id="" class="border py-1 rounded-lg border-[#ABABAB] bg-[#F5F5F5]" name="assignmentName">
                    </div>
                    <div class="form-group flex flex-col">
                        <label for="assignmentName">Deskripsi Tugas:</label>
                        <textarea name="" class="border py-1 rounded-lg border-[#ABABAB] bg-[#F5F5F5] resize-none" id="" cols="15" rows="5"></textarea>
                    </div>
                    <div class="form-group flex flex-col">
                        <label for="deadline">Deadline:</label>
                        <input type="date" id="deadline" class="border py-1 rounded-lg px-3 border-[#ABABAB] bg-[#F5F5F5]" name="deadline">
                    </div>
                    <div class="btn flex mt-3 justify-center">
                        <button type="submit" class="bg-[#4747F3] text-white px-4 py-2 rounded-md">Submit</button>  
                    </div>
                </form>

                <div class="grid grid-cols-1 gap-4 ">
                    <div class="bg-[#f5f5f5] border border-[#ABABAB] flex items-center gap-2 px-2 rounded-xl mt-5">
                        <div class="card-tugas h-[5rem] flex items-center">
                            <a href="">
                                <div class="img bg-[#F5F5F5] text-[#4747f3] rounded-full flex justify-center items-center p-2 text-xl w-fit">
                                    <i class="fa-solid fa-book"></i>
                                </div>
                            </a>
                        </div>

                        <div class="">
                            <div class="flex text-lg font-bold items-center gap-2">
                                <h1 class="">Pak abdoel - </h1>
                                <h2 class="">Nama tugas</h2>
                            </div>
                            <small>Dateline : 12 - 02 - 023</small>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


    @vite('resources/js/app.js')

    <script src="{{ asset('js/dropdown.js') }}"></script>
</body>

</html>
