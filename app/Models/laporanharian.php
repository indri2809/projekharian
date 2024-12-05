<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class laporanharian extends Model
{
    use HasFactory;
    protected $fillable=['proyek_id','tannggal','mandor','kepala_tukang','tukang','pekerja','cuaca_singa','cuaca_siang','cuaca_sore','cuaca_malam'];
}
