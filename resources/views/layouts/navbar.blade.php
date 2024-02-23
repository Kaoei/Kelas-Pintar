<div class="navBar md:w-[35vh] w-screen h-[3rem] md:h-[100vh] bg-[#4747F3] flex items-center flex-row md:flex-col  md:justify-center md:fixed  gap-5 md:p-5 p-2">

    <div class="burgerMenu md:hidden flex  gap-3 md:flex-col-reverse items-center" id="burgerMenu">
        <div class="icon text-2xl md:text-3xl text-white">
            <i class="fa-solid fa-bars"></i>
        </div>
        <div class="logo w-12 mb-1">
            <img src="{{ asset('img/logo.png') }} " alt="">
        </div>
    </div>

    <div class="userProfile md:hidden block">
        <img src="" class="rounded-full w-12" alt="">
    </div>
    
    <div class="largerScreen md:block hidden">
        <div class="logo w-36 mb-12">
            <img src="{{ asset('img/logo.png') }} " alt="">
        </div>
        <div class="btn">
            <ul class="text-white text-center flex flex-col gap-12">
                <li class="font-bold text-xl flex  items-end  justify-center gap-2">
                    <span class="text-2xl"><i class="fa-solid fa-house"></i></span>
                    <a href="">BERANDA</a>
                </li>
                <li class="font-medium">
                    <img src="" alt="">
                    <a href="">KELAS</a>
                </li>
                <li class="font-medium">
                    <img src="" alt="">
                    <a href="">KELAS</a>
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
                    <a href="">KELAS</a>
                </li>
                <li class="font-medium">
                    <img src="" alt="">
                    <a href="">KELAS</a>
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
