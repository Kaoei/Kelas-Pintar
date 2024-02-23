@extends('layout/main')
@section('content')
<h1>buat header</h1>
    <span>{{ $kelas->nama_kelas }} Kelas {{ $kelas->kelas }}</span>
    <br>
    <small>
        {{ $kelas->subJudul }}
    </small>
<hr>
<p>show data</p>
    @foreach ($tugas as $item)
    <div>
        <small><a href="/tugas/{{ $item->id }}">{{ $kelas->user->nama }} - {{ $item->nama_tugas }} </a></small>
    @endforeach
    </div>
    <p>end show data</p>
    <hr>
    <p>jumlah tugas</p>
    @if ($count > 0)
    <div class=" mb-3">
        <p>terdapat {{ $count }} tugas yang belum selesai </p>
    </div>
    @else
    <span>Gak Ada tugas</span>
    @endif
 <p>end tugas</p>
<hr>

    @if (auth()->user()->role === 'guru')
    <form action="/tugas" method="POST">
        @csrf
        <input type="hidden" name="kelas_id" value="{{ $kelas->id }}">
        <label for="">Nama Tugas</label>
        <input type="text" name="nama_tugas">
        <br>
        <label for="">Deskripsi Tugas</label>
        <input type="text" name="deskripsi_tugas">
        <br>
        <Label>Tenggat waktu</Label>
        <input type="datetime-local" name="tenggat_waktu">
        <br>
        <button class="btn btn-primary">Submit</button>
    </form>
    @endif
@endsection