<?php
use \Step\Acceptance;

/**
 * @group test
 */
class TestCest
{



    function T1017TractorSale(\Step\Acceptance\CheckoutSteps $I,\Page\Checkout $checkoutPage){
        $I->addToBasketTractor();
        $checkoutPage->checkPayment('mowdirect@gmail.com','123456');
    }

    function T1018MowerSale(\Step\Acceptance\CheckoutSteps $I,\Page\Checkout $checkoutPage){
        $I->addToBasketMower();
        $checkoutPage->checkPayment('mowdirect@gmail.com','123456');
    }






/*
    function T1027PayPalPurchase(Step\Acceptance\CheckoutSteps $I, \Page\Checkout $checkoutPage) {
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

    function loginSuccess(AcceptanceTester $I, \Page\Login $loginPage) {
        $loginPage->login();
        $loginPage->loginInvalid('test_mowdirect@yahoo.co.uk', '123456');
        $I->see('From your My Account Dashboard you have the ability to view','div.welcome-msg');
        $loginPage->logout();
    }


    function T995T999CheckMyWishlist(Step\Acceptance\EmailSteps $I, \Page\MyWishList $myWishList)
    {
        $I->loginSuccess('test_mowdirect@yahoo.co.uk', '123456');
        $myWishList->wishList();
        $myWishList->checkItems();
        $myWishList->removeItemFromWishList();
        $myWishList->addComment();
        $myWishList->addShare();
        $I->loginEmail();
        $myWishList->removeItem();
    }
  */
}

