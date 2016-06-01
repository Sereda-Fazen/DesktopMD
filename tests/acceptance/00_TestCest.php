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

    function multipleNumberProducts(\Step\Acceptance\CheckoutSteps $I){
        $I->multipleNumberProducts();
    }

    function checkOrderMultipleProducts(\Page\Checkout $checkoutPage)
    {
        $checkoutPage->checkOrder();
    }


}

