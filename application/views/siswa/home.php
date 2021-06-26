<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Language" content="en" />
    <meta name="msapplication-TileColor" content="#2d89ef">
    <meta name="theme-color" content="#4188c9">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <link rel="icon" href="./favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="./favicon.ico" />

    <title>Profile - MA BABUSSALAM</title>
    <link rel="stylesheet" href="<?= base_url() ?>assets/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/fonts/css.css">
    <script src="<?= base_url() ?>/assets/js/require.min.js"></script>
    <script>
        requirejs.config({
            baseUrl: '.'
        });
    </script>
    <!-- Dashboard Core -->
    <link href="<?= base_url() ?>/assets/css/dashboard.css" rel="stylesheet" />
    <script src="<?= base_url() ?>/assets/js/dashboard.js"></script>

    <!-- Input Mask Plugin -->
    <script src="<?= base_url() ?>/assets/plugins/input-mask/plugin.js"></script>
</head>

<body class="">
    <div class="page">
        <div class="page-main">
            <div class="header py-4">
                <div class="container">
                    <div class="d-flex">
                        <a class="header-brand" href="./index.html">
                            <img src="<?= base_url('assets/img/logo.png') ?>" class="header-brand-img" alt="tabler logo">
                        </a>
                        <div class="d-flex order-lg-2 ml-auto">
                            <div class="dropdown">
                                <a href="#" class="nav-link pr-0 leading-none" data-toggle="dropdown">
                                    <span class="avatar" style="background-image: url(<?= base_url('upload/profile/') . $profile->profile; ?>)"></span>
                                    <span class="ml-2 d-none d-lg-block">
                                        <span class="text-default"><?= $this->session->userdata('nama'); ?></span>
                                        <small class="text-muted d-block mt-1"><?= $this->session->userdata('nisn'); ?></small>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header collapse d-lg-flex p-0" id="headerMenuCollapse">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg order-lg-first">
                            <ul class="nav nav-tabs border-0 flex-column flex-lg-row">
                                <li class="nav-item">
                                    <a href="<?= base_url('dashboard') ?>" class="nav-link active"><i class="fas fa-home"></i> Dashboard</a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= base_url('pemberitahuan') ?>" class="nav-link"><i class="fas fa-bell"></i> Pemberitahuan</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="my-3 my-md-5">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card card-profile">
                                <div class="card-header"></div>
                                <div class="card-body text-center">
                                    <img class="card-profile-img" src="<?= base_url('upload/profile/') . $profile->profile ?>">
                                    <h3 class="mb-3"><?= $this->session->userdata('nama'); ?></h3>
                                    <p class="mb-4">
                                        <?= $this->session->userdata('nisn'); ?>
                                    </p>
                                    <a class="btn btn-outline-primary btn-sm" href="<?= base_url('siswa-logout') ?>">
                                        <i class="fas fa-sign-out-alt"></i> Logout
                                    </a>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">My Profile</h3>
                                </div>
                                <div class="card-body">
                                    <form>
                                        <div class="form-group">
                                            <label class="form-label">Email-Address</label>
                                            <input class="form-control" placeholder="your-email@domain.com" value="<?= $siswa->email ?>" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label">NISN</label>
                                            <input type="text" class="form-control" value="<?= $siswa->nisn ?>" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label">No Telepon</label>
                                            <input type="number" class="form-control" value="<?= $siswa->no_hp ?>" readonly>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <form class="card" action="<?= base_url('submit-profile') ?>" method="post" enctype="multipart/form-data">
                                <div class="card-body">
                                    <h3 class="card-title">Lengkapi Profil Kamu</h3>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <div class="form-label">Jenis Kelamin</div>
                                                <div class="custom-controls-stacked">
                                                    <label class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" class="custom-control-input" name="jk" value="1" <?= $profile->jk == 1 ? "checked" : "" ?>>
                                                        <span class="custom-control-label">Laki-laki</span>
                                                    </label>
                                                    <label class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" class="custom-control-input" name="jk" value="2" <?= $profile->jk == 2 ? "checked" : "" ?>>
                                                        <span class="custom-control-label">Perempuan</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4">
                                            <div class="form-group">
                                                <label class="form-label">Tempat Lahir</label>
                                                <input type="text" class="form-control <?= form_error('tempat_lahir') ? "is-invalid" : "" ?>" placeholder="Contoh : Bandung" value="<?= $profile->tempat_lahir ?>" name="tempat_lahir" required>
                                                <?php if (form_error('tempat_lahir')) {
                                                    echo "<div class='invalid-feedback'>" . form_error('tempat_lahir') . "</div>";
                                                } ?>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4">
                                            <div class="form-group">
                                                <label class="form-label <?= form_error('tanggal_lahir') ? "is-invalid" : "" ?>">Tanggal lahir</label>
                                                <input type="date" class="form-control" name="tanggal_lahir" value="<?= $profile->tgl_lahir ?>">
                                                <?php if (form_error('tanggal_hair')) {
                                                    echo "<div class='invalid-feedback'>" . form_error('tanggal_hair') . "</div>";
                                                } ?>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4">
                                            <div class="form-group">
                                                <label class="form-label">Asal Sekolah</label>
                                                <input type="text" class="form-control <?= form_error('asal_sekolah') ? "is-invalid" : "" ?>" placeholder="Contoh : SMPN 44 Banjaran" value="<?= $profile->asal_sekolah ?>" name="asal_sekolah" style="text-transform:uppercase" required>
                                                <?php if (form_error('asal_sekolah')) {
                                                    echo "<div class='invalid-feedback'>" . form_error('asal_sekolah') . "</div>";
                                                } ?>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4">
                                            <div class="form-group">
                                                <label class="form-label">Tahun Lulus</label>
                                                <input type="number" class="form-control<?= form_error('tahun_lulus') ? "is-invalid" : "" ?>" placeholder="Contoh : 2012" value="<?= $profile->tahun_lulus ?>" name="tahun_lulus" required>
                                                <?php if (form_error('tahun_lulus')) {
                                                    echo "<div class='invalid-feedback'>" . form_error('tahun_lulus') . "</div>";
                                                } ?>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4">
                                            <div class="form-group">
                                                <label class="form-label">Pilih Jurusan</label>
                                                <select class="form-control custom-select" name="jurusan" required>
                                                    <?php foreach ($jurusan as $key) { ?>
                                                        <option value="<?= $key->id ?>" <?= $key->id == $profile->jurusan ? "selected" : "" ?>><?= $key->nama_jurusan ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="form-label">Alamat</label>
                                                <input type="text" class="form-control <?= form_error('alamat') ? "is-invalid" : "" ?>" placeholder="Masukan Alamat Lengkap" value="<?= $profile->alamat ?>" name="alamat" required>
                                                <?php if (form_error('alamat')) {
                                                    echo "<div class='invalid-feedback'>" . form_error('alamat') . "</div>";
                                                } ?>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-6">
                                            <div class="form-group">
                                                <label class="form-label">Nama Ayah</label>
                                                <input type="text" class="form-control <?= form_error('nama_ayah') ? "is-invalid" : "" ?>" placeholder="Masukan Nama Ayah" value="<?= $profile->nama_ayah ?>" name="nama_ayah" required>
                                                <?php if (form_error('nama_ayah')) {
                                                    echo "<div class='invalid-feedback'>" . form_error('nama_ayah') . "</div>";
                                                } ?>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-6">
                                            <div class="form-group">
                                                <label class="form-label">Nama Ibu</label>
                                                <input type="text" class="form-control" placeholder="Masukan Nama Ibu" value="<?= $profile->nama_ibu ?>" name="nama_ibu" required>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-6">
                                            <div class="form-group">
                                                <label class="form-label">Pekerjaan Ayah</label>
                                                <input type="text" class="form-control" placeholder="Masukan Pekerjaan Ayah" value="<?= $profile->pekerjaan_ayah ?>" name="pekerjaan_ayah" required>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-6">
                                            <div class="form-group">
                                                <label class="form-label">Pekerjaan Ibu</label>
                                                <input type="text" class="form-control" placeholder="Masukan Pekerjaan Ibu" value="<?= $profile->pekerjaan_ibu ?>" name="pekerjaan_ibu" required>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-6">
                                            <div class="form-group">
                                                <div class="form-label">Foto Profile</div>
                                                <div class="custom-file">
                                                    <input type="file" class="form-control" id="profile" name="userfile[]">
                                                </div>
                                                <?php if ($profile->profile) { ?>
                                                    <div class="form-group mt-3">
                                                        <label>Saved : <a target="__blank" href="<?= base_url('upload/profile/') . $profile->profile ?>">Foto Profile</a></label>
                                                    </div>
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-6">
                                            <div class="form-group">
                                                <div class="form-label">Ijazah</div>
                                                <div class="custom-file">
                                                    <input type="file" class="form-control" id="ijazah" name="userfile[]">
                                                </div>
                                                <?php if ($profile->ijazah) { ?>
                                                    <div class="form-group mt-3">
                                                        <label>Saved : <a target="__blank" href="<?= base_url('upload/ijazah/') . $profile->ijazah ?>">Foto Ijazah</a></label>
                                                    </div>
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-6">
                                            <div class="form-group">
                                                <div class="form-label">SKHUN</div>
                                                <div class="custom-file">
                                                    <input type="file" class="form-control" id="skhun" name="userfile[]">
                                                </div>
                                                <?php if ($profile->skhun) { ?>
                                                    <div class="form-group mt-3">
                                                        <label>Saved : <a target="__blank" href="<?= base_url('upload/skhun/') . $profile->skhun ?>">Foto SKHUN</a></label>
                                                    </div>
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-6">
                                            <div class="form-group">
                                                <div class="form-label">Kartu Keluarga</div>
                                                <div class="custom-file">
                                                    <input type="file" name="userfile[]" id="kk" class="form-control">
                                                </div>
                                                <?php if ($profile->kk) { ?>
                                                    <div class="form-group mt-3">
                                                        <label>Saved : <a target="__blank" href="<?= base_url('upload/kk/') . $profile->kk ?>">Foto Kartu Keluarga</a></label>
                                                    </div>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php if ($siswa->status_daftar != 1 && $siswa->status_daftar != 2) { ?>
                                    <div class="card-footer text-right">
                                        <button type="submit" class="btn btn-primary">Update Profile</button>
                                    </div>
                                <?php } ?>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>