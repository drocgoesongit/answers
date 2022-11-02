<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    <style>
        body{
            background-color: aqua;
            display: flex;
            position: relative;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }
        .card{
            border-radius: 1rem;
            background-color: bisque;
            text-align: center;
            height: 500px;
            width: 500px;
            letter-spacing: 2px;
            box-shadow: 6px 6px #888888;
            
            
        }
        .btn{
            height: 30px;
            width: 60%;
            border-radius: 2rem;
            color: whitesmoke;
            background-color: black;
        }
        .textfield{
            width: 70%;
            border-width: 3px;
            border-color: black;
            border-radius: 10rem;
        }
    </style>
</head>
<body>
    <div class="card">
        <h1>Registration Form</h1>
    <form action="register.php" style="line-height:2.5;" method="post">
        <label for="">Enter your User ID*</label>
        <input type="text" id="userid" class="textfield" name="userid">
        <br>
        <label for="">Select your gender : </label>
        <select name="gender" id="">
            <option value="others">others</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
        </select>
        <br>
        <label for=""> create your Password*</label>
        <input type="password" id="password" class="textfield" name="reg_password">
        <br>
        <input type="submit" name="register" id="" class="btn">
        <button class="btn">Reset</button>
    </form>
    <p>The details marked by * are necessary to proceed.</p>

    </div>
    
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