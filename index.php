<?php
require 'includes/connect-db.php';
session_start();
if (!isset($_SESSION['user_id'])) {
    header('location: session/login.php');
    exit;
}

?>
<?php require 'includes/header.php' ?>
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
    
    .book h2 {
        font-size: 1.5rem;
        margin-bottom: 10px;
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
            width: 75%;
            margin: .3rem auto;
        }
        
        .more-btn {
            width: 75%;
            margin: .3rem auto;
        }
    }
</style>
<div class="search">
    <form action="#" method="get">
        <select name="search_by" id="search_by" class="search-select">
            <option value="">--Search By--</option>
            <option value="book_name">Book Name</option>
            <option value="program">Program</option>
            <option value="subject">subject</option>
            <option value="university">university</option>
            <option value="location_owner">Location</option>
            <option value="institute_name">Institute Name</option>
        </select>
        <input type="search" name="search" id="" placeholder="Search here...." size="30">
        <input type="submit" name="" id="" value="Search">
    </form>
</div>
<?php
$sql = 'SELECT * FROM books ORDER BY selling_price';

if ($_GET) {
    $where = $_GET['search_by'];
    $value = $_GET['search'];
    $value_arr = explode(" ", $value);
    // var_dump($value_arr);
    $str = '';
    if (count($value_arr) >= 1 && $value_arr[0] != '') {
        foreach ($value_arr as $i) {
            $str .= $i[0];
        }
    }
    // echo($str);
    if ($_GET['search_by']) {
        $sql = "SELECT * FROM books WHERE $where LIKE '%$value%' OR $where LIKE '$str%'";
    }
}
$result = mysqli_query($conn, $sql);
if (!$result) {
    echo "Result error: ";
    exit();
}
?>

<?php while ($row = mysqli_fetch_assoc($result)) : ?>
    <div class="manage">
        <div class="book">
            <h2>Name : <?= $row['book_name'] ?></h2>
            <div class="info">
                <p>Location(owner) : <?= $row['location_owner'] ?></p>
                <p>Program : <?= $row['program'] ?></p>
            </div>
            <div class="info">
                <p>Location(Institute) : <?= $row['location_institute'] ?></p>
                <p>University : <?= $row['university'] ?></p>
            </div>
            <p>Selling price : Rs.<?= $row['selling_price'] ?></p>
        </div>
        <div class="btns">
            <a href="book-option.php?id=<?= $row['id'] ?>" class="more-btn">More</a>
        </div>
    </div>
    <?php endwhile; ?>

<?php require 'includes/footer.php' ?>

