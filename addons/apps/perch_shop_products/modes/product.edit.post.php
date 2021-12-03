<?php
    # Side panel
    echo $HTML->side_panel_start();
    //echo $HTML->para('');
    echo $HTML->side_panel_end();
    
    # Main panel
    echo $HTML->main_panel_start(); 
    include('_subnav.php');
		
    if (is_object($Product)) {
        if ($Product->is_variant()) {
            echo $HTML->heading1('Editing Product Variant ‘%s’', $HTML->encode($Product->title() .': '.$Product->productVariantDesc()));
        }else{
            echo $HTML->heading1('Editing Product ‘%s’', $HTML->encode($Product->title()));
        }
        
    }else{
        echo $HTML->heading1('Creating a New Product');
    }

    if ($message) echo $message;    


    /* ----------------------------------------- SMART BAR ----------------------------------------- */

    if (is_object($Product) && $Product->is_variant()) {
        $smartbar_selection = 'variants';
    }

    include('_product_smartbar.php');

    /* ---------------------------------------- /SMART BAR ----------------------------------------- */


    
    $template_help_html = $Template->find_help();
    if ($template_help_html) {
        echo $HTML->heading2('Help');
        echo '<div id="template-help">' . $template_help_html . '</div>';
    }
    

    echo $HTML->heading2('Product');    
    
    /* ---- FORM ---- */
    echo $Form->form_start('product-edit');

        echo $Form->fields_from_template($Template, $details);
        echo $Form->submit_field('btnSubmit', 'Save', $API->app_path());

    echo $Form->form_end();
    /* ---- /FORM ---- */
        
    echo $HTML->main_panel_end();
  