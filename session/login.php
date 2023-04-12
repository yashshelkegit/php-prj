<?php
require '../includes/connect-db.php';
$error_head = "";
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
            $error_head = "Login Failed";
        }
    } else {
        $error_head = "Enter Details";
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

.form {
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
    <h2 class="error-head"><?= $error_head ?></h2>
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