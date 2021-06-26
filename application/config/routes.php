<?php
defined('BASEPATH') or exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'main';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// daftar
$route['daftar']                                = 'main/daftar';
$route['submit-daftar']                         = 'main/submit_daftar';
//masuk
$route['masuk']                                = 'main/masuk';
$route['submit-masuk']                         = 'main/cek_login';

//page siswa login
$route['dashboard']                         = 'siswa/dashboard';
$route['pemberitahuan']                         = 'siswa/pemberitahuan';
$route['submit-profile']                         = 'siswa/update_profile';
$route['submit-bukti']                         = 'siswa/upload_bukti';
$route['siswa-logout']                        = 'siswa/logout';

// admin
$route['admin-login']                         = 'main/masuk_admin';
$route['submit-masuk-admin']                         = 'main/cek_login_admin';
$route['admin-area']                         = 'admin/index';
$route['detail-siswa/(:any)']             = 'admin/detail_siswa';
$route['terima-pembayaran/(:any)']             = 'admin/proses_pembayaran';
$route['tolak-pembayaran/(:any)']             = 'admin/proses_pembayaran';
$route['tolak/(:any)']             = 'admin/action';
$route['terima/(:any)']             = 'admin/action';


//pendaftaran
$route['pendaftaran/verifikasi']                         = 'admin/daftar_verifikasi';
$route['pendaftaran/ditolak']                         = 'admin/daftar_ditolak';
$route['pendaftaran/diterima']                         = 'admin/daftar_diterima';
//pembayaran
$route['pembayaran/verifikasi']                         = 'admin/bayar_verifikasi';
$route['pembayaran/ditolak']                         = 'admin/bayar_ditolak';
$route['pembayaran/diterima']                         = 'admin/bayar_diterima';

$route['siswa/diterima']                         = 'admin/siswa_diterima';
$route['jurusan']                         = 'admin/jurusan';
$route['simpan-jurusan']                        = 'admin/simpan_jurusan';
$route['hapus-jurusan/(:any)']                        = 'admin/hapus_jurusan';

$route['informasi']                        = 'admin/informasi';
$route['submit-bank']                        = 'admin/simpan_bank';
$route['submit-mopd']                        = 'admin/simpan_mopd';
$route['logout']                        = 'admin/logout';

$route['laporan/keuangan']                        = 'admin/laporan_keuangan';
$route['laporan/generate-keuangan']               = 'admin/generate_laporan_keuangan';
$route['laporan/siswa']                        = 'admin/laporan_siswa';
$route['laporan/generate-siswa']               = 'admin/generate_laporan_siswa';
