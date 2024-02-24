<?php

namespace App\Http\Controllers;

use App\Models\data_siswa;
use Illuminate\Http\Request;

class datasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('profile.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $Data =
            [
            'user_id' => $request->user_id,
            'nama' => $request->nama,
            'umur' => $request->umur,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tgl_lahir' => $request->tgl_lahir,
            'tempat_lahir' => $request->tempat_lahir,
            'email' => $request->email,
            'no_telp' => $request->no_telp,
            'nisn' => $request->nisn,
            'kelas' => $request->kelas,
            ];
            data_siswa::create($Data);
            return redirect('/murid');
    }

    /**
     * Display the specified resource.
     */
    public function show(data_siswa $data_siswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(data_siswa $data_siswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, data_siswa $data_siswa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(data_siswa $data_siswa)
    {
        //
    }
}
