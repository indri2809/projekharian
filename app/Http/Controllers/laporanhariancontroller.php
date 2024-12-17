<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\proyek;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Models\laporanharian;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;

class laporanhariancontroller extends Controller
{
    public function create($proyek_id):View
    {
        //cari data laporanharian pada tanggal hari ini
        $tgl_hari_ini=Carbon::now();
        $data_laporan_hari_ini=laporanharian::select('tanggal')
                        ->whereDate('created_at',$tgl_hari_ini)
                        ->get();
        if(blank($data_laporan_hari_ini)){
            $laporanHarian=new laporanharian;
            $laporanHarian->proyek_id=$proyek_id;
            $laporanHarian->tanggal=Carbon::now('Asia/Jakarta');
            $laporanHarian->mandor='';
            $laporanHarian->kepala_tukang='';
            $laporanHarian->tukang='';
            $laporanHarian->pekerja='';
            $laporanHarian->cuaca_siang='';
            $laporanHarian->cuaca_sore='';
            $laporanHarian->cuaca_malam='';
            $laporanHarian->save();
            $tanggal=$laporanHarian->tanggal;
        }else{
            $datalaporanHarian=laporanharian::select('tanggal')
            ->whereDate('created_at',$tgl_hari_ini)
            ->get();
            $tanggal=$datalaporanHarian[0]->tanggal;
        }
    
        $data_proyek=proyek::find($proyek_id);
         
        return view('laporanharian.create',[
            "data_proyek"=>$data_proyek,
            "title"=>"Laporan Harian",
            "tanggal"=>Carbon::parse($tanggal)->isoFormat('dddd, D MMMM Y')
    
        ]);
    }
}
