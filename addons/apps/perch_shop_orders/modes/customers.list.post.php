<?php include (PERCH_PATH.'/core/inc/sidebar_start.php'); ?>
<p><?php //echo PerchLang::get(''); ?></p>
<?php include (PERCH_PATH.'/core/inc/sidebar_end.php'); ?>
<?php include (PERCH_PATH.'/core/inc/main_start.php'); ?>
<?php include ('_subnav.php'); ?>

    <?php if (false && $CurrentUser->has_priv('perch_shop.customers.create')) { ?>
    <a class="add button" href="<?php echo PerchUtil::html($API->app_path('perch_shop_products').'/customers/edit'); ?>"><?php echo $Lang->get('Add customer'); ?></a>
    <?php } // perch_shop.customers.create ?>

    <h1><?php echo $Lang->get('Listing all customers'); ?></h1>

	<?php
	/* ----------------------------------------- SMART BAR ----------------------------------------- */

	/* ----------------------------------------- /SMART BAR ----------------------------------------- */
    $Alert->output();

    echo $HTML->listing($customers,
    		array('First name', 'Last name', 'Email'),
    		array('customerFirstName', 'customerLastName', 'customerEmail'),
            array(
                    'edit'   => 'edit',
                    'delete' => 'delete',
                ),
            array(
                'user'   => $CurrentUser,
                'edit'   => 'perch_shop.customers.edit',
                'delete' => 'perch_shop.customers.delete',
                )
            );

    echo $HTML->paging($Paging);
    ?>

<?php include (PERCH_PATH.'/core/inc/main_end.php'); ?>