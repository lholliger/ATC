<?php
ini_set('display_errors', 1);
error_reporting(~0);
session_start();
 ?>
<head>
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="basic.css?<?php echo date('l jS \of F Y h:i:s A'); ?>">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/showdown/1.6.4/showdown.min.js"></script>
  <title>AT Challenges</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
  <div class='nav'>
    <a href='/' class='nav-head'>
      AT Challenges
    </a>
    <a href='/' class='nav-part'>
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
