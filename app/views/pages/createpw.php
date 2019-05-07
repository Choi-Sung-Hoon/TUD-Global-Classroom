<?php require APPROOT . '/views/inc/header.php';?>
		<div class="container">
        <div class="container card">
		
		<?php
				$selector = $_GET["selector"];
				$validator = $_GET["validator"];
				
				if(empty($selector) || empty($validator)){
					echo "Unauthorised Request Blocked";
				}
				else{
					if(ctype_xdigit($selector) !== false && ctype_xdigit($validator) !== false){
						?>
						<form action="<?php echo URLROOT; ?>../pages/index" method="post">
						<input type="hidden" name="selector" value="<?php echo $selector ?>">
						<input type="hidden" name="validator" value="<?php echo $validator ?>">
						<input type="password" name="password" placeholder ="Enter new password" required="required">
						<input type="password" name="passwordconf" placeholder ="Confirm new password" required="required">
						<button type="submit" name="resetPW">Reset Password </button>
						<?php
					}
				}
		?>
			  <div class="form-group">
			  </div>
		</div>
		</div>
			  
<?php require APPROOT . '/views/inc/footer.php'; ?>