<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
    <img class="p-10" src="https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=http://127.0.0.1:8000/qr/validate/{{$data}}" alt="">
</body>
</html>