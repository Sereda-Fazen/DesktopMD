<?php
use \Step\Acceptance;

/**
 * @group test
 */
class TestCest
{

    function T921TractorCustomOption(\Step\Acceptance\CheckoutSteps $I, \Page\Checkout $checkoutPage){
        $I->optional();
        $checkoutPage->checkOrder('mowdirect@gmail.com','123456');
    }


}

