<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <nav class="navbar">
        <div class="logo">
            <img src="./images/logo-64.png" alt="Logo">
            <h1>Book Store</h1>
        </div>
        <div class="links">
            <div class="link">
                <img src="./images/male-user-50.png" alt="Logo">
                <a href="/php-project/index.php"><b>Home</b></a>
            </div>
            <div class="link">
                <img src="./images/add-book-50.png" alt="logo">
                <a href="/php-project/add.php"><b>Add Book</b></a>
            </div>
            <div class="link">
                <img src="./images/book-shelf-50.png" alt="Logo">
                <a href="/php-project/manage.php"><b>Manage</b></a>
            </div>
        </div>
        <div class="logout">
            <form action="./session/logout.php" method="POST">
                <button type="submit" name="logout" class="logout-btn">Logout</button>
            </form>
        </div>
    </nav>
    <section>