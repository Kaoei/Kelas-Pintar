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
    
                <div class="sec1">
                    <div class="container-judul flex flex-col gap-8 border-b-2 border-[#ABABAB]">
                            <div class="butt">
                                <a href="">
                                    <span class="text-[#4747f3]"><i class="fa-solid fa-chevron-left"></i></span> BACK ?
                                </a>
                            </div>
                            
                        <div class="subject">
                            <h1 class="font-bold text-3xl">MATEMATIKA KELAS A</h1>
                            <p class="font-medium">Nama tugas</p>
                        </div>
                        <div class="tugas">
                            <h1 class="font-semibold text-xl">Nama tugas</h1>
                        </div>
                    </div>

                    <div class="tenggat absolute flex text-[10px] md:text-sm items-center gap-4 md:ml-[53rem] md:-mt-16 -mt-12 ml-[14rem]">
                        <h1 class="">Tenggat Waktu : 16/06/23</h1>
                    </div>

                    <div class="container-pesan py-5 text-sm">
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fuga officia at, amet nulla sapiente dolores nesciunt dignissimos voluptatum quidem expedita, ut et quod nam hic nemo alias cupiditate numquam doloribus.</p>
                    </div>
                </div>

            <div class="flex justify-center">

                    <div class="sec2 w-[24rem] md:w-[55rem] absolute bottom-0">
                    <div class="container-formsubmit bg-[#4747F3] rounded-t-2xl p-5">
                        <div class="nilai flex justify-between text-xl font-bold text-white mb-5 px-2">
                            <p>Status</p>
                            <p class="text-green-500">Sudah dikumpulkan</p>
                        </div>
                        <form id="nilaiForm" class="formsubmit flex flex-col justify-center">
                            <div class="mb-3">
                                <div class="w-full">
                                    <input type="file" id="file" name="" class="text-white " style="display: none;">
                                    <label for="file" class="text-[#4747f3] bg-white border w-full border-[#ABABAB] cursor-pointer font-bold rounded-xl p-2 flex gap-5 items-center">
                                        <span class="text-xl"><i class="fa-solid fa-arrow-up-from-bracket"></i></span> Upload Tugas</label>
                                </div>
                            </div>
                            <div class="btn flex justify-center">
                                <button id="nilaiButton" type="button" class="bg-white text-[#4747F3] font-medium p-2 rounded-md w-full">Nilai</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Modal -->
            <div id="modal" class=" fixed top-0 left-0 w-full h-full bg-black bg-opacity-50 flex justify-center items-center">
                <div class="bg-white p-8 rounded-lg">
                    <h2 class="text-xl font-bold mb-4">Input Nilai</h2>
                    <form>
                        <div class="mb-4">
                            <label for="nilai" class="block text-gray-700">Nilai:</label>
                            <input type="number" id="nilai" name="nilai" class="rounded-md border-gray-300 px-4 py-2 w-full border border-[#ABABAB]" required>
                        </div>
                        <div class="flex justify-end">
                            <button id="submitNilaiButton" class="bg-[#4747F3] text-white px-4 py-2 rounded-md">Submit</button>
                            <button id="cancelButton" type="button" class="bg-gray-300 text-gray-700 px-4 py-2 rounded-md ml-2">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        const nilaiButton = document.getElementById('nilaiButton');
        const modal = document.getElementById('modal');
        const cancelButton = document.getElementById('cancelButton');
        const submitNilaiButton = document.getElementById('submitNilaiButton');
        const nilaiForm = document.getElementById('nilaiForm');

        nilaiButton.addEventListener('click', () => {
            modal.classList.remove('hidden');
        });

        cancelButton.addEventListener('click', () => {
            modal.classList.add('hidden');
        });

        submitNilaiButton.addEventListener('click', () => {
            modal.classList.add('hidden');
            nilaiForm.submit(); 
        });
    </script>

    @vite('resources/js/app.js')

</body>

</html>
