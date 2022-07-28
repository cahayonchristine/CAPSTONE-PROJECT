<?php
session_start();
session_destroy();

	include 'conFunc.php';
?>
<!DOCTYPE html>
<html lang = "en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Admin Login</title>
    <link rel="stylesheet" href="css/start.css"/>
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
</head>
<body style = "background-color:#d3d3d3;">
	  <?php include('includes/header.php');?>

   <div class="content-wrapper">
        <div class="container">
            <div class="row">
                  <div class="col-md-3"></div>
                    <div class="col-md-5">                      
<br>
<br>
<br>
<br>

<div style="background-color: #ffff" class="center">
                 <div class="panel-body">
			<form method="post">
				<div class="txt_fiel">
					<input type="text" name="username" required>
					<span></span>
					<label>Username</label>
				</div>
				<div class="txt_field">
					<input type="password" name="password" required>
					<span></span>
					<label>Password</label>
				</div>
				 <input type="submit" name="submit" value="Login">
				 <div class="signup_link">
				    Forgot Password?<a href="newadmin.php">Sign in</a>
				</div>
			</form>
			</div>
      </div>
	</div>
	</div>
</div>

<br>
<br>
	
	<!-- CONTENT-WRAPPER SECTION END-->
    <?php include('includes/footer.php');?>
    <!-- FOOTER SECTION END-->
    <!-- JAVASCRIPT AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.11.1.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>
</body >
</html>

<?php
	session_start();
	
	if(isset($_POST['submit'])){
		$username = $_POST['username'];
		$password = $_POST ['password'];

		$query = "SELECT username, password FROM librarian where username = '$username' and password = '$password'";

  		if ($result = mysqli_query($link,$query))
  		{
  
  			$rowcount = mysqli_num_rows($result);
  			if($rowcount == 1){
  				$_SESSION['username'] = $username;
  				header("location:admin_page.php");
  			}
  			else{
  				echo "Incorrect Password or Email";
  				header("location:adminlogin.php");
  			}
  
  		}

	}
?>