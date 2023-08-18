<?php
session_start();
 $conn=mysqli_connect("localhost","root","","user");
 if(isset($_POST['submit'])){
    $Name=$_POST['Name'];
    $Password=$_POST['Password'];
    $sql="SELECT * FROM login WHERE Name='$Name' and Password='$Password'";;
    $query=mysqli_query($conn,$sql);
    
    $fach=mysqli_fetch_assoc($query);
    if($fach){
        $_SESSION['Name']=$fach['Name'];
        header("location:view.php");
    }else{
         echo "no";
    }
 }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <form action="login.php" method="post" >
            <input type="text" name="Name" id=""><br>
            <input type="text" name="Password" id=""><br><br>
            <input type="submit" value="Submit" name="submit">
        </form>
    </div>
</body>
</html>