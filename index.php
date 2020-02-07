<?php
include "templates/header.php";

?>
<div id="page">
<div id="title">
	<img id="backsplash" src="<?php echo "images/background.jpg"; ?>">
	<div>
		<img id="faceimg" src="images/face.png" />
		<h1>Amanda Sebring</h1>
		A fuckin' badass human
	</div>
</div>


<!-- Page Content -->
<div id="content">
<?php


foreach($json_page_infos as $page) {
?>
	<div id="<?php echo $page['url']; ?>" class="section">
		<h2><?php echo $page['title']; ?></h2>
<?php
	include "pages/" . $page['content'];
	echo "</div>";
}


echo "</div>";
include "templates/footer.php";
?>
</div>