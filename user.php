<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <title>ustart</title>
        <script src="js/layout.js"></script>
        <?php include 'session.php'; ?>

    </head>
    <body onload="initialize(true);">
		<div id="navBar"></div>
		<div id="notifPan"></div>
		<div id="burgerPan"></div>
		<div id="centering">
			
			<h2 id ="pgHead"> <?php 
			
			//Include info relevant to current session
			include 'session.php';

			//Connect to database
			$conn_string = "host= code.engineering.nyu.edu port=55432 user=ds3930 password=mani1laFrugal";
			$dbconn = pg_connect($conn_string) or die('Could not connect: ' . pg_last_error());
			
			//Query for relevant info to the current session ($user_check defined in session.php)
			$getinfo = "select firstname, lastname from public.tblusers where email = '$user_check'";
			$query = pg_query($dbconn, $getinfo);

			$row = pg_fetch_array($query);

			//Parse info
			$firstname = $row['firstname'];
			$lastname = $row['lastname'];

			//Display
			echo $firstname, ' ', $lastname;

			?> </h2>

			<div id="content" style="width: 65em; min-width: 65em;">
				<br>
				<div id="cover"></div>
				<div id="notCover">
				<div id="mainCont">
					
					<h3>Description</h3>
					<div class="feedPost"></div>
					<h3>Past Projects</h3>
					<div class="feedPost"></div>
					<div class="feedPost"></div>
					<div class="feedPost"></div>
				</div>
				<div id="sideCont">
					<h3>Quick View</h3>
					<div class="extra"></div>
					<h3>Interests</h3>
					<div class="extra"></div>
				</div>
				<br>
				</div>
			</div>
		</div>
		<footer id="foot"></footer>
    </body>
</html>