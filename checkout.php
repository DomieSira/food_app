<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://kit.fontawesome.com/b20e5a1a3b.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="check.css">
    <script src="script.js" defer></script>
    <title>Checkout</title>
    <style>
        .btn {
            display: inline-block;
            font-weight: 400;
            line-height: 1.5;
            color: #212529;
            text-align: center;
            text-decoration: none;
            vertical-align: middle;
            cursor: pointer;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
            background-color: transparent;
            border: 1px solid transparent;
            padding: .375rem .75rem;
            font-size: 1rem;
            border-radius: .25rem;
            transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
        }
        .btn-primary {
            color: #fff;
            background-color: #0d6efd;
            border-color: #0d6efd;
        }
        .btn-primary:hover {
            color: #fff;
            background-color: #0b5ed7;
            border-color: #0a58c8;
        }
        .delivery-details {
            overflow-wrap: break-word;
        }
        .modal-header {
            background-color: #f8f9fa;
            border-bottom: 1px solid #dee2e6;
        }
        .modal-footer {
            background-color: #f8f9fa;
            border-top: 1px solid #dee2e6;
        }
        .table {
            margin-bottom: 0;
        }
        .order-details-container {
            padding: 15px;
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
                <h1 id="hello">Checkout</h1>
            </div>
        </div>
    </div>
    <div class="modal fade" id="checkoutModal" tabindex="-1" aria-labelledby="checkoutModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="checkoutModalLabel">Thank You for using Food on Rails to Order!</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="order-details-container">
                        <h6>Your order details:</h6>
                        <?php
                        $servername = "localhost";
                        $username = "root";
                        $password = "dom";
                        $dbname = "rail";
                        $conn = mysqli_connect($servername, $username, $password, $dbname);
                        if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                        }
                        $sql = "SELECT * FROM cart";
                        $result = mysqli_query($conn, $sql);
                        echo "<table class='table table-bordered'>";
                        echo "<thead class='thead-light'>";
                        echo "<tr>";
                        echo "<th>Product</th>";
                        echo "<th>Quantity</th>";
                        echo "<th>Price</th>";
                        echo "</tr>";
                        echo "</thead>";
                        echo "<tbody>";
                        if (mysqli_num_rows($result) > 0) {
                            $total = 0;
                            while($row = mysqli_fetch_assoc($result)) {
                                echo "<tr>";
                                echo "<td>" . $row['product'] . "</td>";
                                echo "<td>" . $row['quantity'] . "</td>";
                                echo "<td>KSh " . $row['price'] . "</td>";
                                echo "</tr>";
                                $total += $row['price'] * $row['quantity'];
                            }
                        } else {
                            echo "<tr><td colspan='3'>No items in the cart</td></tr>";
                        }
                        echo "</tbody>";
                        echo "</table>";
                        echo "<p><strong>Total: KSh " . $total . "</strong></p>";
                        $sql = "SELECT * FROM placedOrders ORDER BY id DESC LIMIT 1";
                        $result = mysqli_query($conn, $sql);
                        if (mysqli_num_rows($result) > 0) {
                            echo "<h6>Delivery Details:</h6>";
                            $row = mysqli_fetch_assoc($result);
                            echo "<div class='delivery-details'>";
                            echo "<p>Name: " . $row['name'] . "</p>";
                            echo "<p>Mobile No: " . $row['mobile'] . "</p>";
                            echo "<p>Email: " . $row['email'] . "</p>";
                            echo "<p>Coach No: " . $row['coach'] . "</p>";
                            echo "<p>Seat No: " . $row['seat'] . "</p>";
                            echo "<p>Journey Date: " . $row['date'] . "</p>";
                            echo "</div>";
                        } else {
                            echo "No order details found.";
                        }
                        mysqli_close($conn);
                        ?>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="index.php" class="btn btn-primary" onclick="location.reload();">Back to Home</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <div class="order-summary">
                            <h2>Order Summary</h2>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Product</th>
                                        <th>Quantity</th>
                                        <th>Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $conn = mysqli_connect($servername, $username, $password, $dbname);
                                    if ($conn->connect_error) {
                                        die("Connection failed: ". $conn->connect_error);
                                    }
                                    $sql = "SELECT product, quantity, price FROM cart";
                                    $result = mysqli_query($conn, $sql);
                                    $total = 0;
                                    if (mysqli_num_rows($result) > 0) {
                                        while($row = mysqli_fetch_assoc($result)) {
                                            echo "<tr>";
                                            echo "<td>". $row["product"]. "</td>";
                                            echo "<td>". $row["quantity"]. "</td>";
                                            echo "<td>KSh ". $row["price"]. "</td>";
                                            echo "</tr>";
                                            $total += $row['price'] * $row['quantity'];
                                        }
                                    } else {
                                        echo "<tr><td colspan='3'>No items in the cart</td></tr>";
                                    }
                                    ?>
                                </tbody>
                            </table>
                            <p><strong>Total: KSh <?php echo $total; ?></strong></p>
                            <a href="orders.php" class="btn btn-primary">Back to Cart</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="delivery-details">
                            <h2>Delivery Details</h2>
                            <form id="checkout-form" action="" method="post">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="name" name="name" required>
                                </div>
                                <div class="mb-3">
                                    <label for="mobile" class="form-label">Mobile No.</label>
                                    <input type="text" class="form-control" id="mobile" name="mobile" required>
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>
                                <div class="mb-3">
                                    <label for="coach" class="form-label">Coach No.</label>
                                    <input type="text" class="form-control" id="coach" name="coach" required>
                                </div>
                                <div class="mb-3">
                                    <label for="seat" class="form-label">Seat No.</label>
                                    <input type="text" class="form-control" id="seat" name="seat" required>
                                </div>
                                <div class="mb-3">
                                    <label for="date" class="form-label">Journey Date</label>
                                    <input type="date" class="form-control" id="date" name="date" required>
                                </div>
                                <button type="submit" class="btn btn-primary">Place Order</button>
                            </form>
                            <?php
                            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                $name = $_POST['name'];
                                $mobile = $_POST['mobile'];
                                $email = $_POST['email'];
                                $coach = $_POST['coach'];
                                $seat = $_POST['seat'];
                                $date = $_POST['date'];

                                if (!isset($date) || empty($date)) {
                                    echo "Date is required.";
                                } else {
                                    $sql = "INSERT INTO placedOrders (name, mobile, email, coach, seat, date) VALUES ('$name', '$mobile', '$email', '$coach', '$seat', '$date')";
                                    if (mysqli_query($conn, $sql)) {
                                        $order_id = mysqli_insert_id($conn); // Get the last inserted order ID

                                        // Insert items into orderItems table
                                        $sql = "SELECT * FROM cart";
                                        $result = mysqli_query($conn, $sql);
                                        if (mysqli_num_rows($result) > 0) {
                                            while($row = mysqli_fetch_assoc($result)) {
                                                $product = $row['product'];
                                                $quantity = $row['quantity'];
                                                $price = $row['price'];
                                                $sql_insert_item = "INSERT INTO orderItems (order_id, product, quantity, price) VALUES ('$order_id', '$product', '$quantity', '$price')";
                                                mysqli_query($conn, $sql_insert_item);
                                            }
                                        }

                                        // Show the modal with order details
                                        echo '<script>
                                        $(document).ready(function(){
                                            $("#checkoutModal").modal("show");
                                        });
                                        </script>';
                                    } else {
                                        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                                    }
                                }
                                mysqli_close($conn);
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
