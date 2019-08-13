<?php
	define ('MAX_FILE_SIZE', 200000);
	//gets extension
	$ext=end(explode(".", $_FILES["upload_picture"]["name"]));
	$user=mktime();
	$user= $Uid;
	// define constant for upload folder
	define('UPLOAD_DIR', 'upload/');
	$file = str_replace(' ', '_', $_FILES['upload_picture']['name']);
	// convert the maximum size to KB
	$max = number_format(MAX_FILE_SIZE/1024, 1).'MB';
	// create an array of permitted MIME types
	$permitted = array('image/gif','image/jpeg','image/pjpeg','image/png');
	// begin by assuming the file size and type is unacceptable
	$sizeOK = false;
	$typeOK = false;
	// check that file is within the permitted size
	if ($_FILES['upload_picture']['size'] > 0 && $_FILES['upload_picture']['size'] <= MAX_FILE_SIZE) {
	$sizeOK = true;
	}
	// check that file is of a permitted MIME type
	foreach ($permitted as $type) {
	if ($type == $_FILES['upload_picture']['type']) {
	$typeOK = true;
	break;
	}
	}
	if ($sizeOK && $typeOK) {
	switch($_FILES['upload_picture']['error']) {
	case 0:
	// move the file to the upload folder and rename it
	$success = move_uploaded_file($_FILES['upload_picture']['tmp_name'],'upload/'.$user.".".$ext);
	if ($success) {
	$result = "$file uploaded successfully";
	}
	else {
	$result = "Error uploading $file. Please try again.";
	}
	break;
	case 3:
	$result = "Error uploading $file. Please try again.";
	default:
	$result = "System error uploading $file. Contact webmaster.";
	}
	}
	elseif ($_FILES['upload_picture']['error'] == 4){
	$result = 'No Picture selected';
	}
	else{
	$result = "$file cannot be uploaded. Maximum size: $max.";
	}
	$mypix= "$user.$ext";
	$_SESSION['upload_picture']= $mypix;	
?>