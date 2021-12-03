<?php

	if (!isset($smartbar_selection)) {
		$smartbar_selection = 'details';
	}
	
    if (is_object($Order)) {

        echo $HTML->smartbar(
                $HTML->smartbar_breadcrumb(($smartbar_selection=='details'), 
                            array(
                                'link' => $API->app_path('perch_shop_orders'),
                                'label' => $Lang->get('Orders'),
                            ),
                            array( 
                                'link'=> $API->app_path('perch_shop_orders').'/order/?id='.$Order->id(),
                                'label' => $Order->orderInvoiceNumber(),
                            )
                        ),
                $HTML->smartbar_link(($smartbar_selection=='evidence'), 
                        array( 
                            'link'=> $API->app_path('perch_shop_orders').'/order/evidence/?id='.$Order->id(),
                            'label' => $Lang->get('Tax Evidence'),
                        )
                    )
            );

    }

