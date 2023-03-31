<?php 
require 'includes/connect-db.php';
print_r($_POST);
$name = $_POST['name'];
$email = $_POST['email'];
$academic_year = date( 'Y', strtotime($_POST['academic_year']));
$location_owner = $_POST['location_owner'];

$institute_name = $_POST['institute_name'];
$institute_of = $_POST['institute_of'];
$institute_type = $_POST['institute_type'];
$location_institute = $_POST['location_institute'];
$university = $_POST['university'];
$program = $_POST['program'];

$book_name = $_POST['book_name'];
$subject = $_POST['subject'];
$scheme = $_POST['scheme'];
$published_on = date( 'Y', strtotime($_POST['published_on']));
$original_price = $_POST['original_price'];
$selling_price = $_POST['selling_price'];

$sql = "INSERT INTO books ( name, email, academic_year, location_owner, institute_name, institute_of, institute_type, location_institute, university, program, book_name, subject, scheme, published_on, original_price, selling_price) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param('ssssssssssssssdd', $name, $email, $academic_year, $location_owner, $institute_name, $institute_of, $institute_type, $location_institute, $university, $program, $book_name, $subject, $scheme, $published_on, $original_price, $selling_price);
$stmt->execute();
if(!$stmt->affected_rows > 0){
    echo $stmt->error;
}else{
    header('location: index.php');
}
?>

