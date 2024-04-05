<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Lahan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .mb-3 {
          display: inline-block;
          width: 30%; /* Sesuaikan lebar sesuai kebutuhan */
          margin-right: 5px; /* Atur margin kanan jika diperlukan */
        }
      </style>
</head>
<body style="background-image: url('/Image/gta.png');"> 

<div class="container mt-4">
    <h1 class="text-center text-white mb-5">Edit Data Lahan</h1>
    <div class="card">
        <div class="card-body">
            <form action="{{ route('lahan.update', $lahan->id) }}" method="POST">
                @csrf
                @method('PUT')

                <!-- Field hidden untuk menyimpan ID -->
                <input type="hidden" name="id" value="{{ $lahan->id }}">
                
                <!-- Field Provinsi -->
                <div class="mb-3">
                    <label for="provinsi" class="form-label">Provinsi</label>
                    <select class="form-control" id="provinsi" name="provinsi">
                        <option value="">Pilih Provinsi</option>
                        @foreach($provinsis as $provinsi)
                            <option value="{{ $provinsi->id }}" @if($lahan->provinsi == $provinsi->id) selected @endif>{{ $provinsi->nama_provinsi }}</option>
                        @endforeach
                    </select>
                </div>

                <!-- Field Kabupaten -->
                <div class="mb-3">
                    <label for="kabupaten" class="form-label">Kabupaten</label>
                    <select class="form-control" id="kabupaten" name="kabupaten">
                        <option value="">Pilih Kabupaten</option>
                        @foreach($kabupatens as $kabupaten)
                            <option value="{{ $kabupaten->id }}" @if($lahan->kabupaten == $kabupaten->id) selected @endif>{{ $kabupaten->nama }}</option>
                        @endforeach
                    </select>
                </div>

                <!-- Field Kecamatan -->
                <div class="mb-3">
                    <label for="kecamatan" class="form-label">Kecamatan</label>
                    <select class="form-control" id="kecamatan" name="kecamatan">
                        <option value="">Pilih Kecamatan</option>
                        @foreach($kecamatans as $kecamatan)
                            <option value="{{ $kecamatan->id }}" @if($lahan->kecamatan == $kecamatan->id) selected @endif>{{ $kecamatan->nama }}</option>
                        @endforeach
                    </select>
                </div>

                <!-- Field Irigasi -->
                <div class="mb-3">
                    <label for="irigasi" class="form-label">Irigasi</label>
                    <input type="number" class="form-control" name="irigasi" value="{{ $lahan->irigasi }}" required placeholder="Irigasi">
                </div>

                <!-- Field Non Irigasi -->
                <div class="mb-3">
                    <label for="non_irigasi" class="form-label">Non Irigasi</label>
                    <input type="number" class="form-control" name="non_irigasi" value="{{ $lahan->non_irigasi }}" required placeholder="Non Irigasi">
                </div>

                <!-- Field Sawah -->
                <div class="mb-3">
                    <label for="sawah" class="form-label">Sawah</label>
                    <input type="number" class="form-control" name="sawah" value="{{ $lahan->sawah }}" required placeholder="Sawah">
                </div>

                <!-- Field Tegal -->
                <div class="mb-3">
                    <label for="tegal" class="form-label">Tegal</label>
                    <input type="number" class="form-control" name="tegal" value="{{ $lahan->tegal }}" required placeholder="Tegal">
                </div>

                <!-- Field Ladang -->
                <div class="mb-3">
                    <label for="ladang" class="form-label">Ladang</label>
                    <input type="number" class="form-control" name="ladang" value="{{ $lahan->ladang }}" required placeholder="Ladang">
                </div>

                <!-- Field Sementara -->
                <div class="mb-3">
                    <label for="sementara" class="form-label">Sementara</label>
                    <input type="number" class="form-control" name="sementara" value="{{ $lahan->sementara }}" required placeholder="Sementara">
                </div>

                <!-- Field Tahun -->
                <div class="mb-3">
                    <label for="tahun" class="form-label">Tahun</label>
                    <input type="number" class="form-control" name="tahun" value="{{ $lahan->tahun }}" required placeholder="Tahun">
                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary float-end">Update</button>
                  </div>
            </form>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function () {
        $('#provinsi').change(function () {
            var provinsiId = $(this).val();
            $('#kabupaten').empty();
            $.ajax({
                url: '/get-kabupaten/' + provinsiId,
                type: 'GET',
                dataType: 'json',
                success: function (data) {
                    $.each(data, function (key, value) {
                        $('#kabupaten').append('<option value="' + value.id + '">' + value.nama + '</option>');
                    });
                }
            });
        });

        $('#kabupaten').change(function () {
            var provinsiId = $(this).val();
            $('#kecamatan').empty();
            $.ajax({
                url: '/get-kecamatan/' + provinsiId,
                type: 'GET',
                dataType: 'json',
                success: function (data) {
                    $.each(data, function (key, value) {
                        $('#kecamatan').append('<option value="' + value.id + '">' + value.nama + '</option>');
                    });
                }
            });
        });
    });
</script>

</body>
</html>
