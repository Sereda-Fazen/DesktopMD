<?php
use \Step\Acceptance;

/**
 * @group test
 */
class TestCest
{

    function T1021ProductsSameSupplie(\Step\Acceptance\CheckoutSteps $I,\Page\Checkout $checkoutPage){
        $I->selectTwoBrands();
        $checkoutPage->checkPayment('mowdirect@gmail.com','123456');
    }
}

