<?php
/**
 * Copyright © 2022 - MagePro, community
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace MagePro\ExtendedWishlist\Model\Data;

use MagePro\ExtendedWishlist\Api\Data\ProductInterface;
use MagePro\ExtendedWishlist\Api\Data\ProductExtensionInterface;
use Magento\Framework\DataObject;

/**
 * Responsible for the wishlist product object.
 */
class Product implements ProductInterface
{
    /**
     * @var int|null
     */
    private $id;

    /**
     * @var int|null
     */
    private $wishlistId;

    /**
     * @var string|null
     */
    private $sku;

    /**
     * @var int|null
     */
    private $productId;

    /**
     * @var float|null
     */
    private $qty;

    /**
     * @var string|null
     */
    private $comment;

    /**
     * @var string|null
     */
    private $createdAt;

    /**
     * @var string|null
     */
    private $updatedAt;

    /**
     * @var ProductExtensionInterface|null
     */
    private $extensionAttributes;

    /**
     * @param int|null $id
     * @param int|null $wishlistId
     * @param string|null $sku
     * @param int|null $productId
     * @param float|null $qty
     * @param string|null $comment
     * @param string|null $createdAt
     * @param string|null $updatedAt
     * @param ProductExtensionInterface|null $extensionAttributes
     */
    public function __construct(
        ?int $id = null,
        ?int $wishlistId = null,
        ?string $sku = null,
        ?int $productId = null,
        ?float $qty = null,
        ?string $comment = null,
        ?string $createdAt = null,
        ?string $updatedAt = null,
        ?ProductExtensionInterface $extensionAttributes = null
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
        return $this->getData(self::ID) === null ? null
            : (int)$this->getData(self::ID);
    }

    /**
     * @inheritDoc
     */
    public function getWishlistId(): ?int
    {
        return $this->getData(self::WISHLIST_ID) === null ? null
            : (int)$this->getData(self::WISHLIST_ID);
    }

    /**
     * @inheritDoc
     */
    public function getSku(): ?string
    {
        return $this->getData(self::SKU);
    }

    /**
     * @inheritDoc
     */
    public function getProductId(): ?int
    {
        return $this->getData(self::PRODUCT_ID) === null ? null
            : (int)$this->getData(self::PRODUCT_ID);
    }

    /**
     * @inheritDoc
     */
    public function getQty(): ?float
    {
        return $this->getData(self::QTY) === null ? null
            : (float)$this->getData(self::QTY);
    }

    /**
     * @inheritDoc
     */
    public function getComment(): ?string
    {
        return $this->getData(self::COMMENT);
    }

    /**
     * @inheritDoc
     */
    public function getCreatedAt(): ?string
    {
        return $this->getData(self::CREATED_AT);
    }

    /**
     * @inheritDoc
     */
    public function getUpdateAt(): ?string
    {
        return $this->getData(self::UPDATE_AT);
    }

    /**
     * @inheritDoc
     */
    public function getExtensionAttributes(): ?ProductExtensionInterface
    {
        return $this->extensionAttributes;
    }

    /**
     * @inheritDoc
     */
    public function setExtensionAttributes(?ProductExtensionInterface $extensionAttributes): void
    {
        $this->extensionAttributes = $extensionAttributes;
    }
}
