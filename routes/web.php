<?php

use App\Http\Controllers\laporanhariancontroller;
use App\Http\Controllers\pekerjaancontroller;
use App\Http\Controllers\proyekcontroller;
use App\Http\Controllers\tenagakerjacontroller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/', function () {
    return view('dashboard',[
"title"=>"Dashboard"
    ]);
    });
Route::resource('proyek',proyekcontroller::class);
Route::get('lapharian/{id}',[laporanhariancontroller::class,'create'])->name('laporanharian.create');
Route::get('pekerjaan/{id}',[pekerjaancontroller::class,'create'])->name('pekerjaan.create');
Route::post('pekerjaan',[pekerjaancontroller::class,'store'])->name('pekerjaan.store'); 
Route::get('tenagakerja/{id}',[tenagakerjacontroller::class,'create'])->name('tenagakerja.create');
Route::post('tenagakerja',[tenagakerjacontroller::class,'store'])->name('tenagakerja.store');