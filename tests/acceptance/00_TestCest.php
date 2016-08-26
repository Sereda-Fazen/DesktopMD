<?php
use \Step\Acceptance;

/**
 * @group test
 */
class TestCest
{

    function T1022T1023PurchaseSuppliers(\Step\Acceptance\CheckoutSteps $I,\Page\Checkout $checkoutPage){
        $I->multipleNumberProducts();
        $checkoutPage->checkPayment('mowdirect@gmail.com','123456');
    }
}

