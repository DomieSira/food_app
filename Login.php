<?php
// Configuration
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

ini_set('display_errors', 1);
error_reporting(E_ALL);
session_start();

// Registration
if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); 
    $sql = "INSERT INTO registration (username, email, password) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $username, $email, $password);

    if ($stmt->execute()) {
        echo "<script>alert('Registration successful');</script>";
    } else {
        echo "<script>alert('Registration failed');</script>";
    }

    $stmt->close();
}

// Login
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM registration WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            $_SESSION['email'] = $email;
            header('Location: index.php');
            exit();
        } else {
            echo "<script>alert('Incorrect password');</script>";
        }
    } else {
        echo "<script>alert('Email not found');</script>";
    }

    $stmt->close();
}

$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/b20e5a1a3b.js" crossorigin="anonymous"></script>

    <title>Login</title>

    <link rel="stylesheet" href="style.css">
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
                            <button class="Btn btnPopup">Login</button>
                        </ul>
                    </div>
                </nav>
            </header>

            
    <div class="wrapper active-popup">
        <span class="icon-close"><i class="fa-solid fa-xmark"></i></span>
        <div class="form-box login">
            <h2>Login</h2>
            <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
                <div class="input-box">
                    <span class="icon"><i class="fa-solid fa-envelope"></i></span>
                        <input type="email" name="email" required>
                        <label>Email</label>
                </div>

                <div class="input-box">
                    <span class="icon"> <i class="fa-solid fa-lock"></i></span>
                        <input type="password" name="password" required>
                        <label>Password</label>
                </div>

                <div class="remember-forgot">
                    <label>
                        <input type="checkbox" name="remember" id="remember">
                        <span>Remember me</span>
                    </label>
                    <a href="#">Forgot Password?</a>
                </div>

                <button type="submit" name="login" class="btn">Login</button>

                <div class="login-register">
                    <p>Don't have an account?<a href="#" class="register-Link">Register</a></p>
                </div>

            </form>
        </div>

        <div class="form-box register">
            <h2>Registration</h2>
            <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">

                <div class="input-box">
                    <span class="icon"><i class="fa-solid fa-user"></i></span>
                        <input type="text" name="username" required>
                        <label>Username</label>
                </div>

                <div class="input-box">
                    <span class="icon"><i class="fa-solid fa-envelope"></i></span>
                        <input type="email" name="email" required>
                        <label>Email</label>
                </div>

                <div class="input-box">
                    <span class="icon"> <i class="fa-solid fa-lock"></i></span>
                        <input type="password" name="password" required>
                        <label>Password</label>
                </div>

                <div class="remember-forgot">
                    <label>
                        <input type="checkbox" name="terms" id="terms">
                        <span>I agree to the terms and conditions</span>
                    </label>
                </div>

                <button type="submit" name="register" class="btn">Register</button>

                <div class="login-register">
                    <p>Already have an account?<a href="#" class="login-Link">Login</a></p>
                </div>

            </form>
        </div>

    </div>

    <div id="about" class="about">
        <a href="#" class="closebtn" onclick="closeNav()">&times;</a>
        <div class="about-overlay">
            <h1>About us</h1>
            <p>Launched in 2024, Our technology platform connects customers,<br> 
            restaurant partners and delivery partners, serving their multiple needs. <br>
            Customers use our platform to search and discover restaurants, read and write customer 
            generated reviews and view and upload photos,<br>order food delivery, book a table and make 
            payments while dining-out at restaurants. On the other hand,<br> we provide restaurant partners 
            with industry-specific marketing tools which enable them to engage and acquire customers<br> to 
            grow their business while also providing a reliable <br>and efficient last mile delivery service. 
            We also operate a one-stop procurement solution, <br>Hyperpure, which supplies high quality ingredients 
            and kitchen products to restaurant partners.<br> We also provide our delivery partners with transparent 
            and flexible earning opportunities. </p>
        </div>
    </div>

        </div>
    </div> 

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const wrapper = document.querySelector('.wrapper');
            const loginLink = document.querySelector('.login-Link');
            const registerLink = document.querySelector('.register-Link');
            const btnPopup = document.querySelector('.btnPopup');
            const iconClose = document.querySelector('.icon-close');

            registerLink.addEventListener('click', () => {
                wrapper.classList.add('active');
            });

            loginLink.addEventListener('click', () => {
                wrapper.classList.remove('active');
            });
            btnPopup.addEventListener('click', () => {
                wrapper.classList.add('active-popup');
            });
            
            iconClose.addEventListener('click', () => {
                wrapper.classList.remove('active-popup');
            });
            
        });

        function openAbout(){
        document.getElementById("about").style.width = "100%";

        
    }
    function closeNav(){
        document.getElementById("about").style.width = "0%";

    }
    </script>
    
</body>

</html>