<?php

class PerchShop_ProductFile extends PerchAPI_Base
{
    protected $table        = 'shop_product_files';
    protected $pk           = 'fileID';
    
    protected $index_table  = 'shop_index';
    protected $event_prefix = 'shop.productfile';

}