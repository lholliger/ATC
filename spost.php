<?php
$p_data = $_POST["content"];
$title = $_POST['pname'];

session_start();

$username = $_SESSION['USERNAME'];
$password = $_SESSION['PASSWORD'];

if (file_exists("../data/users/$username")) {
  if (password_verify($password, trim(preg_replace('/\s\s+/', '', file_get_contents("../data/users/$username/password"))))) {
    $title = str_replace(">", "&#62;", $title);
    $title = str_replace("<", "&#60;", $title);

    $p_data = str_replace(">", "&#62;", $p_data);
    $p_data = str_replace("<", "&#60;", $p_data);
    $p_data = nl2br($p_data);
    $pid = uniqid();
    $path = "../data/posts/$pid/";
    mkdir($path);
    mkdir("$path/0");
    file_put_contents("$path/0/title", $title);
    file_put_contents("$path/0/contents", $p_data);
    file_put_contents("$path/0/poster", $username);
    file_put_contents("$path/0/type", $_POST["type"]);
    file_put_contents("$path/0/time", date('d-m-Y H:i:s'));
    file_put_contents("$path/0/status", "open");
    header("Location: post.php?id=$pid");
  } else {
    header("Location: login.php?err=3");
  }
} else {
  header("Location: login.php?err=3");
}



?>
