<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="order.css">
    <title>Document</title>
    <style>
    .remove-btn {
    background-color: #162938;
    color: #ffffff;
    border: none;
    padding: 5px 10px;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px; /* Increase font size to 16px */
    transition: background-color 0.3s ease;
}
.remove-btn:hover {
    background-color: lightslategray;
}

.btn-primary {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
    transition: background-color 0.3s ease;
}

.btn-primary:hover {
    background-color: #45a049;
}
    </style>
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


                

   
            <div class="container">
                <div class="container-fluid">
                    <div class="cart">
                        <h2>Cart</h2>
                        <table>
                            <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody id="cart-items">
                            <tbody id="cart-items">
    <?php
        // Connect to your database
        $servername = "localhost";
        $username = "root";
        $password = "dom"; // Replace this with the actual password for the root user
        $dbname = "rail";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: ". $conn->connect_error);
        }

        // Query to fetch cart items
        $sql = "SELECT * FROM cart";
        $result = $conn->query($sql);

        // Display cart items
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr data-id='". $row["id"]. "'>";
                echo "<td>". $row["product"]. "</td>";
                echo "<td>KSh". $row["price"]. "</td>";
                echo "<td>". $row["quantity"]. "</td>";
                echo "<td class='total'>KSh". ($row["price"] * $row["quantity"]). "</td>";
                echo "<td><button class='remove-btn' onclick='removeFromCart(".$row["id"].")'>Remove</button></td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='5'>No items in cart</td></tr>";
        }
        $conn->close();
    ?>
</tbody>
                            </tbody>
                            <tfoot>
    <tr>
        <td colspan="3">Grand Total:</td>
        <td id="grand-total">
            <?php
            // Connect to your database
            $servername = "localhost";
            $username = "root";
            $password = "dom"; // Replace this with the actual password for the root user
            $dbname = "rail";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: ". $conn->connect_error);
            }

            // Query to fetch cart items
            $sql = "SELECT SUM(price * quantity) as grand_total FROM cart";
            $result = $conn->query($sql);

            // Display grand total
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                echo "KSh". $row["grand_total"];
            } else {
                echo "KSh0.00";
            }

            $conn->close();
           ?>
        </td>
        <td><button class="btn btn-primary" onclick="window.location.href='checkout.php';">Proceed to Checkout</button></td>
    </tr>
</tfoot>

                        </table>
                    </div>
                </div>
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
       // Function to remove item from cart
function removeFromCart(itemId) {
    // Send AJAX request to remove item from database
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "remove_from_cart.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            // Item removed from database, now remove from HTML table
            var row = document.querySelector("tr[data-id='" + itemId + "']");
            if (row) {
                row.parentNode.removeChild(row);

                // Display popup message
                alert("Item removed from cart");

                // Recalculate grand total
                updateGrandTotal();
            }
        }
    };
    xhr.send("id=" + itemId);
}

        // Update grand total
        function updateGrandTotal() {
            var grandTotal = 0;
            var totalElements = document.querySelectorAll(".total");
            for (var i = 0; i < totalElements.length; i++) {
                grandTotal += parseFloat(totalElements[i].innerText.replace("KSh", ""));
            }
            document.getElementById("grand-total").innerText = "KSh" + grandTotal.toFixed(2);
        }

        // Add event listeners to remove buttons
        var removeButtons = document.querySelectorAll(".remove-btn");
        for (var i = 0; i < removeButtons.length; i++) {
            removeButtons[i].addEventListener("click", function() {
                var itemId = this.getAttribute("data-id");
                removeFromCart(itemId);
            });
        }

    </script>

</body>
</html>