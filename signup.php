<?php
require("header.php");
 ?>
 <div class='container'>
   <h1>Sign Up</h1>

   <form action="generate.php" method="post" id="form">
   Username: <input type="text" name="username"><br>
   Password: <input type="password" name="pass0"><br>
   Confirm Password: <input type="password" name="pass1"><br>
   <input type="submit">
   </form>
  <script>document.body.onkeydown = function(e){
   if(e.keyCode == 13){
     document.getElementById("form").submit();
   }
};</script>
