<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Siswa extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Daftar_model', 'model');
		if ($this->session->userdata('LoggedIn') == false) {
			redirect('masuk');
		}
	}

	function dashboard()
	{
		$this->load->library('form_validation');
		$data['siswa'] = $this->model->siswa($this->session->userdata('nisn'))->row();
		$data['profile'] = $this->model->profile($this->session->userdata('nisn'))->row();
		$data['jurusan'] = $this->model->jurusan()->result();
		$this->load->view('siswa/home', $data);
	}

	function update_profile()
	{
		$this->load->library('form_validation');
		$this->load->library('upload');
		$this->form_validation->set_rules('jk', 'Jenis Kelamin');
		$this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required');
		$this->form_validation->set_rules('tanggal_lahir', 'Tempat Lahir', 'required');
		$this->form_validation->set_rules('tahun_lulus', 'Tahun Lulus', 'required');
		$this->form_validation->set_rules('jurusan', 'Jurusan', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		$this->form_validation->set_rules('nama_ayah', 'Nama Ayah', 'required');
		$this->form_validation->set_rules('nama_ibu', 'Nama Ibu', 'required');
		$this->form_validation->set_rules('pekerjaan_ayah', 'Pekerjaan Ayah', 'required');
		$this->form_validation->set_rules('pekerjaan_ibu', 'Pekerjaan Ibu', 'required');

		if ($this->form_validation->run() == TRUE) {
			$profile = $this->model->profile($this->session->userdata('nisn'))->row();

			$nisn = $this->session->userdata('nisn');
			$jk = $this->input->post('jk');
			$tempat_lahir = $this->input->post('tempat_lahir');
			$tanggal_lahir = $this->input->post('tanggal_lahir');
			$asal_sekolah = $this->input->post('asal_sekolah');
			$tahun_lulus = $this->input->post('tahun_lulus');
			$jurusan = $this->input->post('jurusan');
			$alamat = $this->input->post('alamat');
			$nama_ayah = $this->input->post('nama_ayah');
			$nama_ibu = $this->input->post('nama_ibu');
			$pekerjaan_ayah = $this->input->post('pekerjaan_ayah');
			$pekerjaan_ibu = $this->input->post('pekerjaan_ibu');

			$dataInfo = array();
			$files = $_FILES;
			$cpt = count($_FILES['userfile']['name']);
			for ($i = 0; $i < $cpt; $i++) {
				$_FILES['userfile']['name'] = $nisn . '_' . $files['userfile']['name'][$i];
				$_FILES['userfile']['type'] = $files['userfile']['type'][$i];
				$_FILES['userfile']['tmp_name'] = $files['userfile']['tmp_name'][$i];
				$_FILES['userfile']['error'] = $files['userfile']['error'][$i];
				$_FILES['userfile']['size'] = $files['userfile']['size'][$i];

				$this->upload->initialize($this->set_upload_options($i));
				$this->upload->do_upload();
				$dataInfo[] = $this->upload->data();
			}

			$dbdata = array(
				'nisn' => $nisn,
				'tempat_lahir' => $tempat_lahir,
				'tgl_lahir' => $tanggal_lahir,
				'alamat' => $alamat,
				'jk' => $jk,
				'nama_ayah' => $nama_ayah,
				'nama_ibu' => $nama_ibu,
				'pekerjaan_ayah' => $pekerjaan_ayah,
				'pekerjaan_ibu' => $pekerjaan_ibu,
				'jurusan' => $jurusan,
				'asal_sekolah' => $asal_sekolah,
				'tahun_lulus' => $tahun_lulus,
				'profile' => $dataInfo[0]['file_name'] ?: $profile->profile,
				'ijazah' => $dataInfo[1]['file_name'] ?: $profile->ijazah,
				'skhun' => $dataInfo[2]['file_name'] ?: $profile->skhun,
				'kk' => $dataInfo[3]['file_name'] ?: $profile->kk,
			);
			$this->model->update_profile($dbdata, $nisn);
			redirect('dashboard');
		} else {
			// echo validation_errors();
			$this->dashboard();
		}
	}

	private function set_upload_options($type)
	{
		//upload an image options
		$config = array();
		if ($type == 0) {
			$config['upload_path'] = './upload/profile/';
		} else if ($type == 1) {
			$config['upload_path'] = './upload/ijazah/';
		} else if ($type == 2) {
			$config['upload_path'] = './upload/skhun/';
		} else if ($type == 3) {
			$config['upload_path'] = './upload/kk/';
		} else if ($type == 4) {
			$config['upload_path'] = './upload/bukti/';
		}

		$config['allowed_types'] = 'gif|jpg|jpeg|png';
		$config['max_size']      = '0';
		$config['overwrite']     = true;

		return $config;
	}

	function pemberitahuan()
	{
		$data['profile'] = $this->model->profile($this->session->userdata('nisn'))->row();
		$data['siswa'] = $this->model->siswa($this->session->userdata('nisn'))->row();
		$data['bank'] = $this->model->bank()->row();
		$data['mopd'] = $this->model->mopd()->row();
		$this->load->view('siswa/pemberitahuan', $data);
	}

	function upload_bukti()
	{
		$this->load->library('upload');
		$nisn = $this->session->userdata('nisn');
		$dataInfo = array();
		$files = $_FILES;
		$cpt = count($_FILES['userfile']['name']);
		for ($i = 0; $i < $cpt; $i++) {
			$_FILES['userfile']['name'] = $nisn . '_' . $files['userfile']['name'][$i];
			$_FILES['userfile']['type'] = $files['userfile']['type'][$i];
			$_FILES['userfile']['tmp_name'] = $files['userfile']['tmp_name'][$i];
			$_FILES['userfile']['error'] = $files['userfile']['error'][$i];
			$_FILES['userfile']['size'] = $files['userfile']['size'][$i];

			$this->upload->initialize($this->set_upload_options(4));
			$this->upload->do_upload();
			$dataInfo[] = $this->upload->data();
		}
		$dbdata = array(
			'pembayaran' => 1,
			'tgl_bayar' => date("Y-m-d H:i:s"),
			'bukti_pembayaran' => $dataInfo[0]['file_name']
		);

		$result = $this->model->upload_bukti($dbdata, $nisn);
		if ($result) {
			redirect('pemberitahuan');
		}
	}

	function logout()
	{
		$this->session->sess_destroy();
		redirect();
	}
}
