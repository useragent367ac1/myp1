<!DOCTYPE html>
<html lang="en">
<head>
    <title>AKSN</title>
</head>
<body>
<?php

session_start();

$uname="admin";
$pwd="admin";

if (isset($_SESSION['uname'])){
    echo "<script>location.href='Private_Web.php'</script>";
}else{
    if($_POST['uname']==$uname && $_POST['pwd']==$pwd){
    $_SESSION['uname']=$uname;

    echo "<script>location.href='Private_Web.php'</script>";
}else{
        echo "<script>alert('Username, Password is Incorrect Fill Details Correctly!');</script>";
        echo "<script>location.href='login.php'</script>";
    }
}
?>
</body>
</html>