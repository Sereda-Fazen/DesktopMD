<?php
use \Step\Acceptance;

/**
 * @group test
 */
class TestCest
{

    function checkMyWishlist(Step\Acceptance\EmailSteps $I, \Page\MyWishList $myWishList)
    {

        $I->loginEmail();
       
    }


}

