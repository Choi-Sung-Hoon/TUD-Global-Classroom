<!-- Header -->
<?php require APPROOT . '/views/inc/header.php'; ?>

<?php if (isset($_GET['event_id'])  && $_GET['event_id'] > 0) : ?>


    <div class="container">
        <h1><?php echo $data['eventName']; ?></h1>
        <div class="row">
            <div class="col-md-6">
                <img class="img-fluid" src="<?php echo URLROOT . 'img/' . $data['image_source'] ?>" alt="">
                
            </div>
            <div class="col-md-6">
                <ul>
                    <li>
                        <h3>Organizer: <?php echo $data['organizer'] ?></h3>
                    </li>

                    <li>
                        <h3>Location: <i id='location'><?php echo $data['location'] ?></i></h3>
                    </li>

                    <?php if ($data['date'] != 0000 - 00 - 00) : ?>
                        <li>
                            <h3>Date: <?php echo $data['date']; ?></h3>
                        </li>
                    <?php else : ?>
                        <li>
                            <h3>Date: Not specified</h3>
                        </li>
                    <?php endif; ?>
                    <li>
                        <h3>Contact: <a href="http://<?php echo $data['contact'] ?>"> <?php echo $data['contact'] ?></a> </h3>
                    </li>

                    <li>
                        <h3>Price: <?php echo $data['price'] ?> €</h3>
                    </li>
                </ul>
                <br>
                <button id="mapButton" class="btn btn-success btn-lg btn-block">Hide Map</button>
                <button class="btn btn-primary btn-lg btn-block">Add to your adventures</button>
                <?php if (isLoggedIn()) : ?>
                    <button data-toggle="modal" data-target="#commentModal" class="btn btn-success btn-lg btn-block">Add a comment</button>
                <?php endif ?>
            </div>
        </div>
        <br>


        <br>
        <div class="row">
            <?php foreach ($data['comments'] as $comment) : ?>
                <div class=" col-md-6 card">
                    <p><strong>Written by: <?php echo $comment->username; ?></strong></p>
                    <p><?php echo $comment->comment; ?></p>
                </div>
            <?php endforeach ?>
        </div>
        <br>
        <!-- Map container -->
        <div id="map" style="width: 100%; height: 530px;"></div>
        <br>
        <!-- Comment Modal -->
        <div id="commentModal" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Add a comment</h4>
                    </div>
                    <div class="modal-body">
                        <form class="md-form" action="<?php echo URLROOT . 'pages/eventDetails?event_id=' . $_GET['event_id']; ?>" method="POST">
                            <textarea class="md-textarea form-control" name="newComment" id="form10" cols="20" rows="10"></textarea>
                            <button class="btn btn-success btn-block">Submit</button>
                        </form>
                    </div>
                    <div class="modal-footer">
                    </div>
                </div>

            <?php endif ?>
            <script src="<?php echo URLROOT; ?>/js/jsonHandler.js"></script>
            <!-- Footer -->
            <?php require APPROOT . '/views/inc/footer.php'; ?>