<?php

namespace App\Http\Controllers;

use App\Models\kecamatan;

use Illuminate\Http\Request;

class kecamatanController extends Controller
{
    public function getKecamatanByKabupaten($kabupatenId)
    {
        $kecamatans = Kecamatan::where('id_kabupaten', $kabupatenId)->get();
        return response()->json($kecamatans);
    }
}
