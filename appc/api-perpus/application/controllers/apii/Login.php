<?php

use Restserver\Libraries\REST_Controller;

defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class Login extends REST_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Login_model');
	}

	public function login_mahasiswa_post()
	{
		$user = $this->post('user');
		$pass = $this->post('pass');

		$login = $this->Login_model->is_valid_mahasiswa_login($user, $pass);

		if ($login) {
			$this->db->where('nim', $user);
			$this->db->update('tb_mahasiswa', array('token' => $this->post('token')));

			$this->response([
				'status' => true,
				'message' => 'sukses menampilkan data',
				'payload' => $login
			], REST_Controller::HTTP_OK);
		} else {
			$this->response([
				'status' => false,
				'message' => 'gagal menampilkan data',
				'payload' => null
			], REST_Controller::HTTP_NOT_FOUND);
		}
	}
}
