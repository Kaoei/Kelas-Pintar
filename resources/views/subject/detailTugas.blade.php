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
                                <a href="/kelas/{{ $tugas->kelas->id }}">
                                    <span class="text-[#4747f3]"><i class="fa-solid fa-chevron-left"></i></span> BACK ?
                                </a>
                            </div>
                            
                        <div class="subject">
                            <h1 class="font-bold text-3xl">{{ $tugas->Kelas->nama_kelas }}</h1>
                            <p class="font-medium">{{ $tugas->Kelas->nama_kelas }}</p>
                        </div>
                        <div class="tugas">
                            <h1 class="font-semibold text-xl">{{ $tugas->nama_tugas }}</h1>
                        </div>
                    </div>

                    <div class="tenggat absolute flex text-[10px] md:text-sm items-center gap-4 md:ml-[50rem] md:-mt-16 -mt-12 ml-[14rem]">
                        <h1 class="">Tenggat Waktu : {{ $tugas->tenggat_waktu }}</h1>
                    </div>

                    <div class="container-pesan py-5 text-sm">
                        <p>{{ $tugas->deskripsi_tugas }}</p>
                    </div>
                </div>

            <div class="flex justify-center">

                    <div class="sec2 w-[24rem] md:w-[55rem] absolute bottom-0">
                    <div class="container-formsubmit bg-[#4747F3] rounded-t-2xl p-5">
                        <div class="nilai flex justify-between text-xl font-bold text-white mb-5 px-2">
                            <p>Pengumpulan</p>
                            <p>Nilai : 0/100</p>
                        </div>
                        @if (auth()->user()->role === 'murid')
                        @if ($cek > 0)
                        <div class="mb-3">
                            <div class="w-full">
                                <P class="text-[#4747f3] bg-white border w-full border-[#ABABAB]  font-bold rounded-lg p-2 flex gap-5 items-center">Tugas Telah Dikumpul</P>
                            </div>
                        </div>
                        @else
                        <form action="/pengumpulan" method="POST" enctype="multipart/form-data" class="formsubmit flex flex-col justify-center">
                            @csrf
                            <div class="mb-3">
                                <div class="w-full">
                                    <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                                    <input type="hidden" name="tugas_id" value="{{ $tugas->id }}">
                                    <input type="file" id="file" name="file" class="text-white " style="display: none;">
                                    <input type="hidden" name="status_pengumpulan" value="{{  $time > $tugas->tenggat_waktu ? 'tidak_tepat_waktu' : 'tepat_waktu'}}">
                                    <label for="file" class="text-[#4747f3] bg-white border w-full border-[#ABABAB] cursor-pointer font-bold rounded-xl p-2 flex gap-5 items-center">
                                        <span class="text-xl"><i class="fa-solid fa-arrow-up-from-bracket"></i></span> Upload Tugas</label>
                                </div>
                            </div>
                            <div class="btn flex justify-center">
                                <button class="bg-white text-[#4747F3] font-medium p-2 rounded-md w-full">Submit</button>
                            </div>
                        </form>
                        @endif
                        @endif
                        <form action="" method="" enctype="multipart/form-data" class="formsubmit flex flex-col justify-center">
                            @csrf
                            <div class="mb-3">
                                <div class="w-full">
                                    <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                                    <input type="hidden" name="tugas_id" value="{{ $tugas->id }}">
                                    <input type="hidden" name="status_pengumpulan" value="{{  $time > $tugas->tenggat_waktu ? 'tidak_tepat_waktu' : 'tepat_waktu'}}">
                                </div>
                            </div>
                            <div class="btn flex justify-center">
                                <button class="bg-rose-600 text-white font-medium p-2 rounded-md w-full">Batalkan Pengumpuulan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            </div>
        </div>
    
    @vite('resources/js/app.js')

</body>

</html>
