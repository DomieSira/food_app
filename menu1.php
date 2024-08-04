<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <script src="https://kit.fontawesome.com/b20e5a1a3b.js" crossorigin="anonymous"></script>
    <title>Menu</title>
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
                <h1 id="hello">Menu</h1>
            </div>
        </div>
    </div>

    <div class="card-container">
        <?php
            $servername = "localhost";
            $username = "root";
            $password = "dom";
            $dbname = "rail";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Retrieve restaurant ID from URL parameter, default to 1 if not provided
            $restaurant_id = isset($_GET['restaurant_id']) ? $_GET['restaurant_id'] : 1;

            // Fetch menu items for the selected restaurant
            $sql = "SELECT * FROM menu WHERE restaurant_id = $restaurant_id";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    // Adjust image path to include 'uploads' directory
                    $image_path = 'uploads/' . $row['image'];

                    echo '<form action="" method="post">
                            <div class="card">
                                <div class="card-image">
                                    <img src="' . $image_path . '" alt="Card image cap">
                                </div>
                                <h5 class="card-title">' . $row['dish_name'] . '</h5>
                                <p class="card-price">KES ' . $row['price'] . '</p>
                                <p class="card-description">' . $row['description'] . '</p>
                                <input type="hidden" name="product" value="' . $row['dish_name'] . '">
                                <input type="hidden" name="price" value="' . $row['price'] . '">
                                <input type="number" value="1" min="1" class="quantity-input" name="quantity">
                                <button type="submit" class="btn btn-primary add-to-cart-btn">Add to cart</button>
                            </div>
                          </form>';
                }
            } else {
                echo "<p>No menu items found for this restaurant.</p>";
            }

            // Close MySQL connection
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

    <div class="footer">
        <div class="footer-content">
            <div class="logo1">
                <img src="food-on-rails-logo-zip-file/png/logo-color.png" alt="Logo">
            </div>
            <p>Food at the comfort of your seat</p>
            <div class="icons">
                <a href="#"><i class="fa-brands fa-facebook"></i></a>
                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                <a href="#"><i class="fa-brands fa-linkedin"></i></a>
            </div>
        </div>
        <div class="footer-content">
            <h3>About Us</h3>
            <p>Food on Track Web App is a dedicated service for railway passengers
                that strive to provide restaurant-style food on the train. Our
                motto is to deliver hot and fresh food to the passengers traveling 
                on the train and make their journey enjoyable and flavorful.</p>
        </div>
        <div class="footer-content">
            <h3>Contact Us</h3>
            <ul>
                <li><a href="mailto:info@example.com">info@example.com</a></li>
                <li><a href="tel:+1234567890">+1234567890</a></li>
                <li><a href="https://www.example.com/contact">Contact Us</a></li>
            </ul>
        </div>
        <div class="footer-copyright">
            <p class="copyright">&copy; 2023 Your Company Name. All rights reserved.</p>
        </div>
    </div>

    <script>
        function openAbout() {
            document.getElementById("about").style.width = "100%";
        }

        function closeNav() {
            document.getElementById("about").style.width = "0%";
        }
    </script>
</body>
</html>
