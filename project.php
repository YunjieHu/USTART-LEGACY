<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <title>ustart</title>
        <script src="js/layout.js"></script>
        <?php
             include 'session.php';
        ?>
    </head>
    <body onload="initialize(true);">
		<div id="navBar"></div>
		<div id="notifPan"></div>
		<div id="burgerPan"></div>
		<div id="centering">
			<h2 id="pgHead">Project Name</h2>
			<div id="content" style="width: 65em; min-width: 65em;">
				<br>
				<div id="cover"></div>
				<div id="notCover">
				<div id="mainCont">
					
					<h3>Description</h3>
					<div class="feedPost"></div>
					<h3>Project Updates</h3>
					<div class="feedPost"></div>
					<div class="feedPost"></div>
					<div class="feedPost"></div>
				</div>
				<div id="sideCont">
					<h3>Quick View</h3>
					<div class="extra"></div>
				</div>
				<br>
			</div>
		</div>
		<footer id="foot"></footer>
    </body>
</html>