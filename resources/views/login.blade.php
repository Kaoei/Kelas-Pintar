<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    @vite('resources/css/app.css')
</head>
<body>
    <div class="block md:flex">
        <div class="bg-[#E5E5E5] h-screen w-full flex justify-center items-center">
            <div>
                <h1 class="text-center p-5 font-poppins font-bold text-3xl mb-3">Selamat Datang</h1>
                <form action="">
                    <label class="font-poppins" for="nama">Username</label><br>
                    <input class="my-2 h-8 w-full bg-white rounded-md" type="text" name="nama"><br>
                    <label for="nama">Password</label><br>
                    <input class="my-2 h-8 w-full bg-white rounded-md" type="text" name="password"><br>
                    <div class="flex justify-center">
                        <button class="mt-4 p-2 px-6 rounded-md bg-[#4747F3] font-poppins text-white font-bold" type="submit">LOGIN</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="bg-[#4747F3] h-screen w-full flex justify-center items-center">
            <div class="w-72 mb-1">
                <img src="{{ asset('img/logo.png') }} " alt="">
            </div>
        </div>
    </div>
    <!-- <h1>login</h1>
    <form action="/login" method="POST">
        @csrf
        <input type="text" name="nama">
        <input type="text" name="password">
        <button type="submit">kirim</button>
    </form> -->
</body>
</html>