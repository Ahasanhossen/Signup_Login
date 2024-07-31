<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../assets/signup.css">
</head>
<body>
    <form action="login.php" method="post">
        <label for="email">Email</label>
        <input type="email" id="email" name="email">

        <label for="password">Password</label>
        <input type="password" name="password" id="password">
        <div>
        <button type="submit" name="login">Login</button>

        </div>
        
    </form>
    
</body>
</html>

<?php
session_start();
require "../connection.php";

if(isset($_POST['login'])){
    $email=$_POST['email'];
    $password=$_POST['password'];

    if($email!=''&& $password!=''){
        $sql= "select Password from registation where Email='$email'";
        $result=$conn->query($sql);
        if($result->num_rows > 0){
            $row = $result->fetch_assoc();
            if($row['Password']==$password){
                
                $_SESSION['user_id']=$email;
                header('location:user.php');
            }
        } else {
            echo "No matching email found.";
        }
    
    }
}
?>