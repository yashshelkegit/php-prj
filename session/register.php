<?php
require '../includes/connect-db.php';
$error_head = "";
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
                $error_head = "data not inserted" . $stmt->error;
            }
        }
    } else {
        $error_head = "enter details";
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

.error-head {
  font-size: 2rem;
  color: red;
  text-align: center;
  margin-top: 2rem;
}

.parent-form {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 80vh;
}

form{
  align-items: center;
  padding: 2rem;
  background-color: lightgray;
  border-radius: 10px;
  width: 25vw;
}

h1 {
  font-size: 2rem;
  margin-bottom: 2rem;
  color: #333;
  text-align: center;
}

input[type="text"],
input[type="email"],
input[type="password"] {
  padding: 0.5rem;
  margin: 0.5rem 0;
  border-radius: 5px;
  width: 100%;
  border: none;
  outline: none;
  box-shadow: 1px 1px 2px rgba(0, 0, 0, 0.1);
}

input[type="submit"] {
  padding: 0.5rem;
  margin: 1rem 0 0.5rem 0;
  width: 100%;
  border-radius: 5px;
  border: none;
  outline: none;
  background-color: #0066cc;
  color: #fff;
  cursor: pointer;
  transition: background-color 0.3s ease-in-out;
}

input[type="submit"]:hover {
  background-color: #0052a3;
}

a {
  display: block;
  margin-top: 2rem;
  color: #333;
  text-decoration: none;
  text-align: center;
}

a:hover {
  text-decoration: underline;
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
        <h2 class="error-head"><?= $error_head ?></h2>
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