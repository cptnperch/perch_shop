<?php

	if (!isset($smartbar_selection)) {
		$smartbar_selection = 'shippings';
	}


    echo $HTML->smartbar(
            $HTML->smartbar_link(($smartbar_selection=='shippings'),
                    array(
                        'link'=> $API->app_path('perch_shop').'/shippings/',
                        'label' => $Lang->get('Methods'),
                    )
                ),
            $HTML->smartbar_link(($smartbar_selection=='zones'),
                        array(
                            'link'=> $API->app_path('perch_shop').'/shippings/zones/',
                            'label' => $Lang->get('Zones'),
                        )
                    )
        );
