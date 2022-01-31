<?php
/**
 * Copyright © 2022 - MagePro, community
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace MagePro\ExtendedWishlist\Model\Data;

use MagePro\ExtendedWishlist\Api\Data\WishlistInterface;
use MagePro\ExtendedWishlist\Api\Data\WishlistExtensionInterface;

/**
 * Responsble for the extended wishlist object.
 */
class Wishlist implements WishlistInterface
{
    /**
     * @var int|null
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string|null
     */
    private $createdAt;

    /**
     * @var string|null
     */
    private $updatedAt;

    /**
     * @var WishlistExtensionInterface|null
     */
    private $extensionAttributes;

    /**
     * @param int|null $id
     * @param string|null $name
     * @param string|null $createdAt
     * @param string|null $updatedAt
     * @param WishlistExtensionInterface|null $extensionAttributes
     */
    public function __construct(
        ?int $id = null,
        ?string $name = null,
        ?string $createdAt = null,
        ?string $updatedAt = null,
        ?WishlistExtensionInterface $extensionAttributes = null
    ) {
        $this->id = $id;
        $this->name = $name;
        $this->createdAt = $createdAt;
        $this->updatedAt = $updatedAt;
        $this->extensionAttributes = $extensionAttributes;
    }

    /**
     * @inheritDoc
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @inheritDoc
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @inheritDoc
     */
    public function getCreatedAt(): ?string
    {
        return $this->createdAt;
    }

    /**
     * @inheritDoc
     */
    public function getUpdatedAt(): ?string
    {
        return $this->updatedAt;
    }

    /**
     * @inheritDoc
     */
    public function getExtensionAttributes(): ?WishlistExtensionInterface
    {
        return $this->extensionAttributes;
    }

    /**
     * @inheritDoc
     */
    public function setExtensionAttributes(?WishlistExtensionInterface $extensionAttributes): void
    {
        $this->extensionAttributes = $extensionAttributes;
    }
}
