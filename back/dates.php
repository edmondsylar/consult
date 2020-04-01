<?php 

    include_once "config.php";
    $cur = new Config();

    if ($_SERVER['REQUEST_METHOD'] == "POST") {

        $time = $_POST['time'];
        $id = $_POST['id'];
        
        $cur->times($id, $time);
        // echo "exectuted"
    }


?>