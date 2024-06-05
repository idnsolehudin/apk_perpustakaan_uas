<?php

use Restserver\Libraries\REST_Controller;

defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class Peminjaman extends REST_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Peminjaman_model');
        $this->load->model('Buku_model');
        $this->load->model('Kategori_model');
    }

    public function index_get($id)
    {
        $data = $this->Peminjaman_model->get_data($id);

        foreach ($data as $row) {
            $dataar[] = array(
                'id' => $row['id'],
                'tgl_peminjaman' => $row['tgl_peminjaman'],
                'tgl_kembali' => $row['tgl_kembali'],
                'id_mahasiswa' => $row['id_mahasiswa'],
                'peminjaman' => $this->Peminjaman_model->get_count_pinjam($row['peminjaman']),
                'id_peminjaman' => $row['peminjaman'],
                'status_pinjam' => $row['status_pinjam'],
                'alasan' => $row['alasan']
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

    public function detail_get($id_pinjam)
    {
        $data = $this->Peminjaman_model->get_data_peminjaman_buku($id_pinjam);
        foreach ($data as $row) {
            $id_kategori = $this->Buku_model->get_data_id($row['id_buku'])["kategori"];
            $dataar[] = array(
                'id' => $row['id_buku'],
                'judul_buku' => $this->Buku_model->get_data_id($row['id_buku'])["judul_buku"],
                'pengarang' => $this->Buku_model->get_data_id($row['id_buku'])["pengarang"],
                'penerbit' => $this->Buku_model->get_data_id($row['id_buku'])["penerbit"],
                'tahun_terbit' => $this->Buku_model->get_data_id($row['id_buku'])["tahun_terbit"],
                'kategori' => $this->Kategori_model->get_data_id($id_kategori)["nama_kategori"],
                // 'kategori' => "",
                'gambar' => $this->Buku_model->get_data_id($row['id_buku'])["gambar"]
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

    public function peminjaman_post()
    {
        $id_peminjaman = str_replace("-", "", $this->uuid->v4());
        for ($i = 0; $i < count($this->input->post('id_buku')); $i++) {
            $this->db->insert('tb_peminjaman_item', array(
                'id_peminjam' => $id_peminjaman,
                'id_mahasiswa' => $this->post('id_mahasiswa'),
                'id_buku' => $this->input->post('id_buku')[$i],
            ));
        }

        // $tgl_peminjaman = $this->post('tgl_peminjaman') . " " . date('H:i:s');
        // $tgl_pengembalian = $this->post('tgl_pengembalian') . " " . date('H:i:s');

        $Date = date('Y-m-d H:i:s');
        $params = array(
            'id_mahasiswa' => $this->post('id_mahasiswa'),
            'peminjaman' => $id_peminjaman,
            'tgl_peminjaman' => $Date,
            'tgl_kembali' => date('Y-m-d H:i:s', strtotime($Date . ' + 7 days'))
            // 'tgl_peminjaman' => $tgl_peminjaman,
            // 'tgl_kembali' => $tgl_pengembalian
        );

        $this->Peminjaman_model->add_peminjaman($params);

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
