<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class perintah extends Model
{
    //
    use HasFactory;
    protected $fillable=['laporanharian_id','keterangan'];
}
