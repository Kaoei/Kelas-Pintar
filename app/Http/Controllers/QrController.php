<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;

class QrController extends Controller
{
    // digunakan untuk membuat qr code
    public function generate($data) {
        $url = "https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=http://127.0.0.1:8000/qr/validate/{$data}";
        return $url;
    }

    // kalau ingin lihat qr code (untuk testing)
    public function view($data) {
        return view('qr.view', ['data' => $data]);
    }

    // ketika scan barcode, link akan diarahkan kesini (proses kehadiran masuk)
    public function validateNISN($data) {
        $siswa = Siswa::where('nisn', $data)->first();

        if($siswa) {
            $siswa->kehadiran = 'hadir';
            $siswa->save();
            return redirect()->route('profile');
        } else {
            return redirect()->route('profile');
        }
    }
}
