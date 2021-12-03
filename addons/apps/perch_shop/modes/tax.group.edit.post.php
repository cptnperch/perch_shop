<?php
    # Side panel
    echo $HTML->side_panel_start();
    //echo $HTML->para('');
    echo $HTML->side_panel_end();
    
    # Main panel
    echo $HTML->main_panel_start(); 
    include('_subnav.php');
		
    if (is_object($TaxGroup)) {
        echo $HTML->heading1('Editing Tax Group ‘%s’', $HTML->encode($TaxGroup->groupTitle()));
    }else{
        echo $HTML->heading1('Creating a New Tax Group');
    }

        /* ----------------------------------------- SMART BAR ----------------------------------------- */
        $smartbar_selection = 'groups';
       include('_tax_smartbar.php');
    /* ----------------------------------------- /SMART BAR ----------------------------------------- */

    if ($message) echo $message;    
    
    $template_help_html = $Template->find_help();
    if ($template_help_html) {
        echo $HTML->heading2('Help');
        echo '<div id="template-help">' . $template_help_html . '</div>';
    }


    
    echo $HTML->heading2('Tax group');    
    
    /* ---- FORM ---- */
    echo $Form->form_start('edit');

        echo $Form->fields_from_template($Template, $details);

         echo $HTML->heading2('Location tax rates');

         if (PerchUtil::count($locations)) {

            $opts = [];
            $opts[] = ['label'=>'Standard', 'value'=>'standard'];
            $opts[] = ['label'=>'Reduced', 'value'=>'reduced'];
            $opts[] = ['label'=>'Zero', 'value'=>'zero'];
            $opts[] = ['label'=>'Exempt', 'value'=>'exempt'];



            foreach($locations as $Location) {

                $opts = $TaxRates->get_edit_opts_for_location($Location->id());

                $val = 0;

                if (is_object($TaxGroup)) {
                    $val = $TaxRates->get_type_for_location($TaxGroup->id(), $Location->id());
                }

                echo $Form->select_field('loc_'.$Location->id(), $Location->title(), $opts, $val);
            }
         }


        echo $Form->submit_field('btnSubmit', 'Save', $API->app_path());



    echo $Form->form_end();
    /* ---- /FORM ---- */
        
    echo $HTML->main_panel_end();
  