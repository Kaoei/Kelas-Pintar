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
    @foreach($comments as $d)
    <h6>{{$d->user}}</h6>
    <h6>{{$d->message}}</h6>
    @endforeach
    <form action="{{route('message')}}" method="POST">
        @csrf
        @method('POST')
        @foreach($result as $d)
        <input type="hidden" name="id_forum" value="{{$d->id_chat}}">
        @endforeach
        <input type="hidden" name="user" value="{{$d->user}}">
        <input type="text" name="message" placeholder="Type a message..">
        <button type="submit">Submit</button>
    </form>
</body>
</html>