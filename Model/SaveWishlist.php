<?php
/**
 * Copyright © 2022 - MagePro, community
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

use Magento\Framework\App\ResourceConnection;
use Magento\Framework\Exception\CouldNotSaveException;
use MagePro\ExtendedWishlist\Api\Data\WishlistInterface;
use MagePro\ExtendedWishlist\Api\SaveWishlistInterface;
use Psr\Log\LoggerInterface;

/**
 * Responsible for saving extended wishlists.
 */
class SaveWishlist implements SaveWishlistInterface
{
    private const TABLE_EXTENDED_WISHLIST = 'extended_wishlist';

    /**
     * @var ResourceConnection
     */
    private $resourceConnection;

    /**
     * @var LoggerInterface
     */
    private $logger;

    /**
     * @param ResourceConnection $resourceConnection
     * @param LoggerInterface $logger
     */
    public function __construct(
        ResourceConnection $resourceConnection,
        LoggerInterface $logger
    ) {
        $this->resourceConnection = $resourceConnection;
        $this->logger = $logger;
    }

    /**
     * @inheritdoc
     */
    public function execute(array $wishlists): void
    {
        $connection = $this->resourceConnection->getConnection();
        $tableName = $this->resourceConnection->getTableName(self::TABLE_EXTENDED_WISHLIST);

        $failedWishlists = [];
        /** @var WishlistInterface $wishlist */
        foreach ($wishlists as $wishlist) {
            try {
                $record = [
                    'id' => $wishlist->getId(),
                    'name' => $wishlist->getName(),
                ];

                if ($wishlist->getCreatedAt()) {
                    $record['created_at'] = $wishlist->getCreatedAt();
                }

                if ($wishlist->getUpdatedAt()) {
                    $record['updated_at'] = $wishlist->getUpdatedAt();
                }

                $connection->insertOnDuplicate($tableName, $record);
            } catch (\Exception $exception) {
                $this->logger->critical($exception);
                $failedWishlists[] = $wishlist;
            }
        }

        if (!empty($failedWishlists)) {
            throw new CouldNotSaveException(
                __(
                    'Could not save extended wishlists. For more details check logs'
                )
            );
        }
    }
}
