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

  <!-- Containers -->
  <div class="event-container">
    <div class="row event-box">
    <?php foreach($data['events'] as $event) : ?>
    
    <a href="<?php echo URLROOT . 'pages/eventDetails?event_id='.$event->id ?>" id="<?php echo $event->id; ?>" class='event-item col-md-3'> 
      <img class='category-image' src='<?php echo URLROOT . 'img/'.$event->image;?>'>
      <h4><?php echo $event->name ?></h4>
      <p><?php echo $event->location; ?></p>
    </a>
    <?php endforeach ?>
    </div>
  </div>

<!-- Footer -->
<?php require APPROOT . '/views/inc/footer.php'; ?>