<?php require APPROOT . '/views/inc/header.php';?>
<html>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Dosis">
    <link rel="stylesheet" href="assets/css/styles.css">
<head>
</head>

<body>

	<div class="container" id="Welcome-cont">
		<div class="row" id="Welcome-row">
		    <div class="col">
		        <h1 id="profile-heading">Welcome back </h1>
		        <!--<h1><?php echo $UserDetails->username ?></h1>-->
		   </div>
		</div>
		<div class="row" id="Welcome-profile-row">
	        <div class="col" id="User-pic-button">
	               <div class='row' id='user-img-row'>
	               <?php 
	               		$sql ="SELECT *from user";
	               		$result = mysqli_query($_SESSION, $sql);
	               		if(mysqli_num_rows($result) > 0){
	               			while ($row = myslqi_fetch_assoc($result)) {
	               				$id = $row['id'];
	               				$sqlImg = "SELECT *FROM profileimg WHERE userid='$id'";
	               				$resultImg = mysqli_query($_SESSION, $sqlImg);
	               				while ($rowImg = myslqi_fetch_assoc($resultImg)) {
	               					echo "<div>";
	               						if($rowImg['status']==0){
	               							echo "img src='uploads/profile".$id.".jpg'>";
	               						} else{
	               							echo "img src='uploads/profiledefault".$id.".jpg'>";
	               						}	
	               					echo "</div>";
	               				}
	               			}
	               		}
	               		echo "<form action= 'upload.php' method='POST'entype='multipart/form-data'>
	                	<input type ='file' name='file'>
	                	<button type='submit' name='submit'>Change Picture </button> 
	                </form>";
	                ?>
	         </div>     	
	        </div>
	    </div>
	</div>
</body>

<?php require APPROOT . '/views/inc/footer.php'; ?>