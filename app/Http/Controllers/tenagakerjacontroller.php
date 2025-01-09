<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Models\laporanharian;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;

class tenagakerjacontroller extends Controller
{
    public function index()
    {
        return view('tenagakerja.index', [
            "title" => "tenagakerja",
            "data" => laporanharian::all()

        ]);
    }

    public function create($id): View
    {
        return view('tenagakerja.create')->with([
            "title" => "Tambah Data proyek", 
            "laporanharian_id"=>$id
        ]);
    }


    public function store(Request $request):RedirectResponse
    {
        $request->validate([
            
            "mandor" => "required",
            "kepala_tukang" => "required",
            "tukang" => "required",
            "pekerja" => "required"
        ]);
        $proyek_id=laporanharian::select('proyek_id')->where('id',$request->laporanharian_id)->get()->toArray();
        $proyek_id=$proyek_id[0]['proyek_id'];

        $laporanHarian=laporanharian::find($request->laporanharian_id);
            
            $laporanHarian->mandor=$request->mandor;
            $laporanHarian->kepala_tukang=$request->kepala_tukang;
            $laporanHarian->tukang=$request->tukang;
            $laporanHarian->pekerja=$request->pekerja;
            $laporanHarian->save();
       

        return redirect()->route('laporanharian.create',['id'=>$proyek_id])->with('success', 'Data pekerjaan Berhasil Ditambahkan');
    }

    
    public function show(laporanharian $tenagakerja): View
    {
        $laporanHarian=laporanharian::select('*')
                                    ->where('laporanharian_id',$tenagakerja->id)
                                    ->get();
        return view('tenagakerja.show')
            ->with([
                "title" => "nama pekerja",
                "datatenagakerja"=>$tenagakerja,
                "laporanHarian"=>$laporanHarian
            ]);
    }
}
