<?php
session_start();
//koneksi
include '../koneksi.php';
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login Page in HTML with CSS Code Example</title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">


<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"><link rel="stylesheet" href="../css/login.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="box-form">
	<div class="left">
		<div class="overlay">
		<h1>Literasi Admin Page.</h1>
		
		<!-- <span>
			<p>login </p>
			<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
			<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i> Login with Twitter</a>
		</span> -->
		</div>
	</div>
	
	<form role="form" method="post">
		<div class="right">
		<h5>Login</h5>
		<p style="color: white;">Don't have an account? it takes less than a minutetakes less than a minute</p>
		<div class="inputs">
			<input type="text" name="user" placeholder="user name">
			<br>
			<input type="password" name="pass" placeholder="password">
		</div>
			
			<br><br>
			
		<div class="remember-me--forget-password">
				<!-- Angular -->
	<!-- <label>
		<input type="checkbox" name="item" checked/>
		<span class="text-checkbox">Remember me</span>
	</label> -->
			<!-- <p>forget password?</p> -->
		</div>
			
			<br>
			<button name="login">Login</button>
	</div>
    </form>
	
</div>
<!-- partial -->
  
</body>
</html>

<?php
if(isset($_POST['login']))
{
    $ambil = $conn->query("SELECT * FROM `admin` WHERE username='$_POST[user]' AND `password` ='$_POST[pass]'");
    $yangcocok = $ambil->num_rows;
    if ($yangcocok==1)
    {
        $_SESSION['admin']=$ambil->fetch_assoc();
        
        echo "<script>alert('Login Berhasil');
        location.href='dashboard.php';</script>";
    }
    else
    {
		echo "<script>alert('Username / Password Salah');
        location.href='index.php';</script>";
    }
}
?>

