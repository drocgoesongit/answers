<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
</head>
<body>
    <h1>Registration Form</h1>
    <form action="registration.php" method="post">
        <label for="">Enter your User ID*</label>
        <input type="text" id="userid" name="userid">
        <br>
        <label for="">Select your gender</label>
        <select name="gender" id="">
            <option value="others">others</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
        </select>
        <br>
        
        <label for=""> create your Password*</label>
        <input type="password" id="password" name="reg_password">
        <br>
        <input type="submit" name="register" id="">
        <button>Reset</button>
    </form>
    <p>The details marked by * are necessary to proceed.</p>
</body>
</html>

<?php 
include "dbconnect.php";

if(isset($_POST['register'])) {
    $User = $_POST['userid'];
    $Gender = $_POST['gender'];
    $Password = $_POST['reg_password'];
    $sql_query = " INSERT INTO user (userid,gender,reg_password) 
    VALUES ('$User','$Gender','$Password')";
    
    if (mysqli_query($con,$sql_query))
     {
      echo "Registered Successfully !! " ;
      header('Location:index.html');
     }
     else
     {
         echo "Error: ". $sql . "" . mysqli_error($con);
     }
     
    }
       mysqli_close($con);
    
    ?>