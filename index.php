<?php
require("header.php");
if(!isset($_GET['notify'])) {
  $_GET['notify'] = False;
}
if ($_GET["notify"] == "acc_m") {
  echo "<div class='notify'><b>Success! </b> Account created successfully! Hit the log in button to log in!</div>";
}

if ($_GET["notify"] == "log") {
  echo "<div class='notify'><b>Success! </b> you have been logged in</div>";
}

if ($_GET["notify"] == "out") {
  echo "<div class='notify'><b>Success! </b> you have been logged out</div>";
}
 ?>
 <div class='container'>
   <h1>AT Challanges</h1>

 <p>tags:</p>
 <span class='open'>OPEN</span> Challange not solved <br><br>
 <span class='solved'>SOLVED</span> Challange solved<br><br>
 <span class='ISSUE'>ISSUE</span> There is an issue making it unsolvable/doesnt make sense
<p>Types of challanges</p>
<span class='t-crypt'>ENCRYPTION</span> Challange involes decyphering a string<br><br>
<span class='t-ctf'>CTF</span> Capture the flag<br><br>
<span class='t-code'>CODE</span> Competition to write something that is in the challange<br><br>

<span class='t-etc'>OTHER</span> something else not listed<br><br>

<p>Notes</p>
<p>If you win a competition the OP will be able to mark it as solved and you get a "point" that goes on the leaderboard</p>
<p>Anyone can mark the task as ISSUE, but only the OP can mark it as OPEN or SOLVED</p>
<p>The OP cannot award themselves wins and site moderators can remove points if they believe it is unfair</p>
<p>Verified people from scratch get a star by their name</p>
</body>
 </div>
