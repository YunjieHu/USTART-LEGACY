function clearFeed() {
	document.getElementById("theFeeds").innerHTML = "";
}

/*
t: title, string
d: description, string
p: picture, resource url string
*/
function appendFeed(t, d, p) {
	var resultHTML = document.getElementById('theFeeds').innerHTML;
	resultHTML += `<div class="feedPost">
						<div class="feedTitle">` + t + `</div>
						<div class="feedBody">` + d + `</div>
					</div>`;
	document.getElementById('theFeeds').innerHTML = resultHTML;
	return true;
}