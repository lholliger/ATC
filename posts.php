<?php
require("header.php");

$path = "../data/posts";
$files = glob("$path/*");
usort($files, function($a, $b) {
    return filemtime($a) < filemtime($b);
});
?>
<center>
<?php
foreach ($files as $post) {
  ?>
  <br><br>
  <div class='post'>
    <a class='hide' href='post.php?id=<?php echo(substr($post, strrpos($post, '/') + 1)) ?>'>
    <div class='pi'>
      <?php
      $path = $post;
      $files = glob("$path/_*");
      $rep = count($files);
       ?>
       <?php echo(file_get_contents("$post/0/poster")); ?> <span style='float: center;'><b><?php echo(file_get_contents("$post/0/title")); ?></b></span><span style='float: right;'><?php echo($rep); ?> replies</span>

       <?php
       $path = $post;
       $type = file_get_contents("$path/0/type");

       if ($type == "encryption") {
       echo("</h1> <span class='t-crypt'>ENCRYPTION</span>");
       }

       if ($type == "ctf") {
       echo("</h1> <span class='t-ctf'>CTF</span> ");
       }

       if ($type == "code") {
       echo("</h1> <span class='t-code'>CODE</span> ");
       }

       if ($type == "etc") {
       echo("</h1> <span class='t-etc'>OTHER</span> ");
       }

       $status = file_get_contents("$post/0/status");
       if ($status == "open") {
       echo(" <span class='open'>OPEN</span>");
       }

       if ($status == "solved") {
       echo(" <span class='solved'>SOLVED</span>");
       }

       if ($status == "issue") {
       echo(" <span class='ISSUE'>ISSUE</span>");
       }
       ?>
    </div>
    <div class='pc'>
      <?php echo(file_get_contents("$post/0/contents")); ?>
    </div>
  </div>

<?php
}
 ?>
