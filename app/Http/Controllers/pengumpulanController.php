<?php

namespace App\Http\Controllers;

use App\Models\Pengumpulan;
use App\Models\Tugas;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rules\Unique;

class pengumpulanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
        public function index()
        {
            $tugasIds = Pengumpulan::pluck('tugas_id')->toArray();
          
             $data['tugas'] = Tugas::whereIn('id', $tugasIds)->get();
            foreach ($data['tugas'] as $tugas) {
                echo $tugas->judul; // or any other column in the 'tugas' table
                 }
        
                $data['user'] = Pengumpulan::all();
                

            return view('murid.detail')->with($data);
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

        $NewNameFile = null;
        $cekfileEXT = $request->file('file')->extension();
        $EXTFOTO = ['png', 'jpg', 'jpeg'];
        $EXTDOC =['doc','docx','pdf','xls','xlsx','ppt','pptx'];
        if(in_array($cekfileEXT, $EXTFOTO)){
           $image = $request->file('file');
           $NewNameFile =  Carbon::now()->format('Y-m-d').'_'.uniqid().'_'.$image->getClientOriginalName();
           $path = 'Image-tugas/'.$NewNameFile;
           Storage::disk('public')->put($path, file_get_contents($image));
        }else if(in_array($cekfileEXT, $EXTDOC)){
           $DOC = $request->file('file');
           $NewNameFile =  Carbon::now()->format('Y-m-d').'_'.uniqid().'_'.$DOC->getClientOriginalName();       
            $path = 'DOC-tugas/'.$NewNameFile;
           Storage::disk('public')->put($path, file_get_contents($DOC));
        }
        // dd($NewNameFile);    
        $data = [
            'user_id' => $request->user_id,
            'tugas_id' => $request->tugas_id,
            'file' => $NewNameFile,
            'tgl_pengumpulan' => Carbon::now("Asia/Jakarta")->toDateTimeString(),
            'status_pengumpulan' => $request->status_pengumpulan,
            'status_nilai' => 'belum_dinilai',
        ];
        Pengumpulan::create($data);
        $tugas = Tugas::findOrFail($request->tugas_id);
        $tugas->status_tugas = 'selesai';
        $tugas->save();
        return redirect('/tugas/'.$tugas->id);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data['user'] = User::findOrFail($id); 
        $data['item'] = Pengumpulan::where('user_id', $id)->first();
        return view('subject.detailTugasGuru')->with($data); 
    }

    public function download(Request $request, $file){
        $filePath = public_path('storage/DOC-tugas/'.$file);
    echo "File path: $filePath"; // Debugging line

        return response()->download(public_path('storage/DOC-tugas/'.$file));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pengumpulan $pengumpulan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pengumpulan $pengumpulan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
       Pengumpulan::where('user_id', $id)->delete();
       $tugas = Tugas::findOrFail(Request()->tugas_id);
        $tugas->status_tugas = 'belum_selesai';
        $tugas->save();
       return back();
    }
}
