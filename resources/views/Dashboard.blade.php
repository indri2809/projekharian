@extends('layouts.template')
@section('judulh1','Admin - Profil perusahaan')
@section('konten') 
<div class="col-lg-12">
    <div class="card">
        <div class="card-header border-0">        
            <div class="d-flex justify-content-between">
                <h3 class="card-title">
            </div>
        </div>
        <div class="card-body">
            <div class="dashboard-image text-center">
                <img src="{{ asset('dist/img/image.png') }}" class="img-fluid mb-4" alt="EKA MAS TUNGGAL" style="width: 20%; height: auto;" />
                <p class="mt-2">
                    <strong>Selamat datang di Aplikasi EKA MAS TUNGGAL!</strong><br>
                    Aplikasi ini dirancang untuk membantu memudahkan pengelolaan data perusahaan dan administrasi Anda. Dengan antarmuka yang sederhana dan fitur yang lengkap, kami berharap aplikasi ini dapat meningkatkan efisiensi kerja Anda.
                </p>
            </div>
        </div>
    </div>
</div>
 
@endsection

