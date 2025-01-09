<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\laporanharian;
use App\Models\pekerjaan;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class pekerjaancontroller extends Controller
{
    public function index()
    {
        return view('pekerjaan.index', [
            "title" => "pekerjaan",
            "data" => pekerjaan::all()

        ]);
    }

    public function create($id): View
    {
        return view('pekerjaan.create')->with([
            "title" => "Tambah Data proyek",
            "laporanharian_id"=>$id
        ]);
    }


    public function store(Request $request):RedirectResponse
    {
        $request->validate([
            "keterangan" => "required"
        ]);
        
        $proyek_id=laporanharian::select('proyek_id')->where('id',$request->laporanharian_id)->get()->toArray();
        $proyek_id=$proyek_id[0]['proyek_id'];
        pekerjaan::create($request->all());
        return redirect()->route('laporanharian.create',['id'=>$proyek_id])->with('success', 'Data pekerjaan Berhasil Ditambahkan');
    }
    public function show(pekerjaan $pekerjaan): View
    {
        $laporanHarian=laporanharian::select('*')
                                    ->where('pekerjaan_id',$pekerjaan->id)
                                    ->get();
        return view('pekerjaan.show')
            ->with([
                "title" => "Data pekerjaan",
                "datapekerjaan"=>$pekerjaan,
                "laporanHarian"=>$laporanHarian
            ]);
    }
}
