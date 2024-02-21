<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @foreach($result as $d)
    <h1>{{$d->forum}}</h1>
    <h3>{{$d->user}}</h3>
    <h3>{{$d->created_at}}</h3>
    <h3>{{$d->message}}</h3>
    @endforeach
</body>
</html>