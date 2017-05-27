<head>
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="basic.css?<?php echo date('l jS \of F Y h:i:s A'); ?>">
  <title>AT Challenges</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<?php
ini_set('display_errors', 1);
error_reporting(~0);
session_start();
 ?>
</head>
<body>
  <div class='nav'>
    <a href='index.php' class='nav-head'>
      AT Challenges
    </a>
    <a href='index.php' class='nav-part'>
      Home
    </a>
    <a href='posts.php' class='nav-part'>
      Posts
    </a>
    <?php
    if(!isset($_SESSION['LOG'])) {
      $_SESSION['LOG'] = False;
    }
    if ($_SESSION['LOG'] == True) { ?>
      <a href='new.php' class='nav-part'>
        New Post
      </a>
      <a href='logout.php' class='nav-part'>
        Log Out
      </a>
    <?php
    } else {
    ?>
      <a href='login.php' class='nav-part'>
        Log In
      </a>
      <a href='signup.php' class='nav-part'>
        Sign Up
      </a>
    <?php
    }
    ?>
  </div>
