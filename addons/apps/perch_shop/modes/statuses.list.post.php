<?php include (PERCH_PATH.'/core/inc/sidebar_start.php'); ?>
<p><?php //echo PerchLang::get(''); ?></p>
<?php include (PERCH_PATH.'/core/inc/sidebar_end.php'); ?>
<?php include (PERCH_PATH.'/core/inc/main_start.php'); ?>
<?php include ('_subnav.php'); ?>

    <?php if ($CurrentUser->has_priv('perch_shop.statuses.create')) { ?>
    <a class="add button" href="<?php echo PerchUtil::html($API->app_path('perch_shop').'/statuses/edit'); ?>"><?php echo $Lang->get('Add status'); ?></a>
    <?php } // perch_shop.statuses.create ?>
    
    <h1><?php echo $Lang->get('Listing all statuses'); ?></h1>

	<?php
	/* ----------------------------------------- SMART BAR ----------------------------------------- */
       
	/* ----------------------------------------- /SMART BAR ----------------------------------------- */
    $Alert->output();

    echo $HTML->listing($statuses, 
    		array('Status', 'Key', 'Index', 'Enabled'), 
    		array('statusTitle', 'statusKey', 'statusIndex', 'active|statusActive'), 
            array(
                    'edit'   => 'edit',
                    'delete' => 'delete',
                ),
            array(
                'user'   => $CurrentUser,
                'edit'   => 'perch_shop.statuses.edit',
                'delete' => 'perch_shop.statuses.delete',
                )
            );

    echo $HTML->paging($Paging);
    ?>

<?php include (PERCH_PATH.'/core/inc/main_end.php'); ?>