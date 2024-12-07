@extends('layouts.template')
@section('judulh1','Admin - Customer')


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


    <div class="card card-warning">
        <div class="card-header">
            <h3 class="card-title">Ubah Data Customer</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{ route('proyek.update',$proyek->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class=" card-body">
                <div class="form-group">
                    <label for="pekerjaan">pekerjaan</label>
                    <input type="pekerjaan" class="form-control" id="pekerjaan" name="pekerjaan"  value="{{ $proyek->pekerjaan }}">
                </div>
                <div class="form-group">
                    <label for="pelaksana">pelaksana</label>
                    <input type="pelaksana" class="form-control" id="pelaksana" name="pelaksana" value="{{ $proyek->pelaksana }}">
                </div>
                <div class="form-group">
                    <label for="lokasi">lokasi</label>
                    <input type="lokasi" class="form-control" id="lokasi" name="lokasi" value="{{ $proyek->lokasi }}">
                </div>
                <div class="form-group">
                    <label for="anggaran">anggaran</label>
                    <input type="anggaran" class="form-control" id="anggaran" name="anggaran" value="{{ $proyek->anggaran }}">
                </div>
               
            </div>
            <!-- /.card-body -->


            <div class="card-footer">
                <button type="submit" class="btn btn-warning float-right">Simpan</button>
            </div>
        </form>
    </div>
</div>
@endsection
