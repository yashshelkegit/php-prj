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
<style>
    *{
    margin: 0%;
    padding: 0%;
    box-sizing: border-box;
    font-family: sans-serif;
}
.parent-form{
    /* border: 1px solid; */
    height: 90vh;
    display: flex;
    justify-content: center;
    align-items: center;
}
form{
    /* border: 1px solid; */
    background: #fac3c4;
    padding: 1rem;
    border-radius: 15px;
    box-shadow: 5px 5px 15px gray;
}
h1{
    text-align: center;
    color: rgb(56, 56, 56);
}
input{
    padding: .5rem;
    margin: .5rem;
    width: 20rem;
}
a{
    display: block;
    text-align: center;
    color: rgb(56, 56, 56);
}
</style>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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