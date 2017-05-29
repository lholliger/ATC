<?php
require("header.php");
if(!isset($_GET['err'])) {
  $_GET['err'] = False;
}
if ($_GET["err"] == "1") {
  echo "<div class='notify'><b>Oops! </b>Your username or password was entered incorrectly</div>";
}

if ($_GET["err"] == "3") {
  echo "<div class='notify'><b>Oops! </b>You weren't signed in when you tried to make a post!</div>";
}
 ?>
 <div class='container'>
   <h1>Log in</h1>

   <form action="verify.php" method="post" id="form">
   Username: <input type="text" name="username"><br>
   Password: <input type="password" name="pass0"><br>
   <input type="submit">
   <script>document.body.onkeydown = function(e){
   if(e.keyCode == 13){
     document.getElementById("form").submit();
   }
};</script>
