<?php

	if (!isset($smartbar_selection)) {
		$smartbar_selection = 'groups';
	}


    echo $HTML->smartbar(
            $HTML->smartbar_link(($smartbar_selection=='groups'),
                    array(
                        'link'=> $API->app_path('perch_shop').'/tax/',
                        'label' => $Lang->get('Groups'),
                    )
                ),
            $HTML->smartbar_link(($smartbar_selection=='locations'),
                        array(
                            'link'=> $API->app_path('perch_shop').'/tax/locations/',
                            'label' => $Lang->get('Locations'),
                        )
                    )
        );
