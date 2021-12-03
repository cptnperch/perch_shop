<?php include (PERCH_PATH.'/core/inc/sidebar_start.php'); ?>
<p><?php //echo PerchLang::get(''); ?></p>
<?php include (PERCH_PATH.'/core/inc/sidebar_end.php'); ?>
<?php include (PERCH_PATH.'/core/inc/main_start.php'); ?>
<?php include ('_subnav.php'); ?>

    <?php if ($CurrentUser->has_priv('perch_shop.taxgroups.create')) { ?>
    <a class="add button" href="<?php echo PerchUtil::html($API->app_path('perch_shop').'/tax/groups/edit'); ?>"><?php echo $Lang->get('Add tax group'); ?></a>
    <?php } // perch_shop.taxgroups.create ?>

    <h1><?php echo $Lang->get('Listing all tax groups'); ?></h1>

	<?php
	/* ----------------------------------------- SMART BAR ----------------------------------------- */
       include('_tax_smartbar.php');
	/* ----------------------------------------- /SMART BAR ----------------------------------------- */
    $Alert->output();

     echo $HTML->listing($groups,
            array('Title', 'Slug'),
            array('groupTitle', 'groupSlug'),
            array(
                    'edit'   => 'groups/edit',
                    'delete' => 'groups/delete',
                ),
            array(
                'user'   => $CurrentUser,
                'edit'   => 'perch_shop.taxgroups.edit',
                'delete' => 'perch_shop.taxgroups.delete',
                )
            );

    echo $HTML->paging($Paging);

 include (PERCH_PATH.'/core/inc/main_end.php');