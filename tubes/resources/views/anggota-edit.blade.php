
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Manajemen Anggota &mdash; USIP</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <!-- CSS Libraries -->

  <!-- Template CSS -->
  <link rel="stylesheet" href="{{ asset('style/assets/css/style.css')}}">
  <link rel="stylesheet" href="{{ asset('style/assets/css/components.css')}}">
</head>

<body>
  <div id="app">
    <div class="main-wrapper">
    <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
          </ul>
          <div class="search-element">
            
            <div class="search-backdrop"></div>
            <div class="search-result">
              <div class="search-header">
                Histories
              </div>
              <div class="search-item">
                <a href="#">How to hack NASA using CSS</a>
                <a href="#" class="search-close"><i class="fas fa-times"></i></a>
              </div>
              <div class="search-item">
                <a href="#">Kodinger.com</a>
                <a href="#" class="search-close"><i class="fas fa-times"></i></a>
              </div>
              <div class="search-item">
                <a href="#">#Stisla</a>
                <a href="#" class="search-close"><i class="fas fa-times"></i></a>
              </div>
              <div class="search-header">
                Result
              </div>
              <div class="search-item">
                <a href="#">
                  <img class="mr-3 rounded" width="30" src="../assets/img/products/product-3-50.png" alt="product">
                  oPhone S9 Limited Edition
                </a>
              </div>
              <div class="search-item">
                <a href="#">
                  <img class="mr-3 rounded" width="30" src="../assets/img/products/product-2-50.png" alt="product">
                  Drone X2 New Gen-7
                </a>
              </div>
              <div class="search-item">
                <a href="#">
                  <img class="mr-3 rounded" width="30" src="../assets/img/products/product-1-50.png" alt="product">
                  Headphone Blitz
                </a>
              </div>
              <div class="search-header">
                Projects
              </div>
              <div class="search-item">
                <a href="#">
                  <div class="search-icon bg-danger text-white mr-3">
                    <i class="fas fa-code"></i>
                  </div>
                  Stisla Admin Template
                </a>
              </div>
              <div class="search-item">
                <a href="#">
                  <div class="search-icon bg-primary text-white mr-3">
                    <i class="fas fa-laptop"></i>
                  </div>
                  Create a new Homepage Design
                </a>
              </div>
            </div>
          </div>
        </form>
        
      </nav>
      <div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="/">MENU UTAMA</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="/">USIP</a>
          </div>
          <ul class="sidebar-menu">
              
              
              <li><a class="nav-link" href="/"><i class="fas fa-rocket"></i> <span>Dashboard</span></a></li>
              <li class="active"><a class="nav-link" href="/anggota"><i class="far fa-user"></i> <span>Manajamen Anggota</span></a></li>
              <li><a class="nav-link" href="/transaksi-simpanan"><i class="fas fa-th-large"></i> <span>Transaksi Simpanan</span></a></li>
              <li><a class="nav-link" href="/manajemen-bunga"><i class="far fa-file-alt"></i> <span>Manajamen Bunga</span></a></li>
              <li><a class="nav-link" href="/perhitungan-bunga"><i class="fas fa-th"></i> <span>Perhitungan Bunga</span></a></li>
              <li><a class="nav-link" href="/simpanan-bunga"><i class="fas fa-pencil-ruler"></i> <span>Simpanan & Bunga</span></a></li>
              
                
              
        </aside>
      </div>

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>MANAJEMEN ANGGOTA</h1>
          </div>
          
                <div class="card">
                  <form action="/anggota/{{$anggota->id}}" method="POST" class="needs-validation" novalidate="">
                  @csrf
                  @method('PUT')
                    <div class="card-header">
                      <h4>Formulir Tambah Anggota Baru</h4>
                    </div>
                    <div class="card-body">
                      <div class="form-group">
                        <label>Nama :</label>
                        <input type="text" class="form-control" id="nama" placeholder="Masukkan nama anda" name="nama" value ="{{$anggota->nama}}" required="">
                        <div class="invalid-feedback">
                          Masukkan nama anda!
                        </div>
                      </div>
                      <div class="form-group">
                        <label>Alamat :</label>
                        <input type="text" class="form-control" id="alamat" placeholder="Masukkan alamat anda" name="alamat" value ="{{$anggota->alamat}}" required="">
                        <div class="invalid-feedback">
                        Masukkan alamat anda!
                        </div>
                      </div>
                      <div class="form-group">
                        <label>Telepon :</label>
                        <input type="text" class="form-control" id="telepon" placeholder="Masukkan telepon anda" name="telepon" value ="{{$anggota->telepon}}" required="" >
                        <div class="invalid-feedback">
                        Masukkan nomor telepon anda!
                        </div>
                      </div>
                        <div class="form-group">
                        <label>Status :</label>
                        <select class="form-control" id="status" name="status">
                        <option>Pilih Status</option>
                        <option value = "1" @if($anggota->status == "1") SELECTED @endif>Aktif</option>
                        <option value = "2" @if($anggota->status == "2") SELECTED @endif>Pasif</option>
                      </select>
                    </div>
                      </div>
                    </div>
                    <div class="card-footer text-right">
                        <a href="/anggota" class="btn btn-icon icon-left btn-danger"><i class="fas fa-times"></i> Kembali</a>
                      <button class="btn btn-primary">Submit</button>
                  </form>
                </div>
              </div>
              
          </div>
        </section>
      </div>
      <footer class="main-footer">
      <div class="footer-right">
          2020 <div class="bullet"></div> By Regita Ariesti</a>
        </div>
      </footer>
    </div>
  </div>

  <!-- General JS Scripts -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="{{ asset('style/assets/js/stisla.js')}}"></script>

  <!-- JS Libraies -->

  <!-- Template JS File -->
  <script src="{{ asset('style/assets/js/scripts.js')}}"></script>
  <script src="{{ asset('style/assets/js/custom.js')}}"></script>

  <!-- Page Specific JS File -->
</body>
</html>
