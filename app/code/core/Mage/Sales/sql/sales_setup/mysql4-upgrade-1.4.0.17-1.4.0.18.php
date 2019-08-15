<?php
/**
 * Magento
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magento.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade Magento to newer
 * versions in the future. If you wish to customize Magento for your
 * needs please refer to http://www.magento.com for more information.
 *
 * @category    Mage
 * @package     Mage_Sales
 * @copyright  Copyright (c) 2006-2019 Magento, Inc. (http://www.magento.com)
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

/* @var $installer Mage_Sales_Model_Entity_Setup */
$installer = $this;

$installer->startSetup();
$installer->getConnection()->addColumn($installer->getTable('sales/invoice_comment'), 'is_visible_on_front',
    'tinyint(1) unsigned not null default 0 after `is_customer_notified`');
$installer->getConnection()->addColumn($installer->getTable('sales/shipment_comment'), 'is_visible_on_front',
    'tinyint(1) unsigned not null default 0 after `is_customer_notified`');
$installer->getConnection()->addColumn($installer->getTable('sales/creditmemo_comment'), 'is_visible_on_front',
    'tinyint(1) unsigned not null default 0 after `is_customer_notified`');
$installer->endSetup();
