<!DOCTYPE html>
<html>
<style>
    table,tr,td{
        border: 1px solid black;
        margin: 2px;
        margin-left: 120px;
        padding: 2px;
    }    
</style>
<body bgcolor=white>    
<table>
<th>Amount</th><th>Validity</th><th>Type</th><th>Plan</th>
<?php
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

$sql = "SELECT amount,validity,type,plan FROM ideplan";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>". $row["amount"]. "</td><td>". $row["validity"]. "</td><td>" . $row["type"] . "</td><td>". $row["plan"] ."</td></tr>";
    }
} else {
    echo "0 results";
}

$conn->close();
?> 
</table>
</body>
</html>