
function navbutton() {
	var x = document.getElementById("navbar");
	if (x.className === "navbar") {
		x.className = "navbar expanded";
	}
	else {
		x.className = "navbar";
	}
}

function navigated() {
	var x = document.getElementById("navbar");
	if (x.className !== "navbar") {
		x.className = "navbar";
	}
}