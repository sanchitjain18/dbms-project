<?php
$CID=$_POST['CID'];
$CName=$_POST['CName'];
$PNo = $_POST['PNo'];
$plan_id = $_POST['plan_id'];
$plan_com_name = $_POST['plan_com_name'];


$server='localhost';
$user='root';
$dbname='recharge';

$con = mysqli_connect($server,$user);
if (!$con) {
    die("Connection failed: " . mysqli_connect_error($con));
}
mysqli_select_db($con,$dbname);

$q = "update admin set plan=(select plan_desc from plans where plan_com_name='$plan_com_name' and plan_id=$plan_id) where CName='$CName'";

$status=mysqli_query($con,$q);
mysqli_close($con);
?>

<!doctype html>
<html>
<head>
<title>update</title>
<link rel = "stylesheet" href="./css/form.css" />
</head>
<body>
 <header>   
 <div id="branding">
                <h1><span class="highlight"> MOBILE</span> Recharge management</h1>
            </div>
</header>
<div class="php">
<h2> <?php 
if($status==1)
    echo "user updated successfully";
else
    echo "unsuccessful ";
?>
</h2>
</div>
<div class="foot">
<h3>Do you want to see your Plans?</h3><a href = "admindisplay.php" class="button">click here</a><br>

</div>

</body>
</html>