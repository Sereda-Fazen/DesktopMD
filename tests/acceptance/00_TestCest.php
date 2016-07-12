<?php
use \Step\Acceptance;

/**
 * @group test
 */
class TestCest
{

    function T980StandardProductLayout(\Step\Acceptance\ProductsSteps $I, \Page\Checkout $checkoutPage){
        $I->productsLayout();
    }

  
}

