<?php
require("header.php");
 ?>
 <div class='container'>
   <h1>Sign Up</h1>

   <form action="generate.php" method="post">
   Username: <input type="text" name="name"><br>
   Password: <input type="password" name="pass0"><br>
   Confirm Password: <input type="password" name="pass1"><br>
   <input type="submit">
   </form>
