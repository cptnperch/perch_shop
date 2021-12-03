<?php include (PERCH_PATH.'/core/inc/sidebar_start.php'); ?>
<p><?php //echo PerchLang::get(''); ?></p>
<?php include (PERCH_PATH.'/core/inc/sidebar_end.php'); ?>
<?php include (PERCH_PATH.'/core/inc/main_start.php'); ?>
<?php include ('_subnav.php'); ?>

    <?php if ($CurrentUser->has_priv('perch_shop.email.create')) { ?>
    <a class="add button" href="<?php echo PerchUtil::html($API->app_path('perch_shop').'/emails/edit'); ?>"><?php echo $Lang->get('Add email'); ?></a>
    <?php } // perch_shop.email.create ?>


    <h1><?php echo $Lang->get('Listing all emails'); ?></h1>

	<?php
	/* ----------------------------------------- SMART BAR ----------------------------------------- */

	/* ----------------------------------------- /SMART BAR ----------------------------------------- */
    $Alert->output();

    echo $HTML->listing($emails,
    		array('Name', 'Subject'),
    		array('emailTitle', 'subject'),
            array(
                    'edit'   => 'edit',
                    'delete' => 'delete',
                ),
            array(
                'user'   => $CurrentUser,
                'edit'   => 'perch_shop.emails.edit',
                'delete' => 'perch_shop.emails.delete',
                )
            );

    echo $HTML->paging($Paging);
    ?>

<?php include (PERCH_PATH.'/core/inc/main_end.php'); ?>