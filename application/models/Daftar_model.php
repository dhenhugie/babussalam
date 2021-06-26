<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 *
 * Model Daftar_model
 *
 * This Model for ...
 * 
 * @package		CodeIgniter
 * @category	Model
 * @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
 * @link      https://github.com/setdjod/myci-extension/
 * @param     ...
 * @return    ...
 *
 */

class Daftar_model extends CI_Model
{

  // ------------------------------------------------------------------------

  public function __construct()
  {
    parent::__construct();
  }

  // ------------------------------------------------------------------------


  // ------------------------------------------------------------------------
  public function nomor_daftar()
  {
    return $this->db->query("SELECT CASE
      WHEN NUM < 10 THEN
        CONCAT('DFTR000',NUM)
      WHEN NUM < 100 THEN
        CONCAT('DFTR00',NUM)
      WHEN NUM < 1000 THEN
        CONCAT('DFTR0',NUM)
      WHEN NUM < 10000 THEN
        CONCAT('DFTR',NUM)
      WHEN NUM IS NULL THEN
        'DFTR0001'
    END AS NUM
    
    FROM (
        SELECT RIGHT(id_daftar, 4)+1 AS NUM
        FROM `tbl_pendaftaran`
        ORDER BY id_daftar DESC
        LIMIT 1
    ) AS Source");
  }

  function submit_daftar($dbdata)
  {
    $this->db->insert('tbl_pendaftaran', $dbdata);
    return $this->db->affected_rows();
  }

  function submit_siswa($dbdata)
  {
    $this->db->insert('tbl_siswa', $dbdata);
    return $this->db->affected_rows();
  }

  function submit_detail($dbdata)
  {
    $this->db->insert('tbl_detail_siswa', $dbdata);
    return $this->db->affected_rows();
  }

  function cek_login($email, $nisn)
  {
    return $this->db->query("SELECT nisn, email, nama
    FROM tbl_siswa
    WHERE email = '$email' AND `nisn` = '$nisn'");
  }

  function update_profile($dbdata, $where)
  {
    $this->db->where('nisn', $where);
    $this->db->update('tbl_detail_siswa', $dbdata);
    return $this->db->affected_rows();
  }

  function profile($nisn)
  {
    $this->db->select('*');
    $this->db->from('tbl_detail_siswa');
    $this->db->join('tbl_jurusan', 'tbl_detail_siswa.jurusan = tbl_jurusan.id', 'LEFT');
    $this->db->where('nisn', $nisn);
    return $this->db->get();
  }

  function siswa($nisn)
  {
    $this->db->select('*');
    $this->db->from('tbl_siswa');
    $this->db->where('nisn', $nisn);
    return $this->db->get();
  }

  function jurusan()
  {
    $this->db->select('*');
    $this->db->from('tbl_jurusan');
    return $this->db->get();
  }

  function upload_bukti($dbdata, $where)
  {
    $this->db->update('tbl_siswa', $dbdata);
    $this->db->where('nisn', $where);
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

  function nisn($nisn)
  {
    $this->db->select('nisn');
    $this->db->from('tbl_siswa');
    $this->db->where('nisn', $nisn);
    return $this->db->get();
  }
}
