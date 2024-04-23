<!doctype html>
<html lang="en">
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MAGANG</title>
  <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('lte')}}/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="{{asset('lte')}}/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{asset('lte')}}/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{asset('lte')}}/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('lte')}}/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{asset('lte')}}/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{asset('lte')}}/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="{{asset('lte')}}/plugins/summernote/summernote-bs4.min.css">
  </head>
  <body>
    <!-- Your HTML content here -->
    
  
    <!-- JavaScript -->
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="{{asset('lte')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('lte')}}/dist/js/adminlte.min.js"></script>
    <!-- OPTIONAL SCRIPTS -->
    <!-- ChartJS -->
    <script src="{{asset('lte')}}/plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="{{asset('lte')}}/plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="{{asset('lte')}}/plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="{{asset('lte')}}/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="{{asset('lte')}}/plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="{{asset('lte')}}/plugins/moment/moment.min.js"></script>
    <script src="{{asset('lte')}}/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="{{asset('lte')}}/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="{{asset('lte')}}/plugins/summernote/summernote-bs4.min.js"></script>
  </body>
  </html>
  
    <!-- Your content here -->
    
  </body>
  </html>
  
   <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="index3.html" class="brand-link">
    <img
          src="/Image/logo2.png"
          alt="MDB Logo"
          loading="lazy"
          height="70"
        />
    <span class="brand-text font-weight-light">MAGANG</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <imgsrc="{{asset('lte')}}/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">Data Lahan</a>
      </div>
    </div>

    <!-- SidebarSearch Form -->
    <div class="form-inline">
      <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-sidebar">
            <i class="fas fa-search fa-fw"></i>
          </button>
        </div>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item menu-open">
          <a href="#" class="nav-link active">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="./index.html" class="nav-link active">
                <i class="far fa-circle nav-icon"></i>
                <p>Utama</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="./index2.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Diagram</p>
              </a>
            </li>
        
          </ul>
        </li>
        <li class="nav-item">
          <a href="pages/widgets.html" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
              Widgets
            </p>
          </a>
        </li>
       
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-chart-pie"></i>
            <p>
              Charts
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="pages/charts/chartjs.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>ChartJS</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="pages/charts/flot.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Flot</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="pages/charts/inline.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Inline</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="pages/charts/uplot.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>uPlot</p>
              </a>
            </li>
          </ul>
        </li>
        
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-tree"></i>
            <p>
              UI Elements
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="pages/UI/general.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>General</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="pages/UI/icons.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Icons</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="pages/UI/buttons.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Buttons</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="pages/UI/sliders.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Sliders</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="pages/UI/modals.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Modals & Alerts</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="pages/UI/navbar.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Navbar & Tabs</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="pages/UI/timeline.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Timeline</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="pages/UI/ribbons.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Ribbons</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-edit"></i>
            <p>
              Forms
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="pages/forms/general.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>General Elements</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="pages/forms/advanced.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Advanced Elements</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="pages/forms/editors.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Editors</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="pages/forms/validation.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Validation</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
         
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>
       <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__shake" src="{{asset('lte')}}/dist/img/pertanian.png" alt="pertanian.png" height="300" width="400">
    </div>
  
  
  {{-- <body style="background-color: #0d52e77c;">  --}}
    <body  Navbar -->
      <nav class="main-header navbar navbar-expand navbar-white navbar-light">
         <!-- Left navbar links -->
         <ul class="navbar-nav">
           <li class="nav-item">
             <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
           </li>
           <li class="nav-item d-none d-sm-inline-block">
             <a href="{{ route('lahan.index') }}" href="index3.html" class="nav-link">Home</a>
           </li>
           <li class="nav-item d-none d-sm-inline-block">
             <a href="#" class="nav-link">Contact</a>
           </li>
         </ul>
     
         <!-- Right navbar links -->
         <ul class="navbar-nav ml-auto">
           <!-- Navbar Search -->
           <li class="nav-item">
             <a class="nav-link" data-widget="navbar-search" href="#" role="button">
               <i class="fas fa-search"></i>
             </a>
             <div class="navbar-search-block">
               <form class="form-inline">
                 <div class="input-group input-group-sm">
                   <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                   <div class="input-group-append">
                     <button class="btn btn-navbar" type="submit">
                       <i class="fas fa-search"></i>
                     </button>
                     <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                       <i class="fas fa-times"></i>
                     </button>
                   </div>
                 </div>
               </form>
             </div>
           </li>
     
           <!-- Messages Dropdown Menu -->
           <li class="nav-item dropdown">
             <a class="nav-link" data-toggle="dropdown" href="#">
               <i class="far fa-comments"></i>
               <span class="badge badge-danger navbar-badge">3</span>
             </a>
             <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
               <a href="#" class="dropdown-item">
                 <!-- Message Start -->
                 <div class="media">
                   <img src="{{asset('lte')}}/dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                   <div class="media-body">
                     <h3 class="dropdown-item-title">
                       Kahlil Gibran
                       <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                     </h3>
                     <p class="text-sm">Call me if u urgent</p>
                     <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                   </div>
                 </div>
                 <!-- Message End -->
               </a>
               <div class="dropdown-divider"></div>
               <a href="#" class="dropdown-item">
                 <!-- Message Start -->
                 <div class="media">
                   <img src="{{asset('lte')}}/dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                   <div class="media-body">
                     <h3 class="dropdown-item-title">
                      Alefia Rini Mutmainnah
                       <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                     </h3>
                     <p class="text-sm">I got your message bro</p>
                     <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                   </div>
                 </div>
                 <!-- Message End -->
               </a>
               <div class="dropdown-divider"></div>
               <a href="#" class="dropdown-item">
                 <!-- Message Start -->
                 <div class="media">
                   <imgsrc="{{asset('lte')}}/dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                   <div class="media-body">
                     <h3 class="dropdown-item-title">
                       Nora Silvester
                       <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                     </h3>
                     <p class="text-sm">The subject goes here</p>
                     <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                   </div>
                 </div>
                 <!-- Message End -->
               </a>
               <div class="dropdown-divider"></div>
               <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
             </div>
           </li>
           <!-- Notifications Dropdown Menu -->
           <li class="nav-item dropdown">
             <a class="nav-link" data-toggle="dropdown" href="#">
               <i class="far fa-bell"></i>
               <span class="badge badge-warning navbar-badge">15</span>
             </a>
             <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
               <span class="dropdown-item dropdown-header">15 Notifications</span>
               <div class="dropdown-divider"></div>
               <a href="#" class="dropdown-item">
                 <i class="fas fa-envelope mr-2"></i> 4 new messages
                 <span class="float-right text-muted text-sm">3 mins</span>
               </a>
               <div class="dropdown-divider"></div>
               <a href="#" class="dropdown-item">
                 <i class="fas fa-users mr-2"></i> 8 friend requests
                 <span class="float-right text-muted text-sm">12 hours</span>
               </a>
               <div class="dropdown-divider"></div>
               <a href="#" class="dropdown-item">
                 <i class="fas fa-file mr-2"></i> 3 new reports
                 <span class="float-right text-muted text-sm">2 days</span>
               </a>
               <div class="dropdown-divider"></div>
               <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
             </div>
           </li>
           <li class="nav-item">
             <a class="nav-link" data-widget="fullscreen" href="#" role="button">
               <i class="fas fa-expand-arrows-alt"></i>
             </a>
           </li>
           <li class="nav-item">
             <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
               <i class="fas fa-th-large"></i>
             </a>
           </li>
         </ul>
       </nav>
       
    <div class="container mt-5">
      <!-- Gambar Logo -->
      <div class="d-flex justify-content-center">
        <img
          src="/Image/logo2.png"
          alt="MDB Logo"
          loading="lazy"
          height="180"
        />
      </div>
      <!-- Judul "Data Lahan" -->
      <div class="container mt-4">
           
      </div>
    </div>
    
  <body>

    <div class="container mt-9">
      <a href="{{ route('lahan.create') }}" class="btn btn-primary mb-3">Tambah Data</a>
      <div class="card">
        <div class="dropdown">
          <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
            Nasional
          </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
            <li><a class="dropdown-item" href="#">Kabupaten</a></li>
            <li><a class="dropdown-item" href="#">Kecamatan</a></li>
          </ul>
        </div>
          <div class="card-body table-responsive">
              <div class="row">
                  <div class="col-12">
                      <div class="card">
                          <div class="card-header">
                              <h3 class="card-title">Data Lahan</h3>
                              <div class="card-tools">
                                <form action="{{ route('lahan.index') }}" method="GET">
                                  <div class="input-group input-group-sm" style="width: 150px;">
                                </form>
                            
                                      <input type="text" id="search" class="form-control float-right" placeholder="Search">
                                      <div class="input-group-append">
                                          <button type="button" onclick="searchTable()" class="btn btn-default">
                                              <i class="fas fa-search"></i>
                                          </button>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <!-- /.card-header -->
                          <div class="card-body table-responsive p-0">
                              <table class="table table-hover text-nowrap" id="data_table">
                                  <thead>
                                      <tr>
                                          <th class="text-left">No</th>
                                          <th class="text-left">Provinsi</th>
                                          <th class="text-left">Kabupaten</th>
                                          <th class="text-left">Kecamatan</th>
                                          <th class="text-center">Irigasi</th>
                                          <th class="text-center">Non-Irigasi</th>
                                          <th class="text-center">Sawah</th>
                                          <th class="text-center">Tegal</th>
                                          <th class="text-center">Ladang</th>
                                          <th class="text-center">Sementara</th>
                                          <th class="text-center">Tahun</th>
                                          <th class="text-center"></th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      @foreach ($lahanData as $key => $hasil)
                                      <tr>
                                          <td class="text-left">{{ $loop->iteration }}</td>
                                          <td class="text-left">{{ \App\Models\Provinsi::find($hasil->provinsi)->nama_provinsi }}</td>
                                          <td class="text-left">{{ \App\Models\Kabupaten::find($hasil->kabupaten)->nama }}</td>
                                          <td class="text-left">{{ \App\Models\Kecamatan::find($hasil->kecamatan)->nama }}</td>
                                          <td class="text-center">{{ $hasil->irigasi }}</td>
                                          <td class="text-center">{{ $hasil->non_irigasi }}</td>
                                          <td class="text-center">{{ $hasil->sawah }}</td>
                                          <td class="text-center">{{ $hasil->tegal }}</td>
                                          <td class="text-center">{{ $hasil->ladang }}</td>
                                          <td class="text-center">{{ $hasil->sementara }}</td>
                                          <td class="text-center">{{ $hasil->tahun }}</td>
                                          <td class="text-center">
                                              <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('lahan.destroy', $hasil->id) }}" method="POST">
                                                  <a href="{{ route('lahan.edit', $hasil->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                                                  @csrf
                                                  @method('DELETE')
                                                  <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                              </form>
                                          </td>
                                      </tr>
                                      @endforeach
                                  </tbody>
                              </table>
                          </div>
                          <!-- /.card-body -->
                      </div>
                      <!-- /.card -->
                  </div>
              </div>
              <!-- Pagination -->
              {{ $lahanData->links() }}
          </div>
      </div>
  </div>
  
  <script>
      function searchTable() {
          var input, filter, table, tr, td, i, txtValue;
          input = document.getElementById("table_search");
          filter = input.value.toUpperCase();
          table = document.getElementById("data_table");
          tr = table.getElementsByTagName("tr");
  
          for (i = 0; i < tr.length; i++) {
              td = tr[i].getElementsByTagName("td")[0]; // Adjust the index according to your table structure
              if (td) {
                  txtValue = td.textContent || td.innerText;
                  if (txtValue.toUpperCase().indexOf(filter) > -1) {
                      tr[i].style.display = "";
                  } else {
                      tr[i].style.display = "none";
                  }
              }
          }
      }
  </script>
  
  
  
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
</footer>  </div>

  
</div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>