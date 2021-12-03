<?php include (PERCH_PATH.'/core/inc/sidebar_start.php'); ?>
<p><?php //echo $Lang->get(''); ?></p>
<?php include (PERCH_PATH.'/core/inc/sidebar_end.php'); ?>
<?php include (PERCH_PATH.'/core/inc/main_start.php'); ?>
<?php include ('_subnav.php'); ?>

    <?php if ($CurrentUser->has_priv('perch_shop.options.create')) { ?>
    <a class="add button" href="<?php echo PerchUtil::html($API->app_path('perch_shop_products').'/options/edit/'); ?>"><?php echo $Lang->get('Add option'); ?></a>
    <?php } // perch_shop.options.create ?>
    
    <h1><?php echo $Lang->get('Listing all options'); ?></h1>

	<?php
    $Alert->output();

    echo $HTML->listing($options, 
    		array('Title', 'Precendence'), 
    		array('title', 'optionPrecendence'), 
            array(
                    'edit'   => 'edit',
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

<?php include (PERCH_PATH.'/core/inc/main_end.php'); 
