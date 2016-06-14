<?php
use \Step\Acceptance;

/**
 * @group test
 */
class TestCest
{

    function T960T1262PayPalPurchase(Step\Acceptance\LoginStepsMowDirect $I, \Page\ShoppingCartMowDirect $shoppingCartMowDirect) {
        $shoppingCartMowDirect->addItemToCart();
        $shoppingCartMowDirect->payPalCheck();
    }


}

