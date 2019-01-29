<?php include_once 'resource/session.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
      <title><?php if(isset($page_title)) echo $page_title; ?></title>

      <!-- Bootstrap -->
      <link href="css/bootstrap.min.css" rel="stylesheet">
      <link href="css/custom.css" rel="stylesheet">


</head>







<body>
 
<div class="container">
    <div class="home_main">
        <h1>Under Construction</h1>
        <p class="lead">This Site Is Under Construction<br> Please Check Again Later For Updates</p>

        <?php if(!isset($_SESSION['username'])): ?>
            <P class="lead">You Are Currently Not Signed In <a href="login.php">Login</a> Not Yet Registered? <a href="signup.php">Register</a> </P>
        <?php else: ?>
            <p class="lead">You Are Logged In As <?php if(isset($_SESSION['username'])) echo $_SESSION['username'] ?> <a href="logout.php">Logout</a> </p>
        <?php endif ?>
    </div>
</div>


<!-- footer -->

<!-- jquery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/custom.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
</body>
</html>
