<?php
    session_start();
?>
<!DOCTYPE HTML>
<html>
<body>
    <form name="Done" action="Rr.php">
        <button type="submit">Home</button>
    </form>
<?php
$_SESSION["CID"]=filter_input(INPUT_POST,'CID');
$CName=filter_input(INPUT_POST,'CName');
$_SESSION["PNo"]=filter_input(INPUT_POST,'PNo');
$Loc=filter_input(INPUT_POST,'Loc');
$CompID=filter_input(INPUT_POST,'CompID');
if(!empty($CName)){
    if(!empty($PNo)){
        $host="localhost";
        $username="root";
        $password="";
        $dbname="recharge";
        $conn=new mysqli($host,$username,$password,$dbname);
        if(mysqli_connect_error()){
            die('Connect Error ('.mysqli_connect_errorno().')'.mysqli_connect_error());
        }
        else
        {
            $sql="INSERT INTO registration(CID,CName,PNo,Loc,CompanyID)
            values('$CID','$CName','$PNo','$Loc','$CompID')";
            if($conn->query($sql))
            {
                echo "Registration Done";
            }
            else
            {
                echo "Error: ".$sql."<br>".$conn->error;
            }
            $conn->close();
        }
    }
    else{
        echo("Phone no. can't be empty");
        die();
    }
}
else{
    echo("Name can't be empty");
    die();
}
?>
    </body>
</html>