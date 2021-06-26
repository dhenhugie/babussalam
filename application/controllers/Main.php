<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Main extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Daftar_model', 'model');
		$this->load->model('Admin_model', 'admin');
	}

	function index()
	{
		$this->load->view('page/home');
	}

	function daftar()
	{
		$this->load->library('form_validation');
		$this->load->view('page/daftar');
	}

	function submit_daftar()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nisn', 'NISN', 'required|exact_length[10]');
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('notelepon', 'Nomor Telepon', 'required');

		if ($this->form_validation->run() == TRUE) {
			$nomor_daftar = $this->model->nomor_daftar()->row();
			$nisn = $this->input->post('nisn');
			$nama = $this->input->post('nama');
			$email = $this->input->post('email');
			$notelepon = $this->input->post('notelepon');
			$cek = $this->model->nisn($nisn)->num_rows();
			if ($cek == 0) {
				$dbdaftar = array(
					'id_daftar' => $nomor_daftar->NUM ?: "DFTR0001",
					'nisn' => $nisn,
					'tgl_daftar' => date("Y-m-d H:i:s")
				);

				$dbsiswa = array(
					'nisn' => $nisn,
					'nama' => $nama,
					'no_hp' => $notelepon,
					'email' => $email,
				);

				$dbdetail = array(
					'nisn' => $nisn
				);

				$daftar = $this->model->submit_daftar($dbdaftar);
				$siswa = $this->model->submit_siswa($dbsiswa);
				$detail = $this->model->submit_detail($dbdetail);
				if ($daftar && $siswa && $detail) {
					redirect('masuk');
				}
			} else {
				$this->session->set_flashdata('msg', '<div class="alert alert-danger"><i class="bi bi-file-excel"></i> NISN sudah terdaftar</div>');
				redirect(base_url() . 'daftar');
			}
		} else {
			// redirect('daftar');
			$this->daftar();
		}
	}

	function masuk()
	{
		$this->load->library('form_validation');
		$this->load->view('page/masuk');
	}
	function cek_login()
	{
		$email = $this->input->post('email');
		$nisn = $this->input->post('nisn');
		$cek = $this->model->cek_login($email, $nisn)->row_array();
		if ($cek) {
			$this->session->set_userdata('email', $cek['email']);
			$this->session->set_userdata('nisn', $cek['nisn']);
			$this->session->set_userdata('nama', $cek['nama']);
			$this->session->set_userdata('LoggedIn', true);
			redirect(base_url('dashboard'));
		} else {
			$this->session->set_flashdata('msg', '<div class="alert alert-danger"><i class="bi bi-file-excel"></i> Email atau NISN yang kamu masukan tidak sesuai</div>');
			redirect(base_url() . 'masuk');
		}
	}

	//admin
	function masuk_admin()
	{
		$this->load->library('form_validation');
		$this->load->view('admin/login');
	}
	function cek_login_admin()
	{
		$email = $this->input->post('username');
		$password = $this->input->post('password');
		$cek = $this->admin->cek_login($email, md5($password))->row_array();
		if ($cek) {
			$this->session->set_userdata('username', $cek['username']);
			$this->session->set_userdata('nama', $cek['nama']);
			$this->session->set_userdata('LogAdmin', true);
			redirect(base_url('admin-area'));
		} else {
			$this->session->set_flashdata('msg', '<div class="alert alert-danger"><i class="bi bi-file-excel"></i> Username atau Password yang kamu masukan tidak sesuai</div>');
			redirect(base_url() . 'admin-login');
		}
	}
}
