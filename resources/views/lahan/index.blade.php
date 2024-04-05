<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MAGANG</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  
    
  </head>
  
  {{-- <body style="background-color: #0d52e77c;">  --}}
    <body style="background-image: url('/Image/gta.png');"> 
    <nav class="navbar navbar-expand-lg" style="background-color: hsla(320, 91%, 57%, 0.664);">
        <div class="container-fluid">
          <a class="navbar-brand text-black" href="#">MAGANG</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
              <li class="nav-item">
                <a class="nav-link active text-black" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-black" href="#">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-black" href="#">Info</a>
              </li>
              <li class="nav-item dropdown">
               

            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
    </nav>
  
    <div class="container mt-5">
      <!-- Gambar Logo -->
      <div class="d-flex justify-content-center">
        <img
          src="/Image/logo2.png"
          alt="MDB Logo"
          loading="lazy"
          height="250"
        />
      </div>
      <!-- Judul "Data Lahan" -->
      <div class="container mt-9">
        <h1 class="text-center mb-5 text-white">Data Lahan </h1>
       
        
      </div>
    </div>
    
  <body>

    <div class="container mt-9">
      <a href="{{ route( 'lahan.create') }}" class="btn btn-primary mb-3">Tambah Data</a>
      
      <div class="card">
        <div class="card body">
          <table class="table">
            <thead>
              <th>No</th>
              <th>Provinsi</th>
              <th>Kabupaten</th>
              <th>Kecamatan</th>
              <th>Irigasi</th>
              <th>Non-Irigasi</th>
              <th>Sawah</th>
              <th>Tegal</th>
              <th>Ladang</th>
              <th>Sementara</th>
              <th>Tahun</th>
            </thead>
            <tbody>
                @foreach ($lahanData as $key => $hasil)
                    <tr>
                      <td>{{ $loop->iteration }}</td>
                      <th>{{ \App\Models\Provinsi::find($hasil->provinsi)->nama_provinsi }}</th>
                      <th>{{ \App\Models\Kabupaten::find($hasil->kabupaten)->nama }}</th>
                      <th>{{ \App\Models\Kecamatan::find($hasil->kecamatan)->nama }}</th>
                        <th>{{ $hasil->irigasi }}</th>
                        <th>{{ $hasil->non_irigasi}}</th>
                        <th>{{ $hasil->sawah }}</th>
                        <th>{{ $hasil->tegal }}</th>
                        <th>{{ $hasil->ladang }}</th>
                        <th>{{ $hasil->sementara}}</th>
                        <th>{{ $hasil->tahun}}</th>
                        <td>
                          <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                                action="{{ route('lahan.destroy', $hasil->id) }}" method="POST">
                                                <a href="{{ route('lahan.edit', $hasil->id) }}"
                                                  class="btn btn-sm btn-primary">EDIT
                                                </a>
                                                
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                            </form>
                          
                          
                        </td>
                    </tr>     
                  @endforeach
            </tbody>
          </table>
          {{ $lahanData->links() }}
        </div>
      </div>

    </div>
   <style>
  .about-text {
    text-align: center;
  }
</style>
<footer class="text-center">
  <h1>
    <h1></h1>
  </h1>
</footer>
<h4 class="text-center mb-5 text-white">Project Magang</h4>
    <nav aria-label="Page navigation example">
      <ul class="pagination justify-content-center">
        <li class="page-item disabled">
      
        <li class="page-item">

        </li>
      </ul>
    </nav>
    
  </div>

  
</div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>