<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    @vite('resources/css/app.css')
</head>
<body class="md:flex">
    @include('layouts.navbar')    

    <div class="md:flex md:justify-end md:w-full">

    <div class="h-[37rem] md:h-[42rem] w-full bg-[#E5E5E5] md:w-5/6">
        <div class="h-full w-full p-5">
            <div class="h-full w-full bg-white grid grid-rows-10">
                <div class="row-span-2 flex justify-between items-center border-b-2 mx-1">
                    <div>
                        <p class="text-sm">Nama Murid: <b>Andre</b></p>
                        <p class="text-sm">NIS/NISN: <b>12345678</b></p>
                        <p class="text-sm">Nama Sekolah: <b>Cinta Kasih Tzu Chi</b></p>
                        <p class="text-sm">Alamat: <b>Jl.Banamas Raya 12</b></p>
                    </div>
                    <div>
                        <p class="text-sm">Kelas: <b>XI - 2</b></p>
                        <p class="text-sm">Semester: <b>2</b></p>
                        <p class="text-sm">Tahun Ajaran: <b>2024/2025</b></p>
                    </div>
                </div>

                <div class="row-span-6 flex justify-center">
                    <div>
                        <h1 class="mt-2 font-bold text-base">LAPORAN HASIL BELAJAR SEMESTER</h1>
                        <table class="w-full mt-4 text-sm text-center border-collapse border border-black">
                            <tr>
                                <th>No</th>
                                <th>Mata Pelajaran</th>
                                <th>Rerata Nilai</th>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Matematika</td>
                                <td>82</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>IPA</td>
                                <td>98</td>
                            </tr>
                        </table>
                    </div>
                </div>

                <div class="row-span-2 flex justify-center text-center">
                    <table class="w-4/6 text-sm text-center bg-gray-200 border-collapse border border-black m-4">
                        <tr>
                            <th>Sakit</th>
                            <th>Ijin</th>
                            <th>Tanpa Keterangan</th>
                        </tr>
                        <tr>
                            <td>2 Hari</td>
                            <td>0 Hari</td>
                            <td>1 Hari</td>
                        </tr>
                    </table>
                </div>

            </div>
        </div>
    </div>

    </div>
</body>
</html>