<?php
  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $email = $_POST['email'];
    $names = $_POST['card_names'];
    $card = $_POST['card_number'];
    $exp_month = $_POST['expire_month'];
    $exp_year = $_POST['expire_year'];
    $cvv = $_POST['ccv'];

    echo $names . $card . $exp_month . $exp_year . $cvv . $email;
    header("Location: ../confirm.php?email=".$email);
    // $card_info = array()



  }

 ?>
