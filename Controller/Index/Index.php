<?php
/**
 * Copyright © 2022 - MagePro, community
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace MagePro\ExtendedWishlist\Controller\Index;

use Magento\Framework\View\Result\Page;
use Magento\Framework\View\Result\PageFactory;
use Magento\Framework\App\Action\HttpGetActionInterface;

class Index implements HttpGetActionInterface
{
    /**
     * @param PageFactory $resultPageFactory
     */
    public function __construct(
        private PageFactory $resultPageFactory
    ) {}

    public function execute()
    {
        /** @var Page resultPage */
        $resultPage = $this->resultPageFactory->create();
        return $resultPage;
    }
}
