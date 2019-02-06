<?php
   $conn_string = "host= code.engineering.nyu.edu port=55432 dbname=ds3930 user=ds3930 password=mani1laFrugal";
   $dbconn = pg_connect($conn_string) or die("Connection failed");
   session_start();
   
   $user_check = $_SESSION['username'];
    
   
   $row = pg_fetch_array(pg_query($dbconn,"select email from tblusers where email = '$user_check' "),PGSQL_ASSOC);
   $login_session = $row['email'];
   if(!isset($_SESSION['username'])){
      header("location:index.php");
      exit();
   }
   

   //find uid
   
   $row = pg_fetch_array(pg_query($dbconn,"select userid from tblusers where email = '$user_check' "),PGSQL_ASSOC);
   
   $login_uid = $row['userid'];

?>