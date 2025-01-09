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
            <h3 class="card-title mb-0">Masukan data pekerjaan</h3>
        </div>
        <form action="{{ route('pekerjaan.store') }}" method="POST">
            @csrf
            <div class="card-body">
                <input type="hidden" name="laporanharian_id" id="laporanharian_id" value="{{$laporanharian_id}}">
                <div class="form-group">
                    <label for="pekerjaan" class="font-weight-bold">Jenis Pekerjaan</label>
                    <input 
                        type="text" 
                        class="form-control rounded-pill shadow-sm" 
                        id="keterangan" 
                        name="keterangan" 
                        placeholder="Masukkan jenis pekerjaan" 
                        value="{{ old('pekerjaan') }}">
                </div>
            </div>
            <div class="card-footer text-center bg-light">
                <button type="submit" class="btn btn-success rounded-pill px-4">Simpan</button>
            </div>
        </form>
    </div>
</div>
@endsection
