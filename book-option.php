<link rel="stylesheet" href="style.css">
<?php require 'includes/header.php' ?>

<?php require 'includes/connect-db.php' ?>


<style>
    .book-box {
        /* border: 1px solid; */
        display: flex;
        justify-content: center;
        align-items: center;
        height: 80vh;
    }

    .book {
        /* border: 1px solid; */
        padding: 1rem;
        width: 40vw;
        background: rgb(177, 221, 235);
    }

    .detail {
        /* border: 1px solid red; */
        margin: 1rem 0;
    }

    h3 {
        background: gray;
        color: #fff;
        margin: .5rem 0;
        padding: .5rem;
        border-radius: 10px;
    }

    a {
        color: red;
    }
</style>


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

$owner_detail = "Here's your book from <b><u>$name</u></b>. Lives in <b><u>$location_owner</b></u>";
$institute_detail = "Book is of <b><u>$institute_of</b></u> from <b><u>$institute_name</b></u> of type <b><u>$institute_type</b></u> under <b><u>$university</b></u> situated at <b><u>$location_institute</b></u>";
$book_detail = "<b><u>$book_name</b></u> is name of book subject is <b><u>$subject</b></u>. It is for <b><u>$program</u></b> of <b><u>$scheme</b></u> scheme of academic year <b><u>$academic_year</b></u>. It was publishes on <b><u>$published_on</b></u>";
$book_price = "Original price of book is <b><u>$original_price</b></u> and selling price of book is <b><u>$selling_price</b></u>.";
$discount = "You will get discount of rs. <b><u>" . $original_price - $selling_price . "</b></u>";
$discount_percentage = round(($original_price - $selling_price) / $original_price * 100, 2);
$discount_per = "Total <b><u>$discount_percentage</b></u> % discount";
?>
<section class="book-box">
    <div class="book">
        <div class=" detail">
            <h3>Book Details</h3>
            <p><?= $book_detail ?></p>
        </div>
        <div class="institute detail">
            <p><?= $institute_detail ?></p>
        </div>
        <div class="price detail">
            <h3>Price Details</h3>
            <p><?= $book_price ?></p>
        </div>
        <div class="discount detail">
            <p><?= $discount ?></p>
            <p><?= $discount_per ?></p>
        </div>
        <div class="owner detail">
            <h3>Owner Details</h3>
            <p><?= $owner_detail ?></p>
        </div>
        <div class="contact detail">
            <p>You can contact <?= "<b><u>$name</b></u>" ?> at <a href="mailto:<?= $email ?>"><?= $email ?></a></p>
        </div>
    </div>
</section>

<body>

    </html>

    <!-- <div class="book">
    <h2>Here's your book from <?= $result['name'] ?></h2>
    <p>you can contact <?= $result['name'] ?> at <a href="mailto:<?= $result['email'] ?>"><?= $result['email'] ?></a></p>
    <div class="owner-detail">
        <p>Studies in : <?= $result['institute_of'] ?></p>
        <p>Studies program : <?= $result['program'] ?></p>
        <p><?= $result['name'] ?>'s academic year is : <?= $result['academic_year'] ?></p>
        <p><?= $result['name'] ?>'s institute name is : <?= $result['institute_name'] ?></p>
        <p>Institute Type is : <?= $result['institute_type'] ?></p>
        <p>University : <?= $result['university'] ?></p>
        <p>Institute is located at : <?= $result['location_institute'] ?></p>
        <p><?= $result['name'] ?> lives in : <?= $result['location_owner'] ?></p>
    </div>
    <div class="book-detail">
        <p>Name of book is : <?= $result['book_name'] ?></p>
        <p>Subject of book is : <?= $result['subject'] ?></p>
        <p>Book is published on : <?= $result['published_on'] ?></p>
        <p>Scheme is : <?= $result['scheme'] ?></p>
        <p>Original price of book is Rs. <?= $result['original_price'] ?></p>
        <p>Selling price of book is Rs. <?= $result['selling_price'] ?></p>
        <?php
        $discount_of_rs = $result['original_price'] - $result['selling_price'];
        $discount_of_percent = round(($discount_of_rs / $result['original_price']) * 100, 2);
        ?>
        <h3>Book is available at : <?= $discount_of_percent ?> % discount</h3>
    </div>
</div> -->