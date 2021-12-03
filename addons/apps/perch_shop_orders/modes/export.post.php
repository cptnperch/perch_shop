<?php include (PERCH_PATH.'/core/inc/sidebar_start.php'); ?>
<p><?php //echo PerchLang::get(''); ?></p>
<?php 
    include (PERCH_PATH.'/core/inc/sidebar_end.php');
    include (PERCH_PATH.'/core/inc/main_start.php');
    include ('_subnav.php');
?>
   
    <h1><?php echo $Lang->get('Exporting orders'); ?></h1>

	<?php
	/* ----------------------------------------- SMART BAR ----------------------------------------- */

    $smartbar_selection = 'export';
    include('_orders_smartbar.php');
       
	/* ----------------------------------------- /SMART BAR ----------------------------------------- */
    $Alert->output();
    echo $message;

    echo $HTML->heading2('Export options');

    echo $Form->form_start();    
    echo $Form->fields_from_template($Template, array(), array(), false);
    echo $Form->submit_field('btnSubmit', 'Export', $API->app_path());
    echo $Form->form_end();
    
    include (PERCH_PATH.'/core/inc/main_end.php'); 
