<?php
    # Side panel
    echo $HTML->side_panel_start();
    //echo $HTML->para('');
    echo $HTML->side_panel_end();

    # Main panel
    echo $HTML->main_panel_start();
    include('_subnav.php');


    echo $HTML->heading1('Options for ‘%s’', $HTML->encode($Product->title()));


    if ($message) echo $message;

    /* ----------------------------------------- SMART BAR ----------------------------------------- */

    $smartbar_selection = 'options';
    include('_product_smartbar.php');

    /* ---------------------------------------- /SMART BAR ----------------------------------------- */


    #echo $HTML->heading2('Options');

    /* ---- FORM ---- */
    echo $Form->form_start('edit');

    $container_class = 'uni-col';
    #if (PerchUtil::count($options)>4) $container_class = 'fieldtype multi-col';
    
    if (PerchUtil::count($options)) {

        echo $Form->checkbox_set('opts', 'Options', $options, $option_values, $class='', $limit=false, $container_class);

        if (PerchUtil::count($option_values)) {

            foreach($option_values as $option_id) {
                $Option = $Options->find($option_id);

                echo '<h2>'.PerchUtil::html($Option->optionTitle()).'</h2>';
                $id = 'vals_'.$Option->id();

                $opt_options = $OptionValues->get_checkbox_options($option_id);
                $opt_values  = $OptionValues->get_checkbox_values($option_id, $productID);

                $container_class = 'uni-col';
                #if (PerchUtil::count($opt_options)>4) $container_class = 'fieldtype multi-col';
                echo $Form->checkbox_set($id, 'Values', $opt_options, $opt_values, $class='', $limit=false, $container_class);


            }
        }


    }else{
        echo $HTML->warning_message('Set up some product options in the Options section in order to select them for this product.');
    }

    echo $Form->submit_field('btnSubmit', 'Save', $API->app_path());

    echo $Form->form_end();
    /* ---- /FORM ---- */

    echo $HTML->main_panel_end();
