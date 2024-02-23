@extends('layout.main')
@section('content')
    <div>
        <h1>Register</h1>
        <form action="/register" method="POST">
            @csrf
            <label for="">Nama</label>
            <input type="text" name="nama">
            {{--  --}}
            <label for="">Umur</label>
            <input type="text" name="umur">
            {{--  --}}
            <label for="">role</label>
            <input type="text" name="role">
            <label for="">password</label>
            <input type="text" name="password">
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="/login"> Have acount</a>
        </form>
    </div>
@endsection
   
