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
use Magento\Framework\View\Result\PageFactory;

class Index extends \Magento\Framework\App\Action\Action
{

    protected $result;
    protected $helper;

    /**
     * Constructor
     *
     * @param Context  $context
     * @param PageFactory $result
     */
    public function __construct(
        Context $context,
        Data $helper,
        PageFactory $result
    ) {
        $this->helper = $helper;
        $this->result = $result;
        parent::__construct($context);
    }

    /**
     * Execute view action
     *
     * @return \Magento\Framework\Controller\ResultInterface
     */
    public function execute()
    {
        //We can create a basic Auth method before executing the code
         $product = $this->helper->getProduct();

         // Here I'll var_dump it
         var_dump($product);

    }
}
