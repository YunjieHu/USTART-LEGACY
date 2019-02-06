<!DOCTYPE html>
<html>
	<title> Forgot Password	</title>
	<head>
	</head>
	
	<body>
		<form name="frmForgot" id="frmForgot" method="post" onSubmit="return validate_forgot();">
		<h1>Forgot Password?</h1>
			<?php if(!empty($success_message)) { ?>
			<div class="success_message"><?php echo $success_message; ?></div>
			<?php } ?>

			<div id="validation-message">
				<?php if(!empty($error_message)) { ?>
			<?php echo $error_message; ?>
			<?php } ?>
			</div>

			<div class="field-group">
				<div><label for="email">Email</label></div>
				<div><input type="text" name="user-email" id="user-email" class="input-field"></div>
			</div>
			
			<div class="field-group">
				<div><input type="submit" name="forgot-password" id="forgot-password" value="Submit" class="form-submit-button"></div>
			</div>	
		</form>
	</body>
	
	<?php
		if(!empty($_POST["forgot-password"])){
			$conn_string = "host= code.engineering.nyu.edu port=55432 dbname=ds3930 user=ds3930 password=mani1laFrugal";
			$dbconn = pg_connect($conn_string) or die("Connection failed");
		}
		$timestamp = md5(date('YmdHis'));
		$email = pg_escape_string($_POST['user-email']);
		$result = pg_query($dbconn, "UPDATE tblusers SET Token='$timestamp' WHERE email='$email';");
		if (!$result) { 
			$errormessage = pg_last_error(); 
			echo "Error with query: " . $errormessage; 
			exit(); 
		}
		echo "(Take down later)Hashed timestamp: '$timestamp'";
		
		$to = '$email';
		$subject = "My subject";
		$txt = "Hello world!";
		$headers = "From: webmaster@example.com" . "\r\n" .
		"CC: somebodyelse@example.com";

		mail($to,$subject,$txt,$headers);

		
		
		
	
	?>
	



</html>