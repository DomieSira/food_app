<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="res.css">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://kit.fontawesome.com/b20e5a1a3b.js" crossorigin="anonymous"></script>
    <title>Restaurants</title>
</head>
<body>
    <div class="image">
        <div class="image-overlay">
            <header class="sticky">
                <nav>
                    <div class="nav-header">
                        <div class="logo">
                            <img src="food-on-rails-logo-zip-file/png/logo-color.png" alt="Logo">
                        </div>
                        <ul class="nav-links">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="res.php">Restaurants</a></li>
                            <li><a href="orders.php">Orders</a></li>
                            <li><a href="#" onclick="openAbout()">About</a></li>
                            <li><button class="Btn btnPopup"><a href="Login.php">Login</a></button></li>
                        </ul>
                    </div>
                </nav>
            </header>
            <div class="text-container">
                <h1 id="hello">Restaurants</h1>
            </div>
        </div>
    </div>

    <div class="card-container">
        <?php
        // Database connection
        $servername = "localhost";
        $username = "root";
        $password = "dom"; // Replace this with the actual password for the root user
        $dbname = "rail";

        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT id, restaurant_name, image, location, cuisine FROM restaurants";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo '<div class="card">';
                echo '<img src="uploads/' . $row["image"] . '" class="card-img-top" alt="...">';
                echo '<div class="card-body">';
                echo '<h5 class="card-title">' . $row["restaurant_name"] . '</h5>';
                echo '<p class="card-text">Location: ' . $row["location"] . '</p>';
                echo '<p class="card-text">Cuisine: ' . $row["cuisine"] . '</p>';
                echo '<button class="btn"><a href="menu.php?restaurant_id=' . urlencode($row["id"]) . '">Food Menu</a></button>';
                echo '</div>';
                echo '</div>';
            }
        } else {
            echo "0 results";
        }
        $conn->close();
        ?>
    </div>

    <div id="about" class="about">
        <a href="#" class="closebtn" onclick="closeNav()">&times;</a>
        <div class="about-overlay">
            <h1>About us</h1>
            <p>Launched in 2024, Our technology platform connects customers,<br> 
            restaurant partners and delivery partners, serving their multiple needs. <br>
            Customers use our platform to search and discover restaurants, read and write customer 
            generated reviews and view and upload photos,<br> order food delivery, book a table and make 
            payments while dining-out at restaurants. On the other hand,<br> we provide restaurant partners 
            with industry-specific marketing tools which enable them to engage and acquire customers<br> to 
            grow their business while also providing a reliable <br>and efficient last mile delivery service. 
            We also operate a one-stop procurement solution, <br>Hyperpure, which supplies high quality ingredients 
            and kitchen products to restaurant partners.<br> We also provide our delivery partners with transparent 
            and flexible earning opportunities. </p>
        </div>
    </div>

    <script>
        function openAbout(){
            document.getElementById("about").style.width = "100%";
        }
        function closeNav(){
            document.getElementById("about").style.width = "0%";
        }
    </script>
</body>
</html>
