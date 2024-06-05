<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kategori extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        login_timeout();
        $this->load->model('Kategori_model');
        $this->load->library('cfpdf');
    }

    function index()
    {
        $data['kategori'] = $this->Kategori_model->get_data();
        $isi =  $this->template->display('admin/content/kategori/index', $data);
        $this->load->view('admin/vutama', $isi);
    }

    function add()
    {
        if (isset($_POST) && count($_POST) > 0) {
            $params = array(
                'nama_kategori' => $this->input->post('nama_kategori')
            );
            $this->Kategori_model->add_kategori($params);
            echo "<script>history.go(-2)</script>";
        } else {
            $isi =  $this->template->display('admin/content/kategori/add');
            $this->load->view('admin/vutama', $isi);
        }
    }

    function edit($id)
    {
        if (isset($_POST) && count($_POST) > 0) {
            $params = array(
                'nama_kategori' => $this->input->post('nama_kategori')
            );

            $this->db->where('id_kategori', $id);
            $this->db->update('tb_kategori', $params);
            echo "<script>history.go(-2)</script>";
        } else {
            $data['kategori'] = $this->Kategori_model->get_data_id($id);
            $isi =  $this->template->display('admin/content/kategori/edit', $data);
            $this->load->view('admin/vutama', $isi);
        }
    }

    function remove()
    {
        if (isset($_POST) && count($_POST) > 0) {
            $id = $this->input->post('id_kategori');
            if ($this->check_kategori($id)) {
                $this->session->set_flashdata('error', 'Tidak dapat dihapus, karena ada beberapa Buku yang menggunakan kategori ini');
                echo "<script>history.go(-1)</script>";
            } else {
                $this->db->delete('tb_kategori', array('id_kategori' => $id));
                echo "<script>history.go(-1)</script>";
            }
            // $this->db->delete('tb_kategori', array('id_kategori' => $id));

        } else {
            echo "<script>history.go(-1)</script>";
        }
    }

    function check_kategori($id_kategori)
    {
        $this->db->where('kategori', $id_kategori);
        $query = $this->db->get('tb_buku');
        if ($query->num_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }
}
