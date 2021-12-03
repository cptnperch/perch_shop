<?php include (PERCH_PATH.'/core/inc/sidebar_start.php'); ?>
<p><?php //echo PerchLang::get(''); ?></p>
<?php include (PERCH_PATH.'/core/inc/sidebar_end.php'); ?>
<?php include (PERCH_PATH.'/core/inc/main_start.php'); ?>
<?php include ('_subnav.php'); ?>

    <?php if ($CurrentUser->has_priv('perch_shop.currencies.create')) { ?>
    <a class="add button" href="<?php echo PerchUtil::html($API->app_path('perch_shop').'/currencies/edit'); ?>"><?php echo $Lang->get('Add currency'); ?></a>
    <?php } // perch_shop.currencies.create ?>
    
    <h1><?php echo $Lang->get('Listing all currencies'); ?></h1>

	<?php
	/* ----------------------------------------- SMART BAR ----------------------------------------- */
       
	/* ----------------------------------------- /SMART BAR ----------------------------------------- */
    $Alert->output();

    echo $HTML->listing($currencies, 
    		array('Code', 'Symbol', 'Name', 'Enabled'), 
    		array('currencyCode', 'currencySymbol', 'currencyTitle', 'active|currencyActive'), 
            array(
                    'edit'   => 'edit',
                    'delete' => 'delete',
                ),
            array(
                'user'   => $CurrentUser,
                'edit'   => 'perch_shop.currencies.edit',
                'delete' => 'perch_shop.currencies.delete',
                )
            );

    echo $HTML->paging($Paging);
    ?>

<?php include (PERCH_PATH.'/core/inc/main_end.php'); ?>