<?php
use \Step\Acceptance;

/**
 * @group test
 */
class TestCest
{


    function purchaseTractorWithCustomOption(\Step\Acceptance\CheckoutSteps $I, \Page\Checkout $checkoutPage){
        $checkoutPage->purchaseTractorOption('Lawnflite accessories optional');
       // $checkoutPage->checkOrder('mowdirect@gmail.com','123456');
    }


}

