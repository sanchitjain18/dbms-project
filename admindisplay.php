<?php
$server = "localhost";
$user = "root";
$dbname = "recharge";
$con = mysqli_connect($server,$user);
mysqli_select_db($con,$dbname);
$q= "select * from admin";
$result=mysqli_query($con,$q);
$num= mysqli_num_rows($result);
mysqli_close($con);
?>

<html>
<head>
<title>admin</title>
<link rel = "stylesheet" href="./css/viewretailer.css" />
</head>

<body>

<div class="black">
<h2>User active plan details</h2>       
</div>
<table class="col">

    
<tr class ="header">
<th class="heading">CID</th>
<th class="heading">PNO</th>
<th class="heading">CName</th>
<th class="heading">Sim</th>
<th class="heading">Plan</th>    
</tr>
<?php 
for($i=1;$i<=$num;$i++){
    $row=mysqli_fetch_array($result);

?>
<tr>
<td class="data grey"><strong><?php echo $row['CID']; ?></strong></td>
<td class="data"><strong><?php echo $row['PNo']; ?></strong></td>
<td class="data"><strong><?php echo $row['CName']; ?></strong>
<td class="data"><strong><?php echo $row['Sim']; ?></strong>
<td class="data"><strong><?php echo $row['Plan']; ?></strong>    
    </td>


</tr>   

<?php
}
?>
</table>



</body>
</html>

<!--
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Type</th>
      <th scope="col">Column heading</th>
      <th scope="col">Column heading</th>
      <th scope="col">Column heading</th>
    </tr>
  </thead>
  <tbody>
     <tr class="table-light">
      <th scope="row">Light</th>
      <td>Column content</td>
      <td>Column content</td>
      <td>Column content</td>
    </tr>
  </tbody>
</table>
-->    