<?php include (PERCH_PATH.'/core/inc/sidebar_start.php'); ?>
<?php include (PERCH_PATH.'/core/inc/sidebar_end.php'); ?>
<?php include (PERCH_PATH.'/core/inc/main_start.php'); ?>

<div style="margin: 30px 0;">
	<h1>Shop Software Update</h1>

	<ul class="updates">
	<?php
	    echo '<li class="icon success">Updated to version '.PERCH_SHOP_VERSION.'.</li>';

	?>
	</ul>
	<div class="submit">
		<a href="<?php echo $Perch->get_page(true); ?>" class="button submit">Continue</a>
	</div>
</div>


<?php include (PERCH_PATH.'/core/inc/main_end.php'); ?>