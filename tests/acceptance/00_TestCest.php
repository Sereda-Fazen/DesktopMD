<?php
use \Step\Acceptance;

/**
 * @group test
 */
class TestCest
{


    function addToBasketFromWishlist(Step\Acceptance\EmailSteps $I, \Page\MyWishList $myWishList)
    {
        $I->loginSuccess('test_mowdirect@yahoo.co.uk', '123456');
        $myWishList->addItemsInWishlist();
    }
    function checkMyWishlist(Step\Acceptance\EmailSteps $I, \Page\MyWishList $myWishList)
    {
        $I->loginSuccess('test_mowdirect@yahoo.co.uk', '123456');
        $myWishList->wishList();
        $myWishList->checkItems();
        $myWishList->removeItemFromWishList();
        $myWishList->addComment();
        $myWishList->addShare();
        $I->loginEmail();
        $myWishList->removeItem();
    }


}

