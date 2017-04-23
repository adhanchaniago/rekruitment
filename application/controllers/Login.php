<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	
function index()
	{
		$this->load->view('login');
	}
	
	function check_login()
	{
		$username = $this->input->post('username');
		$pass = $this->input->post('pass');

		$data = array(
			'username' => $username,
			'pass' => md5($pass)
		);

			$cek = $this->m_news->check_user("useradmin", $data)->result();
			foreach ($cek as $a) {
				$id = $a->id;
			};

			$get = $this->m_news->check_user("useradmin", $data)->num_rows();
			if ($get > 0)
			{
				$data_session = array(	'username' => $username ,
										'logged_in' => TRUE,
										'id' => $id,
				);
				$this->session->set_userdata($data_session);
				
					redirect(base_url('home/index')); 
				echo "berhasil";
			}else{
				echo "salah";
			}
	}

	function logout()
	{
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('logged_in');
		redirect(base_url('login'));
	}
}