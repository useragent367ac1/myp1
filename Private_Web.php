<!DOCTYPE html>
<html lang="en">
<head>
    <title>AKSN</title>
</head>
<body>
<?php

$uname="admin" && "user";
$pwd="admin" && "user";

session_start();

if(isset($_SESSION['uname'])){
    echo"<h1>Welcome ".$_SESSION['uname']."</h1>";

    echo "
    <a href='product.php'>Product</a>
    <br><br>
    <a href='#Game_Over'>Game Over</a>
    <br><br>
    <a href='logout.php'>Logout</a>
    ";

    
}else{
    if($_POST['uname']==$uname && $_POST['pwd']==$pwd){
        $_SESSION['uname']=$uname;

        echo "<script>location.href='index.php'</script>";
    }
    else{
        echo "<script>alert('Username, Password is Incorrect Fill Details Correctly!');</script>";
        echo "<script>location.href='login.php'</script>";
    }
}
?>
</body>
</html>