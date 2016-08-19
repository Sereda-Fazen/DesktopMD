<?php
use \Step\Acceptance;

/**
 * @group test
 */
class TestCest
{

    function T1017TractorSale(\Step\Acceptance\CheckoutSteps $I,\Page\Checkout $checkoutPage){
        $I->addToBasketTractor();
        $checkoutPage->checkPayment('mowdirect@gmail.com','123456');
    }
}

