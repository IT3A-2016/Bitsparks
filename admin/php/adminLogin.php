<?php
  $host = "localhost";
  $user = "root";
  $pwd = "";
  $db= "faithscheduling";


  $conn = mysql_connect($host,$user,$pwd) or die ("Error Connecting to Database");
  $seldb = mysql_select_db($db) or die ("Error Selectign Database");

  session_start();
  $result = '';
  if(isset($_POST['login'])){
    $username = mysql_real_escape_string($_POST['username']);
    $password = mysql_real_escape_string($_POST['password']);

    $auth = mysql_query("SELECT * from admin where adm_username='$username' and adm_password='" . md5($password) . "' ");
    $num = mysql_num_rows($auth);
    $row = mysql_fetch_assoc($auth);
    if($num==1){

      $_SESSION['username'] = $row['adm_username'];
      $_SESSION['password'] = $row['adm_password'];
      $_SESSION['adm_id'] = $row['adm_id'];
      header('Location:pages/dashboard.php');
    }
    else{
      $result  = 'Username or Password is incorrect.';
    }
  }

?>
