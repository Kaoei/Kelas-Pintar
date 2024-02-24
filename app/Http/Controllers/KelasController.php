<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Tugas;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $userId = Auth::id(); 
        $user = User::findOrFail($userId);
        if($user->role === 'murid'){
        $kelas = Kelas::where('kelas', $user->kelas)->get();
        }else{
            $kelas = Kelas::where('user_id', $user->id)->get();
        }
        $data['kelas'] = $kelas;

        return view('murid.homepage')->with($data);
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
            'nama_kelas' => $request->nama_kelas,
            'subJudul' => $request->subJudul,
            'kelas' => $request->kelas,
            'mulai_pembelajaran' => $request->mulai_pembelajaran,
            'berakhir' => $request->berakhir
        ];
        Kelas::create($data);
        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data['kelas'] = Kelas::findOrFail($id); 
        $data['count'] = Tugas::where('status_tugas', 'belum_selesai')->where('kelas_id', $id)->count();
        $data['tugas'] = Tugas::where('kelas_id', $id)->get();

     return view('kelas.tugas')->with($data);  

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kelas $kelas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kelas $kelas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kelas $kelas)
    {
        //
    }
}
