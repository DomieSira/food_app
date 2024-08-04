<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/b20e5a1a3b.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>


    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="C:\xampp\htdocs\rail">
    <link rel="icon" type="image/png" sizes="16x16" href="C:\xampp\htdocs\rail">
    <link rel="manifest" href="/site.webmanifest">

    <link rel="stylesheet" href="index.css">
    <script src="script.js" defer></script>
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
                        <li><a href="res.php">Restraunts</a></li>
                        <li><a href="orders.php">Orders</a></li>
                        <li><a href="#" onclick="openAbout()">About</a></li>
                        <li><button class="Btn btnPopup"><a href="Login.php">Login</a></button></li>
                    </ul>
                </div>
            </nav>
        </header>

        <div class="text-container">
            <h1 id="hello">Get restaurant food delivered right at your seat</h1>
        </div>

        <div class="dropdown-container">
            <select name="station" class="station-dropdown" onchange="redirectToTimePage()">
                <option value="">Select a station</option>
                <option value="Syokimau">Syokimau</option>
                <option value="Athi River">Athi River</option>
                <option value="Emali">Emali</option>
                <option value="Kibwezi">Kibwezi</option>
                <option value="Mtito Andei">Mtito Andei</option>
                <option value="Voi">Voi</option>
                <option value="Mariakani">Mariakani</option>
            </select>
        </div>
    </div>
</div>

<script>
    function redirectToTimePage() {
        var dropdown = document.querySelector('.station-dropdown');
        var selectedStation = dropdown.value;
        if (selectedStation) {
            window.location.href = 'time.php?station=' + encodeURIComponent(selectedStation);
        }
    }
</script>

<style>

    .dropdown-container {
        margin-top: 20px;
    }

    .dropdown-container {
        margin-top: 20px;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100px; /* Adjust the height as needed */
    }

    .station-dropdown {
        padding: 15px; /* Increase padding for larger size */
        font-size: 18px; /* Increase font size */
        border-radius: 5px;
        border: 1px solid #ccc;
        width: 300px; /* Set a fixed width for the dropdown */
    }

    .search-button i {
        color: white;
    }
</style>


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
         function openAbout(){
        document.getElementById("about").style.width = "100%";

        
    }
    function closeNav(){
        document.getElementById("about").style.width = "0%";

    }
      </script>
    
</body>
</html>