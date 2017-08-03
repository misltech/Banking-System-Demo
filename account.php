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

        if($_SESSION['account_number'] == null ){
        header("location:index.php");
        die();
        }
?>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<style>

@import url(https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css);
body{margin-top:20px;}
.fa-fw {width: 2em;}

</style>
</head>


<body>

    <div class="container text-center" style="margin-bottom:25px;">
      <a href="http://www.auplod.com/i-luodap9aefe.html"><img src="http://www.auplod.com/u/luodap9aefe.png" alt="Image" border="0" /></a>
      </div>

<div class="container">
    <div class="row">
        <div class="col-md-3">
            <ul class="nav nav-pills nav-stacked admin-menu">
                <!--<li class="active"><a href="#" data-target-id="home"><i class="fa fa-home fa-fw"></i>Home</a></li>-->
                <li class="active"><a href="account.php" data-target-id="Account"><i class="fa fa-file-o fa-fw"></i>My Account</a></li>
                <li><a href="cards.php" data-target-id="My Cards"><i class="fa fa-list-alt fa-fw"></i>My Cards</a></li>
                <!-- <li><a href="activity.php" data-target-id="Activity"><i class="fa fa-file-o fa-fw"></i>Activity</a></li> -->
                <li><a href="withdraw.php" data-target-id="Withdraw"><i class="fa fa-bar-chart-o fa-fw"></i>Withdraw</a></li>
                <li><a href="deposit.php" data-target-id="Deposit"><i class="fa fa-table fa-fw"></i>Deposit</a></li>
                <li><a href="logout.php" data-target-id="Logout"><i class="fa fa-tasks fa-fw"></i>Logout</a></li>
                <!--<li><a href="http://www.jquery2dotnet.com" data-target-id="Settings"><i class="fa fa-cogs fa-fw"></i>Settings</a></li>-->
            </ul>
        </div>
            
            
            <div class="col-md-9 well admin-content" id="home">

                <form method="POST" action="account.php" class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend>Account Settings</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="username">Username</label>  
  <div class="col-md-4">
  <input id="username" name="username" type="text" placeholder="Change your username here" class="form-control input-md" required>
    
  </div>
</div>

<!-- Button -->

<div class="form-group">
   <label class="col-md-4 control-label" for="singlebutton"></label> 
  <div class="col-md-4">
    <button id="singlebutton" type="submit" name="cusername" class="btn btn-success">Change Username</button>
  </div>
</div>

</form>


<hr>

<form method="POST" action="account.php" class="form-horizontal">
<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="password">Old Password</label>
  <div class="col-md-4">
    <input id="password" name="password" type="password" placeholder="" class="form-control input-md" required>
  </div>
</div>


<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="password2">New Password</label>
  <div class="col-md-4">
    <input id="password2" name="password2" type="password" placeholder="" class="form-control input-md" required>
    
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="cpass"></label>
  <div class="col-md-4">
    <button id="cpass" name="cpassword" type="submit" class="btn btn-primary">Change Password</button>
  </div>
</div>
</form>


<hr>


<form method="POST" action="account.php" class="form-horizontal">
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Phone</label>  
  <div class="col-md-4">
  <input id="textinput" name="phone" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="cpass"></label>
  <div class="col-md-4">
    <button id="cpass" name="cnumber" type="submit" class="btn btn-warning">Change Phone Number</button>
  </div>
</div>
</form>



<hr>

<form method="POST" action="account.php" class="form-horizontal">
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Address</label>  
  <div class="col-md-4">
  <input id="textinput" name="address" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">City</label>  
  <div class="col-md-4">
  <input id="textinput" name="city" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">State</label>  
  <div class="col-md-4">
  <!-- <input id="textinput" name="textinput" type="state" placeholder="" class="form-control input-md"> -->
    <select style="border: 1px solid #ccc;border-radius: 4px;height: 34px;text-align: center;" name="state" required>
	<option value=""></option>
	<option value="AL">Alabama</option>
	<option value="AK">Alaska</option>
	<option value="AZ">Arizona</option>
	<option value="AR">Arkansas</option>
	<option value="CA">California</option>
	<option value="CO">Colorado</option>
	<option value="CT">Connecticut</option>
	<option value="DE">Delaware</option>
	<option value="DC">District Of Columbia</option>
	<option value="FL">Florida</option>
	<option value="GA">Georgia</option>
	<option value="HI">Hawaii</option>
	<option value="ID">Idaho</option>
	<option value="IL">Illinois</option>
	<option value="IN">Indiana</option>
	<option value="IA">Iowa</option>
	<option value="KS">Kansas</option>
	<option value="KY">Kentucky</option>
	<option value="LA">Louisiana</option>
	<option value="ME">Maine</option>
	<option value="MD">Maryland</option>
	<option value="MA">Massachusetts</option>
	<option value="MI">Michigan</option>
	<option value="MN">Minnesota</option>
	<option value="MS">Mississippi</option>
	<option value="MO">Missouri</option>
	<option value="MT">Montana</option>
	<option value="NE">Nebraska</option>
	<option value="NV">Nevada</option>
	<option value="NH">New Hampshire</option>
	<option value="NJ">New Jersey</option>
	<option value="NM">New Mexico</option>
	<option value="NY">New York</option>
	<option value="NC">North Carolina</option>
	<option value="ND">North Dakota</option>
	<option value="OH">Ohio</option>
	<option value="OK">Oklahoma</option>
	<option value="OR">Oregon</option>
	<option value="PA">Pennsylvania</option>
	<option value="RI">Rhode Island</option>
	<option value="SC">South Carolina</option>
	<option value="SD">South Dakota</option>
	<option value="TN">Tennessee</option>
	<option value="TX">Texas</option>
	<option value="UT">Utah</option>
	<option value="VT">Vermont</option>
	<option value="VA">Virginia</option>
	<option value="WA">Washington</option>
	<option value="WV">West Virginia</option>
	<option value="WI">Wisconsin</option>
	<option value="WY">Wyoming</option>
</select>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Zip Code</label>  
  <div class="col-md-4">
  <input id="textinput" name="textinput" type="zip" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="cpass"></label>
  <div class="col-md-4">
    <button id="address" name="caddress" type="submit" class="btn btn-danger">Change Address</button>
  </div>
</div>



</fieldset>
</form>


                </div>

        </div>
   </div>

</div>

<?php

if (isset($_POST['cusername'])) {

    $account = $_SESSION['account_number'];  //get number from session val
    $username = mysqli_real_escape_string($con, $_POST['username']);  // get username from input

    
    $run_username = mysqli_query($con, "SELECT Username FROM customer_data"); //query
    
    
    while($row=mysqli_fetch_array($run_username)){
       if($username == $row['Username']){
            echo "<script>alert('Username already taken')</script>";
            return;
        }
    }
    
    $run_username = "UPDATE `customer_data` SET `Username`= '$username' WHERE Account_Number = '$account'";
    $update_username = mysqli_query($con,$run_username);
 

    if($update_username){
    echo "<script>alert('Success!')</script>";
  }


}


  if (isset($_POST['cpassword'])) {
    $oldPass = mysqli_real_escape_string($con, $_POST['password']);
    $newPass = mysqli_real_escape_string($con, $_POST['password2']);
    $account = $_SESSION['account_number'];

    $query = "SELECT * FROM customer_data WHERE Account_Number = '$account'";
    $run_validation = mysqli_query($con, $query);
   
    $row=mysqli_fetch_array($run_validation,MYSQLI_ASSOC);
  
  if($row['Password'] == $oldPass){
    $run_update = "UPDATE `customer_data` SET `Password`= '$newPass' WHERE Account_Number = '$account'";
    $query_update = mysqli_query($con,$run_update);

    if($query_update){
    echo "<script>alert('Success!')</script>";
    }
    else{
      echo "<script>alert('Err at password event handler')</script>";  
    }
    
  }

  else{
    echo "<script>alert('Err: Wrong Password')</script>";  
  }


// $query = "SELECT `Account_Number` FROM customer_data WHERE Email = '$user_email' AND Password='$user_pass'";
//   $run_email = mysqli_query($con, $query);

//   $row=mysqli_fetch_array($run_email,MYSQLI_ASSOC);

  }


    if (isset($_POST['cnumber'])) {
    $account = $_SESSION['account_number'];
        $phone_number = mysqli_real_escape_string($con, $_POST['phone']);


    $run_update = "UPDATE `customer_data` SET `Phone`= '$phone_number' WHERE Account_Number = '$account'";
    $query_update = mysqli_query($con,$run_update);
    if( $query_update){
        echo "<script>alert('Success!')</script>";  
    }
    else{
        echo "<script>alert('Err at phone event listener')</script>";
    }

  }

  if (isset($_POST['caddress'])) {
    $address = mysqli_real_escape_string($con, $_POST['address']);
    $city = mysqli_real_escape_string($con, $_POST['city']);
    $state = mysqli_real_escape_string($con, $_POST['state']);
    $zip = mysqli_real_escape_string($con, $_POST['zip']);
    
    $run_update = "UPDATE `customer_data` SET `Address`= '$address', `City` = '$city', `State` = '$state', `Zip_Code` = '$zip' WHERE Account_Number = '$account'";
    $query_update = mysqli_query($con,$run_update);
    
    if( $query_update){
        echo "<script>alert('Success!')</script>";  
    }
    else{
        echo "<script>alert('Err @ address listener')</script>";
    }



  }

?>


</body>

</html>
