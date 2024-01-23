<?php
include('css.php');
?>
<div class = "card-wrapper">
  <div class = "card">
    <!-- card left -->
    <div class = "product-imgs">
      <div class = "img-display">
        <div class = "img-showcase">
          <img src = "image/ADV2.jpg" alt = "shoe image">
          <img src = "image/ADV3.jpg" alt = "shoe image">
          <img src = "image/ADV4.jpg" alt = "shoe image">
          <img src = "image/ADV3.jpg" alt = "shoe image">
        </div>
      </div>

    </div>
    <!-- card right -->
    <div class = "product-content">
      <h2 class = "product-title">ADV 2021</h2>
      <a href = "#" class = "product-link">visit nike store</a>
      <div class = "product-rating">
        <i class = "fas fa-star"></i>
        <i class = "fas fa-star"></i>
        <i class = "fas fa-star"></i>
        <i class = "fas fa-star"></i>
        <i class = "fas fa-star-half-alt"></i>
        <span>4.7(21)</span>
      </div>

      <div class = "product-price">
        <p class = "last-price">Old Price: <span>$5200.00</span></p>
        <p class = "new-price">New Price: <span>$4800.00 (5%)</span></p>
      </div>

      <div class = "product-detail">
        <h2>Payment</h2>
        <p>First_Name : <input type="text" value="" id="b"></p>
        <p>Last_Name  : <input type="text" value="" id="b"></p>
        <p>Email      : <input type="text" value="" id="b"></p>
        <p>Phone_Number: <input type="text" value="" id="b"></p>
      </div>

      <div class = "purchase-info">
        <button type = "submit" class = "btn">
          <a href="index.php"   style="text-decoration: none; color: white;"> Pay With ABA</a><i class = "fas fa-shopping-cart"></i>
        </button>
        <button type = "button" class = "btn"><a href="http://localhost:8080/ProductDetail/index1.php"  style="text-decoration: none; color: white;">Exit</a></button>
      </div>
    </div>
  </div>
</div>
<?php
include('javascript.php');
?>

