<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="{{route('createChat')}}">Create Forum</a>
    @foreach($result as $d)
    <h1><a href="{{route('detailChat', $d->id_chat)}}">{{$d->forum}}</a></h1>
    <h3>{{$d->user}}</h3>
    <h3>{{$d->created_at}}</h3>
    @endforeach
</body>
</html>