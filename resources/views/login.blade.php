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
    <h1>login</h1>
    <form action="/login" method="POST">
        @csrf
        <input type="text" name="nama">
        <input type="text" name="password">
        <button type="submit">kirim</button>
    </form>
</body>
</html>