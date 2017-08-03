<!DOCTYPE html>
<html>
<?php
    session_start();
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "bank";
 
    $con = mysqli_connect($servername,$username,$password,$dbname);
        if (!$con) {
            die("Connection failed: " . mysqli_connect_error());
        }


       // echo "<p style='margin-left: 5px;'>&#9989;</p>";

?>
 
<head>
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 
<style>
body {
  padding-top: 40px;
  padding-bottom: 40px;
  background-color: #fff;
}
 
.form-signin {
  max-width: 330px;
  padding: 15px;
  margin: 0 auto;
  border-radius: 5px;
  background: lightgray;
}
.form-signin .form-signin-heading,
.form-signin .checkbox {
  margin-bottom: 10px;
}
.form-signin .checkbox {
  font-weight: normal;
}
.form-signin .form-control {
  position: relative;
  height: auto;
  -webkit-box-sizing: border-box;
     -moz-box-sizing: border-box;
          box-sizing: border-box;
  padding: 10px;
  font-size: 16px;
}
.form-signin .form-control:focus {
  z-index: 2;
}
.form-signin input[type="email"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.form-signin input[type="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
#inputEmail{
	
	margin-bottom: 6px;
    border-radius: 5px;
}
#inputPassword{
	margin-bottom: 10px;
    border-radius: 5px;
   
}
 
</style>
 
 
</head>
 
<body>
      <div class="container text-center" style="margin-bottom:25px;">
    <a href="http://www.auplod.com/i-oduapl9aefd.html"><img src="http://www.auplod.com/u/oduapl9aefd.png" alt="Image" border="0" /></a>      </div>
    <div class="container">
 
      <form action="admin.php" method="POST" class="form-signin">
        <h4 class="form-signin-heading">Admins, you know what to do</h4>
        <input type="text" id="inputEmail" class="form-control" placeholder="user" name="username" required autofocus>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit" >Sign in</button>
      </form>
 
    </div> <!-- /container -->
 
  </body>
 
  <?php
if (isset($_POST['submit'])) {
 
    $GLOBALS['user_name'] = mysqli_real_escape_string($con, $_POST['username']);
    $GLOBALS['user_pass'] = mysqli_real_escape_string($con, $_POST['password']);
 
$query="SELECT * FROM employee WHERE Username = '$user_name' AND Password='$user_pass'";

$result = mysqli_query($con,$query);
$count = mysqli_num_rows($result);


if($count == 1){
  
  $query = "SELECT * FROM employee WHERE Username = '$user_name' AND Password='$user_pass'";
  $run_email = mysqli_query($con, $query);

  $row=mysqli_fetch_array($run_email,MYSQLI_ASSOC);

 $_SESSION['Username']= $row['Username']; 
  header('Location:admin_view.php');
 }

else{
    echo "<script>alert('Credentials Incorrect')</script>";
 }
}

 ?>
</html>

