<?php if (!defined('BASEPATH')) exit('No Direct Script Access Allowed');

class Pengunjung_model extends CI_Model
{

    function __construct()
    {
        parent::__construct();
    }

    function get_count_hari($ids, $tgl)
    {
        $this->db->select('count(*) as allcount');
        $this->db->from('tb_pengunjung');
        if ($ids == "1") {
            $this->db->where('tanggal', $tgl);
        }
        $query = $this->db->get();
        $result = $query->result_array();
        return $result[0]['allcount'];
    }

    function get_data($id)
    {
        $this->db->select('*');
        $this->db->from('tb_pengunjung');
        $this->db->where('id', $id);
        $this->db->order_by('id', 'desc');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function add_pengunjung($params)
    {
        return $this->db->insert('tb_pengunjung', $params);
    }

    function get_data_id($tgl)
    {
        return $this->db->get_where('tb_pengunjung', array('tgl' => $tgl))->row_array();
    }
}
