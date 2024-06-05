<?php

use Restserver\Libraries\REST_Controller;

defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class Pengunjung extends REST_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pengunjung_model');
    }

    public function index_get()
    {
        date_default_timezone_set('Asia/Makassar');
        $Date = date('Y-m-d');
        $params = array(
            'hari_ini' => $this->Pengunjung_model->get_count_hari("1", $Date),
            'kemarin' => $this->Pengunjung_model->get_count_hari("1", date('Y-m-d', strtotime("-1 days"))),
            'total' => $this->Pengunjung_model->get_count_hari("1", $Date) + $this->Pengunjung_model->get_count_hari("1", date('Y-m-d', strtotime("-1 days")))
            // 'total' => $this->Pengunjung_model->get_count_hari("0", "$Date")
        );

        if ($params) {
            $this->response([
                'status' => true,
                'message' => 'sukses menampilkan data',
                'payload' => $params
            ], REST_Controller::HTTP_OK);
        } else {
            $this->response([
                'status' => true,
                'message' => 'gagal menampilkan data',
                'payload' => null
            ], REST_Controller::HTTP_NOT_FOUND);
        }
    }

    public function pengunjunglist_get($idMhs)
    {
        $this->db->select('*');
        $this->db->from('tb_pengunjung');
        $this->db->where('id_mahasiswa', $idMhs);
        $query = $this->db->get();
        $ret = $query->result_array();

        foreach ($ret as $row) {
            $dataar[] = array(
                'id' => $row['id'],
                'tanggal' => $row['tanggal'],
                'hari' => 'Hari ' . getHari($row['tanggal'])
            );
        }

        if ($dataar) {
            $this->response([
                'status' => true,
                'message' => 'sukses menampilkan data',
                'payload' => $dataar
            ], REST_Controller::HTTP_OK);
        } else {
            $this->response([
                'status' => true,
                'message' => 'gagal menampilkan data',
                'payload' => null
            ], REST_Controller::HTTP_NOT_FOUND);
        }
    }

    public function pengunjung_post()
    {
        date_default_timezone_set('Asia/Makassar');
        $Date = date('Y-m-d H:i:s');
        $params = array(
            'id_mahasiswa' => $this->post('id_mahasiswa'),
            'tanggal' => $Date
        );

        $this->db->select('*');
        $this->db->from('tb_qrqode');
        $this->db->where('id', 1);
        $query = $this->db->get();
        $name = $query->row_array()["qr"];
        $qr = $name;
        if ($this->post('qr') == $qr) {
            $this->Pengunjung_model->add_pengunjung($params);
        }

        if ($params) {
            $this->response([
                'status' => true,
                'message' => 'sukses menampilkan data',
                'payload' => "sukses"
            ], REST_Controller::HTTP_OK);
        } else {
            $this->response([
                'status' => false,
                'message' => 'gagal menampilkan data',
                'payload' => "gagal"
            ], REST_Controller::HTTP_NOT_FOUND);
        }
    }
}
