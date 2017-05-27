<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Home</title>
    </head>
    <body>
        <?php
            session_start();

            $user = $_SESSION['username'];

            if(isset($user))
                echo '<h1 align="center">Welcome, '.$user.'</h1>
                <p align="center"><a href="logout.php">Logout</a></p>';
            else
                header('Location: login.php');

        ?>
    </body>
</html>
