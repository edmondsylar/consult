<?php 

    include_once "config.php";
    $cur = new Config();

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $id = $_POST['id'];
        $time = $_POST['time'];
        
        $cur->add_date($id, $time);
    }
