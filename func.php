<?php
function verify($username) {
  if (file_get_contents("../data/users/$username/verified") == "1") {
    return "<font color='blue'>✔ </font>";
  } else {
    return " ";
  }
}
 ?>
