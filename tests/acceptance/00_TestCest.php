<?php
use \Step\Acceptance;

/**
 * @group test
 */
class TestCest
{

    function addToBasketTractor(\Step\Acceptance\CheckoutSteps $I){
        $I->addToBasketTractor();
    }

    function checkOrderTractor(\Page\Checkout $checkoutPage){
        $checkoutPage->checkOrder('mowdirect@gmail.com', '123456');
    }


}

