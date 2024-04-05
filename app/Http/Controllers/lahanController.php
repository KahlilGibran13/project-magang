<?php

namespace App\Http\Controllers;
use App\Models\lahan;
use App\Models\provinsi;
use App\Models\kabupaten;
use App\Models\kecamatan;
use Illuminate\Http\Request;

class lahanController extends Controller
{
    public function index()
    {
        // return view ('lahan.index')->with([
        //     'lahan' => lahan::all(),
        // ]);
        $lahanData = lahan::paginate(10);
        return view('lahan.index', compact('lahanData'));
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
        return view('lahan.create', compact('provinsis', 'kabupatens', 'kecamatans'));
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

        
        $lahan = new Lahan;
        $lahan->provinsi = $request->provinsi;
        $lahan->kabupaten = $request->kabupaten;
        $lahan->kecamatan = $request->kecamatan;
        $lahan->irigasi = $request->irigasi;
        $lahan->non_irigasi = $request->non_irigasi;
        $lahan->sawah = $request->sawah;
        $lahan->tegal = $request->tegal;
        $lahan->ladang = $request->ladang;
        $lahan->sementara = $request->sementara;
        $lahan->tahun = $request->tahun;
        $lahan->save();

        return redirect()->route('lahan.index')->with('success', 'Data berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $lahan = lahan::findOrFail($id);
        $provinsis = provinsi::all();
        $kabupatens = kabupaten::all();
        $kecamatans = kecamatan::all();
        return view('lahan.edit', compact('lahan','provinsis', 'kabupatens', 'kecamatans'));
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

        // Ambil data lahan berdasarkan ID
        $lahan = lahan::findOrFail($id);
        
        // Update atribut lahan dengan data dari request
        $lahan->provinsi = $request->provinsi;
        $lahan->kabupaten = $request->kabupaten;
        $lahan->kecamatan = $request->kecamatan;
        $lahan->irigasi = $request->irigasi;
        $lahan->non_irigasi = $request->non_irigasi;
        $lahan->sawah = $request->sawah;
        $lahan->tegal = $request->tegal;
        $lahan->ladang = $request->ladang;
        $lahan->sementara = $request->sementara;
        $lahan->tahun = $request->tahun;
        
        // Simpan perubahan
        $lahan->save();
        
        // Redirect ke index dengan pesan sukses
        return redirect()
            ->route('lahan.index')
            ->with('success', 'Lahan successfully updated.');
    }


    public function destroy($id)
    {
        $data = lahan::findOrFail($id);
        $data->delete();

        if ($data) {
            return redirect()
                ->route('lahan.index')
                ->with([
                    'success' => 'Lahan has been deleted successfully'
                ]);
        } else {
            return redirect()
                ->route('lahan.index')
                ->with([
                    'error' => 'Some problem has occurred, please try again'
                ]);
        }
    }
}
