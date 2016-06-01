<?php
use \Step\Acceptance;

/**
 * @group checkout
 */
class TractorSaleCest
{

    function loginSuccess(Step\Acceptance\LoginSteps $I) {
        $I->loginSuccess('mowdirect@gmail.com','123456');
    }
    
    function addToBasketTractor(\Step\Acceptance\CheckoutSteps $I){
        $I->addToBasketTractor();
    }

    function checkOrderTractor(\Page\Checkout $checkoutPage){
        $checkoutPage->checkOrder();
    }

    


}

