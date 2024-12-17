@extends('layouts.template')
@section('tambahanCSS')
<!-- DataTables -->
<link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
<!-- Toastr -->
<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
@endsection

@section('judulh1', 'Detail Proyek')
@section('konten')
<div class="col-md-12">
    <!-- Informasi Proyek -->
    <div class="card shadow-sm mb-3">
        <div class="card-header bg-info text-white text-center">
            <h5 class="mb-0"><strong>Informasi Proyek</strong></h5>
        </div>
        <div class="card-body">
            <div class="row mb-2">
                <div class="col-md-3"><strong>Proyek:</strong></div>
                <div class="col-md-9">{{ $dataProyek->pekerjaan }}</div>
            </div>
            <div class="row mb-2">
                <div class="col-md-3"><strong>Pelaksana:</strong></div>
                <div class="col-md-9">{{ $dataProyek->pelaksana }}</div>
            </div>
            <div class="row mb-2">
                <div class="col-md-3"><strong>Lokasi:</strong></div>
                <div class="col-md-9">{{ $dataProyek->lokasi }}</div>
            </div>
        </div>
    </div>
<div class="card card-info">
        <div class="card-header">
            <h2 class="card-title">Data pekerja</h2>
            <a type="button" class="btn btn-success float-right" href="{{ route('laporanharian.create',$dataProyek->id) }}">
                <i class=" fas fa-plus"></i> Tambah data
            </a>
        </div>
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>Aksi</th>
                        
                    </tr>
                </thead>
                <tbody>
                    @foreach($laporanHarian as $dt)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $dt-> tanggal }}</td>
                        <td>
                                <a type="button" class="btn btn-warning" href="#">
                                  <i class="fas fa-edit"></i>
                                </a>
                                <a type="button" class="btn btn-success" href="#">
                                <i class="fas fa-eye"></i>
                                </a>

                                
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer text-center">
            <a href="{{ route('proyek.index') }}" class="btn btn-primary">
                <i class="fas fa-arrow-left"></i> Kembali
            </a>
        </div>
    </div>
</div>
@endsection

@section('tambahanJS')
<!-- DataTables & Plugins -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="plugins/jszip/jszip.min.js"></script>
<script src="plugins/pdfmake/pdfmake.min.js"></script>
<script src="plugins/pdfmake/vfs_fonts.js"></script>
<script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- Toastr -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
@endsection

@section('tambahScript')
<script>
$(function() {
    $("#example1").DataTable({
        "paging": false,
        "responsive": true,
        "lengthChange": false,
        "autoWidth": false,
    });
});
@if($message = Session::get('success'))
toastr.success("{{ $message }}");
@elseif($message = Session::get('updated'))
toastr.warning("{{ $message }}");
@elseif($message = Session::get('deleted'))
toastr.error("{{ $message }}");
@endif
</script>
@endsection
