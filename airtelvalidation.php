<?php
$CID=$_POST['CID'];
$CName=$_POST['CName'];
$PNo = $_POST['PNo'];
$Loc = $_POST['Loc'];
$CompanyID = $_POST['CompanyID'];


$server='localhost';
$user='root';
$dbname='recharge';

$con = mysqli_connect($server,$user);
if (!$con) {
    die("Connection failed: " . mysqli_connect_error($con));
}
mysqli_select_db($con,$dbname);

$q = "insert into registration (CID,CName,PNo,Loc,CompanyID) values('$CID','$CName','$PNo','$Loc','$CompanyID')";
$status=mysqli_query($con,$q);
mysqli_close($con);
?>

<!doctype html>
<html>
<head>
<title>Insertion</title>
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
    echo "user created successfully";
else
    echo "unsuccessful ";
?>
</h2>
</div>
<div class="foot">
<h3>Do you want to inspect Plans?</h3><a href = "airtelplan.html" class="button">click here</a><br>
<h3>Do you want to log in?</h3><a href = "Login.php" class="button">click here</a><br>
</div>

</body>
</html>