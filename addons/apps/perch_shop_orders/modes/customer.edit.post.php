<?php
    # Side panel
    echo $HTML->side_panel_start();
    //echo $HTML->para('');
    echo $HTML->side_panel_end();

    # Main panel
    echo $HTML->main_panel_start();
    include('_subnav.php');

    if (is_object($Customer)) {
        echo $HTML->heading1('Editing Customer ‘%s’', $HTML->encode($Customer->customerFirstName().' '.$Customer->customerLastName()));
    }else{
        echo $HTML->heading1('Creating a New Customer');
    }

    if ($message) echo $message;

    $template_help_html = $Template->find_help();
    if ($template_help_html) {
        echo $HTML->heading2('Help');
        echo '<div id="template-help">' . $template_help_html . '</div>';
    }

    echo $HTML->heading2('Customer');

    /* ---- FORM ---- */
    echo $Form->form_start('edit');

        echo $Form->fields_from_template($Template, $details);
        echo $Form->submit_field('btnSubmit', 'Save', $API->app_path());

    echo $Form->form_end();
    /* ---- /FORM ---- */

    echo $HTML->main_panel_end();