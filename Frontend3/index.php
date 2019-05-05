<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Global Classroom</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Dosis">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <?php 
    include 'header.php';
    ?>
    
    <section class="flex-column" id="Section-main">
        <div id="Main-Section-text">
            <div id="Home-heading">
                <h1 class="text-center" id="main-section-text" style="font-size:72px; color: white; margin-right: 600px;">Not all those who</h1>
                <h1 class="text-center" id="main-section-text2" style="font-size:72px; color: white; margin-right: 300px;">wander are lost</h1>
            </div>
        </div>
    </section>
    <div class="container" id="btn-contain">
        <div class="row">
            <div class="col col-auto m-auto"><a href="events-top.php"><button class="btn btn-primary d-block" type="button" data-bs-hover-animate="pulse" id="New-Adventure-btn">Start A New Adventure</button> </a></div>
        </div>
    </div>
    <div id="Main-section-bottom">
        <div class="container" id="Main-section-cont">
            <div class="row">
                <div class="col" id="Info-column">
                    <h1>I still dont quite know what to keep in the home page so its sorta half assed</h1>
                    <p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled
                        it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing
                        Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<br><br></p>
                </div>
                <div class="col" id="map-col"><iframe allowfullscreen="" frameborder="0" width="100%" height="400" src="https://www.google.com/maps/embed/v1/place?q=Paris%2C+France&amp;zoom=11"></iframe></div>
            </div>
        </div>
    </div>
    
    <?php 
    include 'footer.php';
    ?>
    
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-animation.js"></script>
</body>

</html>