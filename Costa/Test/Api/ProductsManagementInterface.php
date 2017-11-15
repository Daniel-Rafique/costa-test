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

namespace Costa\Test\Api;

interface ProductsManagementInterface
{


    /**
     * GET for products api
     * @param string $id
     * @return string
     */
    public function getProducts($id);
}
