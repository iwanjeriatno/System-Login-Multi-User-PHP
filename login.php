<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Login</title>
    </head>
    <body>
        <?php
            include_once 'koneksi.php';

            session_start();

              if(isset($_POST['login'])) {
                
                $username_dari_form     = $_POST['username'];
                $password_dari_form     = $_POST['password'];

                $sql   = "SELECT * FROM users WHERE username='$username_dari_form' AND password='$password_dari_form' ";
                $hasil = $koneksi->query($sql);
                $data  = $hasil->fetch_object();

                $username_dari_database = $data->username;
                $password_dari_database = $data->password;
                $status_dari_database   = $data->status;

                if($username_dari_form == $username_dari_database && $password_dari_form == $password_dari_database) {

                  if($status_dari_database == 'admin' ) {
                    $_SESSION['admin']       = $username_dari_database;

                    header('Location: admin/dashboard.php');
                  }

                  elseif($status_dari_database == 'user1' ) {
                    $_SESSION['user1']       = $username_dari_database;

                    header('Location: user1/index.php');
                  }

                  elseif($status_dari_database == 'user2' ) {
                    $_SESSION['user2']       = $username_dari_database;

                    header('Location: user2/index.php');
                  }

                  else {
                    header('Location: index.php');
                  }

                }
                else {
                  header('Location: index.php');
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
