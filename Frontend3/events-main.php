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

<body style="font-family:Dosis, sans-serif;">
    
    <?php 
    include 'header.php';
    ?>
    
    <section id="Events-section">
        <div class="container" id="Events-cont">
            <div id="Events-heading-cont">
                <div class="row">
                    <div class="col-3" id="emoty-col"></div>
                    <div class="col" id="heading-col">
                        <h1>Lets see what else we got</h1>
                    </div>
                </div>
            </div>
            <div id="Main-events-cont">
                <div class="row">
                    <div class="col-3" id="Filter-col">
                        <div class="filter">
                            <form>
                                <input placeholder="Serach for more"><br>
                                <select>
                                    <option value="">Filter 1</option>
                                </select>
                                <select>
                                    <option value="">Filter 2</option>
                                </select>
                                <select>
                                    <option value="">Filter 3</option>
                                </select>

                            </form>
                        </div><button class="btn btn-primary" type="button" id="Apply-button">Apply Filters</button>
                    </div>
                    <div class="col" id="events-display-col">
                        <section id="Event-listing">
                            <div class="row justify-content-start">
                                <div class="col"><img src="assets/img/sample-thumbnail.png" id="Event-thumbnail"></div>
                                <div class="col" id="Event-info-col">
                                    <div class="row">
                                        <div class="col">
                                            <h3 id="Event-heading">Name of Event/Place</h3>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <p id="Event-description">Short Description with small deatils about the event or location, like where it is and what its about</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <p class="text-monospace" id="Event-rating">100% Like this</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col align-self-center" id="Details-col"><button class="btn btn-primary" type="button" id="Details-button">More Details</button></div>
                            </div>
                        </section>
                        <section id="Event-listing">
                            <div class="row justify-content-start">
                                <div class="col"><img src="assets/img/sample-thumbnail.png" id="Thumbnail-img"></div>
                                <div class="col" id="Event-info-col">
                                    <div class="row">
                                        <div class="col">
                                            <h3 id="Event-heading">Name of Event/Place</h3>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <p id="Event-description">Short Description with small deatils about the event or location, like where it is and what its about</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <p class="text-monospace" id="Event-rating">100% Like this</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col align-self-center" id="Details-col"><button class="btn btn-primary" type="button" id="Details-button">More Details</button></div>
                            </div>
                        </section>
                        <section id="Event-listing">
                            <div class="row justify-content-start">
                                <div class="col"><img src="assets/img/sample-thumbnail.png" id="Thumbnail-img"></div>
                                <div class="col" id="Event-info-col">
                                    <div class="row">
                                        <div class="col">
                                            <h3 id="Event-heading">Name of Event/Place</h3>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <p id="Event-description">Short Description with small deatils about the event or location, like where it is and what its about</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <p class="text-monospace" id="Event-rating">100% Like this</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col align-self-center" id="Details-col"><button class="btn btn-primary" type="button" id="Details-button">More Details</button></div>
                            </div>
                        </section>
                        <section id="Event-listing">
                            <div class="row justify-content-start">
                                <div class="col"><img src="assets/img/sample-thumbnail.png" id="Thumbnail-img"></div>
                                <div class="col" id="Event-info-col">
                                    <div class="row">
                                        <div class="col">
                                            <h3 id="Event-heading">Name of Event/Place</h3>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <p id="Event-description">Short Description with small deatils about the event or location, like where it is and what its about</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <p class="text-monospace" id="Event-rating">100% Like this</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col align-self-center" id="Details-col"><button class="btn btn-primary" type="button" id="Details-button">More Details</button></div>
                            </div>
                        </section>
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
