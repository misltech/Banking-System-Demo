<!DOCTYPE html> 
<?php 
session_start(); 
$con = mysqli_connect("localhost","root","","bank");
 if( $_SESSION['Username'] == null){

header("location: admin.php");
}
    
?>
<html>
<head>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<title>Admin Panel</title> 

<style>
body {
padding:0; 
margin:0;
background:white;
}
table{
color:#f7f7f7;
padding:6px;
width: 80%;
height: 100%;
background:black;
}
th {
border:2px double white;
text-align: center;
}
input{
padding:5px;
}
h3 {
float:right; 
margin-right:120px;
}
</style>
</head> 
<body>
    <div class="container text-center" style="margin-bottom:25px; margin-top: 10px;">
      <a href="http://www.auplod.com/i-luodap9aefe.html"><img src="http://www.auplod.com/u/luodap9aefe.png" alt="Image" border="0" /></a>
      </div>
      <div style="float:right; margin-right: 10px;">
    <a href="logout.php" style="padding:10px; background:#f7f7f7; width:20%;border-radius:5px;">Signout</a>
    </div>
<table align="center" style="border-spacing:0;">
<tr align="center">
<td colspan="16"><h2>Customer Database</h2></td>
</tr>
<tr align="center">
<th>Account_Number</th>
<th>Username</th>
<th>Password</th>
<th>First Name</th>
<th>Last Name</th>
<th>Address</th>
<th>City</th>
<th>State</th>
<th>Zip</th>
<th>Phone</th>
<th>Birthdate</th>
<th>Email</th>

</tr>
<?php 
$sel = "select * from customer_data";

$run = mysqli_query($con,$sel);

$i=0; 

while($row=mysqli_fetch_array($run)){

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

$i++;
?>
<tr align="center">
<td><?php echo $id;?></td>
<td><?php echo $username;?></td>
<td><?php echo $password;?></td>
<td><?php echo $fname;?></td>
<td><?php echo $lname;?></td>
<td><?php echo $address;?></td>
<td><?php echo $city;?></td>
<td><?php echo $state;?></td>
<td><?php echo $zip;?></td>
<td><?php echo $phone;?></td>
<td><?php echo $dob;?></td>
<td><?php echo $email;?></td>

<td><a href="admin_view.php?id=<?php echo $id;?>">Delete</a></td>
<td><a href="admin_edit.php?id=<?php echo $id;?>">Edit</a></td>
</tr>
<?php } ?>
</table>


<?php 

if(isset($_GET['id'])){

$get_id = $_GET['id']; 

$delete = "delete from customer_data where Account_Number='$get_id'"; 
$run_delete = mysqli_query($con,$delete); 

if($run_delete){

echo "<script>alert('User Deleted Successfully!')</script>";
echo "<script>window.open('admin_view.php','_self')</script>";
}
}

?>

</body>
</html>
