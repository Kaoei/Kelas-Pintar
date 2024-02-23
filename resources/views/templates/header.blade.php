<?php 
$list = [
    'Beranda',
    'Daftar Kelas',
    'Jadwal Kelas',
    'Forum Kelas',
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>

<div class="flex">
    
<div class="sidebar w-2/12 h-screen grid grid-rows-10 grid-cols-1" style="background-color: #4747F3;">
    <div class="row-span-2 flex items-center justify-center">
        <a href="#">
            <img src="" alt="Kelas Merdeka Logo">
        </a>
    </div>
    <div class="row-span-8 p-2 flex justify-center">
        <ul>
            @foreach($list as $item)
            <li class="my-10 text-white text-center font-poppins {{$page == $item ? 'font-bold' : ''}}"><a href="#">{{$item}}</a></li>
            @endforeach
        </ul>
    </div>
</div>