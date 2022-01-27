<?php
/**
 * Copyright © 2022 - MagePro, community
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace MagePro\ExtendedWishlist\Api\Data;

use Magento\Framework\Api\ExtensibleDataInterface;
use MagePro\ExtendedWishlist\Api\WishlistExtensionInterface;

/**
 * Represents an extended wishlist which contains information such as wishlist name, date of creation or update.
 */
interface WishlistInterface extends ExtensibleDataInterface
{
    /**
     * Getter for Id.
     *
     * @return int|null
     */
    public function getId(): ?int;

    /**
     * Getter for Name.
     *
     * @return string|null
     */
    public function getName(): ?string;

    /**
     * Getter for CreatedAt.
     *
     * @return string|null
     */
    public function getCreatedAt(): ?string;

    /**
     * Getter for UpdatedAt.
     *
     * @return string|null
     */
    public function getUpdatedAt(): ?string;

    /**
     * Retrieve existing extension attributes object or create a new one.
     *
     * @return WishlistExtensionInterface|null
     */
    public function getExtensionAttributes(): ?WishlistExtensionInterface;

    /**
     * Set extension attributes
     *
     * @param WishlistExtensionInterface|null $extensionAttributes
     * @return void
     */
    public function setExtensionAttributes(?WishlistExtensionInterface $extensionAttributes): void;
}
