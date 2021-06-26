<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Admin_model', 'model');
		if ($this->session->userdata('LogAdmin') == false) {
			redirect('admin-login');
		}
	}

	function index()
	{
		if ($this->session->userdata('LogAdmin')) {
			$data['siswa'] = $this->model->siswa()->result();
			$this->load->view('admin/index', $data);
		} else {
			$this->load->view('admin/login');
		}
	}

	function detail_siswa()
	{
		$nisn = $this->uri->segment(2);
		$data['siswa'] = $this->model->detail_siswa($nisn)->row();
		// print_r($data['siswa']);
		$this->load->view('admin/detail', $data);
	}

	function proses_pembayaran()
	{
		$action = $this->uri->segment(1);
		$nisn = $this->uri->segment(2);
		$dbdata = array(
			'approve_pembayaran' => $action == 'terima-pembayaran' ? 1 : 2,
			'tgl_approve' => date("Y-m-d H:i:s")
		);
		$result = $this->model->proses_pembayaran($dbdata, $nisn);
		redirect('detail-siswa/' . $nisn);
	}

	function daftar_verifikasi()
	{
		$data['siswa'] = $this->model->pendaftaran_siswa("status_daftar IS NULL")->result();
		$this->load->view('admin/index', $data);
	}

	function daftar_diterima()
	{
		$data['siswa'] = $this->model->pendaftaran_siswa("status_daftar = 1")->result();
		$this->load->view('admin/index', $data);
	}

	function daftar_ditolak()
	{
		$data['siswa'] = $this->model->pendaftaran_siswa("status_daftar = 2")->result();
		$this->load->view('admin/index', $data);
	}

	function bayar_verifikasi()
	{
		$data['siswa'] = $this->model->pendaftaran_siswa("approve_pembayaran IS NULL")->result();
		$this->load->view('admin/index', $data);
	}

	function bayar_ditolak()
	{
		$data['siswa'] = $this->model->pendaftaran_siswa("approve_pembayaran = 2")->result();
		$this->load->view('admin/index', $data);
	}

	function bayar_diterima()
	{
		$data['siswa'] = $this->model->pendaftaran_siswa("approve_pembayaran = 1")->result();
		$this->load->view('admin/index', $data);
	}

	function siswa_diterima()
	{
		$data['siswa'] = $this->model->pendaftaran_siswa("status_daftar = 1 AND approve_pembayaran = 1")->result();
		$this->load->view('admin/index', $data);
	}

	function jurusan()
	{
		$data['jurusan'] = $this->model->jurusan()->result();
		$this->load->view('admin/jurusan', $data);
	}

	function simpan_jurusan()
	{
		$jurusan = $this->input->post('jurusan');
		$dbdata = array('nama_jurusan' => $jurusan);
		$result = $this->model->simpan_jurusan($dbdata);
		if ($result) {
			redirect('jurusan');
		}
	}
	function hapus_jurusan()
	{
		$jurusan = $this->uri->segment(2);
		$result = $this->model->hapus_jurusan($jurusan);
		if ($result) {
			redirect('jurusan');
		}
	}

	function informasi()
	{
		$data['bank'] = $this->model->bank()->row();
		$data['mopd'] = $this->model->mopd()->row();
		$this->load->view('admin/informasi', $data);
	}

	function simpan_bank()
	{
		$dbdata = array(
			'norek' => $this->input->post('norek'),
			'bank' => $this->input->post('bank'),
			'nama' => $this->input->post('nama'),
			'biaya' => $this->input->post('biaya'),
			'detail' => $this->input->post('detail'),

		);

		$result = $this->model->simpan_bank($dbdata);
		if ($result) {
			redirect('informasi');
		}
	}
	function simpan_mopd()
	{
		$dbdata = array(
			'tempat' => $this->input->post('tempat'),
			'hari' => $this->input->post('hari'),
			'tanggal' => $this->input->post('tanggal'),

		);

		$result = $this->model->simpan_mopd($dbdata);
		if ($result) {
			redirect('informasi');
		} else {
			print_r($dbdata);
		}
	}

	function action()
	{
		$action = $this->uri->segment('1');
		$nisn = $this->uri->segment('2');
		$dbdata = array(
			'status_daftar' => $action == "terima" ? 1 : 2
		);
		$result = $this->model->proses_pembayaran($dbdata, $nisn);
		if ($result) {
			redirect('detail-siswa/' . $nisn);
		}
	}
	function logout()
	{
		$this->session->sess_destroy();
		redirect('admin-login');
	}

	function laporan_keuangan()
	{
		$this->load->view('admin/laporan-keuangan');
	}

	function generate_laporan_keuangan()
	{
		$start = isset($_GET['start']) ? $_GET['start'] : "";
		$end = isset($_GET['end']) ? $_GET['end'] : "";
		$where = "tgl_bayar >= '$start 00:00:00' AND tgl_bayar <= '$end 23:59:59'";
		$keuangan = $this->model->laporan_keuangan($where);
		$data = array();
		$total = 0;
		foreach ($keuangan->result() as $a) {
			$data[] = array(
				$a->nisn,
				$a->nama,
				$a->total,
				$a->tgl_bayar,
				$a->approve_pembayaran == 1 ? "Diterima" : "Ditolak",
				$a->tgl_approve
			);
			$total += $a->total;
		}
		$data[] = array(
			"<b>Total</b>",
			"",
			"<b>" . $total . "</b>",
			"",
			"",
			"",
		);

		$output = array(
			"draw" => "",
			"recordsTotal" => $keuangan->num_rows(),
			"recordsFiltered" => $keuangan->num_rows(),
			"data" => $data,
		);

		echo json_encode($output);
	}

	function laporan_siswa()
	{
		$this->load->view('admin/laporan-siswa');
	}

	function generate_laporan_siswa()
	{
		$start = isset($_GET['start']) ? $_GET['start'] : "";
		$end = isset($_GET['end']) ? $_GET['end'] : "";
		$where = "tgl_daftar >= '$start 00:00:00' AND tgl_daftar <= '$end 23:59:59'";
		$siswa = $this->model->laporan_siswa($where);
		$data = array();
		foreach ($siswa->result() as $a) {
			$status = "";
			if ($a->status_daftar == 1) {
				$status = "Diterima";
			} else if ($a->status_daftar == null) {
				$status = "Menunggu Verifikasi";
			} else if ($a->status_daftar == 2) {
				$status = "Ditolak";
			}
			$data[] = array(
				$a->nisn,
				$a->nama,
				$a->email,
				$a->jk == 1 ? "Laki-laki" : "Perempuan",
				$a->asal_sekolah,
				$a->tgl_daftar,
				$status,
				$a->tgl_update_status,
			);
		}

		$output = array(
			"draw" => "",
			"recordsTotal" => $siswa->num_rows(),
			"recordsFiltered" => $siswa->num_rows(),
			"data" => $data,
		);

		echo json_encode($output);
	}
}
