<?php
/**
 * Copyright © 2022 - MagePro, community
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace MagePro\ExtendedWishlist\Api;

/**
 * Save enxtended wishlist to the database
 */
interface SaveWishlistInterface
{
    /**
     * Save extended wishlists.
     *
     * @param \MagePro\ExtendedWishlist\Api\Data\WishlistInterface[] $wishlists
     * @return void
     * @throws \Magento\Framework\Exception\CouldNotSaveException
     */
    public function execute(array $wishlists): void;
}
