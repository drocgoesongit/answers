<?php
include "dbconnect.php";

if(isset($_POST['submit_button'])){

    $userid = $_POST['userid'];
    $loginpassword = $_POST['login_password'];

    if ($userid != "" && $loginpassword != ""){

        $sql_query = "select count(*) as cntUser from user where userid='".$userid."' and reg_password='".$loginpassword."'";
        $result = mysqli_query($con,$sql_query);
        $row = mysqli_fetch_array($result);

        $count = $row['cntUser'];

        if($count > 0){
            echo "Valid email and password";
            header('Location: registration.php');
        }else{
            echo "Invalid email and password";
        }

    }

}