<?php
// $page_infos = json_decode(file_get_contents("pages_info.json"), true);
include "pages_info.php";

define("SITE_URL", "http://" . $_SERVER['SERVER_NAME']);

function yearsSince($then) {
	return date("Y") - $then;
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
					foreach($page_infos as $page){
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
