<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\laporanharian;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
class laporanhariancontroller extends Controller
{
    public function index()
    {
        return view('laporanharian.index', [
            "title" => "laporanharian",
            "data" => laporanharian::all()

        ]);
    }
    public function create(): View
    {
        return view('laporanharian.create')->with(["title" => "Tambah Data proyek"]);
    }


    public function store(Request $request):RedirectResponse
    {
        $request->validate([
            "tanggal" => "required",
            "mandor" => "required",
            "kepala_tukang" => "required",
            "tukang" => "required",
            "pekerja" => "required",
            "cuaca_siang" => "required",
            "cuaca_sore" => "required",
            "cuaca_malam" => "required"
        ]);
     laporanharian::create($request->all());
        return redirect()->route('laporanharian.index')->with('success', 'Data proyek Berhasil Ditambahkan');
    }
    public function edit (laporanharian $laporanharian): View
    {
        return view('lpaoranharian.edit', compact('laporanharian'))->with(["title" => "Ubah Data proyek"]);
    }
    public function update(Request $request, laporanharian $laporanharian): RedirectResponse
    {
        $request->validate([
          "tanggal" => "required",
            "mandor" => "required",
            "kepala_tukang" => "required",
            "tukang" => "required",
            "pekerja" => "required",
            "cuaca_siang" => "required",
            "cuaca_sore" => "required",
            "cuaca_malam" => "required"
        ]);
        $laporanharian->update($request->all());
        return redirect()->route('laporanharian.index')
            ->with('updated', "Data Pelanggan Berhasil Diubah");
    }
    public function show(laporanharian $laporanharian): View
    {
        return view('laporanharian.show', compact('laporanharian'))
            ->with(["title" => "Data laporanharian"]);
    }
}
