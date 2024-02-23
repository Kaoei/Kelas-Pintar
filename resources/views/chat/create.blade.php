<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Create Forum</h1>
    <form action="{{route('actionChat')}}" method="POST">
        @csrf
        @method('POST')
        <input type="hidden" name="user" placeholder="" value="{{$user[0]}}"><br>
        <input type="text" name="forum" placeholder="Forum Name..."><br>
        <input type="text" name="message" placeholder="Message.."><br>
        <button type="submit">Create Forum</button>
    </form>
</body>
</html>