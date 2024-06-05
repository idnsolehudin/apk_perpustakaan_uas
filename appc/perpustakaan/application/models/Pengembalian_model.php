<?php if (!defined('BASEPATH')) exit('No Direct Script Access Allowed');

class Pengembalian_model extends CI_Model
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

    function get_data_count($id)
    {
        $this->db->select('count(*) as allcount');
        $this->db->from('tb_rekam');
        $this->db->where('status', $id);
        $query = $this->db->get();
        $result = $query->result_array();
        return $result[0]['allcount'];
    }

    function get_data()
    {
        $this->db->select('*');
        $this->db->from('tb_pengembalian');
        $this->db->where('status_kembali', 0);
        $this->db->order_by('id', 'desc');
        $query = $this->db->get();
        return $query->result_array();
    }

    function get_data_log()
    {
        $this->db->select('*');
        $this->db->from('tb_pengembalian');
        $this->db->where('status_kembali', 1);
        $this->db->order_by('id', 'desc');
        $query = $this->db->get();
        return $query->result_array();
    }

    function get_data_peminjaman_buku($id)
    {
        $this->db->select('*');
        $this->db->from('tb_peminjaman_item');
        $this->db->where('id_peminjam', $id);
        $this->db->order_by('urutan', 'desc');
        $query = $this->db->get();
        return $query->result_array();
    }

    function get_data_pengembalian()
    {
        $this->db->select('*');
        $this->db->from('tb_transaksi');
        $this->db->where('status', 2);
        $this->db->order_by('id_transaksi', 'desc');
        $query = $this->db->get();
        return $query->result_array();
    }

    function get_data_perbulan($month, $year)
    {
        $sql = "SELECT COUNT(id) as y FROM tb_rekam where month(tgl) = $month AND year(tgl) = $year AND status=1";
        $query = $this->db->query($sql);
        $data = $query->row_array();
        return $data;
    }

    function get_data_id($id)
    {
        return $this->db->get_where('tb_pengembalian', array('id' => $id))->row_array();
    }

    function get_data_user_id($id)
    {
        return $this->db->get_where('tb_user', array('id_user' => $id))->row_array();
    }

    function get_data_inventaris_id($id)
    {
        return $this->db->get_where('tb_inventaris', array('id' => $id))->row_array();
    }

    function add_transaksi($params)
    {
        $this->db->insert('tb_transaksi', $params);
        return $this->db->insert_id();
    }

    function delete_info($id)
    {
        return $this->db->delete('tb_info', array('id' => $id));
    }
}
