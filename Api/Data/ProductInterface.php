<?php
/**
 * Copyright © 2022 - MagePro, community
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace MagePro\ExtendedWishlist\Api\Data;

use Magento\Framework\Api\ExtensibleDataInterface;

/**
 * Represents a product related to the extended wishlist.
 */
interface ProductInterface extends ExtensibleDataInterface
{
    /**
     * Getter for Id.
     *
     * @return int|null
     */
    public function getId(): ?int;

    /**
     * Getter for WishlistId.
     *
     * @return int|null
     */
    public function getWishlistId(): ?int;

    /**
     * Getter for Sku.
     *
     * @return string|null
     */
    public function getSku(): ?string;

    /**
     * Getter for ProductId.
     *
     * @return int|null
     */
    public function getProductId(): ?int;

    /**
     * Getter for Qty.
     *
     * @return float|null
     */
    public function getQty(): ?float;

    /**
     * Getter for Comment.
     *
     * @return string|null
     */
    public function getComment(): ?string;

    /**
     * Getter for CreatedAt.
     *
     * @return string|null
     */
    public function getCreatedAt(): ?string;

    /**
     * Getter for UpdateAt.
     *
     * @return string|null
     */
    public function getUpdateAt(): ?string;

    /**
     * Retrieve existing extension attributes object or create a new one.
     *
     * @return MagePro\ExtendedWishlist\Api\Data\ProductExtensionInterface|null
     */
    public function getExtensionAttributes(): ?ProductExtensionInterface;

    /**
     * Set extension attributes
     *
     * @param MagePro\ExtendedWishlist\Api\Data\ProductExtensionInterface|null $extensionAttributes
     * @return void
     */
    public function setExtensionAttributes(?ProductExtensionInterface $extensionAttributes): void;
}
