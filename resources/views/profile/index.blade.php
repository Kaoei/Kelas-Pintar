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

            <div class="imgProfile flex ju  stify-center flex-col items-center mb-2">
                <img src="{{ asset('img/user.jpg') }}" class="rounded-full w-24" alt="">
                <div class="text">
                    <h1 class="font-bold text-2xl">{{ auth()->user()->nama }}</h1>
                </div>
            </div>

            <div class="border-t-2 border-b-2 border-[#ABABAB] p-2">
                <div class="text-center mb-3">
                    <h1 class="font-semibold text-xl p-2">Lengkapi Datamu!</h1>
                </div>
                <form method="POST" action="/profile" class="flex flex-col justify-center items-center">
                    @csrf
                    <div class="form flex md:gap-24 justify-center md:flex-row flex-col">

                        <div class="sec1">

                            <div class="mb-3 flex flex-col">
                                <label for="nama">Nama lengkap :</label>
                                <input type="hidden" name="user_id" value="{{ auth()->user()->id }}" id="">
                                <input type="text" name="nama"
                                    class="border border-[#ABABAB] rounded-lg py-1 w-80 md:w-96" id="nama">
                            </div>
                            <div class="mb-3 flex flex-col">
                                <label for="umur">umur :</label>
                                <input type="text" name="umur"
                                    class="border border-[#ABABAB] rounded-lg py-1 w-80 md:w-96" id="umur">
                            </div>

                            <div class="mb-3 flex flex-col">
                                <label for="jenis_kelamin">Jenis Kelamin :</label>
                                <select name="jenis_kelamin" id="jenis_kelamin"
                                    class="border border-[#ABABAB] rounded-lg py-1.5 w-80 md:w-96">
                                    <option value="laki-laki">Laki - Laki</option>
                                    <option value="perempuan">Perempuan</option>
                                </select>
                            </div>

                            <div class="mb-3 flex flex-col">
                                <label for="tgl_lahir">Tanggal Lahir :</label>
                                <input type="date" name="tgl_lahir"
                                    class="border border-[#ABABAB] rounded-lg py-1 px-2 w-80 md:w-96" id="tgl_lahir">
                            </div>

                            <div class="mb-3 flex flex-col">
                                <label for="tempat_lahir">Tempat lahir :</label>
                                <input type="text" name="tempat_lahir"
                                    class="border border-[#ABABAB] rounded-lg py-1 w-80 md:w-96" id="tempat_lahir">
                            </div>



                        </div>


                        <div class="sec2">

                            <div class="mb-3 flex flex-col">
                                <label for="email">Email :</label>
                                <input type="text" name="email"
                                    class="border border-[#ABABAB] rounded-lg py-1 w-80 md:w-96" id="email">
                            </div>


                            <div class="mb-3 flex flex-col">
                                <label for="no_telp">Nomor Telepon :</label>
                                <input type="text" name="no_telp"
                                    class="border border-[#ABABAB] rounded-lg py-1 w-80 md:w-96" id="no_telp">
                            </div>

                            <div class="mb-3 flex flex-col">
                                <label for="nisn">NISN :</label>
                                <input type="text" name="nisn"
                                    class="border border-[#ABABAB] rounded-lg py-1 w-80 md:w-96" id="nisn">
                            </div>

                            <div class="mb-3 flex flex-col">
                                <label for="kelas">Kelas :</label>
                                <input type="text" name="kelas"
                                    class="border border-[#ABABAB] rounded-lg py-1 w-80 md:w-96" id="kelas">
                            </div>


                        </div>
                    </div>

                    <div class="buttom mt-5">
                        <button class="bg-[#4747F3] w-64 rounded-md text-white text-lg py-1 px-2">Simpan</button>
                    </div>

                </form>


            </div>

            <div class="formLogout flex justify-center mt-5">
                <form action="/logout" method="POST" class="flex">
                    @csrf
                    <button class="bg-red-700 text-white py-1.5 w-96">LOG OUT</button>
                </form>
            </div>

        </div>

    </div>


    @vite('resources/js/app.js')
</body>

</html>
