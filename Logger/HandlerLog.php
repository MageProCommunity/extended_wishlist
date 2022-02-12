<?php
/**
 * Copyright © 2022 - MagePro, community
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace MagePro\ExtendedWishlist\Logger;

use Magento\Framework\Logger\Handler\Base;
use Monolog\Logger;

/**
 * Class for handler logs wishlist
 *
 */
class HandlerLog extends Base
{
    /**
     * Logging level
     * @var int
     */
   protected $loggerType = Logger::INFO;

    /**
     * File name
     * @var string
     */
    protected $fileName = '/var/log/magepro/extended_wishlist.log';
}
