<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lahan extends Model
{
    use HasFactory;
    protected $fillable = [
        'provinsi', 
        'kabupaten',
        'kecamatan',
        'irigasi',
        'non_irigasi',
        'sawah',
        'tegal',
        'ladang',
        'sementara',
        'tahun'
    ];

}
