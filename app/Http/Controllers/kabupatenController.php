<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kabupaten;


class kabupatenController extends Controller
{
    public function getKabupatenByProvinsi($provinsiId)
    {
        $kabupatens = Kabupaten::where('id_provinsi', $provinsiId)->get();
        return response()->json($kabupatens);
    }
}
