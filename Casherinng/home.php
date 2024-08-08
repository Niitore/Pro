<?php
session_start(); // Start the session

if (isset($_SESSION["username"])) {
    $uname = $_SESSION["username"];
} else {
    header("Location: index.php"); 
    exit; 
}
?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbinfom";
$conn = new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Homepage</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/album/">

    <!-- Bootstrap core CSS -->
    <link href="bootstrap.min.css" rel="stylesheet">
    <link href="popup.css" rel="stylesheet">
    <style>
     .floating-order-btn {
    position: fixed;
    bottom: 20px;
    right: 20px;
    background-color: #007bff;
    color: white;
    border: none;
    border-radius: 50%;
    width: 60px;
    height: 60px;
    display: flex;
    justify-content: center;
    align-items: center;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
    cursor: pointer;
    z-index: 1000;
}

.floating-order-btn button {
    background-color: #007bff;
    color: white;
    border: none;
    border-radius: 50%;
    width: 100%;
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 16px;
    cursor: pointer;
}

.floating-order-btn button:hover {
    background-color: #0056b3;
    
}

    </style>
  </head>
  <body>
    
<header>
  <div class="collapse bg-dark" id="navbarHeader">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-md-7 py-4">
          <h4 class="text-white">About</h4>
          <p class="text-muted">Welcome to FoodCourt
             your one-stop destination for ordering delicious meals from around the world.
             Our platform offers a diverse menu featuring authentic recipes from various cuisines, 
             making it easy for you to explore new flavors and enjoy your favorite dishes. Whether you're craving a classic comfort food or something exotic,
              FoodCourt has something for everyone. Order now and savor the difference!
          </div>
        <div class="col-sm-4 offset-md-1 py-4">
          <h4 class="text-white">Menu</h4>
          <p>
       <nav>
                <a href="home.php">Home</a><br><br>
                <a href="menu.php">Profile</a><br><br>
                <a href="logout.php">Logout</a><br><br>
             </nav>
       </p>
        </div>
      </div>
    </div>
  </div>
  <div class="navbar navbar-dark bg-dark shadow-sm">
    <div class="container">
      <a href="#" class="navbar-brand d-flex align-items-center">
       <strong>FoodCourt</strong>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </div>
</header>



<main>
<form action="process_order.php" method="post">

<section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">Todays Menu</h1>
        <p>"Savor the moment, taste the difference."</p>
      </div>
    </div>
  </section>

  

  <div class="album py-5 bg-light">
    <div class="container">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <div class="col">
          <div class="card shadow-sm">
            <img src="Images/recipe/adobo.jpg" alt="Chicken Adobo"/>
            <div class="card-body">
              <p class="card-text">Chicken Adobo</p>
              <div class="d-flex justify-content-between align-items-center">
                <small class="text-muted">Php 45.00</small>
              <div class="d-flex justify-content-between align-items-center">
              <input type="checkbox" name="food[]" value="adobo">
              <select name="quantity[adobo]">
              <option value="0">0</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
              </select>   
            </div>
              </div>
            </div>
          </div>
        </div>

        

<div class="col">
    <div class="card shadow-sm">
        <img src="Images/recipe/albondigas-al-chipotle-cut.jpg"/>
        <div class="card-body">
            <p class="card-text">Albondigas</p>
            <div class="d-flex justify-content-between align-items-center">
                <small class="text-muted">Php 50.00</small>
                <div class="d-flex justify-content-between align-items-center">
                <input type="checkbox" name="food[]" value="albondigas">
              <select name="quantity[albondigas]">
                  <option value="0">0</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
              </select>  
             </div>
            </div>
        </div>
    </div>
</div>
        
<div class="col">
    <div class="card shadow-sm">
        <img src="Images/recipe/Espaguetis_carbonara_cut.jpg"/>
        <div class="card-body">
            <p class="card-text">Carbonara</p>
            <div class="d-flex justify-content-between align-items-center">
                <small class="text-muted">Php 60.00</small>
                <div class="d-flex justify-content-between align-items-center">
                <input type="checkbox" name="food[]" value="carbonara">
              <select name="quantity[carbonara]">
              <option value="0">0</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
              </select>   
            </div>
            </div>
        </div>
    </div>
</div>

        <div class="col">
    <div class="card shadow-sm">
        <img src="Images/recipe/_Hyderabadi_Dum_Biryani_cut.jpg"/>
        <div class="card-body">
            <p class="card-text">Biryani</p>
            <div class="d-flex justify-content-between align-items-center">
                <small class="text-muted">Php 20.00</small>
                <div class="d-flex justify-content-between align-items-center">
                <input type="checkbox" name="food[]" value="biryani">
              <select name="quantity[biryani]">
              <option value="0">0</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
              </select>   
            </div>
            </div>
        </div>
    </div>
</div>


<div class="col">
          <div class="card shadow-sm">
          <img src="Images\recipe/Pork-Bicol-Express-Recipe.jpg"/>
            <div class="card-body">
              <p class="card-text">Bicol Express</p>
              <div class="d-flex justify-content-between align-items-center">
                <small class="text-muted">Php. 60.00</small>
                <div class="d-flex justify-content-between align-items-center">
                <input type="checkbox" name="food[]" value="bicol">
              <select name="quantity[bicol]">
              <option value="0">0</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
              </select>   </div>
              </div>
            </div>
          </div>
        </div>

<div class="col">
    <div class="card shadow-sm">
        <img src="Images/recipe/calamares-recipe-1cut.jpg"/>
        <div class="card-body">
            <p class="card-text">Calamares</p>
            <div class="d-flex justify-content-between align-items-center">
                <small class="text-muted">Php 80.00</small>
                <div class="d-flex justify-content-between align-items-center">
                <input type="checkbox" name="food[]" value="calamares">
              <select name="quantity[calamares]">
                  <option value="0">0</option>    
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
              </select>   
            </div>
            </div>
        </div>
    </div>
</div>

<div class="col">
    <div class="card shadow-sm">
        <img src="Images/recipe/samosacut.jpg"/>
        <div class="card-body">
            <p class="card-text">Samosa</p>
            <div class="d-flex justify-content-between align-items-center">
                <small class="text-muted">Php 30.00</small>
                <div class="d-flex justify-content-between align-items-center">
                <input type="checkbox" name="food[]" value="samosa">
              <select name="quantity[samosa]">
              <option value="0">0</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
              </select>  
             </div>
            </div>
        </div>
    </div>
</div>

<div class="col">
    <div class="card shadow-sm">
        <img src="Images/recipe/Mac&cheesecut.jpg"/>
        <div class="card-body">
            <p class="card-text">Macaroni and Cheese</p>
            <div class="d-flex justify-content-between align-items-center">
                <small class="text-muted">Php 60.00</small>
                <div class="d-flex justify-content-between align-items-center">
                <input type="checkbox" name="food[]" value="mac">
              <select name="quantity[mac]">
              <option value="0">0</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
              </select>        
              </div>
            </div>
        </div>
    </div>
</div>


<div class="col">
    <div class="card shadow-sm">
        <img src="Images/recipe/palabokcut.jpg"/>
        <div class="card-body">
            <p class="card-text">Pancit Palabok</p>
            <div class="d-flex justify-content-between align-items-center">
                <small class="text-muted">Php 80.00</small>
                <div class="d-flex justify-content-between align-items-center">
                <input type="checkbox" name="food[]" value="pancit">
              <select name="quantity[pancit]">
                  <option value="0">0</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
              </select>  
             </div>
            </div>
        </div>
    </div>
</div>



<!-- Floating Order Button -->
<div class="floating-order-btn">
    <button type="submit">Order</button>
</div>

</main>

<footer class="text-muted py-5">
  <div class="container">
    <p class="float-end mb-1">
      <a href="#">Back to top</a>
    </p>
  </div>
</footer>

<script src="bootstrap.bundle.min.js"></script>
<script>
    function checkQuantity(quantityId, checkboxId) {
        const quantityInput = document.getElementById(quantityId);
        const checkbox = document.getElementById(checkboxId);
        if (quantityInput.value >= 1) {
            checkbox.checked = true;
        } else {
            checkbox.checked = false;
        }
    }

    document.querySelectorAll('select[name^="quantity"]').forEach((select) => {
        select.addEventListener('change', function() {
            const quantity = this.value;
            const checkbox = this.closest('.d-flex').querySelector('input[type="checkbox"]');
            checkbox.checked = quantity > 0;
        });
    });
</script>

</form>
</body>
</html>