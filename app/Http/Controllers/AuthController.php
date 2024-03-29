<?php

namespace App\Http\Controllers;

use App\Models\data_siswa;
use App\Models\User;
use Clockwork\Request\Log;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('register');
    }
    public function login(){
        return view('login');
    }

    public function store(Request $request)
    {
        $data = [
            'nama' => $request->nama,
            'kelas' => $request->kelas,
            'umur' => $request->umur,
            'role' => $request->role,
            'password' => $request->password
        ];
        $data['password'] = Hash::make($data['password']); // encrip pass
        User::create($data);
        return redirect('/login');
    }
    public function Auth(Request $request){
        $data = [
            'nama' => $request->nama,
            'password'=> $request->password
        ];
        if(Auth::attempt($data)){ 
            $request->session()->regenerate();
            return redirect()->intended('/murid');
        }
        return back()->with('ERROR' , "LOGIN GAGAL");
    }

    public function logout(){
        if (Auth::check()) {
            Auth::logout();
            request()->session()->invalidate();
            request()->session()->regenerateToken();
            return redirect('/');
        } else {
            return redirect('/');
        }
        }
        public function rapot($id){
            $data['user'] = data_siswa::where('user_id', $id)->first();
            // dd($data['user']->nama);
            return view('murid.rapot')->with($data);
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
    /**
     * Display the specified resource.
     */
    public function show(User $users)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $users)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $users)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $users)
    {
        //
    }
}
