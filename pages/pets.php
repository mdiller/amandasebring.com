

<?php foreach($json_pet_infos as $pet) { ?>
<div class="pet">
<img src="<?php echo $pet['image']; ?>" />
<h3><?php echo $pet['name']; ?></h3>
<?php echo parseAge($pet['born']); ?> Old<br>
Job: <?php echo $pet['job']; ?><br>
<p>
<?php echo $pet['description']; ?>
</p>
<p>
	Qualities
	<ul>
		<?php foreach($pet['qualities'] as $quality) { ?>
			<li><?php echo $quality; ?></li>
		<?php } ?>
	</ul>
</p>
</div>
<?php } ?>