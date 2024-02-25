<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Tugas;
use Carbon\Carbon;
use Illuminate\Http\Request;

class tugasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
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
        $data = [
            'kelas_id' => $request->kelas_id,
            'nama_tugas' => $request->nama_tugas,
            'deskripsi_tugas' => $request->deskripsi_tugas,
            'status_tugas' => 'belum_selesai',
            'tenggat_waktu' => $request->tenggat_waktu
        ];

        Tugas::create($data);
        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data['tugas'] = Tugas::findOrFail($id); 
        $data['time'] = Carbon::now("Asia/Jakarta")->toDateTimeString();
        return view('subject.detailTugas')->with($data);    

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tugas $tugas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tugas $tugas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tugas $tugas)
    {
        //
    }
}
