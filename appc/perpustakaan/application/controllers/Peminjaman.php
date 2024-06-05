<?php
defined('BASEPATH') or exit('No direct script access allowed');
define('API_ACCESS_KEY', 'AAAAJLGBF54:APA91bE7E-u5KeLYucrXU7blxdR5RG4paOP-g2nH_uF1TN-U0WTSKOhcymsD5aq311OvgOh-XkUBS3o43F2syCi1M8gYqWuPYEDthkJPIu008up6cRVkjrOqTUDmfKxAUNn_0-4Pu9VD ');

class Peminjaman extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        login_timeout();
        $this->load->model('Peminjaman_model');
        $this->load->model('Mahasiswa_model');
        $this->load->model('Buku_model');
    }

    public function index()
    {
        $data['peminjaman'] = $this->Peminjaman_model->get_data();
        $isi =  $this->template->display('admin/content/peminjaman/index', $data);
        $this->load->view('admin/vutama', $isi);
    }

    public function detail($id_siswa, $id)
    {
        $data['mahasiswa'] = $this->Mahasiswa_model->get_data_id($id_siswa)['nama'];
        $data['buku'] = $this->Peminjaman_model->get_data_peminjaman_buku($id);
        $isi =  $this->template->display('admin/content/peminjaman/detail', $data);
        $this->load->view('admin/vutama', $isi);
    }

    function terima_peminjaman($id)
    {
        $tokenNotif =  $this->Mahasiswa_model->get_data_id($this->Peminjaman_model->get_data_id($id)['id_mahasiswa'])['token'];
        $data_buku = $this->Peminjaman_model->get_data_peminjaman_buku($this->Peminjaman_model->get_data_id($id)['peminjaman']);

        foreach ($data_buku as $key) {
            $this->update_stok_buku($key);
        }

        $this->db->where('id', $id);
        $this->db->update('tb_peminjaman', array('status_pinjam' => 1));

        $msg = array(
            'title' => "Perpustakaan",
            'body' => "Peminjaman Buku Anda sudah dikonfirmasi",
            'jenis' => "ids",
            'id' => "1"
        );
        $fields = array(
            'to' => $tokenNotif,
            'data' => $msg,
            'channel' => 'KONSUMEN_NOTIF_APPS', 'priority' => 'high'
        );
        $this->send($msg, $fields);

        redirect('peminjaman');
    }

    function update_stok_buku($key)
    {
        $stok = $this->Buku_model->get_data_id($key["id_buku"])["stok_buku"] - 1;
        $this->db->where('id', $key["id_buku"]);
        $this->db->update('tb_buku', array('stok_buku' => $stok));
    }

    function tolak_peminjaman()
    {
        if (isset($_POST) && count($_POST) > 0) {

            $id = $this->input->post('id');
            $alasan = $this->input->post('alasan');
            $this->db->where('id', $id);
            $this->db->update('tb_peminjaman', array('status_pinjam' => 5, 'alasan' => $alasan));

            $tokenNotif =  $this->Mahasiswa_model->get_data_id($this->Peminjaman_model->get_data_id($id)['id_mahasiswa'])['token'];
            $msg = array(
                'title' => "Perpustakaan",
                'body' => "Peminjaman Buku Anda Ditolak oleh Admin alasannya : $alasan",
                'jenis' => "ids",
                'id' => "1"
            );
            $fields = array(
                'to' => $tokenNotif,
                'data' => $msg,
                'channel' => 'KONSUMEN_NOTIF_APPS', 'priority' => 'high'
            );
            $this->send($msg, $fields);

            echo "<script>history.go(-1)</script>";
        } else {
            echo "<script>history.go(-1)</script>";
        }
    }

    public function logpeminjaman()
    {
        $data['peminjaman'] = $this->Peminjaman_model->get_data_log();
        $isi =  $this->template->display('admin/content/peminjaman/log', $data);
        $this->load->view('admin/vutama', $isi);
    }

    public function peminjaman_notif()
    {

        if (isset($_POST['view'])) {
            $this->db->select('count(*) as allcount');
            $this->db->from('tb_peminjaman');
            $this->db->where('status_pinjam', 0);
            $query = $this->db->get();
            $result = $query->result_array();

            $data = array(
                /*'notification' => $output,*/
                'unseen_notification'  => $result[0]['allcount'],
            );
            echo json_encode($data);
        }
    }

    function send($msg, $fields)
    {
        $headers = array('Authorization: key=' . API_ACCESS_KEY, 'Content-Type: application/json');
        //Using curl to perform http request 
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send');
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));
        //Getting the result 
        $result = curl_exec($ch);
        curl_close($ch);
        //Decoding json from result 
        $res = json_decode($result);
        var_dump($res);
        return $res;
    }
}
