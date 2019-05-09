<!-- Header -->
<?php require APPROOT . '/views/inc/header.php'; ?>

<?php if (isset($_GET['event_id'])  && $_GET['event_id'] > 0) : ?>


<div class="container">
    <h1><?php echo $data['eventName']; ?></h1>
    <div class="row">
        <div class="col-md-6" id="event-img">
            <img class="img-fluid" src="<?php echo URLROOT . 'img/' . $data['image_source'] ?>" alt="">
        </div>
        <div class="col-md-6" id="info-col">
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
            <button id="mapButton" class="btn btn-success">Hide Map</button>
            
            <?php if (isLoggedIn()) : ?>
            <form action="" method="post">
                <button type="submit" name="saveEvent" class="btn btn-primary" id="add-btn">Add to your adventures</button>
            </form>
            <?php endif ?>

            <?php if (isLoggedIn()) : ?>
            <form action="" method="post">
                <button type="submit" name="like" value="like" id="like-btn" class="btn btn-success" id="like-btn"><i style="font-size:24px" class=" fa fa-thumbs-up"> <?php echo $data['likes'] ?></i></button>
            </form>
            <?php if ($data['creatorid'] != 0) : ?>
            <form action="" method="post">
                <button type="submit" name="fake" value="fake" class="btn btn-danger" id="fake-btn">Mark as fake <?php echo $data['fakes']; ?></button>
            </form>
            <?php endif ?>
        </div>
        <?php endif; ?>

    </div>

    <!-- Map container -->
    <div id="map" style="width: 100%; height: 530px; margin-bottom: 10px;">
    </div>

    <div class="row" id="comment-row">
        <div class="col-md-12" id="comment-btn-col">
            <?php if (isLoggedIn()) : ?>
            <button data-toggle="modal" data-target="#commentModal" class="btn btn-success" id="comment-btn">Add a comment</button>
            <?php endif ?>


        </div>
        <?php foreach ($data['comments'] as $comment) : ?>
        <div class="col-md-12 card" id="comments">
            <p><strong>Written by: <?php echo $comment->username; ?></strong></p>
            <p><?php echo $comment->comment; ?></p>
        </div>
        <?php endforeach ?>
    </div>
    <!-- Comment Modal -->
    <div id="commentModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content" >
                <div class="modal-header">
                    <h4 class="modal-title">Add a comment</h4>
                </div>
                <div class="modal-body">
                    <form class="md-form" action="<?php echo URLROOT . 'pages/eventDetails?event_id=' . $_GET['event_id']; ?>" method="POST">
                        <textarea class="md-textarea form-control" name="newComment" id="form10" cols="20" rows="10"></textarea>
                        <button class="btn btn-success btn-block" id="comment-btn-modal">Submit</button>
                    </form>
                </div>
                <div class="modal-footer">
                </div>
            </div>

            <?php endif ?>
            <script src="<?php echo URLROOT; ?>/js/jsonHandler.js"></script>
            <!-- Footer -->
            <?php require APPROOT . '/views/inc/footer.php'; ?>
