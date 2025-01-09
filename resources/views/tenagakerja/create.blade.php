@extends('layouts.template')

@section('judulh1', 'Admin - Proyek')

@section('konten')
<div class="col-md-8 mx-auto">
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
 
    <div class="card shadow-lg border-0 rounded-lg mt-5">
        <div class="card-header bg-success text-white text-center">
            <h3 class="card-title mb-0">Masukan Nama Pekerja</h3>
        </div>
        <form action="{{ route('tenagakerja.store') }}" method="POST">
            @csrf
            <div class="card-body">
                <input type="hidden" name="laporanharian_id" id="laporanharian_id" value="{{$laporanharian_id}}">
            <div class="form-group">
                <label for="mandor" class="font-weight-bold">Nama Mandor</label>
                <input 
                    type="text" 
                    class="form-control rounded-pill shadow-sm" 
                    id="mandor" 
                    name="mandor" 
                    placeholder="Masukkan Nama Mandor" 
                    value="{{ old('tenagakerja') }}">
            </div>
            <div class="form-group">
                <label for="kepala_tukang" class="font-weight-bold">Nama kepala tukang</label>
                <input 
                    type="text" 
                    class="form-control rounded-pill shadow-sm" 
                    id="kepala_tukang" 
                    name="kepala_tukang" 
                    placeholder="Masukkan Nama Kepala Tukang" 
                    value="{{ old('tenagakerja') }}">
            </div>
            <div class="form-group">
                <label for="tukang" class="font-weight-bold">Nama tukang</label>
                <input 
                    type="text" 
                    class="form-control rounded-pill shadow-sm" 
                    id="tukang" 
                    name="tukang" 
                    placeholder="Masukkan Nama Tukang" 
                    value="{{ old('tenagakerja') }}">
            </div>
            <div class="form-group">
                <label for="pekerja" class="font-weight-bold">Nama Pekerja</label>
                <input 
                    type="text" 
                    class="form-control rounded-pill shadow-sm" 
                    id="pekerja" 
                    name="pekerja" 
                    placeholder="Masukkan Nama Pekerja" 
                    value="{{ old('tenagakerja') }}">
            </div>
            </div>
            <div class="card-footer text-center bg-light">
                <button type="submit" class="btn btn-success rounded-pill px-4">Simpan</button>
            </div>
        </form>
    </div>
</div>
@endsection
