<?php require APPROOT . '/views/inc/header.php'; ?>
<br>
<div class="container">
    <h1>Create new Event</h1>
	<div class="container card m-3">
		<form enctype="multipart/form-data" action="<?php echo URLROOT; ?>users/createEvent" method="post">
			<div class="form-group">
				<h5>Name of the place / event</h5>
				<input type="text" class="form-control <?php echo (!empty($data['name_error'])) ? 'is-invalid' : '' ?>" name="name" placeholder="Event name" required="required" value="">
				<span class="invalid-feedback"><?php echo $data['name_error']; ?></span>
			</div>
			<div class="form-group">
				<h5>Organizer</h5>
				<input type="text" class="form-control <?php echo (!empty($data['organizer_error'])) ? 'is-invalid' : '' ?>" name="organizer" placeholder="Organizer" required="required">
				<span class="invalid-feedback"><?php echo $data['organizer_error']; ?></span>
			</div>
			<div class="form-group">
				<h5>Location</h5>
				<input type="text" class="form-control <?php echo (!empty($data['location_error'])) ? 'is-invalid' : '' ?>" name="location" placeholder="location" required="required">
				<span class="invalid-feedback"><?php echo $data['location_error']; ?></span>
			</div>
			<div class="form-group">
				<h5>Website</h5>
				<input type="text" pattern="[a-z0-9.-]+\.[a-z]{2,}" class="form-control <?php echo (!empty($data['website_error'])) ? 'is-invalid' : '' ?>" name="website" placeholder="website" required="required">
				<span class="invalid-feedback"><?php echo $data['website_error']; ?></span>
            </div>
            <div class="form-group">
				<h5>Orientation</h5>
                <select class="form-control <?php echo (!empty($data['orientation_error'])) ? 'is-invalid' : '' ?>" name="orientation" placeholder="orientation" required="required">
                    <option value="Indoor">Indoor</option>
                    <option value="Outdoor">Outdoor</option>
                </select>
				<span class="invalid-feedback"><?php echo $data['orientation_error']; ?></span>
            </div>
            <div class="form-group">
				<h5>Minimum Price</h5>
				<input type="text" class="form-control  <?php echo (!empty($data['price_error'])) ? 'is-invalid' : '' ?>" name="price" placeholder="price" required="required">
				<span class="invalid-feedback"><?php echo $data['price_error']; ?></span>
            </div>
            <div class="form-group">
				<h5>Category</h5>
                <select class="form-control <?php echo (!empty($data['category_error'])) ? 'is-invalid' : '' ?>" name="category" placeholder="category" required="required">
                    <option value="Culture">Culture</option>
                    <option value="Nature">Nature</option>
                    <option value="Music">Music</option>
                    <option value="Sport">Sport</option>
                </select>
				<span class="invalid-feedback"><?php echo $data['category_error']; ?></span>
            </div>
            <div class="form-group">
				<h5>Date</h5>
				<input type="date" class="form-control <?php echo (!empty($data['date_error'])) ? 'is-invalid' : '' ?>" name="date">
				<span class="invalid-feedback"><?php echo $data['date_error']; ?></span>
            </div>
            <div class="form-group">
				<h5>Image</h5>
				<input type="file" class="form-control <?php echo (!empty($data['image_error'])) ? 'is-invalid' : '' ?>" name="fileToUpload" id="fileToUpload" >
				<span class="invalid-feedback"><?php echo $data['image_error']; ?></span>
            </div>
			<div class="form-group">
				<input type="submit" class="btn btn-primary btn-block btn-lg" value="Submit">
			</div>
		</form>
	</div>
</div>

<?php require APPROOT . '/views/inc/footer.php'; ?>