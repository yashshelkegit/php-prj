<link rel="stylesheet" href="add-page.css">
    <?php require "./includes/header.php" ?>

    <form action="./includes/store-data.php" method="POST">
        <div class="form">
            <div class="institute">
                <h2>Institute Details</h2>
                <div class="details">
                    <div class="inp">
                        <label for="date">Select Institute *</label>
                        <select name="scheme" id="" class="select-inp">
                            <option value="I">B tech</option>
                            <option value="G">M tech</option>
                            <option value="H">Diploma</option>
                            <option value="H">BSC</option>
                            <option value="H">MSC</option>
                            <option value="H">School</option>
                            <option value="H">other</option>
                        </select>
                    </div>
                    <div class="inp">
                        <label for="university">Enter name of university</label>
                        <input type="text" name="university" id="university" placeholder="Enter name of university">
                    </div>
                    <div class="inp">
                        <label for="institute-name">Enter institute name *</label>
                        <input type="text" name="institute-name" id="institute-name" placeholder="Enter institute name *">
                    </div>
                    <div class="inp">
                        <label for="institute-type">Select institute type *</label>
                        <select name="scheme" id="institute-type" class="select-inp">
                            <option value="I">Government</option>
                            <option value="G">Govt. Autonomous</option>
                            <option value="H">Private</option>
                            <option value="H">Pvt. Autonomous</option>
                        </select>
                    </div>
                    <div class="inp">
                        <label for="institute-location">Enter Location(institute)</label>
                        <input type="text" name="institute-location" id="institute-location" placeholder="Enter Location(institute)">
                    </div>
                    <div class="inp">
                        <label for="program">Enter name of program</label>
                        <input type="text" name="program" id="program" placeholder="Enter name of program">
                    </div>
                </div>

            </div>
            <div class="books">
                <h2>Book Details</h2>
                <div class="details">
                    <div class="inp">
                        <label for="book-name">Enter book name *</label>
                        <input type="text" name="book-name" id="book-name" placeholder="Enter book name *">
                    </div>
                    <div class="inp">
                        <label for="subject">Enter subject *</label>
                        <input type="text" name="subject" id="subject" placeholder="Enter subject *">
                    </div>

                    <div class="inp">
                        <label for="date">Year of publication(book) *</label>
                        <input type="date" id="date">
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
                        <label for="original-price">Enter original price(book) *</label>
                        <input type="number" name="original-price" id="original-price" placeholder="Enter original price(book) *">
                    </div>
                    <div class="inp">
                        <label for="selling-price">Enter selling price *</label>
                        <input type="number" name="selling-price" id="selling-price" placeholder="Enter selling price *">
                    </div>
                </div>
            </div>
            <div class="personal">
                <h2>Personal Details</h2>
                <div class="details">
                    <div class="inp">
                        <label for="nm">Enter Name *</label>
                        <input type="text" name="nm" id="nm" placeholder="Enter Name *">
                    </div>
                    <div class="inp">
                        <label for="email">Enter e-mail *</label>
                        <input type="text" name="email" id="email" placeholder="Enter e-mail *">
                    </div>
                    <div class="inp">
                        <label for="location-owner">Enter Location(owner) *</label>
                        <input type="text" name="location-owner" id="location-owner" placeholder="Enter Location(owner) *">
                    </div>
                    <div class="inp">
                        <label for="academic-year">Enter your academic year</label>
                        <input type="text" name="academic-year" id="academic-year" placeholder="Enter your academic year">
                    </div>
                </div>
            </div>
        </div>
        <div class="submit-box">
            <input type="submit" value="Add your book" class="submit-btn">
        </div>
    </form>
<?php require "./includes/footer.php" ?>