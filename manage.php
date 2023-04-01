<link rel="stylesheet" href="style.css">
<?php
require 'includes/header.php';
require 'includes/connect-db.php';
session_start();
// print_r($_SESSION);
$user_id = $_SESSION['user_id'];
$username = $_SESSION['username'];
$sql = "SELECT * FROM books WHERE user_id = $user_id";
$result = mysqli_query($conn, $sql);

?>
<style>
    h2 {
        margin-top: 1rem;
        text-align: center;
        color: green;
    }
</style>

<table class="table">
    <div class="head">
        <h2>Welcome <?= $username ?> ! manage your books here..</h2>
    </div>
    <tr>
        <th>Book Name</th>
        <th>Subject</th>
        <th>Program</th>
        <th>Location</th>
        <th>University</th>
        <th>Selling price</th>
        <th></th>
        <th></th>
        <th></th>
    </tr>
    <?php while ($row = mysqli_fetch_assoc($result)) : ?>
        <tr>
            <td><?= $row['book_name'] ?></td>
            <td><?= $row['subject'] ?></td>
            <td><?= $row['program'] ?></td>
            <td><?= $row['location_owner'] ?></td>
            <td><?= $row['university'] ?></td>
            <td><?= $row['selling_price'] ?></td>
            <td><a href="delete-book.php?id=<?= $row['id'] ?>">Delete</a></td>
            <td><a href="update.php?id=<?= $row['id'] ?>">Update</a></td>
            <td><a href="book-option.php?id=<?= $row['id'] ?>">More</a></td>
        </tr>
    <?php endwhile; ?>
</table>