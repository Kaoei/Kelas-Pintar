<div class="navBar md:w-[35vh] w-screen h-[3rem] md:h-[100vh] bg-[#4747F3] flex items-center flex-row md:flex-col  md:justify-start md:fixed gap-5 md:p-5 p-2">

    <div class="burgerMenu md:hidden flex  gap-3 md:flex-col-reverse items-center" id="burgerMenu">
        <div class="icon text-2xl md:text-3xl text-white">
            <i class="fa-solid fa-bars"></i>
        </div>
        <div class="logo w-12 mb-1">
            <img src="{{ asset('img/logo.png') }} " alt="">
        </div>
    </div>

    <div class="userProfile md:hidden block ml-auto">
        <a href="/profile">
            <img src="{{ asset('img/user.jpg') }}" class="rounded-full w-8" alt="">
        </a>
    </div>
    
    <div class="largerScreen md:block hidden">
        <div class="logo w-36 mb-12">
            <img src="{{ asset('img/logo.png') }} " alt="">
        </div>
        <div class="btn">
            <ul class="text-white text-center flex flex-col gap-12">
                <li class="font-bold text-xl flex  items-end  justify-center gap-2">
                    <span class="text-2xl"><i class="fa-solid fa-house"></i></span>
                    <a href="/murid">BERANDA</a>
                </li>
                <li class="font-medium text-white flex gap-2 justify-center items-center">
                    <span class="text-xl"><i class="fa-solid fa-chalkboard-user"></i></span>
                    <a href="">Kelas</a>
                </li>
                <li class="font-medium text-white flex gap-2 justify-center items-center">
                    <span class="text-xl"><i class="fa-solid fa-users"></i></span>
                    <a href="/forum">Forum</a>
                </li>
                <li class="font-medium">
                    <img src="" alt="">
                    <a href="">KELAS</a>
                </li>
                <li class="font-medium">
                    <img src="" alt="">
                    <a href="">KELAS</a>
                </li>
            </ul>
        </div>
    </div>


    
    <div class="MiniScreen  md:hidden absolute w-36 h-[50vh] bg-opacity-80 flex flex-col bg-[#4747F3]">
        <div class="btn">
            <ul class="text-white text-center flex flex-col gap-12">
                <li class="font-bold text-md flex items-end justify-center gap-2">
                    <span class="text-md"><i class="fa-solid fa-house"></i></span>
                    <a href="">BERANDA</a>
                </li>
                <li class="font-medium">
                    <img src="" alt="">
                    <a href="">Kelas</a>
                </li>
                <li class="font-medium">
                    <img src="" alt="">
                    <a href="">Forum</a>
                </li>
                <li class="font-medium">
                    <img src="" alt="">
                    <a href="">KELAS</a>
                </li>
                <li class="font-medium">
                    <img src="" alt="">
                    <a href="">KELAS</a>
                </li>
            </ul>
        </div>
    </div>
    </div>
