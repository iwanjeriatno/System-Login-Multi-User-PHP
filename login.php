<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Login</title>
    </head>
    <body>
        <?php
            include_once 'ConnectDB.php';

            session_start();

            $sql   = "SELECT username, password FROM users";
            $hasil = $connect->query($sql);
            $data  = $hasil->fetch_object();

            if(isset($_POST['login'])) {
                $username = $_POST['username'];
                $password = $_POST['password'];

                if($username == $data->username && $password == $data->password) {
                    $_SESSION['username'] =  $username;

                    header('Location: home.php');
                }

            }

         ?>

        <form class="" action="" method="post" align="center">
            Username <input type="text" name="username" placeholder="Username">
            Password <input type="password" name="password" placeholder="Password">
                     <input type="submit" name="login" value="Login">
        </form>

    </body>
</html>
