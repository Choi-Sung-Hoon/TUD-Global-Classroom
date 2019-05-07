<!-- Header -->
<?php require APPROOT . '/views/inc/header.php'; ?>
<!-- Body -->
<!-- Image container -->
<header id="main_container" class="bg-primary text-white">
    <div class="container text-center">
        <p class="lead">
            <h1>Adventure in Ireland</h1>
            <br>
            <h3>Not all those who wander are lost</h2>
                <h4>- J.R.R. Tolkien
            </h3>
        </p>
    </div>
    <!-- Start adventure-->
    <div class="container text-center">
        <button data-toggle="modal" data-target="#adventure-modal" id="hoverButton">Start new adventure</button>
    </div>
</header>
<div id="adventure-modal" class="modal fade" role="dialog">

    <!-- Modal content -->
    <div class="modal-content modal-dialog">
        <!-- Buttons for activities -->
        <div class="row modal-row">
            <a href="<?php echo URLROOT ?>pages/events?orientation=indoor" class="col-md-6 modalbox indoor">
                <h3>Indoor</h3>
                <p>Wanna relax? Meet a few locals at a popular pub?</p>
                <p>Or maybe try a local dance class?</p>
                <p>If so, let's stay indoors!</p>
            </a>
            <a href="<?php echo URLROOT ?>pages/events?orientation=outdoor" class="col-md-6 modalbox outdoor">
                <h3>Outdoor</h3>
                <p>Feeling spontaneous? Wanna get some fresh air?</p>
                <p>Lets go to beach, climb a mountain,</p>
                <p> or maybe watch the local Gaelic game?</p>
            </a>
        </div>

    </div>
</div>

</div>
</div>
<!-- Footer -->
<?php require APPROOT . '/views/inc/footer.php'; ?>