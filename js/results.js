function testResultSpace() {
	var node = document.createElement("div");
	node.className += " searchResult";
	document.getElementById("theResults").appendChild(node);
}

function appendSample() {
	var resultHTML = document.getElementById('theResults').innerHTML;
		resultHTML += `<div onclick="location.href='project.php';" class="searchResult">
							<div class="searchPort"></div>
							<div class="searchTitle">Sample Search Title: lets see how long this title can be</div>
							<div class="searchDesc">This is a sample description for search result. Received overcame oh sensible so at an. Formed do change merely to county it. Am separate contempt domestic to to oh. On relation my so addition branched. Put hearing cottage she norland letters equally<span style="color:#009688; font-weight: bold;"> more ... </span></div>
							<div class="searchTags">Tags: 
								<div class="sTag">randomTag</div>
								<div class="sTag">newProj</div>
								<div class="sTag">easyRecruit</div>
								<div class="sTag">something</div>
								<div class="sTag">sampleTag</div>
								<div class="sTag">anotherTag</div>
							</div>
						</div>`;
	document.getElementById('theResults').innerHTML = resultHTML;
	return true;
}

function samplePopulate() {
	for(var i = 0; i< 10; i++) {
		appendSample();
	}
}

/*
t: title, string
p: picture, imageurl (string)
d: description, string
a: array of tags (array of strings)
l: url link to proj (string)
*/

function appendResult(t, p, d, a, l) {
	var resultHTML = document.getElementById('theResults').innerHTML;
		resultHTML += `<div onclick="location.href='` + l + `';" class="searchResult">
							<div class="searchPort" style="backgroundImage:url('` + p + `');"></div>
							<div class="searchTitle">` + t + `</div>
							<div class="searchDesc">` + d + `<span style="color:#009688; font-weight: bold;"> more ... </span></div>
							<div class="searchTags">Tags: `;
							for(var i = 0; i < a.length; i++) {
								resultHTML += '<div class="sTag">' + a[i] + '</div>';
							}
							resultHTML += `
							</div>
						</div>`;
	document.getElementById('theResults').innerHTML = resultHTML;
	return true;
}