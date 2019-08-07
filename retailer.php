


<div class="progress">
  <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
</div>

<!DOCTYPE html>
<html>

<head>
<title>recharge database</title>
<link rel = "stylesheet" href="./css/viewretailer.css" />

    
<style>
    
body {font-family: Arial, Helvetica, sans-serif;
       background:#222;
        background-repeat: no-repeat;
        background-size:cover;
    }
* {box-sizing: border-box;}



/* Set a style for all buttons */
.button {
    background-color: #4CAF50;
    color: white;
    padding:10px;
    margin: 40px;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
}

.button:hover {
    opacity:1;
}

</style>
    </head>
<body>

<h2>SELECT your retailer</h2>

    <a href="airtelretailer.php" class="button">AIRTEL RETAILER</a><br><br><br> 
    <a href="#" class="button">VODAFONE RETAILER</a><br><br><br> 
    <a href="#" class="button">IDEA RETAILER</a><br><br><br> 
    <a href="#" class="button">JIO RETAILER</a><br><br><br> 

<?php
$server = "localhost";
$user = "root";
$dbname = "recharge";
$con = mysqli_connect($server,$user);
mysqli_select_db($con,$dbname);
$q= "select * from retailer";
$result=mysqli_query($con,$q);
$num= mysqli_num_rows($result);
mysqli_close($con);
?>




<div class="black">
<h2>Retailer details Available</h2>       
</div>
<table class="col">

    
<tr class ="header">
<th class="heading">Retailer Id</th>
<th class="heading">Retailer Name</th>
<th class="heading">Retailer Company</th>
<th class="heading">Retailer Address</th>
</tr>
<?php 
for($i=1;$i<=$num;$i++){
    $row=mysqli_fetch_array($result);

?>
<tr>
<td class="data grey"><strong><?php echo $row['retailer_id']; ?></strong></td>
<td class="data"><strong><?php echo $row['retailer_name']; ?></strong></td>
<td class="data"><strong><?php echo $row['retailer_company']; ?></strong></td>
<td class="data"><strong><?php echo $row['retailer_address']; ?></strong></td>

</tr>   

<?php
}
?>
</table>



</body>
</html>


