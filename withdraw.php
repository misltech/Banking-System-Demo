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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
                <!--<li ><a href="#" data-target-id="home"><i class="fa fa-home fa-fw"></i>Home</a></li>-->
                <!-- <li><a href="profile.php" data-target-id="Profile"><i class="fa fa-list-alt fa-fw"></i>Profile</a></li> -->
                <li><a href="account.php" data-target-id="Account"><i class="fa fa-file-o fa-fw"></i>My Account</a></li>
                <li><a href="cards.php" data-target-id="My Cards"><i class="fa fa-list-alt fa-fw"></i>My Cards</a></li>
                <li class="active"><a href="withdraw.php" data-target-id="Withdraw"><i class="fa fa-bar-chart-o fa-fw"></i>Withdraw</a></li>
                <li><a href="deposit.php" data-target-id="Deposit"><i class="fa fa-table fa-fw"></i>Deposit</a></li>
                <li><a href="logout.php" data-target-id="Logout"><i class="fa fa-tasks fa-fw"></i>Logout</a></li>
                <!--<li><a href="http://www.jquery2dotnet.com" data-target-id="Settings"><i class="fa fa-cogs fa-fw"></i>Settings</a></li>-->
            </ul>
        </div>
        <div class="col-md-9 well admin-content" id="home">
          
          <form class="form-horizontal" method="POST" action="withdraw.php">
<fieldset>

<!-- Form Name -->
<legend>Withdraw Funds</legend>
<div style="display: grid;">
<h4>Choose your account:</h4>
<select style="border: 1px solid #ccc;border-radius: 4px;height: 34px;text-align: center;" name="accounts" required>
    <option value=""></option>
    <?php
    $account = $_SESSION['account_number'];
$sel = "SELECT * FROM card_info WHERE Account_Number = '$account'";

$run = mysqli_query($con,$sel);
while($row=mysqli_fetch_array($run)){
$card = $row['card#'];
$balance = $row['Balance'];


?>
<option value=<?php echo $card;?> > <?php echo $card;?> BAL: <?php echo $balance;?>  </option>


<?php } ?>
</select>
</div>

<div style="display: grid;">
<h4>Enter withdraw amount</h4>
<input type="text" name="withdrawValue" placeholder="$$" class="form-control input-md">

</div><br><br>

<div class="form-group">
  <label class="col-md-4 control-label" for="cpass"></label>
  <div class="col-md-4">
    <button id="withdraw" name="withdraw" type="submit" class="btn btn-danger">Withdraw ME</button>
  </div>
</div>

</fieldset>
</form>
  
    </div>
</div>


<?php

if (isset($_POST['withdraw'])) {

$chosenAccount = mysqli_real_escape_string($con, $_POST['accounts']);
$chosenVal = mysqli_real_escape_string($con, $_POST['withdrawValue']);

$run_check = "SELECT * FROM card_info WHERE Account_Number = '$account' AND `card#` = '$chosenAccount'";
$run_query = mysqli_query($con,$run_check);

$row = mysqli_fetch_array($run_query,MYSQLI_ASSOC);

if($chosenVal > 0){

if($row['Balance'] - $chosenVal >= 0 ){
$currentBAL = $row['Balance'];  
$currentBAL = $currentBAL - $chosenVal;
$run_update = "UPDATE `card_info` SET `Balance`= '$currentBAL' WHERE Account_Number = '$account' AND `card#` = '$chosenAccount'";
$query_update = mysqli_query($con,$run_update);
}

else{
    echo "<script>alert('You dont have enough money')</script>";
    return; 
    
}

}

else{
 echo "<script>alert('Withdraw a value greater than $0.0')</script>";    
 return;
}

$type = "Withdraw";
$date = date('Y-m-d h:i A');
$addTrans = "INSERT INTO `transaction`(`Time`, `Transaction`, `Confirmation`, `Account_Number`) VALUES ('$date','$type','$chosenVal','$account')";
$runTrans = mysqli_query($con,$addTrans);

if($query_update){
	
    echo "<script>alert('Successfully Withdrawed')</script>"; 
}

if($runTrans){
	
	header("location:cards.php");
	
}

else{
	
	echo "<script>alert('Error Transaction was not updated')</script>";
	
}
//else{
  //echo "<script>alert('Something went wrong @ query checking l:127')</script>";  
//}





}

?>

</body>

</html>
