<?php
  defined('BASEPATH') OR exit('No direct script access allowed');

  class UploadComic extends CI_Controller {
    public function newEpisode() {
      $comicId = $this->input->post('id');
      $epNum = $this->input->post('epNum');
      $title = $this->input->post('title');
      $pages = $this->input->post('pages');

      $this->load->model('Comics_model');
      return $this->Comics_model->saveNewEpisode($comicId, $title, $epNum, $pages);
    }

    public function uploadCover() {
      $this->load->model('Comics_model');
      $files = $this->input->post('transferName');
      header('Content-Type: application/json');
      echo json_encode(["Url" => $this->Comics_model->uploadCover($files)]);
    }

    public function uploadPages() {
      $this->load->model('Comics_model');
      $files = $this->input->post('transferName');
      header('Content-Type: application/json');
      echo json_encode(["Url" => $this->Comics_model->uploadPages($files)]);
    }
  }
?>
