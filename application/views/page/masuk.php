<!DOCTYPE html>

<!-- 
  Theme Name: Enlight
  Theme URL: https://probootstrap.com/enlight-free-education-responsive-bootstrap-website-template
  Author: ProBootstrap.com
  Author URL: https://probootstrap.com
  License: Released for free under the Creative Commons Attribution 3.0 license (probootstrap.com/license)
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MA BABUSSALAM</title>

    <link rel="stylesheet" href="<?= base_url() ?>assets/fonts/css.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/styles-merged.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/style.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/custom.css">

</head>

<body>

    <div class="probootstrap-search" id="probootstrap-search">
        <a href="#" class="probootstrap-close js-probootstrap-close"><i class="icon-cross"></i></a>
        <form action="#">
            <input type="search" name="s" id="search" placeholder="Search a keyword and hit enter...">
        </form>
    </div>

    <div class="probootstrap-page-wrapper">
        <!-- Fixed navbar -->

        <nav class="navbar navbar-default probootstrap-navbar">
            <div class="container">
                <div class="navbar-header">
                    <div class="btn-more js-btn-more visible-xs">
                        <a href="#"><i class="icon-dots-three-vertical "></i></a>
                    </div>
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?= base_url() ?>" title="MA BABUSSALAM">MA BABUSSALAM</a>
                </div>

                <div id="navbar-collapse" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="<?= base_url() ?>">Home</a></li>
                        <li><a href="<?= base_url('daftar') ?>">Pendaftaran</a></li>
                        <li class="active"><a href="<?= base_url('masuk') ?>">Masuk</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <section class="probootstrap-section probootstrap-section-colored">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-left section-heading probootstrap-animate">
                        <h1 class="mb0">Masuk</h1>
                    </div>
                </div>
            </div>
        </section>



        <section class="probootstrap-section probootstrap-section-sm">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row probootstrap-gutter0">
                            <div class="col-md-4" id="probootstrap-sidebar">
                                <div class="probootstrap-sidebar-inner probootstrap-overlap probootstrap-animate">
                                    <h3>Pages</h3>
                                    <ul class="probootstrap-side-menu">
                                        <li><a href="<?= base_url() ?>">Home</a></li>
                                        <li><a href="<?= base_url('daftar') ?>">Pendaftaran</a></li>
                                        <li><strong>Masuk</strong></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-7 col-md-push-1  probootstrap-animate" id="probootstrap-content">
                                <h2>Masukan Profile Kamu</h2>
                                <p>Lengkapi profile dibawah ini sesuai dengan data pendaftaran</p>
                                <form action="<?= base_url('submit-masuk') ?>" method="post" class="probootstrap-form">
                                    <?php if ($this->session->flashdata('msg') != NULL) :
                                        echo $this->session->flashdata('msg');
                                    endif;
                                    ?>
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" id="email" name="email" required>
                                        <?php if (form_error('email')) {
                                            echo
                                            "<div class='invalid-feedback'>
                                                <i class='bx bx-radio-circle'></i>
                                                " . form_error('email') . "
                                            </div>";
                                        } ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="nisn">NISN</label>
                                        <input type="number" class="form-control" id="nisn" name="nisn" required>
                                        <?php if (form_error('nisn')) {
                                            echo
                                            "<div class='invalid-feedback'>
                                                <i class='bx bx-radio-circle'></i>
                                                " . form_error('nisn') . "
                                            </div>";
                                        } ?>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-primary btn-lg" id="submit" name="submit" value="Submit">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <footer class="probootstrap-footer probootstrap-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="probootstrap-footer-widget">
                            <!-- <h3>Latar Belakang Sekolah</h3>
                            <p>Berangkat dari Undang-Undanga no. 2 tahun 1989 dan Undang-Undang no. 20 tahun 2003, dapat disimpulkan bahwa pendidikan merupakan tanggung jawab semua pihak Bpk Sidik HS selaku tokoh masyarakat di lingkungan Kampung Pertanian yang terkenal dengan sebutan Kebon Singkong menyelenggarakan Sekolah Menengah Atas di wilayah Kelurahan Cipnang Pulogadung Jakarta Timur. Adapun Kelurahan Cipinang ini merupakan bagian dari wilayah kerja Suku Dinas Pendidikan Wilayah I Jakarta Timur</p> -->

                        </div>
                    </div>
                    <div class="col-md-3 col-md-push-1">
                        <div class="probootstrap-footer-widget">
                            <h3>Links</h3>
                            <ul>
                                <li><a href="<?= base_url() ?>">Home</a></li>
                                <li><a href="<?= base_url('masuk') ?>">Pendaftaran</a></li>
                                <li><strong>Masuk</strong></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="probootstrap-footer-widget">
                            <h3>Contact Info</h3>
                            <ul class="probootstrap-contact-info">
                                <li><i class="icon-location2"></i> <span>Jl. Mekarsari Km. 3 Dusun Cicurug, -, Kec. Cipaku, Kab. Ciamis Prov. Jawa Barat</span></li>
                                <li><i class="icon-mail"></i><span>ma.babussalam@gmail.com</span></li>
                                <li><i class="icon-phone2"></i><span>0265 20276447</span></li>
                            </ul>
                        </div>
                    </div>

                </div>
                <!-- END row -->

            </div>
        </footer>

    </div>
    <!-- END wrapper -->


    <script src="<?= base_url() ?>assets/js/scripts.min.js"></script>
    <script src="<?= base_url() ?>assets/js/main.min.js"></script>
    <script src="<?= base_url() ?>assets/js/custom.js"></script>
</body>

</html>