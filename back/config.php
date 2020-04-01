<?php
  /**
   *
   */
  class Config
  {
    public $conn;

    function __construct()
    {
      // this is the functino constructor;
      define('DB_SERVER', 'localhost');
      define('DB_USERNAME', 'dev');
      define('DB_PASSWORD', 'password');
      define('DB_NAME', 'appoint');

      $this->conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
      if($this->conn === true){ echo "App not loving your connection"; }
  }

  function login($email, $pass){
    $password = md5($pass);
    $login = "SELECT * FROM users WHERE username='$email' AND password='$password'";
    $result = mysqli_query($this->conn, $login);
    $res = mysqli_fetch_assoc($result);

    if($res['id']){
      session_start();
        $_SESSION["loggedin"] = true;
          $_SESSION["email"] = $res['username'];
          $_SESSION["id"] = $res['id'];
        $_SESSION["name"] = $res['fullname'];
        $_SESSION['role'] = $res['role'];

        echo $_SESSION['name'];
       header("Location: ../doclist.php");

    } else {
      echo "There is a problem" .mysqli_error($this->conn);
    }
  }

  function apoint_one($f, $e, $ph, $n, $date){
    $id = uniqid('', true);
    $sql = "INSERT INTO appointments(`id`,`Fullname`, `email`, `Phone`, `Notes`, `date`) VALUES ('$id', '$f', '$e', '$ph', '$n', '$date')";
    if(mysqli_query($this->conn, $sql)){
      return header('Location: ../district.php?id='. $id .'&start');
    }else{
      return header("Location: ../index.php");
    }
  }

  function add_doctor($name, $mail, $phone, $spec, $address, $district){
    $password = md5('password');
    $id = uniqid(true, '');
    $make_doc = "INSERT INTO doctors(`id`, `fullname`, `email`, `Phone`, `specialty`, `address`, `district`, `password`) VALUES ('$id', '$name', '$mail', '$phone', '$spec', '$address', '$district', '$password')";
    $q = mysqli_query($this->conn, $make_doc);

    if($q === false){
      echo mysqli_error($this->conn);
    } else {
      $mk_dist = "REPLACE INTO districts(`name`) VALUES ('$district')";
      if(mysqli_query($this->conn, $mk_dist)){
        // header("Location: ../../doctors.php");
        // return $name;
      }else {
        echo mysqli_error($this->conn);
      }


    }
    return $id;
  }

  function get_districts(){
    $get = "SELECT * from districts";
    $q = mysqli_query($this->conn, $get);
    $results = ($q);

    return $results;
  }



  function get_specs($dist){
    $get = "SELECT DISTINCT(specialty) FROM doctors where district='$dist'";
    $q = mysqli_query($this->conn, $get);
    $results = ($q);

    return $results;
  }


  function get_pro($d, $s){
    $get = "SELECT * from doctors where district='$d' AND specialty='$s'";
    $q = mysqli_query($this->conn, $get);
    $results = ($q);

    return $results;

  }

  function times($id, $time){
    $q = "INSERT INTO times(`doctor`, `time`) values ('$id', '$time')";
    if(mysqli_query($this->conn, $q)){
      return header("Location: ../../docs.php");
    }else {
      echo "Something went wrong ". mysqli_error($this->conn);
    }
  }

  function doc_dates($id){
    $res = mysqli_query($this->conn, "SELECT distinct(Provider) from appointments where id='$id'");
    $doc = mysqli_fetch_assoc($res)['Provider'];

    $two = "SELECT * FROM times where doctor='$doc'";
    $dates = mysqli_query($this->conn, $two);
    return ($dates);
  }

  function doc_times($id){
    $q = "SELECT * from times where doctor='$id'";
    $res = mysqli_query($this->conn, $q);

    return ($res);
  }

  function add_date($id, $time){
    $q = "UPDATE appointments SET time='$time' where id='$id'";
    $res = mysqli_query($this->conn, $q);
    if ($res) {
      return header("Location: ../payments.php");
    }else {
      echo "Something went wrong ". mysqli_error($this->conn);
    }

  }

  function get_doc($id){
    $res = mysqli_query($this->conn, "SELECT * FROM doctors where id='$id'");
    echo mysqli_fetch_assoc($res)['fullname'];
  }

  function complete_book($id, $loc, $service, $doc){
    $sql = "UPDATE appointments SET district='$loc', service='$service', Provider='$doc' where id='$id'";
    if(mysqli_query($this->conn, $sql)){
      $done = "SELECT email from appointments where id='$id'";
      $res = mysqli_fetch_assoc(mysqli_query($this->conn, $done));
      if($res){
      header("Location: ../date.php?id=".$id);
      }

    }else{
      echo mysqli_error($this->conn);
    }
  }

  function get_appointments($doc, $role)
    {
      if($role == 'admin'){
        $apps = "SELECT * FROM appointments";
        $q = mysqli_query($this->conn, $apps);
        $results = ($q);

        return $results;

      }elseif ($role == 'doctor') {
        $apps = "SELECT * FROM appointments where Provider='$doc' AND status='approved'";
        $q = mysqli_query($this->conn, $apps);
        $results = ($q);

        return $results;
      } else {

        echo "UnAuthorizes Access.";
      }
    }

    function create_user($id, $fullname, $email){
      $p = 'password';
      $password = md5($p);
      $make_user = "INSERT INTO users(`id`, `fullname`, `username`, `password`) VALUES ('$id','$fullname', '$email', '$password')";
      if(mysqli_query($this->conn, $make_user)){

        return header("Location: ../../doctors.php");
      }else{

        echo "There is an error : ". mysqli_error($this->conn);
      }
    }

    function update_status($id, $status){
      $update = "UPDATE appointments set status='$status' WHERE id='$id'";
      if(mysqli_query($this->conn, $update)){
        return header("Location: ../../doclist.php");
      }else {
        echo "Could Not Update record";
      }
    }

    function get_docs(){
      $get_em = "SELECT * FROM doctors WHERE role='doctor'";
      $res = mysqli_query($this->conn, $get_em);

      return $res;
    }



  //end of function
 }
?>
