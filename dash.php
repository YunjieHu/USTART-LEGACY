<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <title>ustart</title>
        <?php
             include 'session.php';
        ?>
        <script src="js/layout.js"></script>
		<script src="js/dash.js"></script>
    </head>
    <body onload="initialize(true);">
		<div id="navBar"></div>
		<div id="notifPan"></div>
		<div id="burgerPan"></div>
		<div id="centering">
			<h2 id="pgHead">Dashboard </h2>
			<div id="content" style="width: 65em; min-width: 65em;">
				<br>
				<div id="mainCont">
					<h3><span id="feedTabA">User Feed</span> &emsp; <span id="feedTabB">Projects</span></h3>
					<div id="theFeeds">
					</div>
					<br>
				</div>
				<div id="sideCont">
					<div id="sideBox">
						<h3> Recommended </h3>
						<div class="extra"></div>
					</div>
				</div>
				<br>
			</div>
		</div>
		<footer id="foot"></footer>
    </body>
</html>