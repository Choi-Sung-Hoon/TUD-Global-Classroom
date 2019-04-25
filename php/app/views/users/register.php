<?php require APPROOT . '/views/inc/header.php';?>


<div class="container">
  <div class="container card">
    <form action="<?php echo URLROOT; ?>users/register" method="post">
      <div class="form-group">
        <i class="fa fa-user"></i>
        <input type="text" class="form-control <?php echo (!empty($data['name_error'])) ? 'is-invalid' : '' ?>" name="name" placeholder="User name" required="required" value="">
        <span class="invalid-feedback"><?php echo $data['name_error']; ?></span>
      </div>
      <div class="form-group">
        <i class="fa fa-envelope"></i>
        <input type="email" class="form-control <?php echo (!empty($data['email_error'])) ? 'is-invalid' : '' ?>" name="email" placeholder="Email address" required="required">
        <span class="invalid-feedback"><?php echo $data['email_error']; ?></span>
      </div>
      <div class="form-group">
        <i class="fa fa-lock"></i>
        <input type="password" class="form-control <?php echo (!empty($data['password_error'])) ? 'is-invalid' : '' ?>" name="password" placeholder="Password" required="required">
        <span class="invalid-feedback"><?php echo $data['password_error']; ?></span>
      </div>
      <div class="form-group">
        <i class="fa fa-lock"></i>
        <input type="password" class="form-control <?php echo (!empty($data['confirm_password_error'])) ? 'is-invalid' : '' ?>" name="confirm_password" placeholder="Repeat password" required="required">
        <span class="invalid-feedback"><?php echo $data['confirm_password_error']; ?></span>
      </div>
      <div class="form-group">
        <input type="submit" class="btn btn-primary btn-block btn-lg" value="Register">
      </div>
    </form>
  </div>
</div>


<?php require APPROOT . '/views/inc/footer.php'; ?>