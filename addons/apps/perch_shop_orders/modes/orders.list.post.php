<?php include (PERCH_PATH.'/core/inc/sidebar_start.php'); ?>
<p><?php //echo PerchLang::get(''); ?></p>
<?php include (PERCH_PATH.'/core/inc/sidebar_end.php'); ?>
<?php include (PERCH_PATH.'/core/inc/main_start.php'); ?>
<?php include ('_subnav.php'); ?>

   
    <h1><?php echo $Lang->get('Listing all orders'); ?></h1>

	<?php
	/* ----------------------------------------- SMART BAR ----------------------------------------- */

    include('_orders_smartbar.php');
       
	/* ----------------------------------------- /SMART BAR ----------------------------------------- */
    $Alert->output();


    $HTML->set_formatter('dt', function($value) {
        return PerchShop_Date::format($value, PERCH_DATE_SHORT.' '.PERCH_TIME_SHORT);
    });


    echo $HTML->listing($orders, 
    		array('Order', 'Date', 'Customer', 'Total', 'Status'), 
    		array('orderInvoiceNumber', 'dt|orderCreated', 'customerName', 'orderTotal', 'statusTitle'), 
            array(
                    'edit'   => 'order',
                    'delete' => 'delete',
                ),
            array(
                'user'   => $CurrentUser,
                'edit'   => 'perch_shop.orders.edit',
                'delete' => 'perch_shop.orders.delete',
                )
            );

    echo $HTML->paging($Paging);

 include (PERCH_PATH.'/core/inc/main_end.php'); ?>