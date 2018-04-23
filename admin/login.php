<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentelella Alela! | </title>

    <!-- Bootstrap -->
    <link href="../assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="../assets/build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <?php
      include '../conf/koneksi.php';
      include 'authlogin.php';

      if(isset($_POST['submit'])){
          $username = $_POST['username'];
          $password = $_POST['password'];

          $query = "SELECT * FROM `user` WHERE username='$username' and password='$password' and role=1";
          $result = mysqli_query($koneksi,$query) or die(mysql_error());
          $data = mysqli_fetch_assoc($result);
          if(isset($data['id'])){
            session_start();
            $_SESSION['username'] = $username;
            $_SESSION['id'] = $hasil['nik'];
            header('Location: tabel.php'); 
          }else{
            echo"<script>alert('Username atau Password anda salah!');</script>";
          }
      }

    ?>
    <div>
      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form method="POST">
              <h1>Blanko Autentifikasi</h1>
              <div>
                <input type="text" class="form-control" placeholder="Username" required="" name="username" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" required="" name="password" />
              </div>
              <div style="margin-left: 30%;">
                <input class="btn btn-default submit" type="submit" id="submit" value="Submit" name="submit">
              </div>

              <div class="clearfix"></div>

              <div class="separator" style="padding-top: 0;">
                <div class="clearfix"></div>
                <br />

                <div>
                  <h2><img src="../assets/img/ta5-01.png" style="width: 50%;height: 50%;"></h2>
                  <p>Tour Addict Powered by Gentelella Alela!</p>
                  <p>Made by<a href="https://colorlib.com/"> Colorlib</a></p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>