
<!DOCTYPE html>
<html>
    <head>
        <link rel = "stylesheet" href="./css/viewretailer.css" />
<style>
    td{
        color: #ffffff;
    }
    tr{
        color: red;
        
    }
        
</style>
    </head>
<body bgcolor=white>
    <form name="Next" action="user_search.php">
        <button type="submit">Plans</button>
    </form>
<table>
<th>Customer ID</th><th>Phone Number</th><th>Name</th><th>Sim</th><th>Plan</th>
<?php
$CID=$_POST['CID'];
    
$host = "localhost";
$username = "root";
$password = "";
$dbname = "recharge";

// Create connection
$conn = new mysqli($host, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT CID,PNo,Cname,Sim,Plan FROM admin where CID='$CID'";
$result = $conn->query($sql);

//if ($result->num_rows > 0) {
 while($row = $result->fetch_assoc()) {
        echo "<tr>
        <td>". $row["CID"]. "</td>
        <td>". $row["PNo"]. "</td>
        <td>".$row["Cname"]."</td>
        <td>".$row["Sim"]."</td><td>". $row["Plan"] ."</td></tr>";
  }  
//} else {
  //  echo "0 results";
//}

$conn->close();
?> 
</table>
</body>
</html>