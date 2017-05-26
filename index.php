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
   <h1>AT challenges</h1>

 <h2>Challenge Status Tags:</h2>
 <span class='open'>OPEN</span> Challenge not solved <br><br>
 <span class='solved'>SOLVED</span> Challenge solved<br><br>
<span class='ISSUE'>ISSUE</span> There is an issue preventing the challenge from being doable<br><br>

<h2>Types of Challenges:</h2>
<span class='t-crypt'>ENCRYPTION</span> Challenge involes deciphering a string<br><br>
<span class='t-ctf'>CTF</span> Capture the flag<br><br>
<span class='t-code'>CODE</span> Competition to write something that is in the challenge<br><br>

<span class='t-etc'>OTHER</span> Something else not listed<br><br>

<h2>Notes:</h2>
<p>If you win a competition the OP will be able to mark it as solved and you get a "point" that goes on the leaderboard</p>
<p>Anyone can mark the task as ISSUE, but only the OP can mark it as OPEN or SOLVED</p>
<p>The OP cannot award themselves wins and site moderators can remove points if they believe it is unfair</p>
<p>Verified people from scratch get a star by their name</p>
</body>
 </div>
