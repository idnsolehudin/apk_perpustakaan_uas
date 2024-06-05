<?php if (!defined('BASEPATH')) exit('No Direct Script Access Allowed');

class Mahasiswa_model extends CI_Model
{

    function __construct()
    {
        parent::__construct();
    }

    function get_data_count()
    {
        $this->db->select('count(*) as allcount');
        $this->db->from('tb_rekam');
        $query = $this->db->get();
        $result = $query->result_array();
        return $result[0]['allcount'];
    }

    function get_data()
    {
        $this->db->select('*');
        $this->db->from('tb_mahasiswa');
        $this->db->order_by('id', 'asc');
        $query = $this->db->get();
        return $query->result_array();
    }

    function get_data_masuk()
    {
        $this->db->select('*');
        $this->db->from('tb_user');
        $this->db->where('status', 0);
        $this->db->order_by('id_user', 'asc');
        $query = $this->db->get();
        return $query->result_array();
    }

    function get_data_id($id)
    {
        return $this->db->get_where('tb_mahasiswa', array('id' => $id))->row_array();
    }

    function add_mahasiswa($params)
    {
        $this->db->insert('tb_mahasiswa', $params);
        return $this->db->insert_id();
    }

    function delete_admin($id)
    {
        return $this->db->delete('tb_administrator', array('id' => $id));
    }
}
