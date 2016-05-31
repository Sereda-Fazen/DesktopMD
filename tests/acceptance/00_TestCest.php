<?php
use \Step\Acceptance;

/**
 * @group test
 */
class TestCest
{


    function loginSuccess(Step\Acceptance\LoginSteps $I) {
        $I->loginSuccess('test_mowdirect@yahoo.co.uk','123456');
    }

    function addItemsInWishlist(Page\MyWishList $myWishList) {
        $myWishList->addItemsInWishlist();
    }


}

