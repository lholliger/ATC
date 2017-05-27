<?php
require("header.php");
function get_string_between($string, $start, $end){
    $string = ' ' . $string;
    $ini = strpos($string, $start);
    if ($ini == 0) return '';
    $ini += strlen($start);
    $len = strpos($string, $end, $ini) - $ini;
    return substr($string, $ini, $len);
}

if (!isset($_GET['rng'])) {
  header("Location: verify_user.php?rng=" . rand(00000, 99999));
} else {
 $num = $_GET['rng'];
$username = $_SESSION['USERNAME'];
$str0 = get_string_between(file_get_contents("https://scratch.mit.edu/site-api/comments/user/DatOneLefty/"), "$username</a>", $num);

?>
<center>
  <h1>Get Verified<h1>
</center>
<?php
if (strpos($str0, 'verified') !== false || file_get_contents("../data/users/$username/verified") == "1") {
  file_put_contents("../data/users/$username/verified", "0");
  echo "<div class='notify'><b>Success! </b> You have been verified</div>";
} else {
  ?>

  <?php
}

} // end rng
 ?>
