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
    
    <section id="Main-event-page" style="margin-top:20px;"></section>
    <div class="container" id="main-event-cont">
        <div class="row" id="Event-heading-row">
            <div class="col" id="Event-heading-col">
                <h1 id="Event-heading">Name of Place/Event</h1>
            </div>
        </div>
        <div class="row" id="Event-row">
            <div class="col" id="Event-image-carousel">
                <div class="carousel slide" data-ride="carousel" id="carousel-1">
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active"><img class="w-100 d-block" src="assets/img/img_001.jpg" alt="Slide Image"></div>
                        <div class="carousel-item"><img class="w-100 d-block" src="assets/img/img_002.jpg" alt="Slide Image"></div>
                        <div class="carousel-item"><img class="w-100 d-block" src="assets/img/img_003.jpg" alt="Slide Image"></div>
                    </div>
                    <div><a class="carousel-control-prev" href="#carousel-1" role="button" data-slide="prev"><span class="carousel-control-prev-icon"></span><span class="sr-only">Previous</span></a><a class="carousel-control-next" href="#carousel-1" role="button"
                            data-slide="next"><span class="carousel-control-next-icon"></span><span class="sr-only">Next</span></a></div>
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-1" data-slide-to="1"></li>
                        <li data-target="#carousel-1" data-slide-to="2"></li>
                    </ol>
                </div>
            </div>
            <div class="col" id="Event-info-col">
                <div class="row">
                    <div class="col" id="Event-description">
                        <p><br>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum<br><br></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col" id="Event-ratings-col">
                        <p>100% Liked this</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col" id="Event-buttons-col"><button class="btn btn-primary" type="button" id="Event-Page-button">Share</button><button class="btn btn-primary" type="button" id="Event-Page-button">Go on Adventure</button><button class="btn btn-primary" type="button" id="Event-Page-button">Show map</button></div>
                </div>
            </div>
        </div>
    </div>
    <section id="Main-event-comments">
        <div class="container" id="Comments-container">
            <div class="row" id="Heading-row" style="margin-top:100px;">
                <div class="col">
                    <h1>What others have to say about this</h1>
                </div>
            </div>
            <div id="User-comment">
                <div class="row" style="margin-top:20px;">
                    <div class="col-xl-1 align-self-center" id="User-profile-thumbnail"><img src="assets/img/512px-Circle-icons-profile.svg.png" style="width:80px;"></div>
                    <div class="col-xl-3 align-self-center" id="User-name">
                        <h3>Username</h3>
                    </div>
                    <div class="col-xl-3 align-self-center">
                        <h3>Rating</h3>
                    </div>
                </div>
                <div class="row" id="User-comment">
                    <div class="col-xl-6" id="Comment">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum<br><br></p>
                    </div>
                </div>
            </div>
            <div id="User-comment">
                <div class="row" style="margin-top:20px;">
                    <div class="col-xl-1 align-self-center" id="User-profile-thumbnail"><img src="assets/img/512px-Circle-icons-profile.svg.png" style="width:80px;"></div>
                    <div class="col-xl-3 align-self-center" id="User-name">
                        <h3>Username</h3>
                    </div>
                    <div class="col-xl-3 align-self-center">
                        <h3>Rating</h3>
                    </div>
                </div>
                <div class="row" id="User-comment">
                    <div class="col-xl-6" id="Comment">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum<br><br></p>
                    </div>
                </div>
            </div>
            <div id="User-comment">
                <div class="row" style="margin-top:20px;">
                    <div class="col-xl-1 align-self-center" id="User-profile-thumbnail"><img src="assets/img/512px-Circle-icons-profile.svg.png" style="width:80px;"></div>
                    <div class="col-xl-3 align-self-center" id="User-name">
                        <h3>Username</h3>
                    </div>
                    <div class="col-xl-3 align-self-center">
                        <h3>Rating</h3>
                    </div>
                </div>
                <div class="row" id="User-comment">
                    <div class="col-xl-6" id="Comment">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum<br><br></p>
                    </div>
                </div>
            </div>
            <div id="User-comment">
                <div class="row" style="margin-top:20px;">
                    <div class="col-xl-1 align-self-center" id="User-profile-thumbnail"><img src="assets/img/512px-Circle-icons-profile.svg.png" style="width:80px;"></div>
                    <div class="col-xl-3 align-self-center" id="User-name">
                        <h3>Username</h3>
                    </div>
                    <div class="col-xl-3 align-self-center">
                        <h3>Rating</h3>
                    </div>
                </div>
                <div class="row" id="User-comment">
                    <div class="col-xl-6" id="Comment">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum<br><br></p>
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