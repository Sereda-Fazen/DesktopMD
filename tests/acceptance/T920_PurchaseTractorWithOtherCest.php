<?php
use \Step\Acceptance;

/**
 * @group purchase
 */
class PurchaseTractorWithOtherCest
{

    function loginSuccess(Step\Acceptance\LoginSteps $I) {
        $I->loginSuccess('mowdirect@gmail.com','123456');
    }
    
    function addToBasketTractor(\Step\Acceptance\CheckoutSteps $I){
        $I->addToBasketTractor();
    }
    function purchaseOtherItem(\Step\Acceptance\CheckoutSteps $I){
        $I->purchaseOtherItem();
    }

    function checkOrderTractor(\Page\Checkout $checkoutPage){
        $checkoutPage->checkOrder();
    }

    


}

