<?php
  if ($_GET['content'] == "dashboard") {
    include("dashboard.php");
  } else if ($_GET['content'] == "search") {
    include("search.php");
  } else if ($_GET['content'] == "read") {
    include("read.php");
  } else if ($_GET['content'] == "comic-chapter") {
    include("comic-chapter.php");
  }
?>
