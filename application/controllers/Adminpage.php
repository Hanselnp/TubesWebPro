<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adminpage extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		if ($this->session->loggedIn == true) {
			$this->load->view('adminpage');
		} else {
			redirect(base_url().'login');
		}
	}

	public function comics()
	{
		$this->load->model('Comics_model');
		$queryResult = $this->Comics_model->getAllComics();
		$data = array (
			'query' => $queryResult->result()
		);
		$this->load->view('admincomic', $data);
	}

	public function upload_comic()
	{
		$this->load->view('uploadcomic', $data);
	}

	public function update_profile()
	{
		$this->load->view('updateprofile');
	}

	public function comics_detail($id) {
		$this->load->model('Comics_model');
		$comic = array(
			'id' => $id,
			'epNum' => "1"
		);
		$this->load->view('comics_detail', $comic);
	}

	public function stats() {
		$this->load->view('stats');
	}

	public function settings()
	{
		$this->load->view('settings');
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect($_SERVER['HTTP_REFERER']);
	}
}
