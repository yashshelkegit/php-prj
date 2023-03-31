<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="index.js"></script>
    <title>Document</title>
</head>

<body>
    <header class="header">
        <h1>Book Selling System</h1>
    </header>
    <section class="frm-div">
        <section class="sidebar">
            <h2>Username</h2>
            <p>Your Books</p>
            <ul>
                <li>Book 1</li>
                <li>Book 1</li>
                <li>Book 1</li>
            </ul>
        </section>
        <div>
            <form action="../get-book/form.html" class="frm">
                <div class="inp">
                    <label for="book-nm" class="">Book Name</label>
                    <input type="text" id="book-nm" class="">
                </div>
                <div class="inp">
                    <label for="sub" class="">Subject</label>
                    <input type="text" id="sub" class="">
                </div>
                <div class="inp">
                    <label for="college" class="">college</label>
                    <input type="text" id="college" class="">
                </div>
                <div class="inp">
                    <label for="academic-year" class="">Academic Year</label>
                    <input type="text" id="academic-year" class="">
                </div>
                <div class="inp">
                    <label for="location" class="">Location</label>
                    <input type="text" id="location" class="">
                </div>
                <div class="inp">
                    <label for="email" class="">E-mail</label>
                    <input type="email" id="email" class="">
                </div>
                <div class="inp">
                    <label for="contact" class="">Contact No.</label>
                    <input type="text" id="contact" class="">
                </div>
                <div class="submit-btn">
                    <input type="submit" value="Add Book" class="submit-inp">
                </div>
            </form>
        </div>

    </section>
</body>

</html>