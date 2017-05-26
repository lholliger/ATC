<?php
$password = $_POST['pass0'];
$username = $_POST['username'];

if (file_exists("../data/users/$username")) {
  if (password_verify($password, trim(preg_replace('/\s\s+/', '', file_get_contents("../data/users/$username/password"))))) {
      session_start();
      $_SESSION['LOG'] = True;
      $_SESSION['USERNAME'] = $username;
      $_SESSION['PASSWORD'] = $password;
      header("Location: index.php?notify=log");
  } else {
    header("Location: login.php?err=1");
  }
} else {
  header("Location: login.php?err=1");
}
 ?>
