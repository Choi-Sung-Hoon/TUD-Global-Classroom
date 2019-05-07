<?php require APPROOT . '/views/inc/header.php';?>
		<div class="container">
			<div class="container card">
				<div class="form-group">
				
						<form  method="post">
						<input type="password" name="password" placeholder ="Enter new password" required="required">
						<input type="password" name="passwordconf" placeholder ="Confirm new password" required="required">
						<button type="submit" name="resetPW">Reset Password </button>
				
			 
				</div>
			</div>
		</div>
			  
<?php require APPROOT . '/views/inc/footer.php'; ?>