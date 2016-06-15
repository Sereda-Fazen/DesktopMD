<?php

/**
 * @group shoppingCart
 */
class ShoppingCartMowDirectCest
{

    function T960T1262PayPalPurchase(Step\Acceptance\LoginStepsMowDirect $I, \Page\ShoppingCartMowDirect $shoppingCartMowDirect) {
        $shoppingCartMowDirect->addItemToCart();
        $shoppingCartMowDirect->payPalCheck();
    }
/*
    function makePurchaseWithRegistration(Step\Acceptance\LoginStepsMowDirect $I, \Page\Checkout $checkout) {
        $I->addItemCheckout();
        $checkout->registerAndBuyOnCheckout('TestTitle','Test','Test2','mowdirect1@gmail.com','123123','Testaddress','Town','222333222','123456');

    }
*/



}