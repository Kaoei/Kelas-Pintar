<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Tugas;
use App\Models\User;
use Carbon\Carbon;
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
        $mytime = Carbon::now('Asia/Jakarta')->format('l');
        $mytimeTomorrow = Carbon::now('Asia/Jakarta')->addDay()->format('l');
        if($user->role === 'murid'){
        $kelas = Kelas::where('kelas', $user->kelas)->where('jadwal', $mytime)->get();
        $Kelasbesok = Kelas::where('kelas', $user->kelas)->where('jadwal', $mytimeTomorrow)->get();
        }else{
            $kelas = Kelas::where('user_id', $user->id)->where('jadwal', $mytime)->get();
            $Kelasbesok = Kelas::where('user_id', $user->id)->where('jadwal', $mytimeTomorrow)->get();

        }
        $data['kelas'] = $kelas;
        $data['kelasbesok'] =$Kelasbesok;
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
        $data['tugas'] = Tugas::where('kelas_id', $id)->get();

     return view('subject.kelas')->with($data);  

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
