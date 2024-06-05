<?php if (!defined('BASEPATH')) exit('No Direct Script Access Allowed');

class Buku_model extends CI_Model
{

    function __construct()
    {
        parent::__construct();
    }

    function get_buku_filter($ids, $judul, $kategori)
    {
        $new = str_replace('%20', ' ', $judul);

        $this->db->select('B.*,K.*');
        $this->db->from('tb_buku AS B');
        $this->db->join('tb_kategori AS K', 'B.kategori = K.id_kategori', 'left');
        $this->db->order_by('B.id', 'desc');

        if ($ids == "1") {
            // $this->db->like('B.judul_buku', $new);
            // $this->db->where('B.kategori', $kategori);
        } else if ($ids == "2") {
            $this->db->like('B.judul_buku', $new);
            $this->db->where('B.kategori', $kategori);
        } else if ($ids == "3") {
            $this->db->like('B.judul_buku', $new);
        }


        $query = $this->db->get();
        return $query->result_array();
    }

    public function add_peminjaman($params)
    {
        return $this->db->insert('tb_peminjaman', $params);
    }

    function get_data_id($id)
    {
        return $this->db->get_where('tb_buku', array('id' => $id))->row_array();
    }
}
