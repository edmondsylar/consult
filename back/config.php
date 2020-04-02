<?php
  /**
   *I have only reserved the login function but the rest of the config settings have not changed
   * still the same as the rest of the files.
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

  // function login($email, $pass){
  //   $password = md5($pass);
  //   $login = "SELECT * FROM users WHERE username='$email' AND password='$password'";
  //   $result = mysqli_query($this->conn, $login);
  //   $res = mysqli_fetch_assoc($result);

  //   if($res['id']){
  //     session_start();
  //       $_SESSION["loggedin"] = true;
  //         $_SESSION["email"] = $res['username'];
  //         $_SESSION["id"] = $res['id'];
  //       $_SESSION["name"] = $res['fullname'];
  //       $_SESSION['role'] = $res['role'];

  //       echo $_SESSION['name'];
  //      header("Location: ../doclist.php");

  //   } else {
  //     echo "There is a problem" .mysqli_error($this->conn);
  //   }
  // }

  function get_specs(){
    $get = "SELECT DISTINCT(specialty) FROM doctors";
    $q = mysqli_query($this->conn, $get);
    $results = ($q);

    return $results;
  }
  //end of function
 }
?>
