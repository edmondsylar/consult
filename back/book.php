<?php

  if($_SERVER['REQUEST_METHOD'] == "POST"){
    include_once "config.php";
    $cur = new Config();

    $f = $_POST['names'];
    $e = $_POST['email'];
    $ph = $_POST['phone'];
    $n = $_POST['description'];
    $date = $_POST['date'];

    $cur->apoint_one($f, $e, $ph, $n, $date);
    // echo ($s . $p . $f . $e . $ph . $n . $d);

  }

 ?>
