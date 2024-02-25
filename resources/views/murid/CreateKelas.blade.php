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

        <div class="container flex flex-col pt-5 px-5 pb-0 md:ml-[35vh]">
            @include('layouts.userprofile')


            <div class="container-form bg-[#F5F5F5] p-3">
                <div class="judul flex items-center gap-2 p-2 border-b-4 border[#ABABAB]">
                    <span class="text-[#4747f3] text-4xl"><i class="fa-solid fa-chalkboard-user"></i></span>
                    <h1 class="font-bold text-2xl" >Buat Kelas</h1>
                </div>
                <div class="form p-3">
                    <form action="" class="w-full flex justify-center flex-col items-center">
                        <div class="form-group flex flex-col mb-3">
                            <label for="nama_kelas">Nama Kelas :</label>
                            <input type="text" name="nama_kelas" class="border border-[#ABABAB] rounded-lg py-1 w-80 md:w-96" id="nama_kelas">
                        </div>
                        <div class="form-group flex flex-col mb-3">
                            <label for="nama_kelas">Sub judul :</label>
                            <input type="text" name="nama_kelas" class="border border-[#ABABAB] rounded-lg py-1 w-80 md:w-96" id="nama_kelas">
                        </div>
                        <div class="form-group flex flex-col mb-3">
                            <label for="nama_kelas">Kelas :</label>
                            <input type="text" name="nama_kelas" class="border border-[#ABABAB] rounded-lg py-1 w-80 md:w-96" id="nama_kelas">
                        </div>
                        
                        <div class="form-group flex flex-col mb-3">
                            <label for="nama_kelas">Jadwal :</label>
                            <select type="text" name="" class="border border-[#ABABAB] rounded-lg py-1 w-80 md:w-96" id="nama_kelas">
                                <option value="">Senin</option>
                                <option value="">Selasa</option>
                                <option value="">Rabu</option>
                                <option value="">Kamis</option>
                                <option value="">Jumat</option>
                            </select>
                        </div>

                        <div class="form-group flex flex-col mb-3">
                            <label for="nama_kelas">Mulai Pembelajaran :</label>
                            <input type="time" name="nama_kelas" class="border border-[#ABABAB] rounded-lg py-1 w-80 md:w-96" id="nama_kelas">
                        </div>

                        <div class="form-group flex flex-col mb-3">
                            <label for="nama_kelas">Akhir :</label>
                            <input type="time" name="nama_kelas" class="border border-[#ABABAB] rounded-lg py-1 w-80 md:w-96" id="nama_kelas">
                        </div>
                            
                            <div class="btn">
                                <button type="submit" class="bg-[#4747F3] text-white px-4 py-2 rounded-md">Submit</button>
                            </div>
                    </form>


                </div>

            </div>
        </div>
    </div>   
            @vite('resources/js/app.js')

</body>

</html>
