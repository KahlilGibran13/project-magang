<?php

namespace App\Http\Controllers;
use App\Models\data;
use App\Models\provinsi;
use App\Models\kabupaten;
use App\Models\kecamatan;
use Illuminate\Http\Request;

class dataController extends Controller
{
    public function index()
    {
        return $request->all();


        $dataData = data::paginate(10);
        return view('data.index', compact('dataData'));
    }

    public function getKabupatenByProvinsi($provinsiId)
    {
        $kabupatens = kabupaten::where('id_provinsi', $provinsiId)->get();
        return response()->json($kabupatens);
    }

    public function getKecamatanByKabupaten($kabupatenId)
    {
        $kecamatans = kecamatan::where('id_kabupaten', $kabupatenId)->get();
        return response()->json($kecamatans);
    }

    public function create()
    {
        $provinsis = provinsi::all();
        $kabupatens = kabupaten::all();
        $kecamatans = kecamatan::all();
        return view('data.create', compact('provinsis', 'kabupatens', 'kecamatans'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'provinsi' => 'required',
            'kabupaten' => 'required',
            'kecamatan' => 'required',
            'irigasi' => 'required',
            'non_irigasi' => 'required',
            'sawah' => 'required',
            'tegal' => 'required',
            'ladang' => 'required',
            'sementara' => 'required',
            'tahun' => 'required',
        ]);

        
        $data = new data;
        $data->provinsi = $request->provinsi;
        $data->kabupaten = $request->kabupaten;
        $data->kecamatan = $request->kecamatan;
        $data->irigasi = $request->irigasi;
        $data->non_irigasi = $request->non_irigasi;
        $data->sawah = $request->sawah;
        $data->tegal = $request->tegal;
        $data->ladang = $request->ladang;
        $data->sementara = $request->sementara;
        $data->tahun = $request->tahun;
        $data->save();

        return redirect()->route('data.index')->with('success', 'Data berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $data = data::findOrFail($id);
        $provinsis = provinsi::all();
        $kabupatens = kabupaten::all();
        $kecamatans = kecamatan::all();
        return view('data.edit', compact('data','provinsis', 'kabupatens', 'kecamatans'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'provinsi' => 'required',
            'kabupaten' => 'required',
            'kecamatan' => 'required',
            'irigasi' => 'required',
            'non_irigasi' => 'required',
            'sawah' => 'required',
            'tegal' => 'required',
            'ladang' => 'required',
            'sementara' => 'required',
            'tahun' => 'required',
        ]);

        // Ambil data data berdasarkan ID
        $data = data::findOrFail($id);
        
        // Update atribut data dengan data dari request
        $data->provinsi = $request->provinsi;
        $data->kabupaten = $request->kabupaten;
        $data->kecamatan = $request->kecamatan;
        $data->irigasi = $request->irigasi;
        $data->non_irigasi = $request->non_irigasi;
        $data->sawah = $request->sawah;
        $data->tegal = $request->tegal;
        $data->ladang = $request->ladang;
        $data->sementara = $request->sementara;
        $data->tahun = $request->tahun;
        
        // Simpan perubahan
        $data->save();
        
        // Redirect ke index dengan pesan sukses
        return redirect()
            ->route('data.index')
            ->with('success', 'data successfully updated.');
    }


    public function destroy($id)
    {
        $data = data::findOrFail($id);
        $data->delete();

        if ($data) {
            return redirect()
                ->route('data.index')
                ->with([
                    'success' => 'data has been deleted successfully'
                ]);
        } else {
            return redirect()
                ->route('data.index')
                ->with([
                    'error' => 'Some problem has occurred, please try again'
                ]);
        }
    }
}
