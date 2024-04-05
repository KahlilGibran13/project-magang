<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  
    <style>
      .mb-3 {
        display: inline-block;
        width: 30%; /* Sesuaikan lebar sesuai kebutuhan */
        margin-right: 6px; /* Atur margin kanan jika diperlukan */
      }
    </style>
  </head>

  <body style="background-image: url('/Image/gta.png');"> 
    {{-- <nav class="navbar navbar-expand-lg" style="background-color: hsla(320, 91%, 57%, 0.664);">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
              <li class="nav-item">
                <!-- Navbar items here -->
              </li>
            </ul>
          </div>
        </div>
    </nav> --}}

    <div class="container mt-3">
      <h1 class="text-center text-white mb-4">Data Lahan </h1>
      <a href="{{ route( 'lahan.index') }}" class="btn btn-primary mb-4">Data Lahan</a>
      <div class="card">
        <div class="card-body">
          <form action="{{ route('lahan.store') }}" method="POST">
              @csrf
              
              <div class="mb-3">
                <label for="provinsi" class="form-label">Provinsi</label>
                <select class="form-control" id="provinsi" name="provinsi">
                  <option value="">Pilih Provinsi</option>
                  @foreach($provinsis as $provinsi)
                    <option value="{{ $provinsi->id }}">{{ $provinsi->nama_provinsi }}</option>
                  @endforeach
                </select>
              </div>
              <div class="mb-3">
                <label for="kabupaten" class="form-label">Kabupaten</label>
                <select class="form-control" id="kabupaten" name="kabupaten">
                  <option value="">Pilih Kabupaten</option>
                </select>
              </div>
              <div class="mb-3">
                <label for="kecamatan" class="form-label">Kecamatan</label>
                <select class="form-control" id="kecamatan" name="kecamatan">
                  <option value="">Pilih Kecamatan</option>
                </select>
              </div>
              <div class="mb-3">
                <label for="irigasi" class="form-label">Irigasi</label>
                <input type="number" class="form-control" name="irigasi" value="{{ old('irigasi') }}" required placeholder="irigasi">
              </div>
              <div class="mb-3">
                <label for="non_irigasi" class="form-label">Non Irigasi</label>
                <input type="number" class="form-control" name="non_irigasi" value="{{ old('non_irigasi') }}" required placeholder="Non Irigasi">
              </div>
              <div class="mb-3">
                <label for="sawah" class="form-label">Sawah</label>
                <input type="number" class="form-control" name="sawah" value="{{ old('sawah') }}" required placeholder="Sawah">
              </div>
              <div class="mb-3">
                <label for="tegal" class="form-label">Tegal</label>
                <input type="number" class="form-control" name="tegal" value="{{ old('tegal') }}" required placeholder="Tegal">
              </div>
              <div class="mb-3">
                <label for="ladang" class="form-label">Ladang</label>
                <input type="number" class="form-control" name="ladang" value="{{ old('ladang') }}" required placeholder="Ladang">
              </div>
              <div class="mb-3">
                <label for="sementara" class="form-label">Sementara</label>
                <input type="number" class="form-control" name="sementara" value="{{ old('sementara') }}" required placeholder="Sementara">
              </div>
              <div class="mb-3">
                <label for="tahun" class="form-label">Tahun</label>
                <input type="number" class="form-control" name="tahun" value="{{ old('tahun') }}" required placeholder="Tahun">
              </div>
              <div class="card-footer">
                <button type="submit" class="btn btn-primary float-end">Simpan</button>
              </div>
          </form>
        </div>
      </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

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
