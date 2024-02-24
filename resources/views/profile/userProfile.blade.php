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

    <div class="md:flex">
        @include('layouts.navbar')

        <div class="container flex flex-col p-5 md:ml-[35vh]">

            <div class="imgProfile flex justify-center flex-col items-center mb-2">
                <img src="{{ asset('img/user.jpg') }}" class="rounded-full w-24" alt="">
                <div class="text">
                    <h1 class="font-bold text-2xl">John Doe</h1>
                </div>
            </div>

            <div class="border-t-2 border-b-2 border-[#ABABAB] p-2">
                <div class="text-center mb-3">
                    <h1 class="font-semibold text-xl p-2">Lengkapi Datamu!</h1>
                </div>
                <form method="POST" action="" class="flex flex-col justify-center items-center">

                    <div class="form flex md:gap-24 justify-center md:flex-row flex-col">
                    
                        <div class="sec1">

                            <div class="mb-3 flex flex-col">
                                <label for="">Nama lengkap :</label>
                                <input type="text" name=""
                                    class="border border-[#ABABAB] rounded-lg py-1 w-80 md:w-96" id="">
                            </div>
                            <div class="mb-3 flex flex-col">
                                <label for="">Kelas :</label>
                                <input type="text" name=""
                                    class="border border-[#ABABAB] rounded-lg py-1 w-80 md:w-96" id="">
                            </div>
                            <div class="mb-3 flex flex-col">
                                <label for="">Nisn :</label>
                                <input type="text" name=""
                                    class="border border-[#ABABAB] rounded-lg py-1 w-80 md:w-96" id="">
                            </div>
                            <div class="mb-3 flex flex-col">
                                <label for="">Jenis Kelamin :</label>
                                <select name="" id=""
                                    class="border border-[#ABABAB] rounded-lg py-1.5 w-80 md:w-96">
                                    <option value="">Laki - Laki</option>
                                    <option value="">Perempuan</option>
                                </select>
                            </div>
                            <div class="mb-3 flex flex-col">
                                <label for="">Nomor Telepon :</label>
                                <input type="text" name=""
                                    class="border border-[#ABABAB] rounded-lg py-1 w-80 md:w-96" id="">
                            </div>

                        </div>


                        <div class="sec2">

                            <div class="mb-3 flex flex-col">
                                <label for="">Umur :</label>
                                <input type="text" name=""
                                    class="border border-[#ABABAB] rounded-lg py-1 w-80 md:w-96" id="">
                            </div>
                            <div class="mb-3 flex flex-col">
                                <label for="">Tanggal Lahir :</label>
                                <input type="date" name=""
                                    class="border border-[#ABABAB] rounded-lg py-1 px-2 w-80 md:w-96" id="">
                            </div>
                            <div class="mb-3 flex flex-col">
                                <label for="">Tempat lahir :</label>
                                <input type="text" name=""
                                    class="border border-[#ABABAB] rounded-lg py-1 w-80 md:w-96" id="">
                            </div>

                        </div>
                    </div>

                    <div class="buttom mt-5">
                        <button class="bg-[#4747F3] w-64 rounded-md text-white text-lg py-1 px-2">Simpan</button>
                    </div>

                </form>


            </div>

            <div class="formLogout flex justify-center mt-5">
                <form action="" class="flex">
                    <button class="bg-red-700 text-white py-1.5 w-96">LOG OUT</button>
                </form>
            </div>

        </div>

    </div>


    @vite('resources/js/app.js')
</body>

</html>
