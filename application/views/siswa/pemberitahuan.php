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
                                    <a href="<?= base_url('dashboard') ?>" class="nav-link"><i class="fas fa-home"></i> Dashboard</a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= base_url('pemberitahuan') ?>" class="nav-link active"><i class="fas fa-bell"></i> Pemberitahuan</a>
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
                            <?php if ($siswa->approve_pembayaran == 1 && $siswa->status_daftar == 1 && $siswa->pembayaran == 1) { ?>
                                <div class="card">
                                    <ul class="list-group card-list-group">
                                        <li class="list-group-item py-5">
                                            <div class="media">
                                                <div class="media-object avatar avatar-md mr-4"><i class="fas fa-handshake"></i></div>
                                                <div class="media-body">
                                                    <div class="media-heading">
                                                        <small class="float-right text-muted">12 min</small>
                                                        <h5>Pembayaran anda telah kami terima</h5>
                                                    </div>
                                                    <div>
                                                        <p>
                                                            Dengan ini kami nyatakan bahwa anda telah diterima menjadi salahsatu siswa di MA BABUSSALAM.<br>
                                                            Silahkan untuk mengikuti jadwa MOPD yang akan diadakan pada :
                                                        <table style="width: 100%;" class="mt-3 mb-3">
                                                            <tbody>
                                                                <tr>
                                                                    <td style="width: 33.3333%;">Hari</td>
                                                                    <td style="width: 4.1096%;">:</td>
                                                                    <td style="width: 62.3288%;"><strong><?= $mopd->hari ?></strong></td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width: 33.3333%;">Tanggal</td>
                                                                    <td style="width: 4.1096%;">:</td>
                                                                    <td style="width: 62.3288%;"><strong><?= $mopd->tanggal ?></strong></td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width: 33.3333%;">Tempat</td>
                                                                    <td style="width: 4.1096%;">:</td>
                                                                    <td style="width: 62.3288%;"><strong><?= $mopd->tempat ?></strong></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        Sekian informasi dari kami,<br>
                                                        Terimakasih.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            <?php } ?>
                            <?php if ($siswa->status_daftar == 1 || $siswa->status_daftar == 2) ?>
                            <div class="card">
                                <ul class="list-group card-list-group">
                                    <li class="list-group-item py-5">
                                        <div class="media">
                                            <?php if ($siswa->status_daftar == 1) { ?>
                                                <div class="media-object avatar avatar-md mr-4" style="color: green;"><i class="fas fa-bell"></i></div>
                                                <div class="media-body">
                                                    <div class="media-heading">
                                                        <small class="float-right text-muted"><?= $siswa->tgl_update_status ?></small>
                                                        <h5 style="color: green;">Selemat, Anda pendaftaran anda telah diterima</h5>
                                                    </div>
                                                    <div>
                                                        <p>
                                                            Selamat, Untuk calon pendaftar peserta didik dengan :
                                                        <table style="width: 100%;" class="mt-3 mb-3">
                                                            <tbody>
                                                                <tr>
                                                                    <td style="width: 33.3333%;">NISN</td>
                                                                    <td style="width: 4.1096%;">:</td>
                                                                    <td style="width: 62.3288%;"><strong><?= $siswa->nisn ?></strong></td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width: 33.3333%;">Nama</td>
                                                                    <td style="width: 4.1096%;">:</td>
                                                                    <td style="width: 62.3288%;"><strong><?= $siswa->nama ?></strong> </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        telah lulus dalam seleksi karna telah memenuhi standart yang di tentukan pada penerimaan siswa/siswi di MA BABUSSALAM. Silahkan untuk melakukan pembayaran administrasi.
                                                        </p>
                                                    </div>
                                                </div>
                                            <?php } else if ($siswa->status_daftar == 2) { ?>
                                                <div class="media-object avatar avatar-md mr-4" style="color: red;"><i class="fas fa-bell"></i></div>
                                                <div class="media-body">
                                                    <div class="media-heading">
                                                        <small class="float-right text-muted"><?= $siswa->tgl_update_status ?></small>
                                                        <h5 style="color: red;">Mohon maaf, anda tidak lolos seleksi</h5>
                                                    </div>
                                                    <div>
                                                        Mohon maaf, Untuk calon pendaftar peserta didik dengan :
                                                        <table style="width: 100%;" class="mb-3">
                                                            <tbody>
                                                                <tr>
                                                                    <td style="width: 33.3333%;">NISN</td>
                                                                    <td style="width: 4.1096%;">:</td>
                                                                    <td style="width: 62.3288%;"><strong><?= $siswa->nisn ?></strong></td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width: 33.3333%;">Nama</td>
                                                                    <td style="width: 4.1096%;">:</td>
                                                                    <td style="width: 62.3288%;"><strong><?= $siswa->nama ?></strong> </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        tidak lulus dalam seleksi pendaftaran di MA BABUSSALAM, Dikarenakan calon perserta tidak memenuhi standart pada penerimaan siswa/siswi di MA BABUSSALAM
                                                    </div>
                                                </div>
                                            <?php } else { ?>
                                                <div class="media-body">
                                                    <div>
                                                        Pendaftaran anda sedang diproses, silahkan menunggu!
                                                    </div>
                                                </div>
                                            <?php } ?>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <?php if ($siswa->status_daftar == 1) { ?>
                                <div class="card">
                                    <ul class="list-group card-list-group">
                                        <li class="list-group-item py-5">
                                            <div class="media">
                                                <div class="media-object avatar avatar-md mr-4"><i class="far fa-money-bill-alt"></i></div>
                                                <div class="media-body">
                                                    <div class="media-heading">
                                                        <small class="float-right text-muted"><?= $siswa->tgl_update_status ?></small>
                                                        <h5>Pembayaran</h5>
                                                    </div>
                                                    <div>
                                                        <p>Silahkan melakukan pembayaran ke nomor rekening berikut untuk melanjutkan proses pendaftaran :</p>
                                                        <table style="width: 100%;">
                                                            <tbody>
                                                                <tr>
                                                                    <td style="width: 33.3333%;">Nomor Rekening</td>
                                                                    <td style="width: 4.1096%;">:</td>
                                                                    <td style="width: 62.3288%;"><strong><?= $bank->norek ?></strong></td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width: 33.3333%;">Nama</td>
                                                                    <td style="width: 4.1096%;">:</td>
                                                                    <td style="width: 62.3288%;"><strong><?= $bank->nama ?></strong></td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width: 33.3333%;">Bank</td>
                                                                    <td style="width: 4.1096%;">:</td>
                                                                    <td style="width: 62.3288%;"><strong><?= $bank->bank ?></strong></td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width: 33.3333%;">Nominal</td>
                                                                    <td style="width: 4.1096%;">:</td>
                                                                    <td style="width: 62.3288%;"><strong><?= $bank->biaya ?></strong></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div style="width: 100%; margin-top: 50px;">
                                                        <table style="width: 100%;">
                                                            <tbody>
                                                                <tr style="vertical-align: top;">
                                                                    <td style="width: 33.3333%;">Rincian Biaya</td>
                                                                    <td style="width: 4.1096%;">:</td>
                                                                    <td style="width: 62.3288%;"><strong><?= $bank->detail ?></strong></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card">
                                    <ul class="list-group card-list-group">
                                        <li class="list-group-item py-5">
                                            <div class="media">
                                                <div class="media-object avatar avatar-md mr-4"><i class="far fa-money-bill-alt"></i></div>
                                                <div class="media-body">
                                                    <div class="media-heading">
                                                        <h5>Upload Bukti Transfer</h5>
                                                    </div>
                                                    <form action="<?= base_url('submit-bukti') ?>" method="post" enctype="multipart/form-data">
                                                        <div>
                                                            <p>Silahkan upload bukti pembayaran yang telah anda lakukan ke rekening diatas</p>
                                                            <div class="form-group">
                                                                <div class="custom-file">
                                                                    <input type="file" class="form-control" id="bukti" name="userfile[]" required>
                                                                </div>
                                                                <?php if ($siswa->pembayaran) { ?>
                                                                    <div class="form-group mt-3">
                                                                        <label><b>Bukti Pembayaran : <a target="__blank" href="<?= base_url('upload/bukti/') . $siswa->bukti_pembayaran ?>">Bukti Pembayaran</a></b></label>
                                                                    </div>
                                                                <?php } ?>
                                                            </div>
                                                        </div>
                                                        <?php if ($siswa->approve_pembayaran != 1) { ?>
                                                            <div class="media-footer">
                                                                <button class="btn btn-primary" type="submit">Upload</button>
                                                            </div>
                                                        <?php } ?>
                                                    </form>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            <?php } ?>
                            <!-- <div class="card">
                                <ul class="list-group card-list-group">
                                    <li class="list-group-item py-5">
                                        <div class="media">
                                            <div class="media-object avatar avatar-md mr-4"><i class="fas fa-bell"></i></div>
                                            <div class="media-body">
                                                <div class="media-heading">
                                                    <small class="float-right text-muted">12 min</small>
                                                    <h5>Peter Richards</h5>
                                                </div>
                                                <div>
                                                    Donec id elit non mi porta gravida at eget metus. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Cum sociis natoque penatibus et magnis dis
                                                    parturient montes, nascetur ridiculus mus. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>