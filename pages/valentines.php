<style>
path {
	fill: none;
	stroke: #FE251B;
	stroke-width: 10;
	stroke-linecap: round;
	stroke-linejoin: round;

	stroke-dasharray: 70;
	stroke-dashoffset: 70;
	animation: dash 1s ease-in-out forwards;
}

#hpath_1 {
	stroke-dasharray: 1100;
	stroke-dashoffset: 1100;
	animation-duration: 3s;
}

#hpath_2 {
	stroke-dasharray: 220;
	stroke-dashoffset: 220;
	animation-delay: 3s;
	animation-duration: 1s;
}

#hpath_3 {
	animation-delay: 4s;
	animation-duration: 0.5s;
}

#hpath_4 {
	animation-delay: 5s;
	animation-duration: 0.5s;
}

#hpath_5 {
	animation-delay: 5.5s;
	animation-duration: 0.5s;
}

#hpath_6 {
	stroke-dasharray: 320;
	stroke-dashoffset: 320;
	animation-delay: 6.5s;
	animation-duration: 1.5s;
}

@keyframes dash {
	to {
		stroke-dashoffset: 0;
	}
}

#heartcontainer {
	margin: auto;
	max-width: 600px;
	width: 100%;
	cursor: pointer;
	position: relative;
	border-radius: 10px;
	box-shadow: inset 0 0 10px #FE251B;
	transition: box-shadow 1s;
}

#heartcontainer svg {
	width: 100%;
}

#heartcontainer svg path {
	display: none;
}

#heartcontainer span {
	font-weight: bold;
	font-size: 32px;
	color: #FE251B;
	position: absolute;
	left: 50%;
	top: 50%;
	transform: translate(-50%, -50%);
	opacity: 1;
	transition: opacity 1s;
}

#heartcontainer.clicked {
	padding-top: 0px;
	box-shadow: inset 0 0 0px #FE251B;
}

#heartcontainer.clicked span {
	opacity: 0;
}

#heartcontainer.clicked svg path {
	display: block;
}


</style>
<div id="heartcontainer">
	<span>Click me!</span>
	<svg viewBox="0 0 380 380">
		<path id="hpath_1" d="M 190,50 A 100,100 0 1 1 331,191 l -141,141 -141,-141 A 100,100 0 1 1 190,50"/>
		<path id="hpath_2" d="M 60,170 l 40,-100 l 40,100"/>
		<path id="hpath_3" d="M 60,170 m 20,-50 h 40"/>
		<path id="hpath_4" d="M 160,120 h 60"/>
		<path id="hpath_5" d="M 190,90 v 60"/>
		<path id="hpath_6" d="M 240,170 v -100 l 40,40 40,-40 v 100"/>
	</svg>
</div>

<script>
var heartContainer = document.getElementById("heartcontainer");

heartContainer.onclick = function() {
	var className = "clicked";
	if (heartContainer.classList.contains(className)) {
		heartContainer.classList.remove("clicked");
	}
	else {
		heartContainer.classList.add("clicked");
	}
};
</script>