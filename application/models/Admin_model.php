<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_model extends CI_Model
{

  // ------------------------------------------------------------------------

  public function __construct()
  {
    parent::__construct();
  }

  function cek_login($email, $password)
  {
    return $this->db->query("SELECT username, nama
    FROM tbl_admin
    WHERE username = '$email' AND `password` = '$password'");
  }


  public function siswa()
  {
    $this->db->select('*');
    $this->db->from('tbl_siswa');
    $this->db->join('tbl_pendaftaran', 'tbl_pendaftaran.nisn = tbl_siswa.nisn');
    return $this->db->get();
  }

  function detail_siswa($nisn)
  {
    $this->db->select('*');
    $this->db->from('tbl_siswa');
    $this->db->join('tbl_detail_siswa', 'tbl_detail_siswa.nisn = tbl_siswa.nisn', 'left');
    $this->db->join('tbl_jurusan', 'tbl_detail_siswa.jurusan = tbl_jurusan.id', 'left');
    $this->db->where('tbl_siswa.nisn', $nisn);
    return $this->db->get();
  }

  function proses_pembayaran($dbdata, $nisn)
  {
    $this->db->update('tbl_siswa', $dbdata);
    $this->db->where('nisn', $nisn);
    return $this->db->affected_rows();
  }

  function pendaftaran_siswa($where)
  {
    return $this->db->query("SELECT * FROM tbl_siswa LEFT JOIN tbl_pendaftaran on tbl_pendaftaran.nisn = tbl_siswa.nisn WHERE $where");
  }

  function jurusan()
  {
    $this->db->select('*');
    $this->db->from('tbl_jurusan');
    return $this->db->get();
  }

  function simpan_jurusan($dbdata)
  {
    $this->db->insert('tbl_jurusan', $dbdata);
    return $this->db->affected_rows();
  }
  function hapus_jurusan($where)
  {
    $this->db->where('id', $where);
    $this->db->delete('tbl_jurusan');
    return $this->db->affected_rows();
  }
  function bank()
  {
    $this->db->select("*");
    $this->db->from('tbl_bank');
    return $this->db->get();
  }
  function mopd()
  {
    $this->db->select("*");
    $this->db->from('tbl_mopd');
    return $this->db->get();
  }
  function simpan_bank($dbdata)
  {
    $this->db->update('tbl_bank', $dbdata);
    return $this->db->affected_rows();
  }
  function simpan_mopd($dbdata)
  {
    $this->db->update('tbl_mopd', $dbdata);
    return $this->db->affected_rows();
  }

  function laporan_keuangan($where)
  {
    return $this->db->query("SELECT nisn, nama, (SELECT biaya from tbl_bank) AS total, tgl_bayar, approve_pembayaran, tgl_approve
    FROM `tbl_siswa`
    where approve_pembayaran = '1' and $where");
  }

  function laporan_siswa($where)
  {
    return $this->db->query("SELECT tbl_siswa.nisn, nama, email, jk, asal_sekolah, tgl_daftar, status_daftar, tgl_update_status
    FROM tbl_siswa
    INNER JOIN tbl_pendaftaran ON tbl_pendaftaran.nisn = tbl_siswa.nisn
    INNER JOIN tbl_detail_siswa det on det.nisn = tbl_siswa.nisn
    WHERE $where");
  }
}
