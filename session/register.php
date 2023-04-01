<?php
require '../includes/connect-db.php';
if ($_POST) {
    // echo "hello";
    $name = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm-password'];
    if ($name != '' && $email != '' && $password != '') {
        if ($password == $confirm_password) {
            $sql = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param('sss', $name, $email, $password);
            $stmt->execute();
            if ($stmt->affected_rows > 0) {
                header('location: login.php');
                echo "registered successfully";
            } else {
                echo "data not inserted" . $stmt->error;
            }
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
        <form action="register.php" method="post">
            <h1>Register</h1>
            <div>
                <input type="text" name="username" placeholder="Enter Username">
            </div>
            <div>
                <input type="email" name="email" placeholder="Enter e-mail">
            </div>
            <div>
                <input type="password" name="password" placeholder="Enter password">
            </div>
            <div>
                <input type="password" name="confirm-password" placeholder="Confirm Password">
            </div>
            <div>
                <input type="submit" value="Register">
            </div>
            <div>
                <a href="login.php">Already have an account ?</a>
            </div>
        </form>
    </div>
</body>

</html>