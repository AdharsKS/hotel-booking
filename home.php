<?php include 'includes/config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HB Website - Home</title>
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="icon" type="image/x-icon" href="images/logo/hotellogo.png">
</head>
<body>

    <?php include 'includes/header.php'; ?>

    <section class="hero">
        <div class="overlay">
            <h1>Welcome to HB Website</h1>
            <p>Experience luxury and comfort at our premium hotel.</p>

            <form class="booking-form">
                <label for="check-in">Check-in</label>
                <input type="date" id="check-in" required>

                <label for="check-out">Check-out</label>
                <input type="date" id="check-out" required>

                <label for="adults">Adult</label>
                <select id="adults">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                </select>

                <label for="children">Children</label>
                <select id="children">
                    <option>0</option>
                    <option>1</option>
                    <option>2</option>
                </select>

                <button type="submit">Submit</button>
            </form>
        </div>
    </section>

    <?php include 'includes/footer.php'; ?>

    <script src="https://kit.fontawesome.com/2e5e758ab7.js" crossorigin="anonymous"></script>
    <script src="js/navbar.js"></script>
</body>
</html>
