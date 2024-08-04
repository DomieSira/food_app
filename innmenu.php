<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">

    <script src="https://kit.fontawesome.com/b20e5a1a3b.js" crossorigin="anonymous"></script>

    <title>Document</title>
    
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
            // Define database connection parameters
            $servername = "localhost";
            $username = "root";
            $password = "dom"; // Replace this with the actual password for the root user
            $dbname = "rail";
            
            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Process form submission
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $product = $_POST['product'];
                $price = $_POST['price'];
                $quantity = $_POST['quantity'];
                $total = $price * $quantity;

                // Insert data into database
                $sql = "INSERT INTO cart (product, price, quantity, total) VALUES ('$product', '$price', '$quantity', '$total')";
                if ($conn->query($sql) === TRUE) {
                    echo "<script>alert('Product added to cart successfully');</script>";
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            }
        ?>

        <!-- Card 1 -->
        <form action="" method="post">
            <div class="card">
                <div class="card-image">
                    <img src="images/inn1.jpg" alt="Card image cap">
                </div>
                <h5 class="card-title">inn1</h5>
                <p class="card-price">KES 1,000</p>
                <input type="hidden" name="product" value="inn1">
                <input type="hidden" name="price" value="1000">
                <input type="number" value="1" min="1" class="quantity-input" name="quantity">
                <button type="submit" class="btn btn-primary add-to-cart-btn">Add to cart</button>
            </div>
        </form>

        <form action="" method="post">
            <div class="card">
                <div class="card-image">
                    <img src="images/inn2.jpg" alt="Card image cap">
                </div>
                <h5 class="card-title">inn2</h5>
                <p class="card-price">KES 1,050</p>
                <input type="hidden" name="product" value="inn2">
                <input type="hidden" name="price" value="1050">
                <input type="number" value="1" min="1" class="quantity-input" name="quantity">
                <button type="submit" class="btn btn-primary add-to-cart-btn">Add to cart</button>
            </div>
        </form>

        <form action="" method="post">
            <div class="card">
                <div class="card-image">
                    <img src="images/inn3.jpg" alt="Card image cap">
                </div>
                <h5 class="card-title">inn3</h5>
                <p class="card-price">KES 2550</p>
                <input type="hidden" name="product" value="inn3">
                <input type="hidden" name="price" value="2550">
                <input type="number" value="1" min="1" class="quantity-input" name="quantity">
                <button type="submit" class="btn btn-primary add-to-cart-btn">Add to cart</button>
            </div>
        </form>

        <form action="" method="post">
            <div class="card">
                <div class="card-image">
                    <img src="images/inn4.jpg" alt="Card image cap">
                </div>
                <h5 class="card-title">inn4</h5>
                <p class="card-price">KES 3500</p>
                <input type="hidden" name="product" value="inn4">
                <input type="hidden" name="price" value="3500">
                <input type="number" value="1" min="1" class="quantity-input" name="quantity">
                <button type="submit" class="btn btn-primary add-to-cart-btn">Add to cart</button>
            </div>
        </form>

        <form action="" method="post">
            <div class="card">
                <div class="card-image">
                    <img src="images/inn5.jpg" alt="Card image cap">
                </div>
                <h5 class="card-title">inn5</h5>
                <p class="card-price">KES 1250</p>
                <input type="hidden" name="product" value="inn5">
                <input type="hidden" name="price" value="1250">
                <input type="number" value="1" min="1" class="quantity-input" name="quantity">
                <button type="submit" class="btn btn-primary add-to-cart-btn">Add to cart</button>
            </div>
        </form>

        <form action="" method="post">
            <div class="card">
                <div class="card-image">
                    <img src="images/inn6.jpeg" alt="Card image cap">
                </div>
                <h5 class="card-title">inn6</h5>
                <p class="card-price">KES 4,000</p>
                <input type="hidden" name="product" value="inn6">
                <input type="hidden" name="price" value="4000">
                <input type="number" value="1" min="1" class="quantity-input" name="quantity">
                <button type="submit" class="btn btn-primary add-to-cart-btn">Add to cart</button>
            </div>
        </form>

        <form action="" method="post">
            <div class="card">
                <div class="card-image">
                    <img src="images/inn7.jpg" alt="Card image cap">
                </div>
                <h5 class="card-title">inn7</h5>
                <p class="card-price">KES 3,000</p>
                <input type="hidden" name="product" value="inn7">
                <input type="hidden" name="price" value="3000">
                <input type="number" value="1" min="1" class="quantity-input" name="quantity">
                <button type="submit" class="btn btn-primary add-to-cart-btn">Add to cart</button>
            </div>
        </form>

        <form action="" method="post">
            <div class="card">
                <div class="card-image">
                    <img src="images/inn8.jpg" alt="Card image cap">
                </div>
                <h5 class="card-title">inn8</h5>
                <p class="card-price">KES 1500</p>
                <input type="hidden" name="product" value="inn8">
                <input type="hidden" name="price" value="1500">
                <input type="number" value="1" min="1" class="quantity-input" name="quantity">
                <button type="submit" class="btn btn-primary add-to-cart-btn">Add to cart</button>
            </div>
        </form>

        <form action="" method="post">
            <div class="card">
                <div class="card-image">
                    <img src="images/inn9.jpg" alt="Card image cap">
                </div>
                <h5 class="card-title">inn9</h5>
                <p class="card-price">KES 2,000</p>
                <input type="hidden" name="product" value="inn9">
                <input type="hidden" name="price" value="2000">
                <input type="number" value="1" min="1" class="quantity-input" name="quantity">
                <button type="submit" class="btn btn-primary add-to-cart-btn">Add to cart</button>
            </div>
        </form>

        

       
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

    </footer>

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
