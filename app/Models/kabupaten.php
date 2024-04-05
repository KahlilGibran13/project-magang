<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kabupaten extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama', 
        'id_kabupaten',
        'id_provinsi'
    ];

}
