<?php include (PERCH_PATH.'/core/inc/sidebar_start.php'); ?>
<p><?php //echo PerchLang::get(''); ?></p>
<?php include (PERCH_PATH.'/core/inc/sidebar_end.php'); ?>
<?php include (PERCH_PATH.'/core/inc/main_start.php'); ?>
<?php include ('_subnav.php'); ?>

    <?php if ($CurrentUser->has_priv('perch_shop.brands.create')) { ?>
    <a class="add button" href="<?php echo PerchUtil::html($API->app_path('perch_shop_products').'/brands/edit'); ?>"><?php echo $Lang->get('Add brand'); ?></a>
    <?php } // perch_shop.brands.create ?>
    
    <h1><?php echo $Lang->get('Listing all brands'); ?></h1>

	<?php
	/* ----------------------------------------- SMART BAR ----------------------------------------- */
       
	/* ----------------------------------------- /SMART BAR ----------------------------------------- */
    $Alert->output();

    echo $HTML->listing($brands, 
    		array('Title', 'Slug', 'Status'), 
    		array('brandTitle', 'slug', 'status'), 
            array(
                    'edit'   => 'edit',
                    'delete' => 'delete',
                ),
            array(
                'user'   => $CurrentUser,
                'edit'   => 'perch_shop.brands.edit',
                'delete' => 'perch_shop.brands.delete',
                )
            );

    echo $HTML->paging($Paging);
    ?>

<?php include (PERCH_PATH.'/core/inc/main_end.php'); ?>