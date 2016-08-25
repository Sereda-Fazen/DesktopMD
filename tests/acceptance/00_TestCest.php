<?php
use \Step\Acceptance;

/**
 * @group test
 */
class TestCest
{

    function T1020TractorCustomOption(\Step\Acceptance\CheckoutSteps $I, \Page\Checkout $checkoutPage){
        $I->optional();
        $checkoutPage->checkPayment('mowdirect@gmail.com','123456');
    }
}

