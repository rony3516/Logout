<?php
session_start();
if($_SESSION['Name']==true){
    echo "welcome $_SESSION[Name]";
}
else{
    header("location:login.php");
}

?>
<a href="logout.php">Logout</a>