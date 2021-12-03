<?php include (PERCH_PATH.'/core/inc/sidebar_start.php'); ?>
<p><?php //echo $Lang->get(''); ?></p>
<?php include (PERCH_PATH.'/core/inc/sidebar_end.php'); ?>
<?php include (PERCH_PATH.'/core/inc/main_start.php'); ?>
<?php include ('_subnav.php'); ?>

    <h1><?php echo $Lang->get('Listing all variants'); ?></h1>

	<?php
	/* ----------------------------------------- SMART BAR ----------------------------------------- */
    $smartbar_selection = 'variants';
    include('_product_smartbar.php');
	/* ----------------------------------------- /SMART BAR ----------------------------------------- */
    $Alert->output();

    echo $Form->form_start('edit');
    echo $message;
    echo $Form->form_end();


    echo $HTML->listing($variants, 
    		array('SKU', 'Title', 'Options', 'Stock'), 
    		array('sku', 'title', 'productVariantDesc', 'stock_level'), 
            array(
                    'edit'   => '../edit',
                    'delete' => 'delete',
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
	