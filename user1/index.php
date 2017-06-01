<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>User1</title>
    <link rel="stylesheet" href="../style.css">
  </head>
  <body>

    <div id="header">

      <?php
          session_start();

          $user   = $_SESSION['user1'];

          if(isset($user)) {

              echo '
                <h1>'.$user.'</h1>
                <a href="../logout.php"> Logout </a>
              ';

          }

          else
              header('Location: login.php');

      ?>

    </div>

  </body>
</html>
