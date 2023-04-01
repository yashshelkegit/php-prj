<link rel="stylesheet" href="add-page.css">
<?php require "./includes/header.php" ?>
<?php
session_start()
?>
<style>
body{
    background-color: #fff;
}
h2{
    background: #fff;
    border-bottom: 2px solid #676e1d;
    padding: 1rem;
    margin: 1rem 0;
    border-radius: 0;
}
.inp label{
    font-size: 16px;
    font-weight: bolder;
}
.inp{
    background: #f6fcb6;
}
</style>
<form action="store-data.php" method="POST">
    <div class="form">
        <div class="books">
            <h2>Book Details</h2>
            <div class="details">
                <div class="inp">
                    <label for="book_name">Enter book name *</label>
                    <input type="text" name="book_name" id="book_name" placeholder="Enter book name *" required>
                </div>
                <div class="inp">
                    <label for="subject">Enter subject *</label>
                    <input type="text" name="subject" id="subject" placeholder="Enter subject *" require>
                </div>

                <div class="inp">
                    <label for="published_on">Year of publication(book) *</label>
                    <input type="date" name="published_on" id="published_on">
                </div>
                <div class="inp">
                    <label for="scheme">Select Scheme (if any)</label>
                    <select name="scheme" id="scheme" class="select-inp">
                        <option value="I">I scheme</option>
                        <option value="G">G scheme</option>
                        <option value="H">H scheme</option>
                    </select>
                </div>
                <div class="inp">
                    <label for="original_price">Enter original price(book) *</label>
                    <input type="number" name="original_price" id="original_price" placeholder="Enter original price(book) *">
                </div>
                <div class="inp">
                    <label for="selling_price">Enter selling price *</label>
                    <input type="number" name="selling_price" id="selling_price" placeholder="Enter selling price *">
                </div>
            </div>
        </div>
        <div class="personal">
            <h2>Personal Details</h2>
            <div class="details">
                <div class="inp">
                    <label for="name">Enter Name *</label>
                    <input type="text" name="name" id="name" value="<?= $_SESSION['username']?>" placeholder="Enter Name *">
                </div>
                <div class="inp">
                    <label for="email">Enter e-mail *</label>
                    <input type="text" name="email" id="email" value="<?= $_SESSION['email']?>" placeholder="Enter e-mail *">
                </div>
                <div class="inp">
                    <label for="location_owner">Enter Location(owner) *</label>
                    <input type="text" name="location_owner" id="location_owner" placeholder="Enter Location(owner) *" required>
                </div>
                <div class="inp">
                    <label for="academic_year">Enter your academic year</label>
                    <input type="date" name="academic_year" id="academic_year">
                </div>
            </div>
        </div>
        <div class="institute">
            <h2>Institute Details</h2>
            <div class="details">
                <div class="inp">
                    <label for="institute_of">Select Institute *</label>
                    <select name="institute_of" id="institute_of" class="select-inp" required>
                        <option value="B tech">B tech</option>
                        <option value="M tech`">M tech</option>
                        <option value="Diploma">Diploma</option>
                        <option value="BSC">BSC</option>
                        <option value="MSC">MSC</option>
                        <option value="School">School</option>
                        <option value="other">other</option>
                    </select>
                </div>
                <div class="inp">
                    <label for="university">Enter name of university</label>
                    <input type="text" name="university" id="university" placeholder="Enter name of university">
                </div>
                <div class="inp">
                    <label for="institute_name">Enter institute name *</label>
                    <input type="text" name="institute_name" id="institute_name" placeholder="Enter institute name *" required>
                </div>
                <div class="inp">
                    <label for="institute_type">Select institute type *</label>
                    <select name="institute_type" id="institute_type" class="select-inp">
                        <option value="Government">Government</option>
                        <option value="Govt. Autonomous">Govt. Autonomous</option>
                        <option value="Private">Private</option>
                        <option value="Pvt. Autonomous">Pvt. Autonomous</option>
                    </select>
                </div>
                <div class="inp">
                    <label for="location_institute">Enter Location(institute)</label>
                    <input type="text" name="location_institute" id="location_institute" placeholder="Enter Location(institute)">
                </div>
                <div class="inp">
                    <label for="program">Enter name of program</label>
                    <input type="text" name="program" id="program" placeholder="Enter name of program">
                </div>
            </div>
        </div>
    </div>
    <div class="submit-box">
        <input type="submit" value="Add your book" class="submit-btn">
    </div>
</form>
<?php require "./includes/footer.php" ?>