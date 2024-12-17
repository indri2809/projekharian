<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\laporanharian;
use App\Models\proyek;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class proyekcontroller extends Controller
{
    public function index()
    {
        return view('proyek.index', [
            "title" => "proyek",
            "data" => proyek::all()

        ]);
    }

    public function create(): View
    {
        return view('proyek.create')->with(["title" => "Tambah Data proyek"]);
    }


    public function store(Request $request):RedirectResponse
    {
        $request->validate([
            "pekerjaan" => "required",
            "pelaksana" => "required",
            "lokasi" => "required",
            "anggaran" => "required"
        ]);
     proyek::create($request->all());
        return redirect()->route('proyek.index')->with('success', 'Data proyek Berhasil Ditambahkan');
    }
    public function edit (proyek $proyek): View
    {
        return view('proyek.edit', compact('proyek'))->with(["title" => "Ubah Data proyek"]);
    }
    public function update(Request $request, proyek $proyek): RedirectResponse
    {
        $request->validate([
            "pekerjaan" => "required",
            "pelaksana" => "required",
            "lokasi" => "required",
            "anggaran" => "required"
        ]);
        $proyek->update($request->all());
        return redirect()->route('proyek.index')
            ->with('updated', "Data Pelanggan Berhasil Diubah");
    }
    public function show(proyek $proyek): View
    {
        $laporanHarian=laporanharian::select('*')
                                    ->where('proyek_id',$proyek->id)
                                    ->get();
        return view('proyek.show')
            ->with([
                "title" => "Data proyek",
                "dataProyek"=>$proyek,
                "laporanHarian"=>$laporanHarian
            ]);
    }
}
