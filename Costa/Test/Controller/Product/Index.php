<?php
/**
 * A web service method for Magento 2 Community Edition that will return a product with all of its child sku options in a single response.
 * Copyright (C) 2017  2017
 * 
 * This file included in Costa/Test is licensed under OSL 3.0
 * 
 * http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 * Please see LICENSE.txt for the full text of the OSL 3.0 license
 */

namespace Costa\Test\Controller\Product;

use Costa\Test\Helper\Data;
use Magento\Framework\App\Action\Context;
use Magento\Framework\Controller\Result\JsonFactory;

class Index extends \Magento\Framework\App\Action\Action
{

    protected $helper;
    protected $resultJsonFactory;

    /**
     * Constructor
     *
     * @param Context $context
     * @param Data $helper
     * @param JsonFactory $jsonFactory
     */
    public function __construct(
        Context $context,
        Data $helper,
        JsonFactory $jsonFactory
    ) {
        $this->helper = $helper;
        $this->resultJsonFactory = $jsonFactory;
        parent::__construct($context);
    }

    /**
     * Execute view action
     *
     */
    public function execute()
    {
        /**
         *  We would normally create some basic Auth check before instatiating the getProduct() method
         *  The Auth token would be stored in the admin config of the module using system.xml
         */
        return $this->resultJsonFactory->create()->setData($this->helper->getProduct());

    }
}
