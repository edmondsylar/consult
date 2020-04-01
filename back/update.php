<?php
  include_once "config.php";
  $cur = new Config();
  $status = $_GET['status'];
  $id =  $_GET['id'];

  $cur->update_status($id, $status);
 ?>
