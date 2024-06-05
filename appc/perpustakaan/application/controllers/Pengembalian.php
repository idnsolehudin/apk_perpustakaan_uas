<?php
defined('BASEPATH') or exit('No direct script access allowed');
define('API_ACCESS_KEY', 'AAAAJLGBF54:APA91bE7E-u5KeLYucrXU7blxdR5RG4paOP-g2nH_uF1TN-U0WTSKOhcymsD5aq311OvgOh-XkUBS3o43F2syCi1M8gYqWuPYEDthkJPIu008up6cRVkjrOqTUDmfKxAUNn_0-4Pu9VD ');

class Pengembalian extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        login_timeout();
        $this->load->model('Pengembalian_model');
        $this->load->model('Peminjaman_model');
        $this->load->model('Mahasiswa_model');
        $this->load->model('Buku_model');
    }

    public function index()
    {
        $data['pengembalian'] = $this->Pengembalian_model->get_data();
        $isi =  $this->template->display('admin/content/pengembalian/index', $data);
        $this->load->view('admin/vutama', $isi);
    }

    public function detail($id_siswa, $id)
    {
        $data['mahasiswa'] = $this->Mahasiswa_model->get_data_id($id_siswa)['nama'];
        $data['buku'] = $this->Peminjaman_model->get_data_peminjaman_buku($id);
        $isi =  $this->template->display('admin/content/peminjaman/detail', $data);
        $this->load->view('admin/vutama', $isi);
    }

    function terima_pengembalian($id)
    {
        date_default_timezone_set('Asia/Makassar');
        $p = $this->Pengembalian_model->get_data_id($id);

        // $Date = date('Y-m-d H:i:s');
        $Date = $p['tgl_pengembalian'];
        $jumlah_buku = $this->Peminjaman_model->get_count_pinjam($p['pengembalian']);
        $t = date_create($p['tgl_kembali']);
        $n = date_create($Date);
        $terlambat = date_diff($t, $n);
        $hari = "";
        if ($n < $t) {
            $denda = "0";
        } else {
            $hari = $terlambat->format("%a");
            $denda = $hari * 1000;
        }

        $data_buku = $this->Peminjaman_model->get_data_peminjaman_buku($p["pengembalian"]);
        foreach ($data_buku as $key) {
            $this->update_stok_buku($key);
        }

        $this->db->where('peminjaman', $p["pengembalian"]);
        $this->db->update('tb_peminjaman', array('status_pinjam' => 2));

        $this->db->where('id', $id);
        $this->db->update('tb_pengembalian', array('status_kembali' => 1, 'tgl_pengembalian' => $Date, 'denda' => $denda * $jumlah_buku));
        redirect('pengembalian');
    }

    function update_stok_buku($key)
    {
        $stok = $this->Buku_model->get_data_id($key["id_buku"])["stok_buku"] + 1;
        $this->db->where('id', $key["id_buku"]);
        $this->db->update('tb_buku', array('stok_buku' => $stok));
    }

    public function logpengembalian()
    {
        $data['pengembalian'] = $this->Pengembalian_model->get_data_log();
        $isi =  $this->template->display('admin/content/pengembalian/log', $data);
        $this->load->view('admin/vutama', $isi);
    }

    public function pengembalian_notif()
    {

        if (isset($_POST['view'])) {
            $this->db->select('count(*) as allcount');
            $this->db->from('tb_pengembalian');
            $this->db->where('status_kembali', 0);
            $query = $this->db->get();
            $result = $query->result_array();

            $data = array(
                /*'notification' => $output,*/
                'unseen_notification'  => $result[0]['allcount'],
            );
            echo json_encode($data);
        }
    }
}
