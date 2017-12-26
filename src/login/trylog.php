<?php
$usr = "admin";
$psw = "123";
$username = '$_POST[username]';
$password = '$_POST[password]';
//$usr == $username && $psw == $password
session_start();
if ($_SESSION['login']==true || ($_POST['username']==$usr && $_POST['password']==$psw)) {
  $cookie_name = "allowAccess";
  $cookie_value = "Yes";
  setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
  header("Location:../index.php");
  exit();
}
else {
    echo "incorrect login";
}
?>
