<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<title>ustart</title>
	<script src="js/layout.js"></script>
	<script src="js/settings.js"></script>
	<link rel="stylesheet" href="css/settings.css" />
</head>

<body onload="initialize(true);">
	<div id="navBar"></div>
	<div id="notifPan"></div>
	<div id="burgerPan"></div>
	<div id="centering">
		<div id="content" style="width: 65em; min-width: 65em;">
			<h3><span id="TabA" class="settingsTab" onclick="showBasicSettings()"> Basic Information</span> &emsp; <span id="TabB" class="settingsTab" onclick="showOtherSettings()">Other Settings</span></h3>
			<br>
			<h2 id="settingsTitle">Settings</h2>
			<div id="settingsCont">
				<form id="form-basic-settings" action="" method="post">
					<br>
					<table style="width: 100%">
						<col width="30%">
						<col width="30%">
						<col width="10%">
						<tr>
							<td>Name: </td>
							<td><input type="text" id="settingsName" name="sName" placeholder="First Last"> </td>
						</tr>
						<tr>
							<td>Profile Picture:
								<!--<img id="settingsPFP">--></td>
							<td> <button id="pfpUpload" name="sPic">Change picture</button> </td>
						</tr>
						<tr>
							<td>Username: </td>
							<td><span id="settingsUser">Only displays username </span></td>
						</tr>
						<tr>
							<td>Password: </td>
							<td><span id="settingsPass">* * * * * * * * </span></td>
							<td>
								<div class="settingsEdit">✎</div>
							</td>
						</tr>
						<tr>
							<td>Registered email: </td>
							<td><span id="settingsEmail">Only displays email </span></td>
						</tr>
						<tr>
							<td><button id="updateBasic">Update</button></td>
						</tr>
					</table>
				</form>
				<form id="form-other-settings" action="" method="post" style="display: none">
					<br>
					<table style="width: 100%;">
						<col width="30%">
						<col width="30%">
						<col width="10%">
						<tr>
							<td>Linked email: </td>
							<td><span id="settingsEmailLinked">Only displays linked email </span> </td>
							<td>
								<div class="settingsEdit">✎</div>
							</td>
						</tr>
						<tr>
							<td>Send me newsletters </td>
							<td> <input type="checkbox" id="settingsNewsletter"></td>
						</tr>
						<tr>
							<td>University: </td>
							<td><span id="settingsUni">Only displays University </span></td>
						</tr>
						<tr>
							<td>Location: </td>
							<td><input type="text" id="settingsLoc" name="sName" placeholder="User location"></td>
						</tr>
						<tr>
							<td>Account history</td>
						</tr>
						<tr>
							<td><button id="updateOther">Update</button></td>
						</tr>
					</table>
				</form>
				<br>
			</div>
		</div>
	</div>
	<footer id="foot"></footer>
</body>

</html>