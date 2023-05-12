<?php

require_once '../src/session.php';
$session = new session();
$session->forgetSession();
?>


  header("location:login.php"); 
  exit;
