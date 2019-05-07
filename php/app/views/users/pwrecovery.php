<?php require APPROOT . '/views/inc/header.php';?>
<div class="container">
        <div class="container card">
			  <div class="form-group">
			
			<form method="post"  action="<?php echo URLROOT; ?>users/createpw" >
						<p>Please confirm your email address and username </p>
						<p>Email:</p>
							<input type="email" class="form-control <?php echo (!empty($data['email_error'])) ? 'is-invalid' : '' ?>" name="email" placeholder="Email address" required="required">
							 <span class="invalid-feedback"><?php echo $data['email_error']; ?></span>
			 
				
					
					 <p>Username:</p>
						<input type="text" class="form-control <?php echo (!empty($data['username_error'])) ? 'is-invalid' : '' ?>" name="username" placeholder="Username" required>
						 <span class="invalid-feedback"><?php echo $data['username_error']; ?></span>
				

                
					<button type="submit" class="btn btn-primary btn-block btn-lg" value="Confirm" name="reset-button">Confirm</button>
					</form>
				</div>
			
			</div>
				 
			</div> 

<?php require APPROOT . '/views/inc/footer.php'; ?>