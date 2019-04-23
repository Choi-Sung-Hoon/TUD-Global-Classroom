<!-- Header -->
<?php require APPROOT . '/views/inc/header.php';?>

<!-- Body -->
<!-- Image container -->
<div class="img-container">
    <img class="image" src="<?php echo URLROOT . '/img/index-img.png';?>" alt="">
  </div>

  <!-- Adventure button -->
  <div class="adventure-container">
    <button class="adventure-button">START NEW ADVENTURE</button>
  </div>

  <!-- The Modal -->
  <div name="adventure-modal" class="adventure-modal">

    
      <!-- Modal content -->
      <div class="modal-content">
        <!-- Buttons for activities -->
        <div class="row modal-row">
          <a class="col-md-6 modalbox indoor" href="<?php echo URLROOT?>/pages/events">
            <h3>Indoor</h3>
            <p>Wanna relax? Meet a few locals at a popular pub?</p>
            <p>Or maybe try a local dance class?</p>
            <p>If so, let's stay indoors!</p>           
          </a>
          <a class="col-md-6 modalbox outdoor" href="<?php echo URLROOT?>/pages/events">
            <h3>Outdoor</h3>
            <p>Feeling spontaneous? Wanna get some fresh air?</p>
            <p>Lets go to beach, climb a mountain,</p>
            <p> or maybe watch the local Gaelic game?</p>
          </a>
        </div>

      </div>
      <!-- <div class="modal-background"> </div> -->
  </div>

  <!-- Containers -->
  <div class="row content-box">
    <div class="col-md-1"></div>
    <div class="col-md-4 text-column">
      <div style="margin-left:5%">

        <div class="row">
          <div class="col-sm">
            <!-- Attribution: https://www.freeiconspng.com/images/profile-icon-png -->
            <img class="head-icon" src="<?php echo URLROOT?> /img/profile-icon.png" alt="">
          </div>
          <div class="col-sm">
            <h2 class="headerText">More Connected,</h2>
            <h2 id="lower" class="headerText">More Explored</h2>
          </div>
        </div>
          <!-- Text field, to be filled later -->
        <div> 
          <p class="text-box">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Aliquam scelerisque lacus ut posuere volutpat. Cras nec sapien rhoncus,
            bibendum lectus mollis, vulputate justo. Praesent sem elit, commodo sit
            amet nisl nec, tristique scelerisque elit. Mauris ac massa massa. Nulla
            luctus ante sed est tristique, vel maximus libero sollicitudin. Ut euismod
            nisl ut velit mollis ornare. Duis ullamcorper quis nisi non venenatis.
            Quisque mauris nisi, ullamcorper id imperdiet eu, condimentum sed purus.
            Curabitur molestie ac risus et auctor. Pellentesque quis dolor imperdiet,
            mollis dolor a, feugiat urna. Pellentesque fringilla hendrerit nulla nec dignissim.
            Sed mattis consequat purus, non tincidunt orci elementum quis.
            Proin dignissim risus non mi fermentum, id semper nibh euismod. Praesent mauris nisl,
            viverra eget mollis eu, rhoncus sed ipsum. Donec ac malesuada velit.
            In sodales ut lorem malesuada fermentum. Vestibulum imperdiet ex a pretium suscipit.
            Ut massa turpis, pulvinar a sem feugiat, consectetur aliquam enim.
            Donec dignissim lectus massa, at aliquet urna porta ac.
            Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
            Morbi convallis nec velit vel viverra. Aenean et diam at nibh ultricies dignissim.
            Maecenas viverra maximus eros quis suscipit. Vestibulum malesuada nisl libero, eget mattis orci ornare eu.
          </p>
        </div>
      </div>
    </div>
    <!-- Map container -->
    <div class="col-md-4 map-column">
      <p style="font-weight: bold; font-size:  60px">Hot spots</p>
      <img class="hot-img" src="<?php echo URLROOT?>/img/hot spots.png" alt="">
      <div class="map-outer">
        <div class="gmap-canvas">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2382.348233763415!2d-6.269715383884462!3d53.33702227997708!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNTPCsDIwJzEzLjMiTiA2wrAxNicwMy4xIlc!5e0!3m2!1sfi!2sie!4v1554281351013!5m2!1sfi!2sie"
            width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
      </div>
    </div>
    <div class="col-md-1"></div>
  </div>

<!-- Footer -->
<?php require APPROOT . '/views/inc/footer.php'; ?>
