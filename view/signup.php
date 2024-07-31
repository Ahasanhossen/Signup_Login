<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup</title>
    <link rel="stylesheet" href="../assets/signup.css">
</head>
<body>
    <form action="signup.php" method="post">
    <label for="firstName">FirstName</label>    
    <input type="text" name="firstName1">

    <label for="lastName">LastName</label>    
    <input type="text" name="lastName">

    <div class="genfield">
        <span>Gender:</span>

       
    <input type="radio" id="male" name="gender" value="Male">
    <label for="male">Male</label> 

    <input type="radio" id="female" name="gender" value="Female">
    <label for="female">Female</label>    


    <input type="radio" id="other" name="gender" value="Other">
    <label for="other">Other</label>    

    </div>


    <label for="email">Email</label>    
    <input type="mail" name="email">

    <label for="password">Password</label>    
    <input type="password" name="password">

    <div class="submitBtn">
        <button type="submit" name="submit">Register</button>
    </div>

    

    </form>
    
</body>
</html>

<?php
   require "../connection.php";
if(isset($_POST['submit'])){
 
    $firstName=$_POST['firstName1'];
    $lastName=$_POST['lastName'];
    $gender=$_POST['gender'];
    $email=$_POST['email'];
    $password=$_POST['password'];

    if($firstName!=''&& $lastName!='' && $gender!=''&& $email!=''&& $password!=''){

    

    $sql= "insert into registation(FirstName, LastName, Gender, Email, Password) values('$firstName','$lastName','$gender','$email','$password')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        // header('login.php');
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
      $conn->close();

    }
    else{
        echo"Please filled All Field.";
        $conn->close();

    }
      
      


}
?>
