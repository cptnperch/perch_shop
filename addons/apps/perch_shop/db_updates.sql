ALTER TABLE `__PREFIX__shop_shippings` ADD `shippingOrder` INT(10)  UNSIGNED  NOT NULL  DEFAULT '1'  AFTER `shippingSlug`;

ALTER TABLE `__PREFIX__shop_currencies` ADD `currencyDecimalSeparator` CHAR(16) NOT NULL DEFAULT '.' AFTER `currencyDecimals`;

ALTER TABLE `__PREFIX__shop_currencies` ADD `currencyThousandsSeparator` CHAR(16)  NOT NULL  DEFAULT ','  AFTER `currencyDecimalSeparator`;

ALTER TABLE `__PREFIX__shop_products` ADD `productStatus` TINYINT(1)  UNSIGNED  NOT NULL  DEFAULT '1'  AFTER `productDeleted`;

ALTER TABLE `__PREFIX__shop_products` ADD INDEX `idx_status` (`productStatus`);
