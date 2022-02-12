<?php
/**
 * Copyright © 2022 - MagePro, community
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace MagePro\ExtendedWishlis\Setup;

use Magento\Framework\DB\Adapter\AdapterInterface;
use Magento\Framework\Db\Select;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\Setup\UninstallInterface as UninstallInterface;

class Uninstall implements UninstallInterface
{
    private const LIST_MAGE_PRO_WISHLIST_TABLES = [
        'extended_wishlist',
        'extended_wishlist_store',
        'extended_wishlist_customer',
        'extended_wishlist_product'
    ];

    /**
     * Remove data that was created during module installation.
     *
     * @param SchemaSetupInterface $installer
     * @param ModuleContextInterface $context
     *
     * @return void
     */
    public function uninstall(SchemaSetupInterface $installer, ModuleContextInterface $context): void
    {
        $installer->startSetup();

        /** @var AdapterInterface $connection */
        $connection = $installer->getConnection();

        foreach (self::LIST_MAGE_PRO_WISHLIST_TABLES as $wishlistTable) {
            $connection->dropTable($wishlistTable);
        }

        $installer->endSetup();
    }
}