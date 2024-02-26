<?php

namespace App\Http\Controllers;

use App\Models\Nilai;
use App\Models\Pengumpulan;
use App\Models\User;
use Illuminate\Http\Request;

class nilaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('kelas.nilaiSiswa');
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
            'user_id' => $request->user_id,
            'tugas_id' => $request->tugas_id,
            'pengumpulans_id' => $request->pengumpulans_id,
            'nilai' => $request->nilai
        ];
        Nilai::create($data);
        return redirect('/pengumpulan/'.$request->tugas_id);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {  
        
        // return view('subject.detailTugasGuru')->with($data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Nilai $nilai)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Nilai $nilai)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Nilai $nilai)
    {
        //
    }
}
