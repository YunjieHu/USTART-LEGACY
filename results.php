<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <title>ustart</title>
        <script src="js/layout.js"></script>
		<link href="css/results.css" rel="stylesheet" type="text/css" />
        <script src="js/results.js"></script>
        <?php
             include 'session.php';
        ?>
    </head>
    <body onload="initialize(true);">
		<div id="navBar"></div>
		<div id="notifPan"></div>
		<div id="burgerPan"></div>
		<div id="centering">
			<h2 id="pgHead">Search results for 'random search' </h2>
			<div id="content" style="width: 65em; min-width: 65em;">
				<br>
				<div id="mainCont">
					<h3><span id="feedTabA">Projects</span> &emsp; <span id="feedTabB">Users</span></h3>
					<div id="theResults">
						
					</div>
					<p style="padding-left:0.8em"> There are no more search results at this time, try a different search </p>
					<br>
				</div>
				<div id="sideCont">
					<div id="sideBox">
					<h3> Filters </h3>
					<div class="extra">
					<br>
						<div id="filOptions">
						<form style="padding: 1em;" action="">
							<div class="filDiv">Status</div>
							<input type="radio" name="status" value="open">Open<br>
							<input type="radio" name="status" value="popular">Closed<br>
							<br><div class="filDiv">Order</div>
							<input type="radio" name="order" value="relevant">Most relevant<br>
							<input type="radio" name="order" value="popular">Most popular<br>
							<input type="radio" name="order" value="newest">Newest Post<br>
							<input type="radio" name="order" value="update">Last updated<br>
							<br><div class="filDiv">Categories</div>
							<input type="checkbox" name="category" value="catA">Performing Arts<br>
							<input type="checkbox" name="category" value="catB">Engineering<br>
							<input type="checkbox" name="category" value="catC">Software Dev<br>
							<input type="checkbox" name="category" value="catD">Web Application<br>
							<br><div class="filDiv">Tags</div>
							<input type="checkbox" name="tag" value="tagA">Some tag<br>
							<input type="checkbox" name="tag" value="tagB">Another tag<br>
							<input type="checkbox" name="tag" value="tagC">Easy recruit<br>
							<input type="checkbox" name="tag" value="tagD">Freshies<br>
							<input type="checkbox" name="tag" value="tagE">Engineering<br>
							<input type="checkbox" name="tag" value="tagF">Android<br>
							<input type="checkbox" name="tag" value="tagG">Random tag<br>
							<input type="checkbox" name="tag" value="tagH">Will change<br>
							<br><div class="filDiv">Major</div>
							<input type="checkbox" name="major" value="majorA">majorA<br>
							<input type="checkbox" name="major" value="majorB">majorB<br>
							<input type="checkbox" name="major" value="majorC">majorC<br>
							<input type="checkbox" name="major" value="majorD">majorB<br>
						</form>
						</div>
						<br>
					</div>
					</div>
				</div>
				<br>
			</div>
		</div>
		<footer id="foot"></footer>
    </body>
</html>