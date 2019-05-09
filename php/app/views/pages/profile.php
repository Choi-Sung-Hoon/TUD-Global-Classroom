<?php require APPROOT . '/views/inc/header.php'; ?>

<div class="container" id="Welcome-cont">
	<div class="row" id="Welcome-row">
		<div class="col">
			<h1 id="profile-heading">Welcome back <?php echo $_SESSION['user_name']; ?></h1>
		</div>
	</div>
	<div class="row" id="Welcome-profile-row">
		<div class="col" id="User-pic-button">
			<div class="row" id="user-img-row">
				<div class="col" id="user-image-col"><img src="<?php echo URLROOT . 'img/512px-Circle-icons-profile.svg.png' ?>" style="width:256px;"></div>
			</div>
			<div class="row no-gutters" id="change-button-row" style="margin-top:10px;">
			</div>
		</div>
		<div class="col-xl-8" id="Notifications-row">
			<div class="row" id="Notifications-row">
				<div class="col">
					<p id="Notification-text">Email: <?php echo $_SESSION['user_email'] ?></p>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="container" id="Adventures-coming-cont">
	<div class="row" id="Adventures-row">
		<div class="col">
			<h1 id="Adventures-heading">My Saved Adventures</h1>
		</div>
	</div>
	<div class="row" id="Adventures-display-row">
		
			<?php foreach ($data['saved_events'] as $d) : ?>
				<div class="col-lg-3 col-md-4 col-sm-6 mb-4" id="display">
					<div id="<?php echo $d->id; ?>" class="card 7-100">
						<a href="<?php echo URLROOT . 'pages/eventDetails?event_id=' . $d->id ?>">
							<img class="card-img-top" src="<?php echo URLROOT . 'img/' . $d->image; ?>" width="400" height="150" alt="">
						</a>
						<div class="card-body">
							<h4 class="card-title">
								<a href="<?php echo URLROOT . 'pages/eventDetails?event_id=' . $d->id ?>"><?php echo $d->name ?></a>
							</h4>
							<p class="card-text text-truncate">
								<?php echo $d->location; ?><br>
							</p>
							<div class="row">
								<form action="" method="post">
									<span name="removeEvent" value="<?php echo $d->saveid; ?>"></span>
									<button type="submit" class="btn btn-block btn-primary btn-center" type="button" id="Event-edit-button">Remove This</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			<?php endforeach ?>
	</div>
</div>
<div class="container" id="Adventures-past-cont">
	<div class="row" id="Adventures-row">
		<div class="col">
			<h1 id="Past-adventures-heading">Adventures I created <a style="align: right" href="<?php echo URLROOT . 'users/createEvent' ?>"> Create new </a>
</h1>
		</div>
	</div>
	<div class="row" id="Adventures-display-row">
	<?php foreach ($data['created_events'] as $d) : ?>
				<div class="col-lg-3 col-md-4 col-sm-6 mb-4">
					<div id="<?php echo $d->id; ?>" class="card 7-100">
						<a href="<?php echo URLROOT . 'pages/eventDetails?event_id=' . $d->id ?>">
							<img class="card-img-top" src="<?php echo URLROOT . 'img/' . $d->image; ?>" width="400" height="150" alt="">
						</a>
						<div class="card-body">
							<h4 class="card-title">
								<a href="<?php echo URLROOT . 'pages/eventDetails?event_id=' . $d->id ?>"><?php echo $d->name ?></a>
							</h4>
							<p class="card-text text-truncate">
								<?php echo $d->location; ?><br>
							</p>

						</div>
					</div>
				</div>
			<?php endforeach ?>
	</div>
</div>
<?php require APPROOT . '/views/inc/footer.php'; ?>