<!DOCTYPE html>
<html lang="en">  <a href="logout.php">Logout</a>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>SFMS</title>
</head>

<body>
  <!-- Header -->
  <section id="header">
    <div class="header container">
      <div class="nav-bar">
        <div class="brand">
          <a href="#SMS">
            <h1><span>S</span>mart <span>F</span>ogponic <span>M</span>onitoring <span>S</span>ystem</h1>
          </a>
        </div>
        <div class="nav-list">
          <div class="hamburger">
            <div class="bar"></div>
          </div>
          <ul>
            <li><a href="#home" data-after="Home">Home</a></li>
            <li><a href="#SFS" data-after="SFS PLANTS">SFS PLANTS</a></li>
            <li><a href="#IOT PLANT MONITOR" data-after="IOT MONITOR">IOT PLANT MONITOR</a></li>
            <li><a href="#PHD" data-after="Health Detection">Plant health Detection</a></li>
            <li><a href="logout.php">Logout</a></li>
        
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- End Header -->


  <!-- Monitor Section  -->
  <section id="hero">
    <div class="hero container">
      <div>
        <h1>SMART <span></span></h1>
        <h1>Fogponic<span></span></h1>
        <h1>MONITORING<span></span></h1>
         <h1>SYSTEM<span></span></h1>
        <a href="#projects" type="button" class="cta">Monitor Your Plants</a>
      </div>
    </div>
  </section>
  <!-- End Monitor Section  -->

  <!--  Section -->
  <section id="services">
    <div class="services container">
      <div class="service-top">
        <h1 class="section-title">SFS <span> PLANT</span> MONITOR</h1>
        <p>SAVE WATER USING OUR FOGPONIC SYSTEM</p>
      </div>
      <div class="service-bottom">
        <div class="service-item">
          <div class="icon"><img src="https://static.vecteezy.com/system/resources/previews/000/571/898/non_2x/plant-icon-vector.jpg" /></div>
          <h2>Spinach</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis debitis rerum, magni voluptatem sed
            architecto placeat beatae tenetur officia quod</p>
        </div>
        <div class="service-item">
          <div class="icon"><img src="https://static.vecteezy.com/system/resources/previews/000/571/898/non_2x/plant-icon-vector.jpg" /></div>
          <h2>Basil</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis debitis rerum, magni voluptatem sed
            architecto placeat beatae tenetur officia quod</p>
        </div>
        <div class="service-item">
          <div class="icon"><img src="https://static.vecteezy.com/system/resources/previews/000/571/898/non_2x/plant-icon-vector.jpg" /></div>
          <h2>Coriander</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis debitis rerum, magni voluptatem sed
            architecto placeat beatae tenetur officia quod</p>
        </div>
        <div class="service-item">
          <div class="icon"><img src="https://static.vecteezy.com/system/resources/previews/000/571/898/non_2x/plant-icon-vector.jpg" /></div>
          <h2>Mint</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis debitis rerum, magni voluptatem sed
            architecto placeat beatae tenetur officia quod</p>
        </div>
      </div>
    </div>
  </section>


  <!--  Service Section -->



<!DOCTYPE html>
<html>
<head>
  <title>Fogponic Dashboard</title> 

  <script type="module">
    // Import the functions you need from the SDKs you need
    import { initializeApp } from "https://www.gstatic.com/firebasejs/9.20.0/firebase-app.js";
    import { getDatabase, ref } from "https://www.gstatic.com/firebasejs/9.20.0/firebase-database.js";

    // Your web app's Firebase configuration
    const firebaseConfig = {
      apiKey: "AIzaSyD5V6mZZrbuoR57cUigonGF3RWSil3F0JE",
      authDomain: "dashboard-93f39.firebaseapp.com",
      databaseURL: "https://dashboard-93f39-default-rtdb.firebaseio.com",
      projectId: "dashboard-93f39",
      storageBucket: "dashboard-93f39.appspot.com",
      messagingSenderId: "463212541656",
      appId: "1:463212541656:web:6cad4a4837e0380100c9ad"
    };

    // Initialize Firebase
    const app = initializeApp(firebaseConfig);
    const database = getDatabase();

    // Add event listeners to update database
    document.getElementById("humidity").addEventListener("change", function() {
      ref(database, "humidity").set(this.value);
    });
    document.getElementById("water-level").addEventListener("change", function() {
      ref(database, "water-level").set(this.value);
    });
    document.getElementById("water-temp").addEventListener("change", function() {
      ref(database, "water-temperature").set(this.value);
    });

     document.getElementById("PH-Level").addEventListener("change", function() {
      ref(database, "PH-Level-input").set(this.value);
    });
     document.getElementById("Air-temperature").addEventListener("change", function() {
      ref(database, "Air-temperature").set(this.value);
    });
     document.getElementById("Light-intensity").addEventListener("change", function() {
      ref(database, "Light-intensity").set(this.value);
    });







    // Add listeners to update HTML elements in real-time
    ref(database, "humidity").on("value", function(snapshot) {
      document.getElementById("humidity-value").textContent = snapshot.val();
    });
    ref(database, "water-level").on("value", function(snapshot) {
      document.getElementById("water-level-value").textContent = snapshot.val();
    });
    ref(database, "water-temperature").on("value", function(snapshot) {
      document.getElementById("water-temp-value").textContent = snapshot.val();
    });
    ref(database, "PH-Level").on("value", function(snapshot) {
      document.getElementById("Ph-value").textContent = snapshot.val();
    });
    ref(database, "Air-temperature-input").on("value", function(snapshot) {
      document.getElementById("Air-temperature-value").textContent = snapshot.val();
    });
    ref(database, "Light-intensity").on("value", function(snapshot) {
      document.getElementById("Light-intensity-value").textContent = snapshot.val();
    });
    
  </script>
  <style>

    /* Base styles */
    body {
      background-color: #f4f4f4;
      font-family: sans-serif;
      margin: 0;
      padding: 0;
    }

    h1 {
      font-size: 3rem;
      margin-top: 2rem;
      text-align: center;
      color: #333;
    }

    .container {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      align-items: center;
      margin-top: 2rem;
      margin-bottom: 2rem;
      padding: 0 1rem;
    }

    .card {
      background-color: #fff;
      box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
      padding: 1.5rem;
      border-radius: 15rem;
      text-align: center;
      margin: 2rem;
      width: calc(33.33% - 2rem);
      height: 200px;
      transition: all 0.3s ease;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
    }

    .card:hover {
      transform: scale(1.05);
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
    }

    h2 {
      font-size: 1.5rem;
      margin-top: 1rem;
      margin-bottom: 0.1rem;
      color: #333;
    }

    p {
      font-size: 2rem;
      font-weight: bold;
      margin-top: 0.5rem;
      color: #777;
    }

    .logo {
      background-size: contain;
      background-repeat: no-repeat;
      background-position: center center;
      margin-bottom: 1rem;
      height: 80px;
      width: 80px;
      display: inline-block;
    }

    /* Sensor-specific styles */
    .humidity {
      background-color: #88ccf1;
      background-image: url('https://blog.froztec.com/hs-fs/hubfs/blog/Noviembre/6698401_l.jpg?width=1152&height=765&name=6698401_l.jpg');
    }

    .water-level {
      background-color: #00a9cf;
      background-image: url('https://jooinn.com/images/water-level-4.jpg');
    }

    .water-temp {
      background-color: #ffc107;
      background-image: url('https://photos.cdn-outlet.com/photos/cms/images/istock-638299490.jpg');
    }

    .ph-level {
      background-color: #ff6b6b;
      background-image: url('https://www.sdfarmbureau.org/wp-content/uploads/2018/03/Water.jpg');
    }
        
        .air-temp {
      background-color: #5dc5ed;
      background-image: url('https://seatechh2o.com/wp-content/uploads/2019/05/Aquarium-temperature-_-21595731-1024x685.jpeg');
    }

    .LightIntensity {
      background-color: #ff9966;
      background-image: url('https://www.wehydroponics.com/store/wp-content/uploads/2020/10/i-416x478.jpg');
    }

    @ /* Media queries */
  @media screen and (max-width: 768px) {
    h1 {
      font-size: 2rem;
    }
    .card {
      margin: 0.5rem;
      width: calc(50% - 1rem);
      height: auto;
    }
  }

  @media screen and (max-width: 576px) {
    .card {
      width: 100%;
    }
  }
</style>
</head>
<body>
  <h1>Fogponic Dashboard</h1>
  <div class="container">
    <div class="card humidity">
      <div class="logo" style="background-image: url('https://img.icons8.com/officel/256/humidity.png');"></div>
      <h2>Humidity</h2>
      <h2><p><?php
              $Humidity = isset($_POST['Humidity']) ? $_POST['Humidity'] : '';
              echo $Humidity;
            ?></p></h2> 
    </div>
    <div class="card water-level">
      <div class="logo" style="background-image: url('https://img.icons8.com/external-smashingstocks-circular-smashing-stocks/256/external-water-level-weather-smashingstocks-circular-smashing-stocks-2.png');"></div>
      <h2>Water Level</h2>
      <p><?php
              $WaterLevel = isset($_POST['WaterLevel']) ? $_POST['WaterLevel'] : '';
              echo $WaterLevel;
            ?></p>
    </div>
    <div class="card water-temp">
      <div class="logo" style="background-image: url('https://img.icons8.com/dusk/64/000000/water--v1.png');"></div>
      <h2>Water Temperature</h2>
       <h2><p><?php
              $Humidity = isset($_POST['Humidity']) ? $_POST['Humidity'] : '';
              echo $Humidity;
            ?>
      </p></h2>
    </div>
    <div class="card ph-level">
      <div class="logo" style="background-image: url('https://img.icons8.com/bubbles/256/ph-meter.png');"></div>
      <h2>pH Level</h2>
      <p><?php
              $WaterPH = isset($_POST['WaterPH']) ? $_POST['WaterPh'] : '';
              echo $WaterPH;
            ?></p>
      
    </div>
        <div class="card air-temp">
      <div class="logo" style="background-image: url('https://img.icons8.com/external-tal-revivo-shadow-tal-revivo/256/external-reduce-light-brightness-on-laptop-button-layout-apps-shadow-tal-revivo.png');"></div>
      <h2>Air Temperature</h2>
      <p><?php
              $AirTemperature = isset($_POST['AirTemperature']) ? $_POST['AirTemperature'] : '';
              echo $AirTemperature;
            ?></p>
    </div>
    <div class="card LightIntensity">
      <div class="logo" style="background-image: url('https://img.icons8.com/dusk/64/000000/fan--v1.png');"></div>
      <h2>Light Intensity</h2>
      <p> <?php
              $LightIntensity = isset($_POST['LightIntensity']) ? $_POST['LightIntensity'] : '';
              echo $LightIntensity;
            ?></p>
    </div>
  </div>
</body>
</html>

  <!-- End Projects Section -->



 <section id="about">
  <div class="about container">
    <div class="col-left">
      <div class="about-img">
        <img src="Https://photo-cdn2.icons8.com/oy7EQcyC1og33SV7YyLKIjeqbG-W-vhFx5sPWD6Nk9A/rs:fit:1429:1072/czM6Ly9pY29uczgu/bW9vc2UtcHJvZC5l/eHRlcm5hbC9hMmE0/Mi8xOTY0MWJlZGQ0/ZWU0NTcwYmIyZTVi/ZTczYjdhYzA2Yy5q/cGc.jpg" alt="img" id="imagePreview">
      </div>
    </div>
    <div class="col-right">
      <h1 class="section-title">Health <span>Detection</span></h1>
      <h2>Leaf detection</h2>
      <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Asperiores, velit alias eius non illum beatae atque repellat ratione qui veritatis repudiandae adipisci maiores. At inventore necessitatibus deserunt exercitationem cumque earum omnis ipsum rem accusantium quis, quas quia, accusamus provident suscipit magni! Expedita sint ad dolore, commodi labore nihil velit earum ducimus nulla quae nostrum fugit aut, deserunt reprehenderit libero enim!</p>
      <form action="upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="fileToUpload" id="fileToUpload" onchange="previewImage()">
        <input type="submit" value="Upload" name="submit">
        

        </form> 
    </div>
  </div>
</section>

  <!-- End About Section -->

  <!-- Contact Section -->
  <section id="contact">
    <div class="contact container">
      <div>
        <h1 class="section-title">Contact <span>US</span></h1>
      </div>
      <div class="contact-items">
        <div class="contact-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/phone.png" /></div>
          <div class="contact-info">
            <h1>Phone</h1>
            <h2>+230 5123 4000</h2>
            <h2>+230 5432 1000</h2>
          </div>
        </div>
        <div class="contact-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/new-post.png" /></div>
          <div class="contact-info">
            <h1>Email</h1>
            <h2>info@gmail.com</h2>
            <h2>abcd@gmail.com</h2>
          </div>
        </div>
        <div class="contact-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/map-marker.png" /></div>
          <div class="contact-info">
            <h1>Address</h1>
            <h2>Mauritius</h2>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Contact Section -->

  <!-- Footer -->
  <section id="footer">
    <div class="footer container">
      <div class="brand">
        <h1><span>Smart </span> fogponic <span> Monitoring</span> System</h1>
      </div>
      <h2>Save water using Fogponics system</h2>
      <div class="social-icon">
        <div class="social-item">
          <a href="#"><img src="https://img.icons8.com/bubbles/100/000000/facebook-new.png" /></a>
        </div>
        <div class="social-item">
          <a href="#"><img src="https://img.icons8.com/bubbles/100/000000/instagram-new.png" /></a>
        </div>
        <div class="social-item">
          <a href="#"><img src="https://img.icons8.com/bubbles/100/000000/twitter.png" /></a>
        </div>
        <div class="social-item">
          <a href="#"><img src="https://img.icons8.com/bubbles/100/000000/behance.png" /></a>
        </div>
      </div>
      <p>Copyright © 2023 SFMS. All rights reserved</p>
    </div>
  </section>
  <!-- End Footer -->
  <script src="./app.js"></script>
</body>

</html>