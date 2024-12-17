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
                        <td>Pekerjaan</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Tenaga Kerja</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Peralatan</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Bahan</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Cuaca</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>Masalah</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>Perintah</td>
                        <td>&nbsp;</td>
                    </tr>
                </tbody>
            </table>
        </div>
        
    </div>
</div>
@endsection
