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
  background: #e7e7e7;
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
      <a href="http://www.auplod.com/i-luodap9aefe.html"><img src="http://www.auplod.com/u/luodap9aefe.png" alt="Image" border="0" /></a>
      </div>

    <div class="container">
 
      <form action="index.php" method="POST" class="form-signin">
        <h2 class="form-signin-heading">Please sign in</h2>
       
        <input type="text"  class="form-control" placeholder="Username" name="username" required autofocus>
    
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password" required>
        <div style="float:right; padding: 5px;">
          <label>
         <!--<input type="checkbox" value="remember-me"> Remember me -->
         <a href="signup.php">Register Here</a>
         
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit" >Sign in</button>
      </form>
 
    </div> <!-- /container -->
    <div style="position:fixed; bottom: 30px;; right:0;">
      <a class="" style="color:white;" href="admin.php">To admin page</a>
      </div>
  </body>
 
  <?php
 // ob_start();
if (isset($_POST['submit'])) {
 
    $GLOBALS['user_name'] = mysqli_real_escape_string($con, $_POST['username']); //set global variables.. really isnt necessary. works the same way as if you did it the regular way.
    $GLOBALS['user_pass'] = mysqli_real_escape_string($con, $_POST['password']);
 
$query="SELECT * FROM customer_data WHERE Username = '$user_name' AND Password='$user_pass'";

$result = mysqli_query($con,$query);
$count = mysqli_num_rows($result);

if($count == 1){

  $updatetime = "UPDATE `customer_data` SET `Last_Login`= NOW() WHERE Username = '$user_name'"; 
  mysqli_query($con,$updatetime);

  $query = "SELECT `Account_Number` FROM customer_data WHERE Username = '$user_name' AND Password='$user_pass'";
  $run_email = mysqli_query($con, $query);

  $row = mysqli_fetch_array($run_email,MYSQLI_ASSOC); // a more efficient way of doing one row I would say ;)

 $_SESSION['account_number']= $row['Account_Number']; 
  header('Location: cards.php');
 }

else{

    echo "<script>alert('Credentials Incorrect')</script>";
 }
}
//ob_end_clean();
?>
</html>
