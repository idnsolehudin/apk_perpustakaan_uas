<?php if (!defined('BASEPATH')) exit('No Direct Script Access Allowed');

class Buku_model extends CI_Model
{

    function __construct()
    {
        parent::__construct();
    }

    function get_data_count()
    {
        $this->db->select('count(*) as allcount');
        $this->db->from('tb_buku');
        if (isset($_SESSION['search'])) {
            $kf = $_SESSION['search'];
            $this->db->like('judul_buku', $kf);
        }
        if (isset($_SESSION['filter_kategori'])) {
            $kf = $_SESSION['filter_kategori'];
            $this->db->like('kategori', $kf);
        }
        $query = $this->db->get();
        $result = $query->result_array();
        return $result[0]['allcount'];
    }

    function get_data_limit($rowno, $rowperpage)
    {
        $this->db->select('B.*,K.*');
        $this->db->from('tb_buku AS B');
        $this->db->join('tb_kategori AS K', 'B.kategori = K.id_kategori', 'left');
        $this->db->order_by('B.id', 'desc');
        if (isset($_SESSION['search'])) {
            $kf = $_SESSION['search'];
            $this->db->like('B.judul_buku', $kf);
        }
        if (isset($_SESSION['filter_kategori'])) {
            $kf = $_SESSION['filter_kategori'];
            $this->db->like('B.kategori', $kf);
        }
        $this->db->limit($rowperpage, $rowno);
        $query = $this->db->get();
        return $query->result_array();
    }

    function get_data_buku($id)
    {
        $this->db->select('*');
        $this->db->from('tb_buku');
        $this->db->where('id', $id);
        $this->db->order_by('id', 'asc');
        $query = $this->db->get();
        return $query->result_array();
    }

    function get_data_id($id)
    {
        return $this->db->get_where('tb_buku', array('id' => $id))->row_array();
    }

    function add_buku($params)
    {
        $this->db->insert('tb_buku', $params);
        return $this->db->insert_id();
    }
}
