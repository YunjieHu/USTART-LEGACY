<html>
<body>
<?php
//Create connection to database
$conn_string = "host= code.engineering.nyu.edu port=55432 dbname=ds3930 user=ds3930 password=mani1laFrugal";
$dbconn = pg_connect($conn_string) 
	or die("Connection failed");

function isEduEmail($email){
  $email = explode(".",$email);
  if($email[count($email)-1] == "edu")
    return true;
  else
    return false;
}
    
//Turn information from form to variables for SQL INSERT query
$firstname = pg_escape_string($_POST['firstName']);
$lastname = pg_escape_string($_POST['lastName']);
$email = pg_escape_string($_POST['inputEmail']);
$password = pg_escape_string($_POST['inputPassword']);
$major = pg_escape_string($_POST['majors']);
$year = pg_escape_string($_POST['year']);
$graddate = pg_escape_string($_POST['gradDate']);
$school = pg_escape_string($_POST['universityName']);

//Checking/verifying information
echo "$firstname <br>";
echo "$lastname <br>";
echo "$email <br>";
echo "$password <br>";
echo "$major <br>";
echo "$year <br>";
echo "$graddate <br>";

//Making sure email doesn't already exist in the database
$verif = pg_query("SELECT * FROM tblusers WHERE email = '$email'");
$numrows = pg_num_rows($verif);
if($numrows == 1) {
	echo "You already have an account!!! Please go back and login with it. <br>";	
}
else{ 
    if(!isEduEmail($email)){
		echo "Not a valid .edu address, please use a valid edu email"; 
    } else{
		$result = pg_query($dbconn, "INSERT INTO tblusers (firstname, lastname, email, pw, schoolname, major, grade, graduatedate) 
		VALUES ('$firstname', '$lastname', '$email', '$password', '$school', '$major', '$year', '$graddate');");
		//If query doesnt work:
		if (!$result) { 
			$errormessage = pg_last_error(); 
			echo "Error with query: " . $errormessage; 
			exit(); 
		}
	
		$current_id = $db_handle->insertQuery($query);
		echo "Congrats, account created! <br>";
		//var_dump($result);
    }
}
	

//End and close connection
echo "<br> The end!";
pg_close($dbconn);

?>
</body>
</html> 