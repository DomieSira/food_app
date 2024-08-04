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
            window.location.href = 'res.php?station=' + encodeURIComponent(selectedStation);
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

    <h1 class="how-it-works">How Food On rails Web App Works For Railway Passengers?</h1>

    <div class="columns">
        <div class="column">
            <img src="images/restaurant-building.png" alt="Image 1">
            <p>Enter your stop station and explore restraunts in your area</p>
        </div>
        <div class="column">
            <img src="images/completed-task.png" alt="Image 2">
            <p>Choose your food &schedule your order by paying online or on COD</p>
        </div>
        <div class="column">
            <img src="images/break.png" alt="Image 3">
            <p>Enjoy your meal delivered to your seat</p>
        </div>
    </div>

    <div class="container1">
    
    <h4 class="hello"><h4>Food Delivery on Train with Food on rails</h4>
       <p>You can order food in train online with our official website and get it right to your seat at the station of your choice! Isn't that amazing?</p>

       <p>Get excellent and efficient food delivery on train service with this revolutionary 
        web app. All you need to do is enter your PNR number to view the available 
        restaurants &amp; food options for your journey &amp; place your order. 
        You can also explore the food options at a station or for a train, but your PNR 
        number will be required to place your order safely.</p>

        <p>This efficient method of food ordering in train promises not only
           delicious food at your seat but also a varied and vast food menu 
           from the widest nexus of brands and restaurants, making your train
           journey a lot more enjoyable. After all, “Good Food Makes For A Good Journey”.</p>
   
           <h4  class="hello">Benefits of placing an online food order in train with food on rails</h4>

           <ul>
            <li>This is the official food on rails website. Hence it comes with the trust of food on rails, offering reliable &amp; well-established service.</li>
            <li>Freedom from the hassle of carrying food.</li>
            <li>The widest hub of restaurants and brands offers myriaddelicious and hygienic meal options for your train journey</li>
            <li>Eliminates the risk of missing the train while finding food at stations.</li>
            <li>Provides you with quality food at reasonable and affordable prices, making it the most consumer-friendly choice.</li>
            <li>Auto cancellation of an order in case PNR gets cancelled.</li>
        </ul>

        <h4  class="hello">Order food in train from the widest hub of food brands &amp; restaurants</h4>
        <p>With numerous food brands, restaurants &amp;
             <a href="https://www.ecatering.irctc.co.in/blog/authorized-ecatering-irctc-partners
             -for-food-delivery-in-train/">authorised eCatering aggregators partnering with IRCTC
              eCatering</a>, passengers have the option to choose from the widest variety of 
              dishes &amp; cuisines. These include mouth-watering Biryanis, cheesy Pizzas, 
              steamy South Indian delicacies, and global cuisines such as Chinese and Continental.
               You can also feast on the local cuisines from wherever you’re travelling. 
               For instance, you can get your favourite food in Rajdhani Express with the
                help of IRCTC eCatering. You don’t need to lug around heavy tiffin boxes or 
                worry about unhygienic stall-food while on your journey.</p>
      
            </div>

            <h2>Order from the best brands</h2>
            <div class="columns1">
                <div class="column-1">
                    <img src="images/ain.png" alt="Image 1">

                    <img src="images/inn.png" alt="Image 1">

                    
                </div>
                <div class="column-1">
                    <img src="images/dominos.jpg" alt="Image 2">

                    <img src="images/mama.jpeg" alt="Image 1">
                   
                </div>
                <div class="column-1">
                    <img src="images/bwibo.jpg" alt="Image 3">

                    <img src="images/inti.jpg" alt="Image 1">
                   
                </div>
                <div class="column-1">
                    <img src="images/king.png" alt="Image 4">

                    <img src="images/red.png" alt="Image 1">
                  
                </div>
                
            </div>
    


    <div class="container">
        <div class="content">
            <h1 class="how-it-works" style="margin-bottom: 2rem;">Our Specialties</h1>
        <div class="slider-wrapper">
            <button id="prev-slide" class="slide-button material-symbols-rounded">chevron_left</button>
            <div class="image-list">
                <img src="images/ramen.jpg" alt="img1" class="image-item">
                <img src="images/intro.jpg" alt="img2" class="image-item">
                <img src="images/Loaded-Fries.webp" alt="img3" class="image-item">
                <img src="images/burger.jpg" alt="img4" class="image-item">
                <img src="images/pilau.jpeg" alt="img5" class="image-item">
                <img src="images/pizza.jpeg" alt="img6" class="image-item">
                <img src="images/chick.jpg" alt="img7" class="image-item">
                <img src="images/Fried-Rice.jpg" alt="img8" class="image-item">
                <img src="images/ramen.jpg" alt="img9" class="image-item">
                <img src="images/pasta.jpeg" alt="img10" class="image-item">
            </div>
            <button id="next-slide" class="slide-button material-symbols-rounded">chevron_right</button>
        </div>
        <div class="slider-scrollbar">
            <div class="scrollbar-track">
                <div class="scrollbar-thumb">

                </div>
            </div>
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
         function openAbout(){
        document.getElementById("about").style.width = "100%";

        
    }
    function closeNav(){
        document.getElementById("about").style.width = "0%";

    }
      </script>
    
</body>
</html>