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

namespace Costa\Test\Helper;

use Magento\ConfigurableProduct\Model\Product\Type\Configurable;
use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Catalog\Model\Product;

class Data extends AbstractHelper
{

    protected $products;
    protected $configurable;

    public function __construct(
        Product $product,
        Configurable $configurable
    )
    {
        $this->products = $product;
        $this->configurable = $configurable;
    }

    public function getProduct()
    {
        // This is just for the test I am going to load a configurable product then get the child products
        // Normally the loop would check but this is only for the test.

        $data = null;
        $product = $this->products->loadByAttribute('sku', 'MH01');

        // This is the parent product name and concatenated the SKU
        $productData['name'] = $product->getName() . ' ' .  $product->getSku();

        // Get the child products
        $childIds =  $this->configurable->getChildrenIds($product->getId());

        $childData = [];
        foreach ($childIds[0] as $childId){
            $simple = $this->products->load($childId);
            $childData[] = ['name' => $simple->getName(),
                            'sku' => $simple->getSku()
            ];
        }

        return ['parent' => $productData, 'children' => $childData];
    }
}
