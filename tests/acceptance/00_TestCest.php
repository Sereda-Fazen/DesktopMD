<?php
use \Step\Acceptance;

/**
 * @group test
 */
class TestCest
{

    function loginSuccess(Step\Acceptance\LoginSteps $I) {
        $I->loginSuccess('mowdirect@gmail.com','123456');
    }

    function purchaseTractorOption(\Step\Acceptance\CheckoutSteps $I, \Page\Checkout $checkoutPage){
        $checkoutPage->purchaseTractorOption('Lawnflite accessories optional');

    }

    function checkOrderTractorOption(\Page\Checkout $checkoutPage)
    {
        $checkoutPage->checkOrder();
    }




}

