<!DOCTYPE html>
<html>
 
	<?php   
	session_start();
     
	$servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "bank";
 
	$con = mysqli_connect($servername,$username,$password,$dbname);
 
	if(!$con){
		die("Connection failed: " . mysqli_connect_error());
	}
	echo "Connected successfully";
	?>
 
	<head>
		<title>Sign Up</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	</head>
 
	<body>
		<div class="container">
			<h1 class="col-lg-9 col-lg-offset-1 well">Registration Form</h1>
			<div class="col-lg-9 col-lg-offset-1 well">
				<div class="row">
					<form action="signup.php" method="POST">
						<div class="col-sm-12">
						<div class="row">
							<div class="col-sm-6 form-group">
								<label>First Name</label>
								<input type="text" placeholder="Enter First Name" class="form-control" name="fname" required>
							</div>
							<div class="col-sm-6 form-group">
								<label>Last Name</label>
								<input type="text" placeholder="Enter Last Name" class="form-control" name="lname" required >
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6 form-group">
								<label>Username</label>
								<input type="text" placeholder="Enter username" class="form-control" name="username" required>
							</div>
							<div class="col-sm-6 form-group">
								<label>Password</label>
								<input type="password" placeholder="Enter password" class="form-control" name="password" required >
							</div>
						</div>                     
						<div class="form-group">
							<label>Address</label>
							<input type="text" placeholder="Enter Address" class="form-control" name="address" required>
						</div>    
						<div class="row">
							<div class="col-sm-3 form-group">
								<label>City</label>
								<input type="text" placeholder="Enter City Name" class="form-control" name="city" required>
							</div>    
							<div class="col-sm-3 form-group">
								<label>State</label>
								<!-- <input type="text" placeholder="Enter State Name" class="form-control" name="state" required> -->
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
							<div class="col-sm-3 form-group">
								<label>Zip</label>
								<input type="number" placeholder="Enter Zip Code" class="form-control" name="zip" required>
							</div> 

							<div class="col-sm-3 form-group">
								<label>Phone Number</label>
								<div>
								(<input type="text" name="phone-1" maxlength="3" style="width: 46px;border: 1px solid #ccc;border-radius: 4px;height: 34px;text-align: center;">)
   								<input type="text" name="phone-2" maxlength="3" style="width: 46px;border: 1px solid #ccc;border-radius: 4px;height: 34px;text-align: center;">-
  								 <input type="text" name="phone-3" maxlength="4" style="width: 63px;border: 1px solid #ccc;border-radius: 4px;height: 34px;text-align: center;">
								</div>
							</div>  

						</div>
                        
						<div class="row">
							<div class="col-sm-4 form-group">
								<label>Initial Deposit</label>
								<input class="form-control" name="deposit" type="number" min="0.01" step="0.01" max="10500" maxlength="4" value="0.0" required="" style="text-align: center;border-style: double;">
							</div>  

								<div class="col-sm-4 form-group">
								<label>SS#</label>
								<div> 
									<input class=""type="text" name="ssn-1" maxlength="3" style="width: 63px;border: 1px solid #ccc;border-radius: 4px;height: 34px;">-
									<input class=""type="text" name="ssn-2" maxlength="2" style="width: 63px;border: 1px solid #ccc;border-radius: 4px;height: 34px;">-
									<input class=""type="text" name="ssn-3" maxlength="4" style="width: 63px;border: 1px solid #ccc;border-radius: 4px;height: 34px;">                       
								</div> 
								</div>

							<div class="col-sm-4 form-group">
							<label>Date of Birth</label>
							<input type="date" placeholder="Dob" name="dob"  class="form-control" required>
						</div> 
							
							
						  


							</div>
                        

                          <div class="row">
							<div class="col-sm-3 form-group">
								<label>Email Address</label>
								<input type="email" placeholder="Enter Email Address" maxlength="60" class="form-control" name="email" required>
							</div>    
		</div>
		
		
							<button name="submit" type="submit" class="btn btn-lg btn-info">Submit</button>                 
						</div>
					</form> 
				</div>
			</div>
		</div>
		
		<div class="container">
			<a class="col-md-offset-4" style="text-align: center; padding: 10px; background: #f7f7f7; border-radius: 5px; width:40%;" href="index.php"> I made a mistake take me back to login </a>
		</div>
 
		<?php
		if(isset($_POST['submit'])){
			//getting the text information and saving in local variables
			$user_name = mysqli_real_escape_string($con, $_POST['username']);
			$user_pass = mysqli_real_escape_string($con, $_POST['password']);
			$user_fname = mysqli_real_escape_string($con, $_POST['fname']);
			$user_lname = mysqli_real_escape_string($con, $_POST['lname']);
			$user_dob = mysqli_real_escape_string($con, $_POST['dob']);
			$user_address = mysqli_real_escape_string($con, $_POST['address']);
			$user_city = mysqli_real_escape_string($con, $_POST['city']);
			$user_state = mysqli_real_escape_string($con, $_POST['state']);
			$user_zip = mysqli_real_escape_string($con, $_POST['zip']);
			$user_phone = mysqli_real_escape_string($con, $_POST['phone-1']) . mysqli_real_escape_string($con, $_POST['phone-2']) . mysqli_real_escape_string($con, $_POST['phone-3']);
			$user_email = mysqli_real_escape_string($con, $_POST['email']);
			$init_deposit = mysqli_real_escape_string($con, $_POST['deposit']);
			$social = mysqli_real_escape_string($con, $_POST['ssn-1']) . "-" . mysqli_real_escape_string($con, $_POST['ssn-2']) . "-" .mysqli_real_escape_string($con, $_POST['ssn-3']);
			 
			$sel_email = "select * from customer_data where Email='$user_email'";
			$run_email = mysqli_query($con, $sel_email);
			//validation.. needs more but eh
			$check_email = mysqli_num_rows($run_email);
			$check_username = mysqli_num_rows(mysqli_query($con, "SELECT * FROM customer_data WHERE Username = '$user_name'"));
 
			if($check_email == 1){
 
				echo "<script>alert('This email is already registered, try another one!')</script>";
				exit();
 
			}

			if($check_username== 1){
				echo "<script>alert('This username is already registered, try another one!')</script>";
				exit();

			}
			else{
				$insert = "INSERT INTO `customer_data`(`Username`, `Password`, `First_Name`, `Last_Name`, `Address`, `City`, `State`, `Zip_Code`, `Phone`, `DoB`, `Email`, `Last_Login`) VALUES ('$user_name','$user_pass','$user_fname','$user_lname','$user_address','$user_city','$user_state','$user_zip', '$user_phone','$user_dob','$user_email',NOW())"; 
				$run_insert = mysqli_query($con, $insert);
				$run_email = mysqli_query($con, $sel_email);

				while($row=mysqli_fetch_array($run_email)){
				$account_number  = $row['Account_Number'];
			
				}

				//gets required things to build card
			$card = scramble($account_number);
			$cvc = rand(100,999);
			$exp = date("m")."/" . (date("y") + 5);
			//inserts card
			$insertcc = "INSERT INTO `card_info`(`card#`, `cvc`, `exp`,`Balance`, `Account_Number`) VALUES ('$card','$cvc','$exp','$init_deposit','$account_number')";
			//insert user social
			$insertsocial = "INSERT INTO `social security`(`SS`, `Account_Number`) VALUES ('$social','$account_number')";

			$run_card = mysqli_query($con, $insertcc);
			$run_social = mysqli_query($con, $insertsocial);
			//build transaction
			$type = "Initial Deposit";
			$date = date('Y-m-d h:i A');
			$addTrans = "INSERT INTO `transaction`(`Time`, `Transaction`, `Confirmation`, `Account_Number`) VALUES ('$date','$type','$init_deposit','$account_number')";
			$runTrans = mysqli_query($con,$addTrans);
			
			}


										// for some reason this wouldnt work without seperating each.. oh well.
			if($run_insert){
				echo "<script>alert('Registration Successful, Welcome!')</script>";
			}
			if($run_card){
				//echo "<script>alert('card insertion was ran')</script>";
			}
			if($run_social){
			//echo "<script>alert('social was ran')</script>";
			}
			if($runTrans){
			//echo "<script>alert('Transact started')</script>";
			$_SESSION['account_number'] = $account_number;
			echo "<script>window.open('cards.php','_self')</script>";
			}
		}		
		//scrambles number for card number
		function scramble($number) {
    		// return (30533914 * (10033320 - $number + date('s') ) + 151647) % 99447774483;
			$r = rand(100000000000, 999999111111);
			return abs($r + $id); //better consistency

		}
		
		?>
	</body>
</html>