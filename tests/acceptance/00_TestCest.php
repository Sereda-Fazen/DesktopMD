<?php
use \Step\Acceptance;

/**
 * @group test
 */
class TestCest
{

    function T1266PayPalCredit(Step\Acceptance\CheckoutSteps $I, \Page\Checkout $checkoutPage) {
        $I->addToBasketTractor();
        $checkoutPage->payPalCredit();
    }

}

