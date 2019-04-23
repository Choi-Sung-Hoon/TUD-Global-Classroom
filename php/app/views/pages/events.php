<!-- Header -->
<?php require APPROOT . '/views/inc/header.php';?>

<!-- Body -->

  <!-- Image container -->
  <div class="img-container">
    <img class="image" src="<?php echo URLROOT . '/img/giant.png';?>" alt="">
  </div>

  <!-- Search bar -->
  <div class="search-container">
      <button name="search-button" id="search-button" type="button">Search</button>
      <input id="search-bar" type="text" placeholder="Search.." name="search">
  </div>

  

  <div class="button-row">
            <button class="btn btn-success category-button">Family</button>
        <button class="btn btn-success category-button">Seasonal</button>
        <button class="btn btn-success category-button">Theatre</button>
        <button class="btn btn-success category-button">Educational</button>


  </div>
  <!-- Containers -->
  <div class="event-container">
    
    <!-- To be populated dynamically -->
  </div>

<!-- Footer -->
<?php require APPROOT . '/views/inc/footer.php'; ?>