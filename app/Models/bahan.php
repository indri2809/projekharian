<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bahan extends Model
{
    //
    use HasFactory;
    protected $fillable=['laporanharian_id','keterangan'];

}
