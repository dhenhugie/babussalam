<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Area | MA BABUSSALAM</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url() ?>assets\fontawesome\css\all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->

  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item">
          <img src="<?= base_url('assets/img/logo.png') ?>" alt="MA BABUSSALAM">
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="<?= base_url() ?>" class="brand-link">
        <span class="brand-text font-weight-light">MA BABUSSALAM</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="info">
            <a href="#" class="d-block"><?= $this->session->userdata('nama'); ?></a>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item">
              <a href="<?= base_url('admin-area') ?>" class="nav-link active">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Dashboard
                </p>
              </a>
            </li>
            <li class="nav-header">PROSES PENDAFTARAN</li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-user-alt"></i>
                <p>
                  Pendaftaran
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="<?= base_url('pendaftaran/verifikasi') ?>" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Menunggu Verifikasi</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= base_url('pendaftaran/diterima') ?>" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Diterima</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= base_url('pendaftaran/ditolak') ?>" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Ditolak</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-money-bill-alt"></i>
                <p>
                  Pembayaran
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="<?= base_url('pembayaran/verifikasi') ?>" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Menunggu Verifikasi</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= base_url('pembayaran/diterima') ?>" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Diterima</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= base_url('pembayaran/ditolak') ?>" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Ditolak</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-header">DATA</li>
            <li class="nav-item">
              <a href="<?= base_url('siswa/diterima') ?>" class="nav-link">
                <i class=" nav-icon fas fa-file"></i>
                <p>
                  Siswa Diterima
                </p>
              </a>
            </li>
            <li class="nav-header">LAPORAN</li>
            <li class="nav-item">
              <a href="<?= base_url('laporan/siswa') ?>" class="nav-link">
                <i class=" nav-icon fas fa-file"></i>
                <p>
                  Laporan Siswa
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('laporan/keuangan') ?>" class="nav-link">
                <i class=" nav-icon fas fa-file"></i>
                <p>
                  Laporan Keuangan
                </p>
              </a>
            </li>
            <li class="nav-header">MASTER</li>
            <li class="nav-item">
              <a href="<?= base_url('jurusan') ?>" class="nav-link">
                <i class="nav-icon fas fa-code-branch"></i>
                <p>
                  Jurusan
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('informasi') ?>" class="nav-link">
                <i class="nav-icon fas fa-info-circle"></i>
                <p>
                  Informasi
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('logout') ?>" class="nav-link">
                <i class="nav-icon fas fa-sign-out-alt"></i>
                <p>
                  Logout
                </p>
              </a>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Laporan Keuangan</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">

              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Data Keuangan Pendaftaran Siswa Baru</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-header">
                  <div class="col-md-6 col-12">
                    <div class="form-group">
                      <div class="row">
                        <div class="col">
                          <label for="notelpepon">Dari Tanggal</label>
                          <input type="date" name="start" id="start" value="<?php echo date('Y-m-d'); ?>" class="form-control">
                        </div>
                        <div class="col">
                          <label for="poli">Sampai Tanggal</label>
                          <input type="date" name="end" id="end" value="<?php echo date('Y-m-d'); ?>" class="form-control">
                        </div>
                        <div class="col">
                          <label for="bawah">&nbsp;</label><br>
                          <button onclick="generate()" class="btn btn-primary" id="generate"> Generate</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>NISN</th>
                        <th>Nama</th>
                        <th>Total</th>
                        <th>Tanggal Bayar</th>
                        <th>Konfirmasi Pembayaran</th>
                        <th>Tanggal Konfirmasi</th>
                      </tr>
                    </thead>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- /.content -->
    </div>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->


  <!-- jQuery -->
  <script src="<?= base_url() ?>assets/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="<?= base_url() ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- DataTables  & Plugins -->
  <script src="<?= base_url() ?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="<?= base_url() ?>assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="<?= base_url() ?>assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="<?= base_url() ?>assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <script src="<?= base_url() ?>assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
  <script src="<?= base_url() ?>assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
  <script src="<?= base_url() ?>assets/plugins/jszip/jszip.min.js"></script>
  <script src="<?= base_url() ?>assets/plugins/pdfmake/pdfmake.min.js"></script>
  <script src="<?= base_url() ?>assets/plugins/pdfmake/vfs_fonts.js"></script>
  <script src="<?= base_url() ?>assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
  <script src="<?= base_url() ?>assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
  <script src="<?= base_url() ?>assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
  <!-- AdminLTE App -->
  <script src="<?= base_url() ?>assets/js/adminlte.min.js"></script>
  <!-- Page specific script -->
  <script>
    $(document).ready(function() {
      $('#table1').DataTable({
        dom: 'Bfrtip',
        buttons: [
          'print'
        ]
      });
    });

    function generate() {
      let start = $('#start').val();
      let end = $('#end').val();
      let url = "<?= base_url() ?>laporan/generate-keuangan?start=" + start + "&end=" + end;
      console.log(url)
      $('#example1').DataTable({
        "responsive": true,
        "lengthChange": false,
        "autoWidth": false,
        dom: 'Bfrtip',
        "buttons": ["excel", "pdf", "print"],
        responsive: true,
        destroy: true,
        "ajax": {
          url: url,
          type: 'GET'
        }
      });
    }

    $(function() {
      $("#example1").DataTable({
        "responsive": true,
        "lengthChange": false,
        "autoWidth": false,
        "buttons": ["excel", "pdf", "print"],
        dom: 'Bfrtip',
        // "buttons": [
        //   'print'
        // ],
      });

    });
  </script>
</body>

</html>