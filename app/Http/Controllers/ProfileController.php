<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Siswa;

class ProfileController extends Controller
{
    public function index() {
        $data['result'] = User::all();
        return view('profile.index', $data);
    }

    public function action(Request $request) {
        $data = [
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
        $newUser = Siswa::create($data);
        return redirect()->route('profile');
    }
}
