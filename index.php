<?php 
    require 'includes/connect-db.php';
    $is_logged_in = true;
    // echo "hello user";
    if(!$is_logged_in){
        header('location: login.php');
    }

?>
<?php require 'includes/header.php' ?>   
<div class="search">
        <form action="#" method="get">
            <label for="search_by">Search By: </label>
            <select name="search_by" id="search_by">
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
        
        if($_GET){
            $where = $_GET['search_by'];
            $value = $_GET['search'];

            if($_GET['search_by']){
                $sql = "SELECT * FROM books WHERE $where LIKE '%$value%'";
            }
        }
        $result = mysqli_query($conn, $sql);
        if(!$result){
            echo "Result error: " . $conn->error;
            exit();
        }
?>
<table class="table">
    <tr>
        <th>Book Name</th>
        <th>Subject</th>
        <th>Program</th>
        <th>Location</th>
        <th>University</th>
        <th>Institute name</th>
        <th>Selling price</th>
        <th></th>
    </tr>
<?php while($row = mysqli_fetch_assoc($result)):?>
    <tr>
        <td><?= $row['book_name'] ?></td>
        <td><?= $row['subject'] ?></td>
        <td><?= $row['program'] ?></td>
        <td><?= $row['location_owner'] ?></td>
        <td><?= $row['university'] ?></td>
        <td><?= $row['institute_name'] ?></td>
        <td><?= $row['selling_price'] ?></td>
        <td><a href="book-option.php?id=<?= $row['id'] ?>">options</a></td>
    </tr>
    <?php endwhile; ?>
</table>
<?php require 'includes/footer.php' ?>
        