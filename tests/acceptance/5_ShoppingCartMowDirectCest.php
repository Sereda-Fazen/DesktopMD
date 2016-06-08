<?php

/**
 * Created by PhpStorm.
 * User: obana
 * Date: 07.06.16
 * Time: 17:46
 */
class ShoppingCartMowDirectCest
{

    function T960MakeAPayPalPurchase(Step\Acceptance\LoginStepsMowDirect $I, \Page\ShoppingCartMowDirect $shoppingCartMowDirect) {
        $shoppingCartMowDirect->addItemToCart();
        $shoppingCartMowDirect->payPalCheck();
    }

}