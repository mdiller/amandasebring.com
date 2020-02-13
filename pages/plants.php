<!-- slideshow implementation mostly taken from https://www.w3schools.com/howto/howto_js_slideshow.asp -->
<style>
* {box-sizing:border-box}

/* Slideshow container */
.plant-slides {
	max-width: 600px;
	position: relative;
	margin: auto;
}

/* Hide the images by default */
.plant-slide {
	display: none;
}

.plant-slide img {
	border-radius: 10px;
	width: 100%;
}

/* Next & previous buttons */
.prev, .next {
	cursor: pointer;
	position: absolute;
	top: 50%;
	width: auto;
	margin-top: -22px;
	padding: 16px;
	color: white;
	font-weight: bold;
	font-size: 18px;
	transition: 0.6s ease;
	border-radius: 0 3px 3px 0;
	user-select: none;
}

/* Position the "next button" to the right */
.next {
	right: 0;
	border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
	background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.plant-caption {
	color: #f2f2f2;
	font-size: 15px;
	padding: 8px 12px;
	position: absolute;
	top: 0px;
	width: 100%;
	text-align: center;
	background-color: #333333AA;
	border-radius: 10px 10px 0px 0px;
}

/* Number text (1/3 etc) */
.plant-number {
	color: #f2f2f2;
	font-size: 15px;
	padding: 8px 12px;
	position: absolute;
	top: 0;
	right: 0;
}

/*
.plant-slide {
	display: none;
	transition: opacity 1s;
	opacity: 0;
}

.shown {
	display: block;
	opacity: 1;
}*/

/* Fading animation */
.fade {
	-webkit-animation-name: fade;
	-webkit-animation-duration: 0.5s;
	animation-name: fade;
	animation-duration: 0.5s;
}

@-webkit-keyframes fade {
	from {filter: blur(8px);}
	to {filter: blur(0px);}
}

@keyframes fade {
	from {filter: blur(8px);}
	to {filter: blur(0px);}
}
</style>

<div class="plant-slides">

<?php
$plant_count = count($json_plant_infos);

 foreach($json_plant_infos as $index=>$plant) { ?>
	<div class="plant-slide">
		<img class="fade" src="<?php echo $plant['image']; ?>" >
		<div class="plant-number"><?php echo ($index + 1) . " / " . $plant_count; ?></div>
		<div class="plant-caption"><?php echo $plant['name']; ?></div>
	</div>
<?php } ?>

	<!-- Next and previous buttons -->
	<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
	<a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>

<script>
var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
	showSlides(slideIndex += n);
}

function showSlides(n) {
	var slides = document.getElementsByClassName("plant-slide");
	if (n > slides.length) {
		slideIndex = 1
	}
	if (n < 1) {
		slideIndex = slides.length
	}
	for (var i = 0; i < slides.length; i++) {
		// slides[i].classList.remove("shown");
		slides[i].style.display = "none";
	}
	// slides[slideIndex-1].classList.add("shown");
	slides[slideIndex-1].style.display = "block";
} 
</script>