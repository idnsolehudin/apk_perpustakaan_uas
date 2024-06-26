<?php if (!defined('BASEPATH')) exit('No Direct Script Access Allowed');

class Peminjaman_model extends CI_Model
{

    function __construct()
    {
        parent::__construct();
    }

    function get_count_pinjam($id)
    {
        $this->db->select('count(*) as allcount');
        $this->db->from('tb_peminjaman_item');
        $this->db->where('id_peminjam', $id);
        $query = $this->db->get();
        $result = $query->result_array();
        return $result[0]['allcount'];
    }

    function get_data($id)
    {
        $this->db->select('*');
        $this->db->from('tb_peminjaman');
        $this->db->where('id_mahasiswa', $id);
        $this->db->order_by('id', 'desc');
        $query = $this->db->get();
        return $query->result_array();
    }

    function get_data_peminjaman_buku($id_pinjam)
    {
        $this->db->select('*');
        $this->db->from('tb_peminjaman_item');
        $this->db->where('id_peminjam', $id_pinjam);
        $this->db->order_by('urutan', 'desc');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function add_peminjaman($params)
    {
        return $this->db->insert('tb_peminjaman', $params);
    }

    function get_data_id($id)
    {
        return $this->db->get_where('tb_pengaduan', array('ids' => $id))->row_array();
    }
}
