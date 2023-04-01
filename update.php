<link rel="stylesheet" href="add-page.css">
<?php require "./includes/header.php" ?>
<?php require "./includes/connect-db.php" ?>

<?php 
$id = $_GET['id'];
$sql = "SELECT * FROM books WHERE id = $id";
$result = mysqli_query($conn, $sql);
$result = mysqli_fetch_assoc($result);
// print_r($result);
$name = $result['name'];
$email = $result['email'];
$academic_year = $result['academic_year'];
$location_owner = $result['location_owner'];

$program = $result['program'];
$institute_name = $result['institute_name'];
$institute_of = $result['institute_of'];
$institute_type = $result['institute_type'];
$location_institute = $result['location_institute'];
$university = $result['university'];

$book_name = $result['book_name'];
$subject = $result['subject'];
$scheme = $result['scheme'];
$published_on = $result['published_on'];
$original_price = $result['original_price'];
$selling_price = $result['selling_price'];
?>

<style>
h3{
    background: #7a7a7a;
    color: #fff;
    padding: 1rem;
    margin-top: 1rem;
    border-radius: 10px;
    display: inline-block;
}
h2{
    background: #b3b1b1;
    padding: 1rem;
    margin: 1rem 0;
    border-radius: 10px;
}
.inp label{
    font-size: 16px;
    font-weight: bolder;
}
</style>

<form action="update-data.php" method="POST">
    <div class="form">
        <center><h3>Update Book details</h3></center>
        <input type="hidden" name="id" id="" value="<?= $id?>">
        <div class="books">
            <h2>Book Details</h2>
            <div class="details">
                <div class="inp">
                    <label for="book_name">Enter book name *</label>
                    <input type="text" name="book_name" id="book_name" value="<?= $book_name?>" placeholder="Enter book name *">
                </div>
                <div class="inp">
                    <label for="subject">Enter subject *</label>
                    <input type="text" name="subject" id="subject" value="<?= $subject?>" placeholder="Enter subject *">
                </div>

                <div class="inp">
                    <label for="published_on">Year of publication(book) *</label>
                    <input type="date" name="published_on" value="<?= date('Y-m-d', strtotime($published_on)); ?>" id="published_on">
                </div>
                <div class="inp">
                    <label for="scheme">Select Scheme (if any)</label>
                    <select name="scheme" id="scheme" class="select-inp">
                        <option value="I" <?php if ($scheme == 'I') echo 'selected'; ?>>I scheme</option>
                        <option value="G" <?php if ($scheme == 'G') echo 'selected'; ?>>G scheme</option>
                        <option value="H" <?php if ($scheme == 'H') echo 'selected'; ?>>H scheme</option>
                    </select>
                </div>
                <div class="inp">
                    <label for="original_price">Enter original price(book) *</label>
                    <input type="number" name="original_price" id="original_price" value="<?= $original_price?>" placeholder="Enter original price(book) *">
                </div>
                <div class="inp">
                    <label for="selling_price">Enter selling price *</label>
                    <input type="number" name="selling_price" id="selling_price" value="<?= $selling_price?>" placeholder="Enter selling price *">
                </div>
            </div>
        </div>
        <div class="personal">
            <h2>Personal Details</h2>
            <div class="details">
                <div class="inp">
                    <label for="name">Enter Name *</label>
                    <input type="text" name="name" id="name" value="<?= $name?>" placeholder="Enter Name *">
                </div>
                <div class="inp">
                    <label for="email">Enter e-mail *</label>
                    <input type="text" name="email" id="email" value="<?= $email?>" placeholder="Enter e-mail *">
                </div>
                <div class="inp">
                    <label for="location_owner">Enter Location(owner) *</label>
                    <input type="text" name="location_owner" id="location_owner" value="<?= $location_owner?>" placeholder="Enter Location(owner) *">
                </div>
                <div class="inp">
                    <label for="academic_year">Enter your academic year</label>
                    <input type="date" name="academic_year" value="<?= date('Y-m-d', strtotime($academic_year)); ?>" id="academic_year">
                </div>
            </div>
        </div>
        <div class="institute">
            <h2>Institute Details</h2>
            <div class="details">
                <div class="inp">
                    <label for="institute_of">Select Institute *</label>
                    <select name="institute_of" id="institute_of" value="<?= $institute_of?>" class="select-inp">
                        <option value="B tech" <?php if ($institute_of == 'B tech') echo 'selected'; ?>>B tech</option>
                        <option value="M tech`" <?php if ($institute_of == 'M tech') echo 'selected'; ?>>M tech</option>
                        <option value="Diploma" <?php if ($institute_of == 'Diploma') echo 'selected'; ?>>Diploma</option>
                        <option value="BSC" <?php if ($institute_of == 'BSC') echo 'selected'; ?>>BSC</option>
                        <option value="MSC" <?php if ($institute_of == 'MSC') echo 'selected'; ?>>MSC</option>
                        <option value="School" <?php if ($institute_of == 'School') echo 'selected'; ?>>School</option>
                        <option value="other" <?php if ($institute_of == 'other') echo 'selected'; ?>>other</option>
                    </select>
                </div>
                <div class="inp">
                    <label for="university">Enter name of university</label>
                    <input type="text" name="university" id="university" value="<?= $university?>" placeholder="Enter name of university">
                </div>
                <div class="inp">
                    <label for="institute_name">Enter institute name *</label>
                    <input type="text" name="institute_name" id="institute_name" value="<?= $institute_name?>" placeholder="Enter institute name *">
                </div>
                <div class="inp">
                    <label for="institute_type">Select institute type *</label>
                    <select name="institute_type" id="institute_type" value="<?= $institute_type?>" class="select-inp">
                        <option value="Government" <?php if ($institute_type == 'Government') echo 'selected'; ?>>Government</option>
                        <option value="Govt. Autonomous" <?php if ($institute_type == 'Govt. Autonomous') echo 'selected'; ?>>Govt. Autonomous</option>
                        <option value="Private" <?php if ($institute_type == 'Private') echo 'selected'; ?>>Private</option>
                        <option value="Pvt. Autonomous" <?php if ($institute_type == 'Pvt. Autonomous') echo 'selected'; ?>>Pvt. Autonomous</option>
                    </select>
                </div>
                <div class="inp">
                    <label for="location_institute">Enter Location(institute)</label>
                    <input type="text" name="location_institute" id="location_institute" value="<?= $location_institute?>" placeholder="Enter Location(institute)">
                </div>
                <div class="inp">
                    <label for="program">Enter name of program</label>
                    <input type="text" name="program" id="program" value="<?= $program?>" placeholder="Enter name of program">
                </div>
            </div>
        </div>
    </div>
    <div class="submit-box">
        <input type="submit" value="Update your book" class="submit-btn">
    </div>
</form>
<?php require "./includes/footer.php" ?>