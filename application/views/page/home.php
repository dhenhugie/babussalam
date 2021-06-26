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
                        <li class="active"><a href="<?= base_url() ?>">Home</a></li>
                        <li><a href="<?= base_url('daftar') ?>">Pendaftaran</a></li>
                        <li><a href="<?= base_url('masuk') ?>">Masuk</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <section class="flexslider">
            <ul class="slides">
                <li style="background-image: url(<?= base_url() ?>assets/img/slide_1.png)" class="overlay">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="probootstrap-slider-text text-center">
                                    <!-- <h1 class="probootstrap-heading probootstrap-animate">Your Bright Future is Our Mission</h1> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li style="background-image: url(<?= base_url() ?>assets/img/slide_2.png)" class="overlay">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="probootstrap-slider-text text-center">
                                    <!-- <h1 class="probootstrap-heading probootstrap-animate">Education is Life</h1> -->
                                </div>
                            </div>
                        </div>
                    </div>

                </li>
                <li style="background-image: url(<?= base_url() ?>assets/img/slide_3.png)" class="overlay">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="probootstrap-slider-text text-center">
                                    <!-- <h1 class="probootstrap-heading probootstrap-animate">Helping Each of Our Students Fulfill the Potential</h1> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </section>

        <section class="probootstrap-section probootstrap-section-colored">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-left section-heading probootstrap-animate">
                        <h2>Selamat Datang Di MA BABUSSALAM</h2>
                    </div>
                </div>
            </div>
        </section>

        <section class="probootstrap-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="probootstrap-flex-block">
                            <div class="probootstrap-text probootstrap-animate">
                                <h3>Tentang Sekolah</h3>
                                <p>Terwujudnya PKBM yang APIK dengan lulusan yang memiliki Akhlak, Prestasi, Ilmu dan Kreatif dalam mempertahankan seni dan budaya lokal, serta mampu bersaing di era globalisasi melalui peningkatan penguasaan terhadap Ilmu Pengetahuan dan Teknologi</p>
                                <p><a href="#" class="btn btn-primary">Learn More</a></p>
                            </div>
                            <div class="probootstrap-image probootstrap-animate" style="background-image: url(<?= base_url() ?>assets/img/slide_1.png)">
                                <!-- <a href="https://vimeo.com/45830194" class="btn-video popup-vimeo"><i class="icon-play3"></i></a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="probootstrap-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 text-center section-heading probootstrap-animate">
                        <h2>Galeri Sekolah</h2>
                        <!-- <p class="lead">Sed a repudiandae impedit voluptate nam Deleniti dignissimos perspiciatis nostrum porro nesciunt</p> -->
                    </div>
                </div>
                <!-- END row -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="portfolio-feed three-cols">
                            <div class="grid-sizer"></div>
                            <div class="gutter-sizer"></div>
                            <div class="probootstrap-gallery">
                                <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject" class="grid-item probootstrap-animate">
                                    <a href="img/gal_img_full_1.jpg" itemprop="contentUrl" data-size="1000x632">
                                        <img src="<?= base_url() ?>assets/img/gallery/1.png" itemprop="thumbnail" alt="Free Bootstrap Template by ProBootstrap.com" />
                                    </a>
                                    <figcaption itemprop="caption description">Image caption here</figcaption>
                                </figure>
                                <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject" class="grid-item probootstrap-animate">
                                    <a href="img/gal_img_full_2.jpg" itemprop="contentUrl" data-size="1000x632">
                                        <img src="<?= base_url() ?>assets/img/gallery/2.png" itemprop="thumbnail" alt="Free Bootstrap Template by ProBootstrap.com" />
                                    </a>
                                    <figcaption itemprop="caption description">Image caption here</figcaption>
                                </figure>
                                <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject" class="grid-item probootstrap-animate">
                                    <a href="img/gal_img_full_3.jpg" itemprop="contentUrl" data-size="1000x632">
                                        <img src="<?= base_url() ?>assets/img/gallery/3.png" itemprop="thumbnail" alt="Free Bootstrap Template by ProBootstrap.com" />
                                    </a>
                                    <figcaption itemprop="caption description">Image caption here</figcaption>
                                </figure>
                                <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject" class="grid-item probootstrap-animate">
                                    <a href="img/gal_img_full_4.jpg" itemprop="contentUrl" data-size="1000x667">
                                        <img src="<?= base_url() ?>assets/img/gallery/4.png" itemprop="thumbnail" alt="Free Bootstrap Template by ProBootstrap.com" />
                                    </a>
                                    <figcaption itemprop="caption description">Image caption here</figcaption>
                                </figure>
                                <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject" class="grid-item probootstrap-animate">
                                    <a href="img/gal_img_full_1.jpg" itemprop="contentUrl" data-size="1000x632">
                                        <img src="<?= base_url() ?>assets/img/gallery/5.png" itemprop="thumbnail" alt="Free Bootstrap Template by ProBootstrap.com" />
                                    </a>
                                    <figcaption itemprop="caption description">Image caption here</figcaption>
                                </figure>
                                <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject" class="grid-item probootstrap-animate">
                                    <a href="img/gal_img_full_2.jpg" itemprop="contentUrl" data-size="1000x632">
                                        <img src="<?= base_url() ?>assets/img/gallery/6.png" itemprop="thumbnail" alt="Free Bootstrap Template by ProBootstrap.com" />
                                    </a>
                                    <figcaption itemprop="caption description">Image caption here</figcaption>
                                </figure>
                                <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject" class="grid-item probootstrap-animate">
                                    <a href="img/gal_img_full_3.jpg" itemprop="contentUrl" data-size="1000x632">
                                        <img src="<?= base_url() ?>assets/img/gallery/7.png" itemprop="thumbnail" alt="Free Bootstrap Template by ProBootstrap.com" />
                                    </a>
                                    <figcaption itemprop="caption description">Image caption here</figcaption>
                                </figure>
                                <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject" class="grid-item probootstrap-animate">
                                    <a href="img/gal_img_full_4.jpg" itemprop="contentUrl" data-size="1000x667">
                                        <img src="<?= base_url() ?>assets/img/gallery/8.png" itemprop="thumbnail" alt="Free Bootstrap Template by ProBootstrap.com" />
                                    </a>
                                    <figcaption itemprop="caption description">Image caption here</figcaption>
                                </figure>
                                <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject" class="grid-item probootstrap-animate">
                                    <a href="img/gal_img_full_4.jpg" itemprop="contentUrl" data-size="1000x667">
                                        <img src="<?= base_url() ?>assets/img/gallery/9.png" itemprop="thumbnail" alt="Free Bootstrap Template by ProBootstrap.com" />
                                    </a>
                                    <figcaption itemprop="caption description">Image caption here</figcaption>
                                </figure>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </section>
        <section class="probootstrap-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 text-center section-heading probootstrap-animate">
                        <h2>MISI</h2>
                        <p class="lead">YAYASAN PENDIDIKAN DIAN PERSADA MA BABUSSALAM</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="service left-icon probootstrap-animate">
                            <div class="icon"><i class="icon-checkmark"></i></div>
                            <div class="text">
                                <!-- <h3>Consectetur Adipisicing</h3> -->
                                <p>Memberdayakan tenaga pendidik dan kependidikan yang memenuhi standar yang ditetapkan.</p>
                            </div>
                        </div>
                        <div class="service left-icon probootstrap-animate">
                            <div class="icon"><i class="icon-checkmark"></i></div>
                            <div class="text">
                                <!-- <h3>Aliquid Dolorum Saepe</h3> -->
                                <p>Menanamkan kedisiplinan melalui budaya bersih, budaya tertib, dan budaya kerja .</p>
                            </div>
                        </div>
                        <div class="service left-icon probootstrap-animate">
                            <div class="icon"><i class="icon-checkmark"></i></div>
                            <div class="text">
                                <!-- <h3>Eveniet Tempora Anisi</h3> -->
                                <p>Menumbuhkan penghayatan terhadap budaya dan seni daerah sehingga menjadi salah satu sumber kearifan berperilaku dan bermasyarakat.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="service left-icon probootstrap-animate">
                            <div class="icon"><i class="icon-checkmark"></i></div>
                            <div class="text">
                                <!-- <h3>Laboriosam Quod Dignissimos</h3> -->
                                <p>Menumbuhkan inovasi dalam kehidupan sehari-hari yang dapat menunjang pengembangan profesionalisme.</p>
                            </div>
                        </div>

                        <div class="service left-icon probootstrap-animate">
                            <div class="icon"><i class="icon-checkmark"></i></div>
                            <div class="text">
                                <!-- <h3>Asperiores Maxime Modi</h3> -->
                                <p>Menumbuhkan inovasi dalam kehidupan sehari-hari yang dapat menunjang pengembangan profesionalisme.</p>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- END row -->
            </div>
        </section>

        <section class="probootstrap-cta">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="probootstrap-animate" data-animate-effect="fadeInRight">Penerimaan siswa-siswi baru. Daftar Segera!</h2>
                        <a href="<?= base_url('daftar') ?>" role="button" class="btn btn-primary btn-lg btn-ghost probootstrap-animate" data-animate-effect="fadeInLeft">Daftar</a>
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
                                <li><strong>Home</strong></li>
                                <li><a href="<?= base_url('daftar') ?>">Pendaftaran</a></li>
                                <li><a href="<?= base_url('masuk') ?>">Masuk</a></li>
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