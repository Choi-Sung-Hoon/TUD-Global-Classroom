<!-- Header -->
<?php require APPROOT . '/views/inc/header.php';?>

    <div class="container">
        <h1><?php echo $data['eventName']; ?></h1>
        <img src="<?php echo URLROOT . 'img/' . $data['image_source'] ?>" alt="">
    </div>
    

<!-- Footer -->
<?php require APPROOT . '/views/inc/footer.php'; ?>