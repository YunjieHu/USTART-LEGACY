<html>
<body>
<?php
$conn_string = "host= code.engineering.nyu.edu port=55432 dbname=ds3930 user=ds3930 password=mani1laFrugal";
$dbconn = pg_connect($conn_string) or die("Connection failed");
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $myusername = pg_escape_string($_POST['email']);
    $mypassword = pg_escape_string($_POST['pass']);
    $test_query= "SELECT userid FROM tblusers WHERE email= '$myusername' and pw = '$mypassword'";
    $result = pg_query($dbconn, $test_query);
    if(pg_num_rows($result) == 1) {
    //redirect to invalid usernameor password
    //or alert that invalid username or password
        $_SESSION['username'] = $myusername;
        header("location: dash.php");
    }
    else{
        //redirect to home page with userid = result
        header("location: index.php");
    }
    }
pg_close(); 
?>
</body>
</html> 