<?php
use \Step\Acceptance;

/**
 * @group checkout
 */
class CheckoutCest
{

    function loginSuccess(Step\Acceptance\LoginSteps $I) {
        $I->loginSuccess('mowdirect@gmail.com','123456');
    }

    function selectItem(\Step\Acceptance\CheckoutSteps $I){
        $I->addToBasketItem();
    }

    function checkOrder(\Page\Checkout $checkoutPage){
        $checkoutPage->checkOrder();
    }

}

