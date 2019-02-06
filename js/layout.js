var loginVis = false;
var thePanA = false;
var thePanB = false;

document.addEventListener("DOMContentLoaded", function () {
	/*document.getElementById("notifs").onclick = "notifUpdate()";
	document.getElementById("dropdown").onclick = "burgerUpdate()";
	console.log("loaded");*/
});

function initialize(account) {
	var headHTML = document.getElementsByTagName('head')[0].innerHTML;
	headHTML += '<link href="https://fonts.googleapis.com/css?family=Gudea" rel="stylesheet">' +
		'<link href="css/layout.css" rel="stylesheet" type="text/css" />' +
		'<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">' +
		'<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">';

	document.getElementsByTagName('head')[0].innerHTML = headHTML;

	if (account) {
		console.log("lg");
		document.getElementById("navBar").innerHTML = '<div id="logo"><h1><a href="dash.php">u&#x025CFstart</a></h1></div>' +
			'<div id="theSearch"><input id="searchInput" type="text" placeholder="Search projects and users"><button type="button" onClick=window.location="results.php"><i class="fa fa-search"></i></button></div>' +
			'<div id="navMenu"><div id="notifs" onclick="notifUpdate()" style="background-image:url(ico/bell.png);"></div><div id="dropdown" onclick="burgerUpdate()" style="background-image:url(ico/burger.png);"></div></div>';
	}
	else {
		document.getElementById("navBar").innerHTML = '<div id="logo"><h1><a href="index.php">u&#x025CFstart</a></h1></div>' +
			'<div id="navMenu"><div><a onclick="toggleLogIn()">Log In</a></div>' +
			'<div><a href="register.html">Sign Up</a></div></div>';

		document.getElementById("theLogIn").innerHTML = `
		<form action = "login.php" method = "post">
			<table>
				<tr>
					<td><label for="email">Email</label></td>
					<td><label for="pass">Password</label></td>
				</tr>
				<tr>
					<td><input type="email" class="inputtext" name="email" id="email"></td>
					<td><input type="password" class="inputtext" name="pass" id="pass"></td>
					<td><label style="" id="loginbutton">
					<input value="Log In" type="submit"></label></td>
				</tr>
				<tr>
					<td></td>
					<td><a href="">Forgot password?</a></td>
				</tr>
			</table>
		</form>
			`
	}
	return;
}

function toggleLogIn() {
	loginVis = !loginVis;
	if (loginVis) {
		document.getElementById("theLogIn").style.visibility = "visible";
	}
	else {
		document.getElementById("theLogIn").style.visibility = "hidden";
	}
	return;
}

function notifUpdate() {
	if (isPanOpened(true)) {
		document.getElementById("notifPan").innerHTML = '<h3 id="panHead">Notifications</h3><div id="closePan" onclick="closePan()">x</div>';
		document.getElementById("notifPan").innerHTML += `<div id="notifItemWrap">
			</div>`
	}
	return;
}
function burgerUpdate() {
	if (isPanOpened(false)) {
		document.getElementById("notifPan").innerHTML = '<h3 id="panHead">Option</h3><div id="closePan" onclick="closePan()">x</div>';
        document.getElementById("notifPan").innerHTML += `<div id="notifItemWrap">
        <div class="panItem">
        <a href="logout.php">Logout</a>
        </div>
        </div>
        `
	}
	return;
}
function isPanOpened(b) {
	var thePanEl = document.getElementById("notifPan");
	thePanEl.innerHTML = "";
	if (thePanA && thePanB == b) {
		thePanA = !thePanA;
		thePanEl.style.display = "none";
		return false;
	}
	else if (thePanA) {
		thePanB = b;
		return true;
	}
	else {
		thePanA = true;
		thePanB = b;
		thePanEl.style.display = "block";
		return true;
	}
}
function closePan() {
	var thePanEl = document.getElementById("notifPan");
	thePanEl.innerHTML = "";
	thePanA = false;
	thePanEl.style.display = "none";
}
/*
t: title, string
d: description, string
l: link url, string
b: read/unread, boolean
*/
function appendPanItem(t, d, l, b = false) {
	var resultHTML = document.getElementById('notifItemWrap').innerHTML += `<div class="panItem" onclick="location.href='` + l + `'">
				<div class="panItemTitle">` + t + `</div>
				<div class="panItemDesc">` + d + `</div>
			</div>`;
	return true;
}