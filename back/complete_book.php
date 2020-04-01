<?php
include_once "config.php";
$cur = new Config();

  if(isset($_GET['id'])){
    $id = $_GET['id'];
    $location = $_GET['loc'];
    $Specialty = $_GET['spec'];
    $provider = $_GET['doc'];


    // echo $location. " ". $Specialty. " ". $provider;
    $cur->complete_book($id, $location, $Specialty, $provider);

  }

 ?>
