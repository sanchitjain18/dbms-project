<html>
<body>
<?php
        session_start();
    $_SESSION['user'] = $_POST["Username"];
if(($_POST["Username"]=="bb001")&&($_POST["password"]=="donate"))
{
    header("Location:Rr.php");
}
else
{   
    $_SESSION['errMsg'] = "Invalid username or password";
    echo "Invalid details!!";
    header("Location: rechargemanage.html");
}
?>
</body>
</html>