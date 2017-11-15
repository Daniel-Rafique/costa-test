<?php
/**
 *  *
 *  * Shopcade Marketplace extension
 *  * Copyright (C) 2017.
 *  *
 *  * This file included in Gravytrain/Ageverification is licensed under OSL 3.0
 *  *
 *  * http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 *  * Please see LICENSE.txt for the full text of the OSL 3.0 license
 *
 */

/**
 * A web service method for Magento 2 Community Edition that will return a product with all of its child sku options in a single response.
 * Copyright (C) 2017  2017
 *
 * This file included in Costa/Test is licensed under OSL 3.0
 *
 * http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 * Please see LICENSE.txt for the full text of the OSL 3.0 license
 */

namespace Costa\Test\Model;

use Magento\ConfigurableProduct\Model\Product\Type\Configurable;
use Magento\Catalog\Model\ProductRepository;

class ProductsManagement
{
    protected $products;
    protected $configurable;

    public function __construct(
        ProductRepository $product,
        Configurable $configurable
    )
    {
        $this->products = $product;
        $this->configurable = $configurable;
    }

    /**
     * {@inheritdoc}
     */
    public function getProducts($id)
    {
        // This is just for the test I am going to load a configurable product then get the child products
        // Normally the loop would check but this is only for the test.
        $product = $this->products->getById($id);
        // This is the parent product name and concatenated the SKU
        $productData['name'] = $product->getName() . ' ' . $product->getSku();
        // Get the child products
        $childIds = $this->configurable->getChildrenIds($product->getId());
        $childData = [];
        foreach ($childIds[0] as $childId) {
            $simple = $this->products->getById($childId);
            $childData[] = [
                'name' => $simple->getName(),
                'sku' => $simple->getSku()
            ];
        }
        return ['parent' => $productData, 'children' => $childData];
    }
}
