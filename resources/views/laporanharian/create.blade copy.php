@extends('layouts.template')
@section('judulh1','Admin - laporan harian')
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
    <label for="tanggal">Tanggal</label>
    <input type="date" class="form-control" id="tanggal" name="tanggal">
</div>

                <div class="form-group">
                    <label for="mandor">Mandor</label>
                    <input type="mandor" class="form-control" id="mandor" name="mandor">
                </div>
                <div class="form-group">
                    <label for="kepala_tukang"> kepala tukang</label>
                    <input type="text" class="form-control" id="kepala_tukang" name="kepala_tukang">
                </div>
                <div class="form-group">
                    <label for="tukang">Tukang</label>
                    <input type="text" class="form-control" id="tukang" name="tukang">
                </div>
                <div class="form-group">
                    <label for="pekerja">Pekerja</label>
                    <input type="text" class="form-control" id="pekerja" name="pekerja">
                </div>
                <div class="form-group">
    <label for="cuaca_siang">jam Siang</label>
    <div class="input-group">
        <input type="time" class="form-control" id="cuaca_siang" name="cuaca_siang">
        <span class="input-group-text">WIB</span>
    </div>

<label for="cuaca_sore">jam sore</label>
    <div class="input-group">
        <input type="time" class="form-control" id="cuaca_sore" name="cuaca_sore">
        <span class="input-group-text">WIB</span>
    </div>
</div>
<label for="cuaca_malam">jam malam</label>
    <div class="input-group">
        <input type="time" class="form-control" id="cuaca_malam" name="cuaca_malam">
        <span class="input-group-text">WIB</span>
    </div>
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
