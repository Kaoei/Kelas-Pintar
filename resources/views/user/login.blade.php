<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    <div>
        <h1>Login</h1>
        <form action="/login" method="POST">
            @csrf
            <label for="">Nama</label>
            <input type="text" name="nama">
            {{--  --}}
            <label for="">password</label>
            <input type="text" name="password">
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>