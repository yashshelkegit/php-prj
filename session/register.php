<?php 
require '../includes/connect-db.php';
    if($_POST){
        // echo "hello";
        $name = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm-password'];
        if($name != '' && $email != '' && $password != ''){
            if($password == $confirm_password){
                $sql = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param('sss', $name, $email, $password);
                $stmt->execute();
                if($stmt->affected_rows > 0){
                    header('location: login.php');
                    echo "registered successfully";
                }else{
                    echo "data not inserted" . $stmt->error;
                }
            }
        }else{
            echo "enter details";
        }
    }
    else{
        echo "no post";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Register Page</h1>
    <div>
        <form action="register.php" method="post">
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
                <a href="login.php">Already have an account</a>
            </div>
        </form>
    </div>
</body>
</html>