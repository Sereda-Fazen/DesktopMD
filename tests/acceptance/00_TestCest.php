<?php
use \Step\Acceptance;

/**
 * @group test
 */
class TestCest
{


    function checkWishlistOnEmail(\Step\Acceptance\EmailSteps $I){
        $I->loginEmail();
    }


}

