<?php
  require_once 'Dao.php';
  $dao = new Dao();
  $dao->saveComment($_POST['comment']);
  header("Location: http://cs401/comments.php");
  exit;
