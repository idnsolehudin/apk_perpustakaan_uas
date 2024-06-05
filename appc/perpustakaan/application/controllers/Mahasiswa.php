<?php
defined('BASEPATH') or exit('No direct script access allowed');
define('API_ACCESS_KEY', 'AAAAJLGBF54:APA91bE7E-u5KeLYucrXU7blxdR5RG4paOP-g2nH_uF1TN-U0WTSKOhcymsD5aq311OvgOh-XkUBS3o43F2syCi1M8gYqWuPYEDthkJPIu008up6cRVkjrOqTUDmfKxAUNn_0-4Pu9VD ');

class Mahasiswa extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        login_timeout();
        $this->load->model('Mahasiswa_model');
    }

    public function index()
    {
        $data['mahasiswa'] = $this->Mahasiswa_model->get_data();
        $isi =  $this->template->display('admin/content/mahasiswa/index', $data);
        $this->load->view('admin/vutama', $isi);
    }

    function add()
    {
        $data['notif'] = "";
        if (isset($_POST) && count($_POST) > 0) {
            if ($this->check_username($this->input->post('nim'))) {
                $data['notif'] = "Nim sudah ada";
                $isi =  $this->template->display('admin/content/mahasiswa/add', $data);
                $this->load->view('admin/vutama', $isi);
            } else {
                //$password = $this->random_password();
                $params = array(
                    'nim' => $this->input->post('nim'),
                    'nama' => $this->input->post('nama'),
                    'kelamin' => $this->input->post('kelamin'),
                    'agama' => $this->input->post('agama'),
                    'tempat_lahir' => $this->input->post('tempat_lahir'),
                    'tanggal_lahir' => $this->input->post('tanggal_lahir'),
                    'no_telp' => $this->input->post('no_telp'),
                    'alamat' => $this->input->post('alamat'),
                    'password' => $this->input->post('nim')
                );
                $this->Mahasiswa_model->add_mahasiswa($params);
                redirect('mahasiswa');
            }
        } else {
            $isi =  $this->template->display('admin/content/mahasiswa/add', $data);
            $this->load->view('admin/vutama', $isi);
        }
    }

    function edit($id)
    {
        if (isset($_POST) && count($_POST) > 0) {
            // $params = array(
            //     'nama' => $this->input->post('nama'),
            //     'nik' => $this->input->post('nik'),
            //     'jk' => $this->input->post('jk'),
            //     'no_hp' => $this->input->post('no_hp'),
            //     'pekerjaan' => $this->input->post('pekerjaan'),
            //     'alamat' => $this->input->post('alamat'),
            //     'password' => $this->input->post('password'),
            //     'status' => 1
            // );
            $this->db->where('id', $id);
            $this->db->update('tb_mahasiswa', $_POST);
            redirect('mahasiswa');
        } else {
            $data['mahasiswa'] = $this->Mahasiswa_model->get_data_id($id);
            $isi =  $this->template->display('admin/content/mahasiswa/edit', $data);
            $this->load->view('admin/vutama', $isi);
        }
    }

    function remove()
    {
        if (isset($_POST) && count($_POST) > 0) {
            $id = $this->input->post('id');
            $this->db->delete('tb_mahasiswa', array('id' => $id));
            echo "<script>history.go(-1)</script>";
        } else {
            echo "<script>history.go(-1)</script>";
        }
    }

    function check_username($username)
    {
        $this->db->where('nim', $username);
        $query = $this->db->get('tb_mahasiswa');
        if ($query->num_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }
}
