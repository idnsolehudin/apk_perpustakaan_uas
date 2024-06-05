<?php
defined('BASEPATH') or exit('No direct script access allowed');

class chome extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        login_timeout();
        $this->load->library('otherLibrary');
        $this->load->model('Mahasiswa_model');
    }

    public function index()
    {
        date_default_timezone_set('Asia/Makassar');
        $Date = date('Y-m-d');
        $data['hari_ini'] = $this->get_count_hari("1", $Date);
        $data['kemarin'] = $this->get_count_hari("1", date('Y-m-d', strtotime("-1 days")));
        $data['total'] = $this->get_count_hari("1", $Date) + $this->get_count_hari("1", date('Y-m-d', strtotime("-1 days")));
        $data['log'] = $this->get_data();

        $this->db->select('*');
        $this->db->from('tb_qrqode');
        $this->db->where('id', 1);
        $query = $this->db->get();
        $name = $query->row_array()["qr"];

        $this->load->library('ciqrcode'); //pemanggilan library QR CODE

        $config['cacheable']    = true; //boolean, the default is true
        $config['cachedir']     = './public/'; //string, the default is application/cache/
        $config['errorlog']     = './public/'; //string, the default is application/logs/
        $config['imagedir']     = './public/img/'; //direktori penyimpanan qr code
        $config['quality']      = true; //boolean, the default is true
        $config['size']         = '1024'; //interger, the default is 1024
        $config['black']        = array(224, 255, 255); // array, default is array(255,255,255)
        $config['white']        = array(70, 130, 180); // array, default is array(0,0,0)
        $this->ciqrcode->initialize($config);
        $image_name = "code" . '.png'; //buat name dari qr code sesuai dengan nim

        $params['data'] = $name; //data yang akan di jadikan QR CODE
        $params['level'] = 'H'; //H=High
        $params['size'] = 10;

        $params['savename'] = FCPATH . $config['imagedir'] . $image_name; //simpan image QR CODE ke folder assets/images/

        $this->ciqrcode->generate($params); // fungsi untuk generate QR CODE

        $isi =  $this->template->display('admin/content/home/vhomepj', $data);
        $this->load->view('admin/vutama', $isi);
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

    function get_data()
    {
        $this->db->select('*');
        $this->db->from('tb_pengunjung');
        $this->db->order_by('id', 'desc');
        $query = $this->db->get();
        return $query->result_array();
    }

    function qredit()
    {
        if (isset($_POST) && count($_POST) > 0) {
            $params = array(
                'qr' => $this->input->post('qr')
            );
            $this->db->where('id', 1);
            $this->db->update('tb_qrqode', $params);
            redirect('qr');
        } else {
            $this->db->select('*');
            $this->db->from('tb_qrqode');
            $this->db->where('id', 1);
            $query = $this->db->get();
            $name = $query->row_array()["qr"];
            $data['qr'] = $name;
            $isi =  $this->template->display('admin/content/qrcode/edit', $data);
            $this->load->view('admin/vutama', $isi);
        }
    }
}
