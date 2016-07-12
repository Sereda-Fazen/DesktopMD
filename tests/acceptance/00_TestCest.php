<?php
use \Step\Acceptance;

/**
 * @group test
 */
class TestCest
{

    function T1026MakeSugePurchase(Step\Acceptance\CheckoutSteps $I, \Page\Checkout $checkoutPage) {
        $I->addToBasketTractor();
        $checkoutPage->checkSugePurchase('mowdirect@gmail.com','123456', 'American Express', '378282246310005','1234');
    }

  
}

