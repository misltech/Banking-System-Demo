<!DOCTYPE html> 
<?php 
session_start(); 

if($_SESSION['Username'] == null){
	header('Location:admin.php');
}


$con = mysqli_connect("localhost","root","","bank");

$currentpage = $_SERVER['REQUEST_URI'];

if(isset($_GET['id'])){

	$edit_id = $_GET['id']; 

	$sel = "select * from customer_data where Account_Number='$edit_id'";

	$run = mysqli_query($con,$sel);

	$row=mysqli_fetch_array($run);

	$id = $row['Account_Number'];
	$username = $row['Username'];
	$password = $row['Password'];
	$fname = $row['First_Name'];
	$lname = $row['Last_Name'];
	$address = $row['Address'];
	$city = $row['City'];
	$state = $row['State'];
	$zip = $row['Zip_Code'];
	$phone = $row['Phone'];
	$dob = $row['DoB'];
	$email = $row['Email'];
}

?>


<html>
	<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<title>Registration Form</title> 
	</head> 

	<style>
		body {
			padding: 0; 
			margin: 0;
			background: white;
		}
		table{
			color: white;
			padding: 10px;
			width: 400px;
			background: black;
		}
		input{
			padding: 5px;
		}
	</style>
	
	
	<body>
		<div class="container text-center" style="margin-bottom:25px;">
      <a href="http://www.auplod.com/i-luodap9aefe.html"><img src="http://www.auplod.com/u/luodap9aefe.png" alt="Image" border="0" /></a>
      </div>
		<div class="container text-center">
			<h3 class="well"><a style="float:left;" class="" href="admin_view.php">Go Back</a>Edit User</h3> 
			<div class="col-lg-12 well">
				<div class="row">
					<form action="admin_edit.php?id=<?php echo $id;?>" method="POST">
						<div class="col-sm-12">
							<div class="row">
								<div class="col-sm-6 form-group">
									<label>First Name</label>
									<!-- <input type="text" placeholder="Enter First Name" class="form-control" name="fname" required> -->
									<input type="text" name="fname" value="<?php echo $fname;?>"  class="form-control" required/> 
								</div>
								<div class="col-sm-6 form-group">
									<label>Last Name</label>
									<!-- <input type="text" placeholder="Enter Last Name" class="form-control" name="lname" required > -->
									<input type="text" name="lname" value="<?php echo $lname;?>"  class="form-control" required/> 
								</div>
							</div>
							<div class="row">
								<div class="col-sm-6 form-group">
									<label>Username</label>
									<!-- <input type="text" placeholder="Enter username" class="form-control" name="username" required> -->
									<input type="text" name="username" value="<?php echo $username;?>"  class="form-control" required/> 
								</div>
								<div class="col-sm-6 form-group">
									<label>Password</label>
									<!-- <input type="password" placeholder="Enter password" class="form-control" name="password" required > -->
									<input type="text" name="password" value="<?php echo $password;?>"  class="form-control" required/> 
								</div>
							</div>    
							<div class="col-md-6 form-group">
								<label>Date of Birth</label>
								<!-- <input type="date" placeholder="Dob" class="form-control" name="dob" required> -->
								<input type="date" name="dob" value="<?php echo $dob;?>"  class="form-control" required/> 
							</div>                    
							<div class="col-md-6 form-group">
								<label>Address</label>
								<!-- <input type="text" placeholder="Enter Address" class="form-control" name="address" required> -->
								<input type="text" name="address" value="<?php echo $address;?>"  class="form-control" required/> 
							</div>    
							<div class="row">
								<div class="col-sm-4 form-group">
									<label>City</label>
									<!-- <input type="text" placeholder="Enter City Name" class="form-control" name="city" required> -->
									<input type="text" name="city" value="<?php echo $city;?>"  class="form-control" required/> 
								</div>    
								<div class="col-sm-4 form-group">
									<label>State</label>
									<!-- <input type="text" placeholder="Enter State Name" class="form-control" name="state" required> -->
									<input type="text" name="state" value="<?php echo $state;?>"  class="form-control" required/> 
                                
								</div>    
								<div class="col-sm-4 form-group">
									<label>Zip</label>
									<!-- <input type="number" placeholder="Enter Zip Code" class="form-control" name="zip" required> -->
									<input type="text" name="zip" value="<?php echo $zip;?>"  class="form-control" required/> 
								</div>        
							</div>
							<div class="col-md-6 form-group">
								<label>Phone Number</label>
								<!-- <input type="tel" placeholder="Enter Phone Number" class="form-control" name="pnumber" required> -->
								<input type="text" name="phone" value="<?php echo $phone;?>"  class="form-control" required/> 
							</div>        
							<div class="col-md-6 form-group">
								<label>Email Address</label>
								<!-- <input type="email" placeholder="Enter Email Address" class="form-control" name="email" required> -->
								<input type="text" name="email" value="<?php echo $email;?>"  class="form-control" required/> 
							</div>    
							<button name="cuserinfo" type="submit" class="btn btn-lg btn-info">Change Info</button>                 
						</div>
					</form> 
				</div>
			</div>
		</div> 

		<div class="container text-center">
			<!-- <h3 class="well">Edit SS</h3> -->
			<div class="col-lg-12 well">
				<div class="row">
					<form action="admin_edit.php?id=<?php echo $id;?>" method="POST">
						<div class="col-sm-6 form-group">
							<label>SS#</label>
							<div> 
								<input class="" type="text" name="ssn-1" maxlength="3" style="width: 63px;border: 1px solid #ccc;border-radius: 4px;height: 34px;" required>-
								<input class="" type="text" name="ssn-2" maxlength="2" style="width: 63px;border: 1px solid #ccc;border-radius: 4px;height: 34px;" required>-
								<input class="" type="text" name="ssn-3" maxlength="4" style="width: 63px;border: 1px solid #ccc;border-radius: 4px;height: 34px;" required>                       
							</div> 
						</div>
                            
						<div class="col-sm-6 form-group" style="padding-top: 17px;">
                  
							<button name="csocial" type="submit" class="btn btn-lg btn-info ">Change Social#</button>

						</div>
					</form>

				</div>
			
			
			
			</div>
		</div>


		<div class="container text-center">
			<!-- <h3 class="well">Edit SS</h3> -->
			<div class="col-lg-12 well">
				<div class="row">
					<form action="admin_edit.php?id=<?php echo $id;?>" method="POST">
						<div class="col-sm-6 form-group" style="">

							<h4>Current Cards</h4>
							<?php
        

  
							$sel = "SELECT * FROM card_info WHERE Account_Number = '$id'";

							$run = mysqli_query($con,$sel);
							while($row=mysqli_fetch_array($run)){
								$card = $row['card#'];
								$balance = $row['Balance'];

								?>

								<p> <?php echo $card;?> BAL: <?php echo $balance;?> </p>

								<?php } ?>

						</div>

						<div class="col-sm-6 form-group" style="padding-top: 17px;">
                  
							<button name="generatecard" type="submit" class="btn btn-lg btn-info ">Generate a new card</button>

						</div>
					</form>
				</div>
				<hr>
					
				<div class="row">
					<form action="admin_edit.php?id=<?php echo $id;?>" method="POST">
						<div class="col-sm-6 form-group" style="">
       
							<select style="border: 1px solid #ccc;border-radius: 4px;height: 34px;text-align: center;" name="accounts" required>
								<option value=""></option>
							
								<?php
								$sel = "SELECT * FROM card_info WHERE Account_Number = '$id'";

								$run = mysqli_query($con,$sel);
								while($row=mysqli_fetch_array($run)){
									$card = $row['card#'];
									$balance = $row['Balance'];


									?>
									<option value=<?php echo $card;?> > <?php echo $card;?> BAL: <?php echo $balance;?>  </option>


									<?php } ?>
							</select>
						</div>


						<div class="col-sm-6 form-group" style="">

							<button name="deletecard" type="submit" class="btn btn-lg btn-danger ">Delete Card</button>
        
						</div>
					</form>
				</div>	
			</div>
		</div>
		
		<div class="container text-center">
			<!-- <h3 class="well">Edit SS</h3> -->
			<div class="col-lg-12 well">
				<div class="row">
					<form action="admin_edit.php?id=<?php echo $id;?>" method="POST">
				
						<div class="col-sm-4 form-group" style="">
							<label> Deposit</label>
							<input type="text" name="depositvalue" placeholder="$$" class="form-control" required/>
				
						</div>
	
						<div class="col-sm-4 form-group" style="">
				
							<label> INTO </label>
							<select class="form-control" name="depositacc" required>
								<option value=""></option>
							
								<?php
								$sel = "SELECT * FROM card_info WHERE Account_Number = '$id'";

								$run = mysqli_query($con,$sel);
								while($row=mysqli_fetch_array($run)){
									$card = $row['card#'];
									$balance = $row['Balance'];


									?>
									<option value=<?php echo $card;?> > <?php echo $card;?> BAL: <?php echo $balance;?>  </option>


									<?php } ?>
							</select>
						</div>
						<div class="col-sm-4 form-group" style="padding-top: 17px;">
							<button name="deposit" type="submit" class="btn btn-lg btn-danger ">Deposit</button>
						</div>
					
					</form>
				</div>
			</div>
		</div>
		

		<?php 
		if(isset($_POST['cuserinfo'])){

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
			$user_phone = mysqli_real_escape_string($con, $_POST['phone']);
			$user_email = mysqli_real_escape_string($con, $_POST['email']);

			$run_username = mysqli_query($con, "SELECT * FROM customer_data"); //query
    
    
			while($row = mysqli_fetch_array($run_username)){
				if($user_name == $row['Username'] && $row['Account_Number'] != $id ){
					echo "<script>alert('Username already taken')</script>";
					return;
				}
				if($user_email == $row['Email'] && $row['Account_Number'] != $id ){
					echo "<script>alert('Email already taken')</script>";
					return;
			
				}
			}
    

			$update = "UPDATE `customer_data` SET `Username`= '$user_name',`Password`= '$user_pass' ,`First_Name`= '$user_fname',`Last_Name`= '$user_lname',`Address`= '$user_address',`City`= '$user_city',`State`= '$user_state',`Zip_Code`='$user_zip',`Phone`='$user_phone',`DoB`='$user_dob',`Email`='$user_email' WHERE Account_Number = '$id'";
			
			//"UPDATE `customer_data` SET `Username`= '$username',`Password`= '$password' ,`First_Name`= '$fname',`Last_Name`= '$lname',`Address`= '$address',`City`= '$city',`State`= '$state',`Zip_Code`='$zip',`Phone`='$phone',`DoB`='$dob',`Email`='$email' WHERE Account_Number = '$id'"
			$run_update = mysqli_query($con, $update);

			if($run_update){
				echo "<script>alert('User has been updated!')</script>";
				echo "<script>window.open('$currentpage','_self')</script>";

			}


		}

		if(isset($_POST['csocial'])){
			$social = mysqli_real_escape_string($con, $_POST['ssn-1']) ."-" . mysqli_real_escape_string($con, $_POST['ssn-2']) . "-" .mysqli_real_escape_string($con, $_POST['ssn-3']) ;
			
			
			$check_social = mysqli_query($con, "SELECT * FROM `social security`");
			
			while($row = mysqli_fetch_array($check_social)){
				if($social == $row['SS'] && $row['Account_Number'] != $id ){
					echo "<script>alert('Username already taken')</script>";
					return;
				}			
			}
			
			$update_social = mysqli_query($con, "UPDATE `social security` SET `SS`='$social' WHERE Account_Number = '$id'");
			 
			 
			 if($update_social){
			 	echo "<script>alert('User has been updated!')</script>";
				echo "<script>window.open('$currentpage','_self')</script>";
			 }
}


		if(isset($_POST['generatecard'])){
			
			$mycard = scramble($id);
			$cvc = rand(100,999);
			$exp = date("m")."/" . (date("y") + 5);
			$init_deposit = 0;
			
		$insertcc = "INSERT INTO `card_info`(`card#`, `cvc`, `exp`,`Balance` , `Account_Number`) VALUES ('$mycard','$cvc','$exp','$init_deposit','$id')";
		$run_insert = mysqli_query($con, $insertcc);
		
			$type = "ADMIN_CREATE";
			$confirmation = "Added New Card";
            $date = date('Y-m-d h:i A');
			$insertTrans = "INSERT INTO `transaction`(`Time`, `Transaction`, `Confirmation`, `Account_Number`) VALUES ('$date','$type','$confirmation','$id')";
			$runTrans = mysqli_query($con,$insertTrans);

			if($run_insert){
				echo "<script>alert('Card has been added!')</script>";
				//echo "<script>window.open('$currentpage','_self')</script>";
			}
            if($runTrans){
                echo "<script>window.open('$currentpage','_self')</script>";
            }
			
		}

		if(isset($_POST['deletecard'])){
			
			$todelete = mysqli_real_escape_string($con, $_POST['accounts']);
			$delete = "DELETE FROM `card_info` WHERE `card#` = '$todelete'";
			$delete_query = mysqli_query($con, $delete);
		
				if($delete_query){
					echo "<script>alert('Card has been deleted!')</script>";
					echo "<script>window.open('$currentpage','_self')</script>";
				}
		}


		if(isset($_POST['deposit'])){
			
			$depositinto = mysqli_real_escape_string($con, $_POST['depositacc']);
			$todeposit = mysqli_real_escape_string($con, $_POST['depositvalue']);
			
            if($todeposit > 0){
            $deposit = "UPDATE `card_info` SET `Balance`= `Balance` + '$todeposit' WHERE `card#` = '$depositinto'";
			$run_deposit = mysqli_query($con, $deposit);
			
            }
            else{
                echo "<script>alert('Enter a number!')</script>";
            }

			$type = "ADMIN_DEPOSIT";
            $date = date('Y-m-d h:i');
			$confirmation = $todeposit;
			$addTrans = "INSERT INTO `transaction`(`Time`, `Transaction`, `Confirmation`,`Account_Number`) VALUES ('$date','$type','$confirmation' ,'$id')";
			$runTrans = mysqli_query($con,$addTrans);

            

            
			
			if($run_deposit){
				echo "<script>alert('Card has been updated!')</script>";
				
			
			}
			
			if($runTrans){
				echo "<script>window.open('$currentpage','_self')</script>";	
			}
		}	
		
		function scramble($number) {	
			$r = rand(100000000000, 999999111111);
			return abs($r + $number); //better consistency
		}
		
		
		
		
		?>

	</body>
</html>