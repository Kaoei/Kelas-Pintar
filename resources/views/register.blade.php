<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrasi</title>

    @vite('resources/css/app.css')
</head>
<body>
    <div class="container flex md:flex-row flex-col-reverse">

        <div class="md:hidden flex justify-center items-center p-2">
            <p class="text-black text-xs">Copyright &copy; 2024 risoles</p>
        </div>

        <div class="sec1 bg-[#E5E5E5] md:w-[100vh] h-[90vh] md:h-screen flex justify-center items-center">
            <div class="form flex flex-col justify-center items-center gap-5">
                <h1 class="font-bold text-5xl">Silahkan Registasi !</h1>
                <form action="/register" method="POST" class="flex flex-col justify-center items-center gap-3">
                    @csrf
                    <div class="username flex-col flex mb-3 gap-2">
                        <label for="username" class="font-medium font-poppins">Username :</label>
                        <input type="text" name="nama" id="username" placeholder="Username" class="w-[22rem] py-2 px-2 rounded-lg">
                    </div>
                    <div class="umur flex-col flex mb-3 gap-2">
                        <label for="Umur" class="font-medium font-poppins">Umur :</label>
                        <input type="text" name="umur" id="Umur" placeholder="Umur" class="w-[22rem] py-2 px-2 rounded-lg">
                    </div>
                    <div class="role flex-col flex mb-3 gap-2">
                        <label for="Role" class="font-medium font-poppins">Role :</label>
                        <input type="text" name="role" id="Role" placeholder="role" class="w-[22rem] py-2 px-2 rounded-lg">
                    </div>
                    <div class="password flex flex-col mb-3 gap-2">
                        <label for="password">Password :</label>
                        <input type="password" name="password" id="password" class="w-[22rem] py-2 px-2 rounded-lg" placeholder="Password">
                    </div>
                    <div class="button">
                        <button class="text-white bg-[#4747F3] text-xl p-1.5 w-24 rounded-lg">Login</button>
                    </div>
                    <a href="/login" class="text-black">Sudah punya akun? <span class="text-[#4747F3]">klik disini</span></a>
                </form>
            </div>
        </div>

        <div class="sec2 bg-[#4747F3] md:w-[100vh] md:h-screen h-[4rem] flex md:justify-center md:px-auto px-5 items-center">
            <div class="img">
                <img src="{{ asset('img/logo.png') }}" alt="" class="md:w-72 w-24">
            </div>
        </div>
        
    </div>

</body>
</html>