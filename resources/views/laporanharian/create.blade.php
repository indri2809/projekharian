@extends('layouts.template')
@section('judulh1','Admin - Proyek')
@section('konten')
<div class="col-md-6">
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
    <div class="card card-success">
        <div class="card-header">
            <h3 class="card-title">Tambah laporan</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{ route('laporanharian.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="pekerjaan">Pekerjaan</label>
                    <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" placeholder="">
                </div>
                <div class="form-group">
                    <label for="pelaksana">Pelaksanaan</label>
                    <input type="pelaksana" class="form-control" id="pelaksana" name="pelaksana">
                </div>
                <div class="form-group">
                    <label for="lokasi">lokasi</label>
                    <textarea id="lokasi" name="lokasi" class="form-control" rows="4"></textarea>
                </div>
                <div class="form-group">
                    <label for="anggaran">Anggaran</label>
                    <input type="text" class="form-control" id="anggaran" name="anggaran">
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <button type="submit" class="btn btn-success float-right">Simpan</button>
            </div>
        </form>
    </div>
</div>
@endsection
