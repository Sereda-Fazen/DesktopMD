<?php

/**
 * @group shoppingCart
 */
class ShoppingCartMowDirectCest
{

    function T1267MakeSugePurchase(Step\Acceptance\CheckoutSteps $I, \Page\Checkout $checkoutPage) {
        $I->addToBasketTractor();
        $checkoutPage->checkPayPalCredit('mowdirect@gmail.com','123456');
    }
    
    function T960PayPalPurchase(Step\Acceptance\CheckoutSteps $I, \Page\Checkout $checkoutPage) {
        $I->addToBasketTractor();
        $checkoutPage->payPalCheckout();
    }

    function T1266PayPalCredit(Step\Acceptance\CheckoutSteps $I, \Page\Checkout $checkoutPage) {
        $I->addToBasketTractor();
        $checkoutPage->payPalCredit();
    }

    function T1267PayPalCreditCheckout(Step\Acceptance\CheckoutSteps $I, \Page\Checkout $checkoutPage) {
        $I->addToBasketTractor();
        $checkoutPage->checkPayPalCredit('mowdirect@gmail.com','123456');
    }
    
    
    



}