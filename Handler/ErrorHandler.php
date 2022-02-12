<?php
/**
 * Copyright © 2022 - MagePro, community
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace MagePro\ExtendedWishlist\Handler;

use MagePro\ExtendedWishlist\Api\Handler\Error\ErrorHandlerInterface;
use MagePro\ExtendedWishlist\Logger\Logger as MageProExtendedWishlistLogger;
use Exception;

/**
 * Method for save and validate logs
 */
final class ErrorHandler implements ErrorHandlerInterface
{

    /**
     * @var MageProExtendedWishlistLogger
     */
    private $logger;

    /**
     * ErrorHandler constructor.
     * @param MageProExtendedWishlistLogger $logger
     */
    public function __construct(
        MageProExtendedWishlistLogger $logger
    ){
        $this->logger = $logger;
    }

    /**
     * @param string $errorMessagePhrase
     * @param string $errorMessageException
     * @return void
     */
    public function handler(
        string $errorMessagePhrase,
        string $errorMessageException = ''
    ){
        try {
                $this->logger->critical(
                    __("MagePro_ExtendedWishlist: %1, %2",
                        $errorMessagePhrase,
                        $errorMessageException)
                );
        } catch (Exception $exception) {
            $this->logger->critical(
                __('MagePro_ExtendedWishlist: Problem during a write to the log file - ' .
                    $exception->getMessage()
                )
            );
        }
    }
}


