<?php
/**
 * Copyright © 2022 - MagePro, community
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace MagePro\ExtendedWishlist\Api\Handler\Error;

/**
 * Interface for handle error logs module
 */
interface ErrorHandlerInterface
{

    /**
     * Method for handle MagePro_ExtendedWishlist errors
     *
     * @param string $errorMessagePhrase
     * @param string $errorMessageException
     * @return mixed
     */
    public function handler(
        string $errorMessagePhrase,
        string $errorMessageException = ''
    );
}


