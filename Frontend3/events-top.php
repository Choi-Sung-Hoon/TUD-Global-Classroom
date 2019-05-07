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
    
    <div id="top-events-main-section">
        <div class="row d-flex align-items-center" id="search-row">
            <div class="col" id="empty-col"></div>
            <div class="col-xl-6">
                <form id="top-events-search">
                    <div class="input-group">
                        <div class="input-group-prepend"></div><input class="form-control" type="text" placeholder="I am looking for..">
                        <div class="input-group-append"><button class="btn btn-primary" type="button" id="search-button">Search </button></div>
                    </div>
                </form>
            </div>
            <div class="col" id="empty-col"></div>
        </div>
    </div>
    <section id="Top-events-section">
        <div class="container" id="top-events-cont" style="margin-top:20px;">
            <div class="row" id="Heading-row">
                <div class="col-9" id="Category">
                    <h1>Our Top Picks for Category</h1>
                </div>
                <div class="col align-self-end" id="Browse-more">
                    <a href="events-main.php"><h6 class="text-center">Browse more</h6> </a>
                </div>
            </div>
            <div class="row" id="Event-row">
                <div class="col" id="Event-info-box">
                    <div class="row">
                        <div class="col"><img src="assets/img/sample-thumbnail.png" id="event-thumbnail"></div>
                    </div>
                    <div class="row">
                        <div class="col" style="height:34px;">
                            <a href="events-detail.php"> <h3 id="Event-heading">Name of Place/Event</h3> </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col" style="height:22px;">
                            <p id="Event-rating">100% Like this</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col" id="Event-location" style="height:26px;">
                            <p style="font-size:18px;">Loaction</p>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    
    <?php 
    include 'footer.php';
    ?>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-animation.js"></script>
</body>

</html>