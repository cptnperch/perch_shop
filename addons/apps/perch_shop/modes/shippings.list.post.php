<?php include (PERCH_PATH.'/core/inc/sidebar_start.php'); ?>
<p><?php //echo PerchLang::get(''); ?></p>
<?php include (PERCH_PATH.'/core/inc/sidebar_end.php'); ?>
<?php include (PERCH_PATH.'/core/inc/main_start.php'); ?>
<?php include ('_subnav.php'); ?>

    <?php if ($CurrentUser->has_priv('perch_shop.shippings.create')) { ?>
    <a class="add button" href="<?php echo PerchUtil::html($API->app_path('perch_shop').'/shippings/edit'); ?>"><?php echo $Lang->get('Add shipping method'); ?></a>
    <?php } // perch_shop.shippings.create ?>
    
    <h1><?php echo $Lang->get('Listing all shipping methods'); ?></h1>

	<?php
	/* ----------------------------------------- SMART BAR ----------------------------------------- */
       include('_shipping_smartbar.php');
	/* ----------------------------------------- /SMART BAR ----------------------------------------- */
    $Alert->output();

    echo $HTML->listing($shippings, 
    		array('Title', 'Slug', 'Provider', 'Priority'), 
    		array('shippingTitle', 'shippingSlug', 'company', 'shippingOrder'), 
            array(
                    'edit'   => 'edit',
                    'delete' => 'delete',
                ),
            array(
                'user'   => $CurrentUser,
                'edit'   => 'perch_shop.shippings.edit',
                'delete' => 'perch_shop.shippings.delete',
                )
            );

    echo $HTML->paging($Paging);
    ?>

<?php include (PERCH_PATH.'/core/inc/main_end.php'); ?>