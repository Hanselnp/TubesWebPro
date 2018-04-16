<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function index()
	{
		$this->load->view('login');
	}

	public function auth() {
		$uname = $this->input->post('username');
		$pass = hash('sha256', $this->input->post('password'));

		$query = $this->db->select("*")->from('users')->where('username', $uname)->where('password', $pass);
		if ($query->count_all_results() == 1) {
			// echo json_encode($this->db->select("id, username")->where('username', $uname)->where('password', $pass)->get('users')->result());
			$session = $this->db->select("id, username")->where('username', $uname)->where('password', $pass)->get('users');
			$this->session->id = $session->result()[0]->id;
			$this->session->uname = $session->result()[0]->username;
			$this->session->loggedIn = true;
			redirect(base_url().'adminpage', 'refresh');
		} else {
			echo "Error";
		}
	}
}
