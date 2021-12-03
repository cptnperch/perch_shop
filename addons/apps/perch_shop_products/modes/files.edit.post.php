<?php
    # Side panel
    echo $HTML->side_panel_start();
    //echo $HTML->para('');
    echo $HTML->side_panel_end();
    
    # Main panel
    echo $HTML->main_panel_start(); 
    include('_subnav.php');
		
    if (is_object($File)) {
        echo $HTML->heading1('Editing File ‘%s’', $HTML->encode($File->fileTitle()));
    }else{
        echo $HTML->heading1('Adding a New File');
    }

    if ($message) echo $message;    

    /* ----------------------------------------- SMART BAR ----------------------------------------- */

    if (is_object($Product)) {

        echo $HTML->smartbar(
                $HTML->smartbar_link(false, 
                            array( 
                                'link'=> $API->app_path('perch_shop_products').'/product/edit/?id='.$Product->id(),
                                'label' => PerchLang::get('Product Details'),
                            )
                        ),
                $HTML->smartbar_link(false, 
                        array( 
                            'link'=> $API->app_path('perch_shop_products').'/product/variants/?id='.$Product->id(),
                            'label' => PerchLang::get('Variants'),
                        )
                    ),
                $HTML->smartbar_link(false, 
                        array( 
                            'link'=> $API->app_path('perch_shop_products').'/product/options/?id='.$Product->id(),
                            'label' => PerchLang::get('Options'),
                        )
                    ),
                $HTML->smartbar_link(true, 
                        array( 
                            'link'=> $API->app_path('perch_shop_products').'/product/files/?id='.$Product->id(),
                            'label' => PerchLang::get('Files'),
                        )
                    )
            );
    }

    /* ---------------------------------------- /SMART BAR ----------------------------------------- */

    
    $template_help_html = $Template->find_help();
    if ($template_help_html) {
        echo $HTML->heading2('Help');
        echo '<div id="template-help">' . $template_help_html . '</div>';
    }
    
    echo $HTML->heading2('File details');    
    
    /* ---- FORM ---- */
    echo $Form->form_start('edit');

        echo $Form->fields_from_template($Template, $details);
        echo $Form->submit_field('btnSubmit', 'Save', $API->app_path());

    echo $Form->form_end();
    /* ---- /FORM ---- */
        
    echo $HTML->main_panel_end();
  