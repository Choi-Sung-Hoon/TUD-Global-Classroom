<?php
if (isset($_POST['submit'])) {
	$file = $_FILES['file'];

	$fileName = $file['name'];
	$fileTmpName = $file['tmp_name'];
	$fileSize = $file['size'];
	$fileError = $file['error'];
	$fileType = $file['type'];

	$fileExt = explode('.', $fileName);
	$fileActualExt= strolower(end($fileExt));

	$allowed = array('jpg', 'jpeg', 'png', 'pdf');

	if(in_array($fileActualExt, $allowed)) {
		if($fileError ===0){
			if ($fileSize < 1000000) {
				$fileNameNew = uniqid('',true).".".$fileActualExt;
				$fileDestination = 'upload/'.$fileNameNew;
				move_uploaded_file($fileTmpName, $fileDestination);
			} else {
				echo "Therewas an error uploading you file!";
			}
		} else {
			echo "You cannot upload this type of file!";
			}
		}
	}
		
	
	
