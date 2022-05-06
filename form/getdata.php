<?php
    $uusername = $_POST['uusername'];
    $uemail= $_POST['uemail'];
    $upass= $_POST['upass'];
   


    /*Database Connection*/

    $con = new mysqli("localhost", "root", "", "reg_form");

    $query = "INSERT INTO users VALUES(NULL, '$uusername', '$uemail', '$upass', NOW(), NOW(), 1)";

    /* query execution*/

    if ($con->query($query)) {
        header("location:index.php");
        // echo "your data has been submitted";
    }
    else{
        echo mysqli_error($con);
    }

?>