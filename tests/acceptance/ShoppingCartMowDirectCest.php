<?php

/**
 * Created by PhpStorm.
 * User: obana
 * Date: 07.06.16
 * Time: 17:46
 */
class ShoppingCartMowDirectCest
{

    function T960MakeAPayPalPurcase(Step\Acceptance\LoginStepsMowDirect $I, \Page\ShoppingCartMowDirect $shoppingCartMowDirect) {
        $shoppingCartMowDirect->addItemToCart();
        $shoppingCartMowDirect->payPalCheck('yf@itsvit.org','1qazxsw2');
    }

}