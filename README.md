# Whitbread Magento developer test

* Just a simple test to get a configurable product with its attributes and child products

* Add the module to the app/code directory then run php bin/magento setup:upgrade

* Next run the compiler php bin/magento setup:di:compile

* Browse to the endpoint http://domain.com/rest/V1/costa-test/products/69 and you will see a loaded configurable product with it's child products in a XML DOM Document

* I've used sample product data which will get a product by ID 69

* We use a custom webservice for our endpoint


