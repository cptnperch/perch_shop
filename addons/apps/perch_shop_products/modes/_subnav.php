<?php
	echo $HTML->subnav($CurrentUser, array(
		array('page'=>array(
						'perch_shop_products',
						'perch_shop_products/product',
						'perch_shop_products/product/edit',
						'perch_shop_products/product/variants',
						'perch_shop_products/product/options',
						'perch_shop_products/product/options/edit',
						'perch_shop_products/product/files',
						'perch_shop_products/product/files/edit',
						'perch_shop_products/product/files/delete',
						'perch_shop_products/product/tags',
						), 
				'label'=>'Products'),
		array('page'=>array(
						'perch_shop_products/brands',
						'perch_shop_products/brands/edit',
						), 
				'label'=>'Brands'),
		array('page'=>array(
						'perch_shop_products/options',
						'perch_shop_products/options/edit',
						), 
				'label'=>'Options'),

	));