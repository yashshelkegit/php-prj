<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="includes/table.css">
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
.manage {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin: 20px;
        padding: 20px;
        background-color: #f8f8f8;
        box-shadow: 0 2px 4px rgba(0,0,0,0.2);
        border-radius: 5px;
    }
    
    .book {
        display: flex;
        flex-direction: column;
    }
    
    .book h2 span {
        font-size: 1.5rem;
        margin-bottom: 10px;
        color: blue;
        text-transform: capitalize;
    }
    
    .info {
        display: flex;
        flex-direction: column;
        margin-bottom: 10px;
    }
    
    .info p {
        font-size: 0.9rem;
        color: #666;
        margin-bottom: 5px;
    }
    
    .price {
        font-size: 1.2rem;
        color: #06c;
    }
    
    .btns {
        margin-left: 20px;
    }
    
    .btns a {
        display: block;
        padding: 10px;
        border: none;
        border-radius: 5px;
        text-align: center;
        text-decoration: none;
        color: #fff;
        cursor: pointer;
        transition: background-color 0.3s ease-in-out;
    }
    
    .update-btn {
        background-color: #4caf50;
        margin-bottom: 10px;
    }
    
    .delete-btn {
        background-color: #f44336;
        margin-bottom: 10px;
    }
    
    .more-btn {
        background-color: #2196f3;
    }
    
    @media (max-width: 520px) {
        .manage {
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        
        .btns {
            margin-left: 0;
            margin-top: 20px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            width: 100%;
        }
        
        .update-btn, .delete-btn {
            width: 65%;
            margin: .3rem auto;
        }
        
        .more-btn {
            width: 65%;
            margin: .3rem auto;
        }
    }
</style>

<?php while ($row = mysqli_fetch_assoc($result)) : ?>
    <div class="manage">
        <div class="book">
            <h2>Name : <span><?= $row['book_name'] ?></span></h2>
            <div class="info">
                <p>Location : <?= $row['location_owner'] ?></p>
                <p>Program : <?= $row['program'] ?></p>
            </div>
            <p>Selling price : Rs.<?= $row['selling_price'] ?></p>
        </div>
        <div class="btns">
            <a href="update.php?id=<?= $row['id'] ?>" class="update-btn">Update</a>
            <a href="delete-book.php?id=<?= $row['id'] ?>" class="delete-btn">Delete</a>
            <a href="book-option.php?id=<?= $row['id'] ?>" class="more-btn">More</a>
        </div>
    </div>
    <?php endwhile; ?>