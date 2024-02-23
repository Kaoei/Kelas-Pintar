@extends('layout/main')
@section('content')
<h1>detail tugas</h1>

<p>{{ $tugas->Kelas->nama_kelas }}</p>
<p>{{ $tugas->kelas->subJudul }}</p>
<hr>
<h4>Tugas Hari ini ({{ $tugas->nama_tugas }})</h4>
<p>{{ $tugas->deskripsi_tugas }}</p>
<hr>
@if (auth()->user()->role === 'murid' )
@if ($tugas->status_tugas === 'selesai')
<small>Tugas telah di selesaikan</small>
@else
<form action="/pengumpulan" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
    <input type="hidden" name="tugas_id" value="{{ $tugas->id }}">
    <input type="file" name="file">
    <input type="hidden" name="status_pengumpulan" value="{{  $time > $tugas->tenggat_waktu ? 'tidak_tepat_waktu' : 'tepat_waktu'}}">
    <br>
    <button type="submit" >Submit</button>
</form>
@endif
@else
<p class="btn btn-primary"> <a href="/pengumpulan/{{ $tugas->id }}" class="text-white">Lihat Pengumpulan </a></p>
@endif




@endsection