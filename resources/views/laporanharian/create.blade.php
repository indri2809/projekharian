@extends('layouts.template')
@section('judulh1','Admin - laporan harian')
@section('konten')
<div class="col">
    @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Data Proyek</h3>
        </div>
        <div class="card-body">
            <table>
                <tr>
                    <td>Pekerjaan</td>
                    <td>:</td>
                    <td>{{$data_proyek->pekerjaan}}</td>
                </tr>
                <tr>
                    <td>Pelaksana</td>
                    <td>:</td>
                    <td>{{$data_proyek->pelaksana}}</td>
                </tr>
                <tr>
                    <td>Lokasi</td>
                    <td>:</td>
                    <td>{{$data_proyek->lokasi}}</td>
                </tr>
            </table>
        </div>
    </div>
    <div class="card card-success">
        <div class="card-header">
            <h3 class="card-title">Laporan Harian ({{$tanggal}}) </h3>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <th>No</th>
                    <th>Uraian</th>
                    <th>Keterangan</th>
                </thead>
                <tbody>
                    <tr>

                        <td>1</td>
                        <td>Pekerjaan
                            <a type="button" class="btn btn-success float-right" href="{{ route('pekerjaan.create',$laporan_harian_id) }}">
                                <i class=" fas fa-plus"></i>
                            </a>
                        </td>
                        <td>
                            <ul>
                                @foreach($data_pekerjaan as $dp)
                                <li>{{$dp->keterangan}}</li>
                                @endforeach
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Tenaga Kerja
                            <a type="button" class="btn btn-success float-right" href="{{ route('tenagakerja.create',$laporan_harian_id) }}">
                                <i class=" fas fa-plus"></i>
                            </a>
                        </td>
                        <td><ul>
                            @foreach($laporan_harian as $lh)
                            <li>{{$lh['mandor']}}</li>
                            <li>{{$lh['kepala_tukang']}}</li>
                            <li>{{$lh['tukang']}}</li>
                            <li>{{$lh['pekerja']}}</li>
                            @endforeach
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Peralatan
                            <a type="button" class="btn btn-success float-right" href="">
                                <i class=" fas fa-plus"></i>
                            </a>
                        </td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Bahan
                            <a type="button" class="btn btn-success float-right" href="">
                                <i class=" fas fa-plus"></i>
                            </a>
                        </td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Cuaca
                            <a type="button" class="btn btn-success float-right" href="">
                                <i class=" fas fa-plus"></i>
                            </a>
                        </td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>Masalah
                            <a type="button" class="btn btn-success float-right" href="">
                                <i class=" fas fa-plus"></i>
                            </a>
                        </td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>Perintah
                            <a type="button" class="btn btn-success float-right" href="">
                                <i class=" fas fa-plus"></i>
                            </a>
                        </td>
                        <td>&nbsp;</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="card-footer text-center">
        <a href="{{ url()->previous() }}" class="btn btn-primary">
            <i class="fas fa-arrow-left"></i>Kembali</a>
    </div>
</div>
@endsection