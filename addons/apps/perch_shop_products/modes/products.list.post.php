<?php include (PERCH_PATH.'/core/inc/sidebar_start.php'); ?>
<p><?php //echo $Lang->get(''); ?></p>
<?php include (PERCH_PATH.'/core/inc/sidebar_end.php'); ?>
<?php include (PERCH_PATH.'/core/inc/main_start.php'); ?>
<?php include ('_subnav.php'); ?>

    <?php if ($CurrentUser->has_priv('perch_shop.products.create')) { ?>
    <a class="add button" href="<?php echo PerchUtil::html($API->app_path('perch_shop_products').'/product/edit'); ?>"><?php echo $Lang->get('Add product'); ?></a>
    <?php } // perch_shop.products.create ?>
    
    <h1><?php echo $Lang->get('Listing all products'); ?></h1>

	<?php
	/* ----------------------------------------- SMART BAR ----------------------------------------- */
       
	/* ----------------------------------------- /SMART BAR ----------------------------------------- */
    $Alert->output();

    echo $HTML->listing($products, 
    		array('SKU', 'Title', 'Stock', 'Price'), 
    		array('sku', 'title', 'stock_level', 'implode|price'), 
            array(
                    'edit'   => 'product/edit',
                    'delete' => 'product/delete',
                ),
            array(
                'user'   => $CurrentUser,
                'edit'   => 'perch_shop.products.edit',
                'delete' => 'perch_shop.products.edit',
                )
            );
    echo $HTML->paging($Paging);
    ?>

<?php include (PERCH_PATH.'/core/inc/main_end.php'); ?>
	