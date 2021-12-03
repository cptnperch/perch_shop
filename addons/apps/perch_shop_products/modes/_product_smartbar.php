<?php

	if (!isset($smartbar_selection)) {
		$smartbar_selection = 'details';
	}
	
    if (is_object($Product)) {

        $smartbar_product_id = $Product->id();

        if ($Product->is_variant()) {
            $smartbar_product_id = $Product->parentID();
        }

        echo $HTML->smartbar(
                $HTML->smartbar_link(($smartbar_selection=='details'), 
                            array( 
                                'link'=> $API->app_path('perch_shop_products').'/product/edit/?id='.$smartbar_product_id,
                                'label' => $Lang->get('Product Details'),
                            )
                        ),
                $HTML->smartbar_link(($smartbar_selection=='variants'), 
                        array( 
                            'link'=> $API->app_path('perch_shop_products').'/product/variants/?id='.$smartbar_product_id,
                            'label' => $Lang->get('Variants'),
                        )
                    ),
                $HTML->smartbar_link(($smartbar_selection=='options'), 
                        array( 
                            'link'=> $API->app_path('perch_shop_products').'/product/options/?id='.$smartbar_product_id,
                            'label' => $Lang->get('Options'),
                        )
                    ),
                $HTML->smartbar_link(($smartbar_selection=='files'), 
                        array( 
                            'link'=> $API->app_path('perch_shop_products').'/product/files/?id='.$smartbar_product_id,
                            'label' => $Lang->get('Files'),
                        )
                    ),
                $HTML->smartbar_link(($smartbar_selection=='tags'), 
                        array( 
                            'link'=> $API->app_path('perch_shop_products').'/product/tags/?id='.$smartbar_product_id,
                            'label' => $Lang->get('Tags')
                        )
                    )
            );

    }

