<?php
require("header.php");
?>
<div class='container'>
  <h1>New Challenge</h1>
  <center>
  <div class='postbox'>

       <form action="spost.php" method="post">
<input class='name' name='pname'>
<textarea name='content'>
</textarea>

Challenge Type: <select name="type">
  <option value="encryption">Encryption</option>
  <option value="ctf">Capture the Flag</option>
  <option value="code">Coding</option>
  <option value="etc">Other</option>
  <option value='cg'>Code Golf</option>
</select><br>
  <input class='sub' type="submit">
  </form>

  </div>
</center>
