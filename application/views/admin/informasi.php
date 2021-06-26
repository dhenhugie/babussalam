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
              <h1 class="m-0">Informasi</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="<?= base_url('informasi') ?>">Informasi</a></li>
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
            <div class="col-md-6">
              <!-- general form elements -->
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Informasi Biaya Pendaftaran</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="<?= base_url('submit-bank') ?>" method="POST">
                  <div class="card-body">
                    <div class="form-group">
                      <label for="norek">Nomor Rekening</label>
                      <input type="number" class="form-control" id="norek" name="norek" placeholder="Masukan Nomor Rekening" value="<?= $bank->norek ?>" required>
                    </div>
                    <div class="form-group">
                      <label for="nama">Nama</label>
                      <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan Nama Rekening" value="<?= $bank->nama ?>" required>
                    </div>
                    <div class="form-group">
                      <label for="bank">Bank</label>
                      <input type="text" class="form-control" id="bank" name="bank" placeholder="Masukan Nama Bank" value="<?= $bank->bank ?>" required>
                    </div>
                    <div class="form-group">
                      <label for="biaya">Biaya</label>
                      <input type="number" class="form-control" id="biaya" name="biaya" placeholder="Masukan Biaya" value="<?= $bank->biaya ?>" required>
                    </div>
                    <div class="form-group">
                      <label for="biaya">Rincian Biaya</label>
                      <textarea id="editor" name="detail">
                      <?= $bank->detail ?>
                      </textarea>
                    </div>
                  </div>
                  <!-- /.card-body -->

                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
              </div>
              <!-- /.card -->

            </div>
            <div class="col-md-6">
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Informasi MOPD</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="<?= base_url('submit-mopd') ?>" method="POST">
                  <div class="card-body">
                    <div class="form-group">
                      <label for="tempat">Tempat</label>
                      <input type="text" class="form-control" id="tempat" name="tempat" placeholder="Masukan Tempat" value="<?= $mopd->tempat ?>">
                    </div>
                    <div class="form-group">
                      <label for="hari">Hari</label>
                      <input type="text" class="form-control" id="hari" name="hari" placeholder="Masukan Hari" value="<?= $mopd->hari ?>">
                    </div>
                    <div class="form-group">
                      <label for="tanggal">Tanggal</label>
                      <input type="date" class="form-control" id="tanggal" name="tanggal" placeholder="Masukan Tanggal" value="<?= $mopd->tanggal ?>">
                    </div>
                  </div>
                  <!-- /.card-body -->

                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
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
  <script src="<?= base_url() ?>assets/js/vendor/ckeditor/ckeditor.js"></script>
  <!-- Page specific script -->
  <script>
    $(function() {
      $("#example1").DataTable({
        "responsive": true,
        "lengthChange": false,
        "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });

    function PrintElem(elem) {
      var mywindow = window.open('', 'PRINT', 'height=400,width=600');

      mywindow.document.write('<html><><title>' + document.title + '</title>');
      mywindow.document.write('</head><body >');
      mywindow.document.write('<h1>' + document.title + '</h1>');
      mywindow.document.write(document.getElementById(elem).innerHTML);
      mywindow.document.write('</body></html>');

      mywindow.document.close(); // necessary for IE >= 10
      mywindow.focus(); // necessary for IE >= 10*/

      mywindow.print();
      mywindow.close();

      return true;
    }

    function printdiv(printpage) {
      var headstr = "<html><head><title></title></head><body>";
      var footstr = "</body>";
      var newstr = document.all.item(printpage).innerHTML;
      var oldstr = document.body.innerHTML;
      document.body.innerHTML = headstr + newstr + footstr;
      window.print();
      document.body.innerHTML = oldstr;
      return false;

    }

    ClassicEditor
      .create(document.querySelector('#editor'))
      .catch(error => {
        console.error(error);
      });
  </script>
</body>

</html>