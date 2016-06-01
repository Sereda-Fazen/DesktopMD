<?php
use \Step\Acceptance;

/**
 * @group checkout
 */
class MowerSaleCest
{

    function loginSuccess(Step\Acceptance\LoginSteps $I) {
        $I->loginSuccess('mowdirect@gmail.com','123456');
    }

    function addToBasketMower(\Step\Acceptance\CheckoutSteps $I){
        $I->addToBasketMower();
    }

    function checkOrderMower(\Page\Checkout $checkoutPage){
        $checkoutPage->checkOrder();
    }

}

