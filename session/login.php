<?php
require '../includes/connect-db.php';

if ($_POST) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    if (!$username == '' && !$password == '') {
        $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
        $result = mysqli_query($conn, $sql);
        // print_r($result);
        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_assoc($result);
            session_start();
            $_SESSION['user_id'] = $row['user_id'];
            $_SESSION['username'] = $row['username'];
            $_SESSION['email'] = $row['email'];
            header('location: /php-project/index.php');
        } else {
            // header('location: register.php');
            echo "Login failed";
        }
    } else {
        echo "enter details";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Login</title>
</head>

<body>
    <div class="parent-form">
        <form action="login.php" method="post" class="form">
            <h1>Login Page</h1>
            <div>
                <input type="text" name="username" placeholder="Enter Username">
            </div>
            <div>
                <input type="password" name="password" placeholder="Enter password">
            </div>
            <div>
                <input type="submit" value="Login">
            </div>
            <div>
                <a href="register.php">don't have an account ?</a>
            </div>
        </form>
    </div>
</body>

</html>