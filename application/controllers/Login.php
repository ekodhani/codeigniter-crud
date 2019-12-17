<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['title'] = 'Selamat Datang';
		$this->load->view('vlogin',$data);
	}

	public function masuk()
	{
		$this->form_validation->set_rules('username', 'username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		if ($this->form_validation->run() == false) {
			$data['title'] = 'Selamat Datang';
			$this->load->view('vlogin',$data);
		} else {
			// validasi sukses!
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$user = $this->db->get_where('user', ['username' => $username])->row_array();

			// jika usernya ada
			if ($user) {
				// cek password
				if (md5($password) == $user['password']) {
					$data = [
						'username' => $user['username'],
						'id_user' => $user['id_user']
					];
					$this->session->set_userdata($data);
					redirect('Admin');
				} else {
					$this->session->set_flashdata('message', '<div class="alert-danger" role="alert">Password Salah!</div>');
					redirect('login');
				}
			} else {
				$this->session->set_flashdata('message', '<div class="alert-danger" role="alert">username Belum Terdafatar!</div>');
				redirect('login');
			}
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('id_user');

		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Kamu telah Logout! Terima Kasih</div>');
		redirect('login');
	}
}