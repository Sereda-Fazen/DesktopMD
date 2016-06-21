<?php
use \Step\Acceptance;

/**
 * @group test
 */
class TestCest
{

    function T1267MakeSugePurchase(Step\Acceptance\CheckoutSteps $I, \Page\Checkout $checkoutPage) {
        $I->addToBasketTractor();
        $checkoutPage->checkSugePurchase('mowdirect@gmail.com','123456');
    }

}

