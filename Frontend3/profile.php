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

    <div class="container" id="Welcome-cont">
        <div class="row" id="Welcome-row">
            <div class="col">
                <h1 id="profile-heading">Welcome back User Name!</h1>
            </div>
        </div>
        <div class="row" id="Welcome-profile-row">
            <div class="col" id="User-pic-button">
                <div class="row" id="user-img-row">
                    <div class="col" id="user-image-col"><img src="assets/img/512px-Circle-icons-profile.svg.png" style="width:256px;"></div>
                </div>
                <div class="row no-gutters" id="change-button-row" style="margin-top:10px;">
                    <div class="col col-auto col-m"><button class="btn btn-primary" type="button" id="profile-change-btn">Change Picture</button></div>
                </div>
            </div>
            <div class="col-xl-8" id="Notifications-row">
                <div class="row" id="Notifications-row">
                    <div class="col">
                        <p id="Notification-text">Your friend <strong>Username</strong> would like you to go to this<strong> Event.</strong></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container" id="Adventures-coming-cont">
        <div class="row" id="Adventures-row">
            <div class="col">
                <h1 id="Adventures-heading">Adventures coming up</h1>
            </div>
        </div>
        <div class="row" id="Adventures-display-row">
            <div class="col" id="Event-info-box">
                <div class="row">
                    <div class="col"><img src="assets/img/sample-thumbnail.png" id="Event-thumbnail"></div>
                </div>
                <div class="row">
                    <div class="col" style="height:34px;">
                        <h3 id="Event-Name">Name of Place/Event</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col" style="height:30px;">
                        <p id="Event-rating">100% Like this</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col offset-xl-0 align-self-center" style="height:26px;"><button class="btn btn-primary btn-center" type="button" id="Event-edit-button">Remove This</button><button class="btn btn-primary btn-center" type="button" id="Event-invite-button">Invite Friends</button></div>
                </div>
            </div>
        </div>
    </div>
    <div class="container" id="Adventures-past-cont">
        <div class="row" id="Adventures-row">
            <div class="col">
                <h1 id="Past-adventures-heading">Past Adventures</h1>
            </div>
        </div>
        <div class="row" id="Adventures-display-row">
            <div class="col" id="Event-info-box" style="margin-top:10px;margin-bottom:20px;">
                <div class="row">
                    <div class="col"><img src="assets/img/sample-thumbnail.png" id="Event-thumbnail"></div>
                </div>
                <div class="row">
                    <div class="col" style="height:34px;">
                        <h3 id="Event-Name">Name of Place/Event</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col" style="height:30px;">
                        <p id="Event-rating">100% Like this</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col offset-xl-0 align-self-center" style="height:26px;"><button class="btn btn-primary btn-center" type="button" id="Like-button">Like This</button><button class="btn btn-primary btn-center" type="button" id="Comment-button">Write a comment</button></div>
                </div>
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