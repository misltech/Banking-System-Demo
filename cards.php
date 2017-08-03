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



table{
color:white;
padding:2px;
background:yellowgreen;
}
th {
border:2px solid black;
}

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
                <!-- <li><a href="profile.php" data-target-id="Profile"><i class="fa fa-list-alt fa-fw"></i>Profile</a></li> -->
                <li><a href="account.php" data-target-id="Account"><i class="fa fa-file-o fa-fw"></i>My Account</a></li>
                <li class="active"><a href="cards.php" data-target-id="My Cards"><i class="fa fa-list-alt fa-fw"></i>My Cards</a></li>
                <li><a href="withdraw.php" data-target-id="Withdraw"><i class="fa fa-bar-chart-o fa-fw"></i>Withdraw</a></li>
                <li><a href="deposit.php" data-target-id="Deposit"><i class="fa fa-table fa-fw"></i>Deposit</a></li>
                <li><a href="logout.php" data-target-id="Logout"><i class="fa fa-tasks fa-fw"></i>Logout</a></li>
                <!--<li><a href="http://www.jquery2dotnet.com" data-target-id="Settings"><i class="fa fa-cogs fa-fw"></i>Settings</a></li>-->
            </ul>
        </div>
        <div class="col-md-9 well admin-content" id="home">

                
                <!-- Form Name -->
                    <legend>Cards</legend>

                    <?php

                    //builds a list of all cards on the account
$account = $_SESSION['account_number'];
$sel = "SELECT * FROM card_info WHERE Account_Number = '$account'";

$run = mysqli_query($con,$sel);
while($row=mysqli_fetch_array($run)){
$card = $row['card#'];
$balance = $row['Balance'];

?>


    <div class="panel panel-default col-md-5" style="margin-right: 7%;">
  <div class="panel-body">
    <p style="float: left;"><b>Card#: </b><?php echo $card;?></p> <br>
    <p style="float:right;"><b>Balance: $ </b><?php echo $balance;?></p>  
  </div>     
  </div>  

<?php } ?>

<legend>Recent Transactions</legend>

<table align="center" class="table table-bordered" style="background: white; color:black;">
<tr align="center">
<th>Date</th>
<th>Transaction Type</th>
<th>Amount</th>

</tr>
<?php
//get account data from session and show latest trans on top
$account = $_SESSION['account_number'];
$sel = "SELECT * FROM transaction WHERE Account_Number = '$account' ORDER BY Time DESC  LIMIT 10";

$run = mysqli_query($con,$sel);
while($row=mysqli_fetch_array($run)){
$time = $row['Time'];
$transaction = $row['Transaction'];
$confirmation = $row['Confirmation'];



?>
<tr align="center">
<td><?php echo $time;?></td>
<td><?php echo $transaction;?></td>
<td><?php if(preg_match('#[\d]#', $confirmation)){echo "$" . $confirmation;} else{echo $confirmation;}?></td> <!--Ensures that if the value is a number include a $ before it. -->
</tr>
<?php } ?>
</table>


    </div>
</div>

</body>

</html>