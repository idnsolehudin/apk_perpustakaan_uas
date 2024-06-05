<?php

use Restserver\Libraries\REST_Controller;

defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class Buku extends REST_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Buku_model');
    }

    public function buku_filter_get()
    {
        $k = $_GET['k'];
        $j = $_GET['j'];
        if (empty($k) && empty($j)) {
            $ids = "1";
        } else if (empty($j)) {
            $ids = "2";
        } else if (empty($k)) {
            $ids = "3";
        } else if ($k === null && $j === null) {
            $ids = "2";
        } else {
            $ids = "2";
        }

        $data = $this->Buku_model->get_buku_filter($ids, $j, $k);
        if ($data) {
            $this->response([
                'status' => true,
                'message' => 'sukses menampilkan data',
                'payload' => $data
            ], REST_Controller::HTTP_OK);
        } else {
            $this->response([
                'status' => true,
                'message' => 'gagal menampilkan data',
                'payload' => null
            ], REST_Controller::HTTP_NOT_FOUND);
        }
    }

    public function buku_detail_get($id)
    {
        $data = $this->Buku_model->get_data_id($id);

        if ($data) {
            $this->response([
                'status' => true,
                'message' => 'sukses menampilkan data',
                'payload' => $data
            ], REST_Controller::HTTP_OK);
        } else {
            $this->response([
                'status' => true,
                'message' => 'gagal menampilkan data',
                'payload' => null
            ], REST_Controller::HTTP_NOT_FOUND);
        }
    }
}
