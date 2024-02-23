@extends('layout.main')
@section('content')
@if (auth()->user()->role === 'guru')
<form action="/kelas" method="POST">
    @csrf
    <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
    <label for="">Nama Kelas</label>
    <input type="text" name="nama_kelas">
    <br>
    <label for="">SubJudul</label>
    <input type="text" name="subJudul">
    <br>
    <label for="">Kelas</label>
    <input type="text" name="kelas">
    <br>
    <Label>Mulai Pembelajaran</Label>
    <input type="time" name="mulai_pembelajaran">
    <br>
    <label for="">Berakhir</label>
    <input type="time" name="berakhir"> 
    <br>
    <button class="btn btn-primary">Submit</button>
</form>
@endif
@foreach ($kelas as $item)
<div class="card" style="width: 18rem;">
    <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">{{ $item->nama_kelas }}</h5>
      <p class="card-text">{{ auth()->user()->role === 'guru' ? $item->kelas  : $item->user->nama }}</p>
      <small>{{ $item->mulai_pembelajaran }} - {{ $item->berakhir }}</small>
      <br>
      <a href="/kelas/{{ $item->id }}" class="btn btn-primary">Masuk</a>
    </div>
  </div>
  <br>
@endforeach

@endsection
 
