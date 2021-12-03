<?php

	if (!isset($smartbar_selection)) {
		$smartbar_selection = 'list';
	}
	
    echo $HTML->smartbar(
            $HTML->smartbar_link(($smartbar_selection=='list'), 
                        array( 
                            'link'=> $API->app_path('perch_shop_orders'),
                            'label' => $Lang->get('Orders'),
                        )
                    ),
            $HTML->smartbar_link(($smartbar_selection=='export'), 
                    array( 
                        'link'=> $API->app_path('perch_shop_orders').'/export/',
                        'label' => $Lang->get('Export'),
                        'class' => 'download icon',
                    ),
                    true
                )
        );

