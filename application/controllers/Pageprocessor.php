<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pageprocessor extends CI_Controller {
	public function redir_page()
	{
    if ($_GET['content'] == "dashboard") {
      $this->load->view("dashboard");
    } else if ($_GET['content'] == "search") {
      $this->load->view("search");
    } else if ($_GET['content'] == "read") {
      $this->load->view("read");
    } else if ($_GET['content'] == "comic-chapter") {
      $this->load->view("comic-chapter");
    } else if ($_GET['content'] == "homepage") {
      $this->load->view("home");
    }
	}
}
