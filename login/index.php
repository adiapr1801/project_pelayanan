<?php 
session_start();
require_once('../koneksi/+koneksi.php');
require_once('../model/database.php');
include "../model/m_login.php";
$connection = new Database($host, $user, $pass, $database);
$login = new Login($connection);
 ?>

<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="ie6 ielt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="ie7 ielt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="ie8"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html lang="en"> <!--<![endif]-->
<head>
<meta charset="utf-8">
<title>Halaman Login</title>
<link rel="stylesheet" type="text/css" href="style/css.css" />
</head>
<body bgcolor="#0000FF">
<div class="box">
  <div class='box-form'>
    <div class="box-login-tab"></div>
    <div class="box-login-title">
      <div class="i i-login"></div><h2>LOGIN</h2>
    </div>
    <div class="box-login">
      <div class="fieldset-body" id="login_form">
        <button onclick="openLoginInfo();" class="b b-form i i-more" title="Mais Informa��es"></button>
		<img src="imh/download.jpg" width="80%" />
		<form action="" method="post">
            <p class="field">
          <label for='user'>Username</label>
          <input type="text" name="username" placeholder="Username" id="user" class="inputan" />
          <span id='valida' class='i i-warning'></span>
        </p>
          <p class='field'>
          <label for='pass'>PASSWORD</label>
          <input type='password' id='pass' name='password' placeholder="Password" title='Password' />
          <span id='valida' class='i i-close'></span>
        </p>
		<HR>
          <label class='checkbox'>
		  <input type="radio" name="level" value="admin"> CEO -
		  <input type="radio" name="level" value="staff"> CS -
		  <input type="radio" name="level" value="teknisi"> TEKNISI
            
      
			
          </label>

            <button type="submit" name="login" style="background:#0000FF; width:100%;height:36px; color:#FFFFFF; font-weight:bold; margin-bottom:20px;" value='login' title='Get Started' >Login </button>
      </form>	
	  </div>
    </div>
  </div>
  <div class='box-info'>
                        <p><button onclick="closeLoginInfo();" class='b b-info i i-left' title='Back to Sign In'></button><h3>Need Help?</h3>
    </p>
                        <div class='line-wh'></div>
                        <button onclick="" class='b-support' title='Forgot Password?'> Forgot Password?</button>
    <button onclick="" class='b-support' title='Contact Support'> Contact Support</button>
                        <div class='line-wh'></div>
    <button onclick="" class='b-cta' title='Sign up now!'> CREATE ACCOUNT</button>
                </div>
</div>
<?php 
    if(@$_POST['login']){
      $username = $connection->conn->real_escape_string($_POST['username']);
      $password = $connection->conn->real_escape_string($_POST['password']);
      $level = $connection->conn->real_escape_string($_POST['level']);

      if ($level == 'admin'){
         $tampil= $login->admin($username,$password);
         $data=$tampil->fetch_array();
         $_SESSION['nama'] = $data['nama'];
         $id = $data[0];
         $cek = mysqli_num_rows($tampil);
         if ($cek > 0) {
           $_SESSION['admin'] = $id;
             echo"<script>window.location='../halaman/admin';</script>";
         }
         else
         {
             echo"<script>alert('Password atau Username Salah;');</script>";
         }
      }
      else if ($level == 'staff'){
         $tampil= $login->staff($username,$password);
         $data=$tampil->fetch_array();
         $_SESSION['nama'] = $data['nama'];
         $id = $data[0];
         $cek = mysqli_num_rows($tampil);
         if ($cek > 0) {
           $_SESSION['staff'] = $id;
             echo"<script>window.location='../halaman/transaksi';</script>";
         }
         else
         {
             echo"<script>alert('Password atau Username Salah;');</script>";
         }
      }
      else if ($level == 'teknisi'){
        $tampil= $login->teknisi($username,$password);
        $data=$tampil->fetch_array();
        $_SESSION['nama'] = $data['nama'];
        $id = $data[0];
        $cek = mysqli_num_rows($tampil);
        if ($cek > 0) {
          $_SESSION['teknisi'] = $id;
            echo"<script>window.location='../halaman/teknisi/index.php?teknisi=".$data['nama']."';</script>";
        }
        else
        {
            echo"<script>alert('Password atau Username Salah;');</script>";
        }
     }
    }
 ?>



 <div class='icon-credits'>Icons made by <a href="http://www.freepik.com" title="Freepik">Freepik</a>, <a href="http://www.flaticon.com/authors/budi-tanrim" title="Budi Tanrim">Budi Tanrim</a> & <a href="http://www.flaticon.com/authors/nice-and-serious" title="Nice and Serious">Nice and Serious</a> from <a href="http://www.flaticon.com" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>  </body>
</html>


