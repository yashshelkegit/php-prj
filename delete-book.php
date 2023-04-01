<?php 
require 'includes/connect-db.php';
$id = $_GET['id'];
$sql = "DELETE FROM books WHERE id = $id";
$result = mysqli_query($conn, $sql);
if(!$result){
    echo "error occurred";
}else{
    header('location: manage.php');
}
