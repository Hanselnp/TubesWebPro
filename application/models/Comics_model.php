<?php
// defined('BASEPATH') OR exit('No direct script access allowed');

class Comics_model extends CI_Model {
  public function getTitle($id) {
    return 0;
  }

  public function getId($id) {
    return 0;
  }

  public function getAllComics() {
    return $this->db->get('comic_serial');
  }

  public function saveNewEpisode($comicId, $title, $epNum, $pages) {
    $data = array(
      'comic_id' => $comicId,
      'ep_title' => $title,
      'ep_num' => $epNum,
      'pages' => $pages
    );
    $this->db->insert('comic_ep', $data);
    return 1;
  }

  public function saveNewSerial($data) {
    $saveToDb = array(
      'title' => $data['title'],
      'synopsis' => $data['synopsis'],
      'genre' => $data['genre'],
      'mature' => $data['mature'],
      'cover' => $data['cover'],
      'latestEpisode' => $data['latestEpisode'],
      'complete' => $data['complete']
    );
    $this->db->insert('comic_serial', $saveToDb);
    return 1;
  }

  public function uploadCover($inputName) {
    $coverDir = "uploads/comics/covers/";
    return $this->doUpload($inputName, $coverDir);
  }

  public function uploadPages($inputName) {
    $pagesDir = "uploads/comics/pages/";
    return $this->doUpload($inputName, $pagesDir);
  }

  public function doUpload($inputName, $uploadDir) {
    if (!empty($_FILES)) {
      $tempFile = $_FILES[$inputName]['tmp_name'];
      $fileName = $_FILES[$inputName]['name'];
      $fileName = str_replace(' ', '_', $fileName);
      $targetPath = $uploadDir;
      $targetFile = $targetPath . $fileName ;
      move_uploaded_file($tempFile, $targetFile);
      return $fileName;
     }
  }
}
