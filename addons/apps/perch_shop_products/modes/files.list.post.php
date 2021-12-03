<?php
    # Side panel
    echo $HTML->side_panel_start();
    //echo $HTML->para('');
    echo $HTML->side_panel_end();
    
    # Main panel
    echo $HTML->main_panel_start(); 
    include('_subnav.php');

    if ($CurrentUser->has_priv('perch_shop.products.create')) { ?>
    <a class="add button" href="<?php echo PerchUtil::html($API->app_path('perch_shop_products').'/product/files/edit/?pid='.$Product->id()); ?>"><?php echo $Lang->get('Add file'); ?></a>
    <?php } // perch_shop.products.create 
		
    if (is_object($Product)) {
        echo $HTML->heading1('Editing Files for ‘%s’', $HTML->encode($Product->title()));
    }

    if ($message) echo $message;    




    /* ----------------------------------------- SMART BAR ----------------------------------------- */

    $smartbar_selection = 'files';
    include('_product_smartbar.php');

    /* ---------------------------------------- /SMART BAR ----------------------------------------- */


    echo $HTML->listing($files, 
        array('Title', 'Slug', 'Path', 'File size'), 
        array('fileTitle', 'fileSlug', 'resourceFile', 'resourceFileSize'), 
        array(
                'edit'   => 'edit',
                'delete' => 'delete',
            ),
        array(
            'user'   => $CurrentUser,
            'edit'   => 'perch_shop.products.edit',
            'delete' => 'perch_shop.products.delete',
            )
        );
        
    echo $HTML->main_panel_end();