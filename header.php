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
    <a href='index.php'>
    <button class='nav-head'>
      AT Challenges
    </button>
  </a>
<a href='index.php'>
    <button class='nav-part'>
      Home
    </button>
  </a>
  <a href='posts.php'>
      <button class='nav-part'>
        Posts
      </button>
  </a>
    <?php
    if(!isset($_SESSION['LOG'])) {
      $_SESSION['LOG'] = False;
    }
    if ($_SESSION['LOG'] == True) { ?>
      <a href='new.php'>
          <button class='nav-part'>
            New Post
          </button>
      </a>
      <a href='logout.php'>
      <button class='nav-part'>
        Log Out
      </button>
    </a>
      <?php
    } else {
      ?>
<a href='login.php'>
      <button class='nav-part'>
        Log In
      </button>
    </a>
<a href='signup.php'>
      <button class='nav-part'>
        Sign Up
      </button>
    </a>
      <?php
    }
     ?>
  </div>
