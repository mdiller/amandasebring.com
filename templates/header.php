<?php
$json_page_infos = json_decode(file_get_contents("pages_info.json"), true);
$json_pet_infos = json_decode(file_get_contents("pets_info.json"), true);

define("SITE_URL", "http://" . $_SERVER['SERVER_NAME']);

function yearsSince($then) {
	return date("Y") - $then;
}

function pluralize($value, $text) {
	if ($value == 0) {
		return "";
	}
	elseif ($value == 1) {
		return $value . $text;
	}
	else {
		return $value . $text . "s";
	}
}

function parseAge($birth) {
	$birth = DateTime::createFromFormat("M Y", $birth);
	$today = new DateTime("now");
	$diff = $birth->diff($today);
	$diff_months = pluralize($diff->m, " Month");
	$diff_years = pluralize($diff->y, " Year");

	if ($diff->y == 0) {
		return $diff_months;
	}
	elseif ($diff->y <= 1 and $diff->m != 0) {
		return $diff_years . " and " . $diff_months;
	}
	else {
		return $diff_years;
	}
}

?>

<!DOCTYPE html>

<html lang="en">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<head>
	<title>Amanda Sebring</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans|Lato|Roboto|Source+Sans+Pro" rel="stylesheet">
	<meta property="og:title" content="Amanda Sebring"/>
	<meta property="og:image" content="http://amandasebring.com/images/face.jpg"/>
	<meta property="og:description" content="A fuckin' badass human"/>
</head>


<style>
<?php include "base.css"; ?>
</style>

<script>
<?php include "script.js"; ?>
</script>

<body>
	<!-- Navigation -->
	<nav id="navbar" class="navbar" role="navigation">
		<span class="navbutton" class="icon" onclick="navbutton()">
			<div>
			</div>
		</span>
		<div>
			<div class="navdiv">
				<ul>
					<?php
					$first = true;
					foreach($json_page_infos as $page){
						if (!$first) {
							echo "<li>&#8226;</li>";
						}
						$first = false;
						echo "<li><a onclick=\"navigated()\" href=\"#" . $page['url'] . "\"><span>" . $page['navbar'] . "</span></a></li>";
					}
					?>
					<li>
						<a href="./contactinfo.html"></a>
					</li>
				</ul>
			</div>
		</div>
		<!-- /.navbar-collapse -->
	</nav>
