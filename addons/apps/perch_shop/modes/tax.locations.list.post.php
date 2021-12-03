<?php include (PERCH_PATH.'/core/inc/sidebar_start.php'); ?>
<p><?php //echo PerchLang::get(''); ?></p>
<?php include (PERCH_PATH.'/core/inc/sidebar_end.php'); ?>
<?php include (PERCH_PATH.'/core/inc/main_start.php'); ?>
<?php include ('_subnav.php'); ?>

    <?php if ($CurrentUser->has_priv('perch_shop.taxlocations.create')) { ?>
    <a class="add button" href="<?php echo PerchUtil::html($API->app_path('perch_shop').'/tax/locations/edit'); ?>"><?php echo $Lang->get('Add tax location'); ?></a>
    <?php } // perch_shop.taxlocations.create ?>

    <h1><?php echo $Lang->get('Listing all tax locations'); ?></h1>

	<?php
	/* ----------------------------------------- SMART BAR ----------------------------------------- */
        $smartbar_selection = 'locations';
       include('_tax_smartbar.php');
	/* ----------------------------------------- /SMART BAR ----------------------------------------- */
    $Alert->output();

     echo $HTML->listing($locations,
            array('Title', 'Home location', 'Default location'),
            array('locationTitle', 'active|locationIsHome', 'active|locationIsDefault'),
            array(
                    'edit'   => 'edit',
                    'delete' => 'delete',
                ),
            array(
                'user'   => $CurrentUser,
                'edit'   => 'perch_shop.taxlocations.edit',
                'delete' => 'perch_shop.taxlocations.delete',
                )
            );

    echo $HTML->paging($Paging);

 include (PERCH_PATH.'/core/inc/main_end.php');