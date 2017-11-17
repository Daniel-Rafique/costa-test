# Magento developer test

* Just a simple test to get a configurable product with its attributes and child products

* Add the module to the app/code directory then run php bin/magento setup:upgrade

* Next run the compiler php bin/magento setup:di:compile

* Browse to the endpoint http://domain.com/test/product/index and you will see a loaded configurable product with it's child products in a json array

* I've used sample product data which will load a product by SKU MH01

* We use a custom controller as our endpoint if the Magento API isn't sufficient for what we need to do

* The endpoint can take any value as a parameter when making a request for data or updating a model i.e string, array object

* The endpoint can be wrapped with an Auth method using a token handshake etc
