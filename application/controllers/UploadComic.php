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

    public function newSerial() {
      $genre = array($this->input->post('genre1'));
      if ($this->input->post('genre2') != "") {
        array_push($genre, $this->input->post('genre2'));
      }

      $genJSON = json_encode($genre);

      $data = array (
        'title' => $this->input->post('title'),
        'synopsis' => $this->input->post('synopsis'),
        'genre' => $genJSON,
        'mature' => null,
        'cover' => $this->input->post('uploadURI'),
        'latestEpisode' => 0,
        'complete' => null,
      );

      $this->load->model('Comics_model');
      return $this->Comics_model->saveNewSerial($data);
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

    public function getAllComic() {
      $this->load->model('Comics_model');
      return $this->Comics_model->getAllComics();
    }
  }
?>
