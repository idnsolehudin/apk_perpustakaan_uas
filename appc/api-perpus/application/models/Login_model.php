
<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Login_model extends CI_Model
{
  public function __construct()
  {
    parent::__construct();
    $this->load->database();
  }

  public function is_valid_mahasiswa_login($username, $password)
  {
    //$pass = sha1($password);
    $this->db->select('*');
    $this->db->from('tb_mahasiswa');
    $this->db->where('nim', $username);
    $this->db->where('password', $password);
    //$this->db->where('status', 1);
    $query = $this->db->get();
    return $query->row_array();
  }

  public function is_valid_regis($params)
  {
    return $this->db->insert('tb_pasien', $params);
  }
}
