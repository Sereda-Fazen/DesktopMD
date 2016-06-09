<?php

/**
 * Created by PhpStorm.
 * User: obana
 * Date: 07.06.16
 * Time: 17:46
 */
class ShoppingCartMowDirectCest
{

 //   function T960MakeAPayPalPurchase(Step\Acceptance\LoginStepsMowDirect $I, \Page\ShoppingCartMowDirect $shoppingCartMowDirect) {
 //       $shoppingCartMowDirect->addItemToCart();
 //       $shoppingCartMowDirect->payPalCheck();
 //   }

    function makeAChequeBankTransferPayPurchaseWithRegistration(Step\Acceptance\LoginStepsMowDirect $I, \Page\Checkout $checkout) {
        $I->addItemCheckout();
        $checkout->registerAndBuyOnCheckout('TestTitle','Test','Test2','mowdirect1@gmail.com','123123','Testaddress','Town','222333222','123456');

    }




}