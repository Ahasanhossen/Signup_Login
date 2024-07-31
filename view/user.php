<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header('location:login.php');
    // exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
</head>

<body>
<?php
    require("header.php");
    ?>
    <?php
    require('../connection.php');
    $email = $_SESSION['user_id'];
    $sql = "select FirstName, LastName from registation where Email='$email'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $fn = $row['FirstName'];
        $ln = $row['LastName'];
        echo " <p>$fn.$ln</p><p>$email</p>";
    }



    ?>
    <form action="user.php" method="post" class="">
        <div class=""><button name="logout">Log Out</button></div>
    </form>

</body>

</html>

<?php
if (isset($_POST['logout'])) {
    session_destroy();
    header('location:login.php');
}
?>