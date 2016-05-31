<?php
use \Step\Acceptance;

/**
 * @group wishlist
 */
class MyWishListCest
{

    function loginSuccess(Step\Acceptance\LoginSteps $I) {
        $I->loginSuccess('test_mowdirect@yahoo.co.uk','123456');
    }

    function checkEmptyWishList(Page\MyWishList $myWishList) {
        $myWishList->wishList();
    }

    function checkAnyItems(Page\MyWishList $myWishList) {
        $myWishList->checkItems();
    }

    function removeItemFromWishList(Page\MyWishList $myWishList) {
        $myWishList->removeItemFromWishList();
    }

    function addComment(Page\MyWishList $myWishList) {
        $myWishList->addComment();
    }

    function addShare(Page\MyWishList $myWishList) {
        $myWishList->addShare();
    }

    function checkWishlistOnEmail(\Step\Acceptance\EmailSteps $I){
        $I->loginEmail();
    }
    function returnWishListRemoveItem(Page\MyWishList $myWishList) {
        $myWishList->removeItem();
    }
    





}

