<?php
use \Step\Acceptance;

/**
 * @group test
 */
class TestCest
{

    function T960MakeAPayPalPurcase(Step\Acceptance\LoginStepsMowDirect $I, \Page\ShoppingCartMowDirect $shoppingCartMowDirect) {
        $shoppingCartMowDirect->addItemToCart();
        $shoppingCartMowDirect->payPalCheck('yf@itsvit.org','1qazxsw2');
    }


}

