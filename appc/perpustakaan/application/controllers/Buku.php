<?php
defined('BASEPATH') or exit('No direct script access allowed');
define('API_ACCESS_KEY', 'AAAAJLGBF54:APA91bE7E-u5KeLYucrXU7blxdR5RG4paOP-g2nH_uF1TN-U0WTSKOhcymsD5aq311OvgOh-XkUBS3o43F2syCi1M8gYqWuPYEDthkJPIu008up6cRVkjrOqTUDmfKxAUNn_0-4Pu9VD ');

class Buku extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        login_timeout();
        $this->load->model('Buku_model');
        $this->load->model('Kategori_model');
    }

    public function index($rowno = 0)
    {

        if (isset($_SESSION['search']))
            $data['search'] = $_SESSION['search'];
        else {
            $data['search'] = '';
        }

        if (isset($_SESSION['filter_kategori']))
            $data['filter_kategori'] = $_SESSION['filter_kategori'];
        else {
            $data['filter_kategori'] = '';
        }

        $rowperpage = 9;
        if ($rowno != 0) {
            $rowno = ($rowno - 1) * $rowperpage;
        }

        $allcount = $this->Buku_model->get_data_count();
        $users_record = $this->Buku_model->get_data_limit($rowno, $rowperpage);
        $config['base_url'] = base_url() . 'buku';

        $config['use_page_numbers'] = TRUE;
        $config['total_rows'] = $allcount;
        $config['per_page'] = $rowperpage;

        $this->pagination->initialize($config);

        $data['pagination'] = $this->pagination->create_links();
        $data['result'] = $users_record;
        $data['row'] = $rowno;
        $data['total_rows'] = $allcount;


        $data['kategori'] = $this->Kategori_model->get_data();
        // $data['buku'] = $this->Buku_model->get_data();
        $isi =  $this->template->display('admin/content/buku/index', $data);
        $this->load->view('admin/vutama', $isi);
    }

    function add()
    {
        if (isset($_POST) && count($_POST) > 0) {

            $filename = $_FILES["foto"]["name"];
            if ($filename) {
                $foto = $this->_uploadImagep();
            } else {
                $foto = "";
            }

            // $ids = str_replace("-", "", $this->uuid->v4());

            $params = array(
                'judul_buku' => $this->input->post('judul_buku'),
                'penerbit' => $this->input->post('penerbit'),
                'pengarang' => $this->input->post('pengarang'),
                'tahun_terbit' => $this->input->post('tahun_terbit'),
                'jumlah_halaman' => $this->input->post('jumlah_halaman'),
                'stok_buku' => $this->input->post('stok_buku'),
                'bahasa' => $this->input->post('bahasa'),
                'sinopsis' => $this->input->post('sinopsis'),
                'kategori' => $this->input->post('kategori'),
                'label_buku' => $this->input->post('label_buku'),
                'gambar' => $foto
            );
            $this->Buku_model->add_buku($params);
            redirect('buku');
        } else {
            $data['kategori'] = $this->Kategori_model->get_data();
            $isi =  $this->template->display('admin/content/buku/add', $data);
            $this->load->view('admin/vutama', $isi);
        }
    }

    function edit_gambar($id)
    {
        if (isset($_POST) && count($_POST) > 0) {
            $filename = $_FILES["foto"]["name"];
            if ($filename) {
                $foto = $this->_uploadImagep();
            } else {
                $foto = $this->input->post('fotonama');
            }
            $params = array(
                'gambar' => $foto
            );

            $this->db->where('id', $id);
            $this->db->update('tb_buku', $params);
            redirect('buku');
        } else {
            $data['kategori'] = $this->Kategori_model->get_data();
            $data['buku'] = $this->Buku_model->get_data_id($id);
            $isi =  $this->template->display('admin/content/buku/edit', $data);
            $this->load->view('admin/vutama', $isi);
        }
    }

    function edit($id)
    {
        if (isset($_POST) && count($_POST) > 0) {
            $params = array(
                'judul_buku' => $this->input->post('judul_buku'),
                'penerbit' => $this->input->post('penerbit'),
                'pengarang' => $this->input->post('pengarang'),
                'tahun_terbit' => $this->input->post('tahun_terbit'),
                'jumlah_halaman' => $this->input->post('jumlah_halaman'),
                'stok_buku' => $this->input->post('stok_buku'),
                'bahasa' => $this->input->post('bahasa'),
                'sinopsis' => $this->input->post('sinopsis'),
                'kategori' => $this->input->post('kategori'),
                'label_buku' => $this->input->post('label_buku'),
            );
            $this->db->where('id', $id);
            $this->db->update('tb_buku', $params);
            redirect('buku');
        } else {
            $data['kategori'] = $this->Kategori_model->get_data();
            $data['buku'] = $this->Buku_model->get_data_id($id);
            $isi =  $this->template->display('admin/content/buku/edit', $data);
            $this->load->view('admin/vutama', $isi);
        }
    }

    function remove()
    {
        if (isset($_POST) && count($_POST) > 0) {
            $id = $this->input->post('id');
            $this->db->delete('tb_buku', array('id' => $id));
            echo "<script>history.go(-1)</script>";
        } else {
            echo "<script>history.go(-1)</script>";
        }
    }

    function detail($id)
    {
        $data['kategori'] = $this->Kategori_model->get_data();
        $data['buku'] = $this->Buku_model->get_data_id($id);
        $isi =  $this->template->display('admin/content/buku/detail', $data);
        $this->load->view('admin/vutama', $isi);
    }

    private function _uploadImagep()
    {
        $id_user = str_replace("-", "", $this->uuid->v4());
        $config['upload_path']          = 'public/img/buku';
        $config['allowed_types']        = 'jpg|png|jpeg';
        $config['max_size']             = 2000000;
        $config['overwrite'] = TRUE;
        $filename = $_FILES["foto"]["name"];
        $file_ext = pathinfo($filename, PATHINFO_EXTENSION);
        $config['file_name'] = $id_user . '.' . 'jpg';

        $this->upload->initialize($config);
        $this->load->library('upload');

        if (!$this->upload->do_upload('foto')) {
            $data['error'] = array('error' => $this->upload->display_errors());
            var_dump($data['error']);
            die();
        } else {
            return $this->upload->data('file_name');
        }
    }

    public function search()
    {
        $search_text = $this->input->post('search');
        if ($search_text != '')
            $_SESSION['search'] = $search_text;
        else unset($_SESSION['search']);
        redirect('buku');
    }

    public function filter_kategori()
    {
        $filter_kategori = $this->input->post('filter_kategori');
        if ($filter_kategori != '')
            $_SESSION['filter_kategori'] = $filter_kategori;
        else unset($_SESSION['filter_kategori']);
        redirect('buku');
    }
}
