<?php
use \Step\Acceptance;

/**
 * @group test
 */
class TestCest
{

    function T922PurchaseMultipleDifferentProductsSameSupplie(\Step\Acceptance\CheckoutSteps $I,\Page\Checkout $checkoutPage){
        $I->selectTwoBrands();
        $checkoutPage->checkOrder('mowdirect@gmail.com','123456');
    }
    function T923NumberProductsT924PurchaseSuppliers(\Step\Acceptance\CheckoutSteps $I,\Page\Checkout $checkoutPage){
        $I->multipleNumberProducts();
        $checkoutPage->checkOrder('mowdirect@gmail.com','123456');
    }


}

